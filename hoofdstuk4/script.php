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
/**
 * Nederlands = van den Ende
 * Engels = Giesen
 * PHP = Saebu
 *  * ASP = vam Meer
 * JavaScript = Evers
 * Modelleren = van Bijnen
 * SQL = van de Wetering
 * Computertekenen = van den Berg
 * Digitale vaardigheden= Pielage
 * lob= de Ruiter
 * Rekenen = van de Wetering
 */
$courseName = 'Engels';
$teacherName = '';

switch($courseName){
    case  "Nederlands":
        $teacherName = 'van den Ende ';
        break;
    case "Engels":
        $teacherName = 'Giesen';
        break;
    case "PHP":
        $teacherName = 'Saebu';
        break;
    case "ASP":
        $teacherName = 'van Meer';
        break;
    case "JavaScript":
        $teacherName = 'Evers';
        break;
    case "Modelleren":
        $teacherName = 'van Bijnen';
        break;
    case "SQL":
        $teacherName = 'van de Wetering';
        break;
    case "Computertekenen":
        $teacherName = 'van den Berg';
        break;
    case "Digitale vaardigheden":
        $teacherName = 'Pielage';
        break;
    case "lob":
        $teacherName = 'de Ruiter';
        break;
    case "Rekenen":
        $teacherName = 'van de Wetering';
        break;
}
echo '<p>Voor het vak <b>'.$courseName.'</b> heb je <b>'.$teacherName.'</b> als docent.'
?>
<?php
include "../include/footer.php"
?>
