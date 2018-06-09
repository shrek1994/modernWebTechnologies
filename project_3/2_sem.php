<?php
require_once(__DIR__ . "/php/page_template.php");
$Page =  new myPage("Maciej Woźny: edukacja");
echo $Page->SetDescription("Drugi semestr (2014/15)");
echo $Page->Begin();
echo $Page->PageHeader();
?>

    <div class="course_title"> Kurs programowania </div>
    <div class="row">

        <div class="column-course">
            <div class="what_did_i_learn">Czego się nauczyłem?</div>
            <ul>
                <li> Programować w C++ </li>
                <li> Programować w Javie </li>
            </ul>

        </div>

        <div class="column-course">
            <div class="what_will_i_learn">Czego warto się douczyć?</div>

            <ul>
                <li> Najbardziej wartościowa nauka jaką trzeba się douczyć we własnym zakresie to tworzenie unit testów. </li>
            </ul>


        </div>


    </div>



    <div class="course_title"> Matematyka dyskretna </div>
    <div class="row">

        <div class="column-course">
            <div class="what_did_i_learn">Czego się nauczyłem?</div>
            <ul>
                <li> Teorii liczb </li>
                <li> Teorii grafów </li>
                <li> Indukcji matematycznej </li>

            </ul>

        </div>

        <div class="column-course">
            <div class="what_will_i_learn">Czego warto się douczyć?</div>
            <ul>
                <li> Kombinatoryki </li>
            </ul>
        </div>


    </div>



    <div class="course_title"> Algebra abstarkcyjna </div>
    <div class="row">

        <div class="column-course">
            <div class="what_did_i_learn">Czego się nauczyłem?</div>
            <ul>
                <li> Grupy </li>
                <li> Pierścienie </li>
                <li> Ciała </li>
                <li> Ideały </li>
                <li> Przestrzenie wektorowe </li>
            </ul>

        </div>

        <div class="column-course">
            <div class="what_will_i_learn">Czego warto się douczyć?</div>
            <ul>
                <li> Grupoidy </li>
            </ul>
        </div>


    </div>



    <div class="course_title"> Problemy społeczne i zawodowe </div>
    <div class="row">

        <div class="column-course">
            <div class="what_did_i_learn">Czego się nauczyłem?</div>
            <ul>
                <li> Podstawy prawa </li>
            </ul>

        </div>

        <div class="column-course">
            <div class="what_will_i_learn">Czego warto się douczyć?</div>
            <ul>
                <li> Rozszerzyć wiedzę na temat prawa </li>
            </ul>
        </div>
    </div>

<?php
echo $Page->addReturnButton();
echo $Page->End();
?>