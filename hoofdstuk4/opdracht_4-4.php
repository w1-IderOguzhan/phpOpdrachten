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
echo "<br>";
echo "<br>";
echo "<h1>Opdracht 4.4</h1>";
$DaysWeek = array("zondag","maandag","dinsdag","woensdag","donderdag","vrijdag","zaterdag"); //Dit is een array met alle dagen van de week
$test = "";
for($x=0; $x <8; $x++) {
    $DayNr = date('w', strtotime("+$x days")); //Dit laat de nummer van de dag zien van een week
    $date = date('d-m-Y', strtotime("+$x days")); //Dit laat de datums zien voor de week
    $test .= "Dag $DayNr is {$DaysWeek[$DayNr]} $date <br>"; //Hierin laat laat ik zien wat er in de lege string moet staan
}
echo $test //Dit zorgt er voor dat het word laten zien op het scherm
?>


<?php
include "../include/footer.php"
?>
