<?php
require_once(__DIR__ . "/page_template.php");
$Page =  new myPage("Maciej Woźny: edukacja");
echo $Page->SetDescription("Piąty semestr (zima 2016/17)");
echo $Page->Begin();
echo $Page->PageHeader();
?>
    <div class="course_title"> Programowanie zespołowe </div>
    <div class="row">

        <div class="column-course">
            <div class="what_did_i_learn">Czego się nauczyłem?</div>
            <ul>
                <li> Współpracować z innymi przy projekcie </li>
                <li> Używać systemu kontroli wersji </li>
                <li> Projektować duże projekty </li>
                <li> Tworzyć dokumentację do projektu </li>

            </ul>

        </div>

        <div class="column-course">
            <div class="what_will_i_learn">Czego warto się douczyć?</div>

            <ul>
                <li> Warto wziąć udział w hackatonie aby podtrzymać umiejętności </li>
            </ul>


        </div>


    </div>


    <div class="course_title"> Obliczenia naukowe </div>
    <div class="row">

        <div class="column-course">
            <div class="what_did_i_learn">Czego się nauczyłem?</div>
            <ul>
                <li> Języka julia </li>
                <li> W jaki sposób są przechowywane liczby w komputerze </li>
                <li> Bibliotek do julii </li>


            </ul>

        </div>

        <div class="column-course">
            <div class="what_will_i_learn">Czego warto się douczyć?</div>
            <ul>
                <li> Algorytmów do optymalizacji obliczeń </li>
            </ul>
        </div>


    </div>


    <div class="course_title"> Języki formalne i teoria translacji </div>
    <div class="row">

        <div class="column-course">
            <div class="what_did_i_learn">Czego się nauczyłem?</div>
            <ul>
                <li> W jaki sposób działa kompilator </li>
                <li> Napisałem własny kompilator </li>
            </ul>

        </div>

        <div class="column-course">
            <div class="what_will_i_learn">Czego warto się douczyć?</div>
            <ul>
                <li> Stworzyć własny język programowania </li>
            </ul>
        </div>


    </div>


    <div class="course_title"> Teoretyczne podstawy informayki </div>
    <div class="row">

        <div class="column-course">
            <div class="what_did_i_learn">Czego się nauczyłem?</div>
            <ul>
                <li> Maszyna Turinga </li>
                <li> Problem stopu </li>
            </ul>

        </div>

        <div class="column-course">
            <div class="what_will_i_learn">Czego warto się douczyć?</div>
            <ul>
                <li> Jak rozwiązać problemy stopu </li>
            </ul>
        </div>
    </div>


    <div class="course_title"> Środowisko programisty </div>
    <div class="row">

        <div class="column-course">
            <div class="what_did_i_learn">Czego się nauczyłem?</div>
            <ul>
                <li> Używać systemu kontroli wersji </li>
            </ul>

        </div>

        <div class="column-course">
            <div class="what_will_i_learn">Czego warto się douczyć?</div>
            <ul>
                <li> Używać przy każdym projekcie system kontroli wersji </li>
            </ul>
        </div>
    </div>



<?php
echo $Page->addReturnButton();
echo $Page->End();
?>