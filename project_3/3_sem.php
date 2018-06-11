<?php
require_once(__DIR__ . "/php/page_template.php");
$Page =  new myPage("Maciej Woźny: edukacja");
echo $Page->SetDescription("Trzeci semestr (2015/16)");
echo $Page->Begin();
echo $Page->PageHeader();
?>
    <div class="course_title"> Technologia Programowania </div>
    <div class="row">

        <div class="column-course">
            <div class="what_did_i_learn">Czego się nauczyłem?</div>
            <ul>
                <li> Tworzyć aplikacje sieciowe </li>
                <li> Pisać unit testu </li>
                <li> Wzorce projektowe </li>
                <li> Podstawy Javy EE </li>
            </ul>

        </div>

        <div class="column-course">
            <div class="what_will_i_learn">Czego warto się douczyć?</div>

            <ul>
                <li> Java EE </li>
            </ul>


        </div>


    </div>



    <div class="course_title"> Bazy danych </div>
    <div class="row">

        <div class="column-course">
            <div class="what_did_i_learn">Czego się nauczyłem?</div>
            <ul>
                <li> Bazy danych - mySQL </li>
                <li> Optymalizacji bazy danych </li>

            </ul>

        </div>

        <div class="column-course">
            <div class="what_will_i_learn">Czego warto się douczyć?</div>
            <ul>
                <li> Klastrowania baz danych </li>
            </ul>
        </div>


    </div>



    <div class="course_title"> Architektura systemów </div>
    <div class="row">

        <div class="column-course">
            <div class="what_did_i_learn">Czego się nauczyłem?</div>
            <ul>
                <li> Jak zbudowany jest system linux </li>
                <li> Programowanie w assemblerze </li>
                <li> Proste bramki logiczne </li>
            </ul>

        </div>

        <div class="column-course">
            <div class="what_will_i_learn">Czego warto się douczyć?</div>
            <ul>
                <li> Poszerzyć swoją wiedzę o system Windows </li>
            </ul>
        </div>


    </div>



    <div class="course_title"> Metody probabilistyczne i statystyczne </div>
    <div class="row">

        <div class="column-course">
            <div class="what_did_i_learn">Czego się nauczyłem?</div>
            <ul>
                <li> Rachunek prawdopodobieństwa </li>
                <li> Statystyka </li>
            </ul>

        </div>

        <div class="column-course">
            <div class="what_will_i_learn">Czego warto się douczyć?</div>
            <ul>
                <li> Rozszerzyć wiedzę na temat statystyki </li>
            </ul>
        </div>
    </div>



    <div class="course_title"> Język angielski B2.1 </div>
    <div class="row">

        <div class="column-course">
            <div class="what_did_i_learn">Czego się nauczyłem?</div>
            <ul>
                <li> Poszerzyłem swój zasób słow w języku angielskim </li>
            </ul>

        </div>

        <div class="column-course">
            <div class="what_will_i_learn">Czego warto się douczyć?</div>
            <ul>
                <li> Rozszerzyć jeszcze bardziej swój zasób słow w języku angielskim </li>
            </ul>
        </div>
    </div>

<?php
echo $Page->addComments();
echo $Page->addReturnButton();
echo $Page->End();
?>