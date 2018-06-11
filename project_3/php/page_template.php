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
<script type="text/javascript" async
  src="https://cdnjs.cloudflare.com/ajax/libs/mathjax/2.7.4/MathJax.js?config=TeX-MML-AM_CHTML">
</script>
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

$PHOTO = <<<EOT
<img src="img/my_photo.jpg" alt="Maciej Woźny">
<br>
EOT;

$BUTTON = <<<EOT
    <a class="button" href="index.php">Powrót</a>
    <br>
    <br>
    <br>
    <br>
    <br>
EOT;

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

class MyPage {
    private $title        = "";
    private $description  = " ";
    private $root         = "";
    private $cssfiles     = [];
    private $jsfiles      = [];
    private $innerStyle   = "";
    private $db;

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

        $this->db = new SQLite3("comments.sqlite", SQLITE3_OPEN_CREATE | SQLITE3_OPEN_READWRITE);
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

    private function createTableIfNotExist() {
        $this->db->query('CREATE TABLE IF NOT EXISTS "' . $this->description . '" (' . '"comment" VARCHAR)');
    }

    public function insertComment($comment) {
        $statement = $this->db->prepare('INSERT INTO "' . $this->description . '" (comment) VALUES ( ? )');
        $statement->bindValue(1, $comment);
        $statement->execute();
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

    public function addComments() {
        $this->createTableIfNotExist();

        if ($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['comments'])) {
            $comment = $_POST['comments'];
            $this->insertComment($comment);
        }

        $text = "<br>Komentarze:\n\t<ul>\n";

        $statement = $this->db->prepare('SELECT comment FROM  "' . $this->description . '" ;');
        $results = $statement->execute();
        while ($row = $results->fetchArray()) {
            $text .= "<li> " . $row[0] . " </li>\n";
        }

        $text .= "\t</ul>\n\n\t";
        $text .= '<form method="post" width="100%">';
        $text .= "\n\t\t<input type=\"text\" name=\"comments\" value=\"komentarz\" width=\"100%\"/>\n";
        $text .= "\t\t<input type=\"submit\" value=\"Dodaj\">\n";
        $text .= "\t</form>\n";

        return $text;
    }

} //class MyPage

?>