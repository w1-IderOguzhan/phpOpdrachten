<?php
/**
 * User: Oguzhan Ider
 * Date: 14-2-2020
 * Time: 12:08
 * File: index.php
 */
?>
<?php
include "../include/header.php"
?>
<?php
echo "<h1>Opdracht 4.4</h1>";
$DaysWeek = array("zondag","maandag","dinsdag","woensdag","donderdag","vrijdag","zaterdag"); //alle dagen van de week
$test = "";
for($x=0; $x <8; $x++) //de loop die alle dagen loopt
{
    $DayNr = date('w', strtotime("+$x days")); //de dagen
    $date = date('d-m-Y', strtotime("+$x days")); //de datum van de dag
    $test .= "Dag $DayNr is {$DaysWeek[$DayNr]} $date <br>";//dit is het resultaat
}
echo $test //Dit zorgt er voor dat het word laten zien op het scherm
?>
<?php
include "../include/footer.php"
?>
