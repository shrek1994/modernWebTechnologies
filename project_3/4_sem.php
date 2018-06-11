<?php
require_once(__DIR__ . "/php/page_template.php");
$Page =  new myPage("Maciej Woźny: edukacja");
echo $Page->SetDescription("Czwarty semestr (2015/16)");
echo $Page->Begin();
echo $Page->PageHeader();
?>
    <div class="course_title"> Technologie sieciowe </div>
    <div class="row">

        <div class="column-course">
            <div class="what_did_i_learn">Czego się nauczyłem?</div>
            <ul>
                <li> Tworzyć aplikacje sieciowe </li>
                <li> W jaki sposób działa sieć </li>
            </ul>

        </div>

        <div class="column-course">
            <div class="what_will_i_learn">Czego warto się douczyć?</div>

            <ul>
                <li> Dowiedzieć się jak działają serwery pocztowe </li>
            </ul>


        </div>


    </div>



    <div class="course_title"> Algorytmy i struktury danych </div>
    <div class="row">

        <div class="column-course">
            <div class="what_did_i_learn">Czego się nauczyłem?</div>
            <ul>
                <li> Drzewa binarne </li>
                <li> Drzewa czerowono-czarne </li>
                <li> Merge sort </li>
                <li> Quick sort </li>
                <li> Insert sort </li>


            </ul>

        </div>

        <div class="column-course">
            <div class="what_will_i_learn">Czego warto się douczyć?</div>
            <ul>
                <li> Szukanie najkrótszej ścieżki w grafie </li>
            </ul>
        </div>


    </div>



    <div class="course_title"> Wprowadzenie do teorii grafow </div>
    <div class="row">

        <div class="column-course">
            <div class="what_did_i_learn">Czego się nauczyłem?</div>
            <ul>
                <li> Jak wygląda graf </li>
                <li> Algorytm Dijkstry </li>
                <li> Algorytm Kruskala </li>
                <li> Przeszukiwanie grafu wszerz </li>
                <li> Przeszukiwanie grafu w głąb </li>
            </ul>

            <p>
                \begin{align}
                    \sum_{v \in V} deg (v)  = 2 |E|
                \end{align}
            </p>
        </div>

        <div class="column-course">
            <div class="what_will_i_learn">Czego warto się douczyć?</div>
            <ul>
                <li> Minimalne drzewo rozpinające </li>
            </ul>
        </div>


    </div>



    <div class="course_title"> Grafika komputerowa i wizualizacje </div>
    <div class="row">

        <div class="column-course">
            <div class="what_did_i_learn">Czego się nauczyłem?</div>
            <ul>
                <li> Tworzenia grafiki w canvasie </li>
                <li> Pisanie prostych gier 2D </li>
            </ul>

        </div>

        <div class="column-course">
            <div class="what_will_i_learn">Czego warto się douczyć?</div>
            <ul>
                <li> Tworzenie grafiki 3D </li>
            </ul>
        </div>
    </div>



    <div class="course_title"> Podstawy zarządzania firmą informatyczną </div>
    <div class="row">

        <div class="column-course">
            <div class="what_did_i_learn">Czego się nauczyłem?</div>
            <ul>
                <li> Podstawy prawa w zakresie prowadzenia firmy </li>
            </ul>

        </div>

        <div class="column-course">
            <div class="what_will_i_learn">Czego warto się douczyć?</div>
            <ul>
                <li> Rozszerzyć wiedzę na temat prawa w zakresie prowadzenia firmy </li>
            </ul>
        </div>
    </div>



<?php
echo $Page->addComments();
echo $Page->addReturnButton();
echo $Page->End();
?>