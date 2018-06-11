<?php

require_once(__DIR__ . "/php/page_template.php");
$Page =  new myPage("Maciej Woźny: edukacja");
echo $Page->SetDescription("Pierwszy semestr (2014/15)");
echo $Page->Begin();
echo $Page->PageHeader();
?>

    <div class="course_title"> Logika i struktury formalne </div>
    <div class="row">

        <div class="column-course">
            <div class="what_did_i_learn">Czego się nauczyłem?</div>
            <ul>
                <li> Rachunek zdań </li>
                <li> Kwantyfikatory </li>
                <li> Relacje równoważności </li>
                <li> Indukcja matematyczna </li>
            </ul>
            <p>
                \begin{align}
                \neg(p ∧ q) \leftrightarrow (\neg p ∨ \neg q)
                \end{align}
            </p>

        </div>

        <div class="column-course">
            <div class="what_will_i_learn">Czego warto się douczyć?</div>
            <ul>
                <li> Liczby Porządkowe i Kardynalne </li>
            </ul>
        </div>

    </div>

<?php

echo $Page->addComments();
echo $Page->addReturnButton();
echo $Page->End();
?>