<?php
require_once(__DIR__ . "/php/page_template.php");
$Page =  new myPage("Maciej Woźny: edukacja");
echo $Page->SetDescription("Ulubione filmy");
echo $Page->Begin();
echo $Page->PageHeader();
?>
    <div class="course_title"> Rok 2018 </div>
    <div class="row">

        <div class="column-course">
            <div class="what_did_i_learn">Mr. Robot (serial)</div>
            <div class="description">
                Grupa hakerów planuje atak na międzynarodową korporację Evil Corp.
            </div>

            <div class="summary">Twórca: Sam Esmail</div>

        </div>

    </div>


    <div class="course_title"> Rok 2017 </div>
    <div class="row">

        <div class="column-course">
            <div class="what_did_i_learn">Snowden</div>
            <div class="description">
                Historia byłego pracownika CIA i NSA Edwarda Snowdena, który ujawnił prasie ściśle tajne dokumenty,
                doprowadzając do największego przecieku zastrzeżonych informacji w historii USA.
            </div>

            <div class="summary">Reżyseria:	Oliver Stone</div>

        </div>

    </div>


<?php
echo $Page->addReturnButton();
echo $Page->End();
?>