<?php
require_once(__DIR__ . "/php/page_template.php");
$Page =  new myPage("Maciej Woźny: edukacja");
echo $Page->SetDescription("Piąty semestr (lato 2016/17) - urlop dziekański");
echo $Page->Begin();
echo $Page->PageHeader();
?>
    <div class="course_title"> Języki i paradygmaty programowania </div>
    <div class="row">

        <div class="column-course">
            <div class="what_did_i_learn">Czego się nauczyłem?</div>
            <ul>
                <li> Języka Oz </li>
                <li> Języka Scheme </li>
                <li> Języka Haskell </li>
                <li> Języka Erlang </li>
                <li> Języka Prolog </li>

            </ul>

        </div>

        <div class="column-course">
            <div class="what_will_i_learn">Czego warto się douczyć?</div>

            <ul>
                <li> Nauczyć się porządnie prologa </li>
            </ul>


        </div>


    </div>



    <div class="course_title"> Systemy wbudowane </div>
    <div class="row">

        <div class="column-course">
            <div class="what_did_i_learn">Czego się nauczyłem?</div>
            <ul>
                <li> Języka VHDL </li>
                <li> W jaki sposób komputer przesyła bity </li>
                <li> Zaimplementowałem prosty komputer z procesorem MARIE </li>
            </ul>

        </div>

        <div class="column-course">
            <div class="what_will_i_learn">Czego warto się douczyć?</div>
            <ul>
                <li> Sworzyć za pomocą bramek własny procesor </li>
            </ul>
        </div>


    </div>



    <div class="course_title"> Programowanie współbieżne </div>
    <div class="row">

        <div class="column-course">
            <div class="what_did_i_learn">Czego się nauczyłem?</div>
            <ul>
                <li> W jaki sposób korzystać z wielowątkowości </li>
                <li> Jezyka Ada </li>
                <li> Jezyka Go </li>
            </ul>

        </div>

        <div class="column-course">
            <div class="what_will_i_learn">Czego warto się douczyć?</div>
            <ul>
                <li> Nauczyć się bibliotek do Go </li>
            </ul>
        </div>


    </div>



    <div class="course_title"> Aplikacje mobilne </div>
    <div class="row">

        <div class="column-course">
            <div class="what_did_i_learn">Czego się nauczyłem?</div>
            <ul>
                <li> Pisać aplikacje na Androida </li>
                <li> Projektować GUI na Androidzie</li>
            </ul>

        </div>

        <div class="column-course">
            <div class="what_will_i_learn">Czego warto się douczyć?</div>
            <ul>
                <li> Napisać własną aplikację na Androida i wstawić ją do sklepu Play </li>
            </ul>
        </div>
    </div>




    <div class="course_title"> Język angielski B2.2 </div>
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