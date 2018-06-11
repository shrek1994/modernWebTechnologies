<?php
require_once(__DIR__ . "/php/page_template.php");
$Page =  new myPage("Maciej Woźny: edukacja");
echo $Page->SetDescription("Ciekawe książki");
echo $Page->Begin();
echo $Page->PageHeader();
?>
    <div class="course_title"> Rok 2014 </div>
    <div class="row">

        <div class="column-course">
            <div class="what_did_i_learn">Algebra liniowa 1: definicje, twierdzenia, wzory</div>
            <div class="description">
                Jest to pierwsza część podręcznika do "Algebry z geometrią analityczną".
                Zawiera materiał teoretyczny omawiany na wykładach w pierwszym semestrze.
                W podręczniku omówiono liczby zespolone, wielomiany, macierze i wyznaczniki, układy równań liniowych oraz geometrię analityczną w przestrzeni.
                Do wszystkich definicji i twierdzeń dołączono ćwiczenia.
                Dowody wybranych twierdzeń oraz odpowiedzi do ćwiczeń umieszczone są na końcu każdego rozdziału.
                Niewątpliwą zaletą publikacji jest duża liczba ilustracji przybliżających wprowadzane pojęcia.
            </div>

            <div class="summary">Autorzy: Teresa Jurlewicz i Zbigniew Skoczylas
            </div>

        </div>

    </div>


    <div class="course_title"> Rok 2013 </div>
    <div class="row">

        <div class="column-course">
            <div class="what_did_i_learn">Analiza matematyczna 1: przykłady i zadania</div>
            <div class="description">
                Jest to pierwsza część podręcznika do ,,Analizy matematycznej 1''.
                Zawiera materiał teoretyczny omawiany na wykładach w pierwszym semestrze.
                W podręczniku omówiono klasyczny rachunek różniczkowy i całkowy funkcji jednej zmiennej wraz z zastosowaniami.
                Do wszytkich definicji i twierdzeń dołączono ćwiczenia.
                Dowody wybranych twierdzeń oraz odpowiedzi do ćwiczeń umieszczone są na końcu każdego rozdziału.
                Zaletą publikacji jest duża liczba rysunków i wykresów utrwalających wprowadzone pojęcia.

            </div>

            <div class="summary">Autorzy: Marian Gewert i Zbigniew Skoczylas
            </div>

        </div>

    </div>



<?php
echo $Page->addComments();
echo $Page->addReturnButton();
echo $Page->End();
?>