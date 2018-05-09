<?php
require_once(__DIR__."/page_template.php");
$Page =  new myPage("Maciej Woźny: edukacja");
echo $Page->Begin();
echo $Page->PageHeader();
?>

<div class="description">
    <img src="my_photo.jpg" alt="Maciej Woźny">
    <br>
    Liceum skończyłem w 2013r. W tym też roku poszedłem na studia na Politechnice Wrocławskiej na kierunek
    Automatyka i Robotyka na wydziale Elektroniki.
    Po roku czasu stwierdziłem że roboty, to nie jest coś co chciałbym programować całe życie.
    Tak więc zmieniłem kierunek na Informatykę na wydziale Podstawowych Problemów Techniki i zacząłem studia od nowa.
    Z uwagi na studiowanie i pracowanie jednocześnie, musiałem wziąć urlop dziekański po piątym semestrze,
    by nadrobić przedmioty, które nie realizowałem na wcześniejszych semestrach.
    <br>
    <br>

    W 2014r. podczas zmiany kierunku w pierwszym semestrze nie miałem zbyt dużo zajęć więc zatrudniłem się w Nokii.
    Moimi zadaniami było głównie implementacja dodatkowych funkcji do stacji bazowych LTE, jak i naprawianie błędów.
    W tej firmie pracowałem do końca marca 2018r., a od kwietnia podjąłem pracę w kolejnej programistycznej firmie - Tieto.
    <br>
    <br>
    <br>
</div>

<?php
echo $Page->beginTable("column_title");

$Page->addRow("Studia - I semestr(2014/15)", "1_sem.php");
$Page->addRow("Studia - II semestr(2014/15)", "2_sem.php");
$Page->addRow("Studia - III semestr(2015/16)", "3_sem.php");
$Page->addRow("Studia - IV semestr(2015/16)", "4_sem.php");
$Page->addRow("Studia - V semestr(2016/17)", "5_sem.php");
$Page->addRow("Studia - V semestr - urlop (2016/17)", "5v2_sem.php");
$Page->addRow("Studia - V semestr - urlop (2017/18)", "5v3_sem.php");
$Page->addRow("Studia - VI semestr(2017/18) - trwa", "6_sem.php");
echo $Page->createColumn("Moja edukacja:", "ol");

$Page->addRow("Ulubione filmy", "hobbies/favourite_movies.html");
$Page->addRow("Ciekawe książki", "hobbies/interesting_books.html");
$Page->addRow("Wycieczki rowerowe");
echo $Page->createColumn("Moje hobby:");

echo $Page->endTable();
?>

<?php echo $Page->End();?>