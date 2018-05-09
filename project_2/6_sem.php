<?php
require_once(__DIR__ . "/page_template.php");
$Page =  new myPage("Maciej Woźny: edukacja");
echo $Page->SetDescription("Szósty semestr (2017/18) - w trakcie odbywania");
echo $Page->Begin();
echo $Page->PageHeader();
?>
    <div class="course_title"> Wprowadznie do funkcji zespolonych </div>
    <div class="row">

        <div class="column-course">
            <div class="what_did_i_learn">Czego się nauczyłem?</div>
            <ul>
                <li> Liczby zespolone </li>
                <li> Obszary otwarte i zamknięte</li>

            </ul>

        </div>

        <div class="column-course">
            <div class="what_will_i_learn">Czego warto się douczyć?</div>

            <ul>
                <li> Pozostałego materiału </li>
            </ul>


        </div>


    </div>



    <div class="course_title"> Nowoczesne technologie WWW </div>
    <div class="row">

        <div class="column-course">
            <div class="what_did_i_learn">Czego się nauczyłem?</div>
            <ul>
                <li> Pisać strony używająć HTML, CSS, PHP </li>
            </ul>

        </div>

        <div class="column-course">
            <div class="what_will_i_learn">Czego warto się douczyć?</div>
            <ul>
                <li> Javascript </li>
            </ul>
        </div>


    </div>


<?php
echo $Page->addReturnButton();
echo $Page->End();
?>