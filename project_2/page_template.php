<?php

$HEADER =<<<EOT
<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="utf-8">
  <title>{{TITLE}}</title> 
  <meta name="description" content= "{{DESCRIPTION}}">
  <meta name="author" content="Maciej Wozny">
  <meta name="viewport" content = "width=device-width, initial-scale=1.0"/>
{{STYLES}}
{{SCRIPTS}}
{{INNER-STYLE}}
</head>
<body>
EOT;

$PAGE_HEADER =<<<EOT
<div class="title">
    <div class="name">Maciej Woźny</div>
    przygody z edukacją
    <div class="subtitle">{{DESCRIPTION}}</div>
</div>
<div class="content">

EOT;

$FOOTER =<<<EOT
</div><!-- content -->
</body>
</html>   
EOT;

$PHOTO =<<<EOT
<img src="my_photo.jpg" alt="Maciej Woźny">
EOT;

$BUTTON =<<<EOT
    <a class="button" href="index.php">Powrót</a>
    <br>
    <br>
    <br>
    <br>
    <br>
EOT;



class MyPage {
    private $title        = "";
    private $description  = "";
    private $root         = "";
    private $cssfiles     = [];
    private $jsfiles      = [];
    private $innerStyle   = "";

    private $rows = [];

    /**
     * Dodaje specyficzne style do strony
     * @param string $filename
     * @return void
     */
    public function AddCSS($filename) {
        $this->cssfiles[] = $filename;
    }

    /**
     * Ustalamy skrypty umieszczane w nagłówku
     * @param string $filename
     * @return void
     */
    public function AddJS($filename) {
        $this->jsfiles[] = $filename;
    }

    /**
     * Ustawienie opisu strony (description)
     * @param string $s
     * @return void
     */
    public function SetDescription($s) {
        $this->description = $s;
    }

    /**
     * Dodanie wewnętrznego stylu strony
     * @param string $s
     * @return void
     */
    public function AddInnerStyle($s) {
        $this->innerStyle = $s;
    }

    /**
     * Ustawienie opisu strony
     * @param string $title - tytul strony
     * @param string $root - sciezka do glownego katalogu witryny
     * @return void
     */

    public function __construct($title = "", $root="") {
        $this->title = $title;
        $this->root  = $root;
        $this->AddCSS("style.css");
    }


    public function Begin() {
        global $HEADER;
        $s = str_replace(["{{TITLE}}", "{{DESCRIPTION}}"], [$this->title, $this->description], $HEADER);

        //dodajemy style
        $X = [];
        $C = $this->cssfiles;
        $TMP = '  <link rel="stylesheet" href="{{R}}css/{{CSS}}">' . "\n";
        for ($i = 0; $i < count($C); $i++){
            $X[]= (string) str_replace(["{{R}}", "{{CSS}}"], [$this->root, (string) $C[$i]], $TMP);
        }
        $s= str_replace("{{STYLES}}", join("\n",$X), $s);

        // dodajemy skrypty
        $X = [];
        $C = $this->jsfiles;
        $T = '  <script src="{{R}}js/{{JS}}"></script>' . "\n";
        for ($i = 0; $i < count($this->jsfiles); $i++){
            $X[]= str_replace(["{{R}}", "{{JS}}"], [$this->root, (string) $C[$i]], $T);
        }
        $s= str_replace("{{SCRIPTS}}", join("\n",$X), $s);

        // aktualizujemy styl wewnętrzny strony
        $X = ($this->innerStyle === "") ? "" : "<style>\n" . $this->innerStyle . "\n</style>\n";
        $s= str_replace("{{INNER-STYLE}}", $X, $s);

        // usuwamy puste linie
        //return preg_replace('/^[ \t]*[\r\n]+/m', '', $s);
        return preg_replace('/^\h*\v+/m', '', $s);
        // \h : dowolny poziomy pusty znak
        // \v : dowolny pionowy pusty znak
        // /m : multiline
    }

    public function PageHeader(){
        global $PAGE_HEADER;
        $s = str_replace("{{DESCRIPTION}}", $this->description, $PAGE_HEADER);
        return $s;
    }

    public function End() {
        global $FOOTER;
        return $FOOTER;
    }

    public function AddPhoto()
    {
        global $PHOTO;
        return $PHOTO;
    }


    public function beginTable()
    {
        return "<div class=\"row\">\n";
    }

    public function createColumn($title, $ul = "ul")
    {
        $column = "<div class=\"column\">\n";
        $column .= "  <div class=\"column_title\">";
        $column .= $title;
        $column .= "</div>\n";
        $column .= "  <" . $ul .">\n";

        foreach ($this->rows as $row) {
            $column .= "    <li>" . $row . "</li>\n";
        }

        $column .= "  </" . $ul . ">\n";
        $column .= "</div>\n";

        $this->rows = array();
        return $column;
    }


    public function addRow($text, $url="")
    {
        if ($url == "")
        {
            $this->rows[] = $text;
        }
        else {
            $this->rows[] = "<a href=\"" .  $url . "\">" . $text . "</a>";
        }
    }

    public function endTable()
    {
        return "</div>\n";
    }

    public function addReturnButton() {
        global $BUTTON;
        return $BUTTON;
    }

} //class MyPage

?>