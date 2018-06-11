<?php
require_once(__DIR__ . "/php/page_template.php");
$Page =  new myPage("Maciej Woźny: edukacja");
echo $Page->SetDescription("Piąty semestr (zima 2017/18) - urlop dziekański");
echo $Page->Begin();
echo $Page->PageHeader();
?>
    <div class="course_title"> Metody wytwarzania oprogramowania </div>
    <div class="row">

        <div class="column-course">
            <div class="what_did_i_learn">Czego się nauczyłem?</div>
            <ul>
                <li> Tworzyć dokumentację do projektu </li>
                <li> Projektować system przed implementacją </li>
                <li> Tworzyć grafikę używając C++ i SDL2.0 </li>

            </ul>

        </div>

        <div class="column-course">
            <div class="what_will_i_learn">Czego warto się douczyć?</div>

            <ul>
                <li> Terminowości </li>
                <li> Lepszej współpracy pomiędzy członkami zespołu </li>
            </ul>


        </div>


    </div>



    <div class="course_title"> Bezpieczeństwo komputerowe </div>
    <div class="row">

        <div class="column-course">
            <div class="what_did_i_learn">Czego się nauczyłem?</div>
            <ul>
                <li> Ataków sieciowych </li>
                <li> Zabezpieczenia przed atakami </li>
            </ul>

        </div>

        <div class="column-course">
            <div class="what_will_i_learn">Czego warto się douczyć?</div>
            <ul>
                <li> Być na bieżąco z nowymi atakami i uczyć się obrony przed nimi</li>
            </ul>
        </div>


    </div>


<?php
echo $Page->addComments();
echo $Page->addReturnButton();
echo $Page->End();
?>