
<?php
/**
 * User: Oguzhan Ider
 * Date: 14-2-2020
 * Time: 12:08
 * File: index.php
 */
?>
<!doctype html>
<html>
<head>
    <title>
        Opdracht
    </title>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta name="keywords" content="">
</head>
<body>
<a href="../index.php">Home</a>
<?php
$trafficLightColor = "Groen";
$ambulanceComing = false;

if ($trafficLightColor == "Rood")
{
    $driveOn = false;
}
elseif($trafficLightColor == "Oranje")
{
    $driveOn = false;
}
elseif($ambulanceComing == true)
{
    $driveOn = false;
}

else
{
    $driveOn = true;
}

if ($driveOn = false)
{
    echo "<p id='stop'>U moet stoppen</p>";
}

else
{
    echo "<p id='door'>U mag doorrijden</p>";
}

?>
<br>
<?php
$countryName = "Nederland";
$currentAge = 18;


echo("<p>Je woont in ". $countryName . " en je bent " . $currentAge . " jaar oud.</p>");

if($countryName == "Nederland" && $currentAge >= 18)
{
    echo("<p>Je mag hier sterke en zwakke alcohol drinken.</p>");
}
else if($countryName == "Nederland" && $currentAge < 18)
{
    echo("<p>Hier mag je geen alcohol drinken.</p>");
}

if($countryName == "België" && $currentAge >= 16 && $currentAge <= 18)
{
    echo("<p>Je mag hier zwakke alcohol drinken.</p>");
}
else if($countryName == "België" && $currentAge >= 18)
{
    echo("<p>Je mag hier sterke en zwakke alcohol drinken.</p>");
}
else if($countryName == "België" && $currentAge < 16)
{
    echo("<p>hier mag je geen alcohol drinken.</p>");
}

if($countryName == "Bulgarije" && $currentAge >= 18)
{
    echo("<p>Je mag hier sterke en zwakke alcohol drinken.</p>");
}
else if($countryName == "Cyprus" && $currentAge < 17)
{
    echo("<p>Hier mag je geen alcohol drinken.</p>");
}

if($countryName == "Cyprus" && $currentAge >= 17)
{
    echo("<p>Je mag hier sterke en zwakke alcohol drinken.</p>");
}
else if($countryName == "Cyprus" && $currentAge < 17)
{
    echo("<p>Hier mag je geen alcohol drinken.</p>");
}

if($countryName == "Zweden" && $currentAge >= 18 && $currentAge <= 19)
{
    echo("<p>Je mag hier zwakke alcohol drinken.</p>");
}
else if($countryName == "Zweden" && $currentAge >= 20)
{
    echo("<p>Hier mag je sterke en zwakke alcohol drinken.</p>");
}
else if($countryName == "Zweden" && $currentAge < 18)
{
    echo("<p>Hier mag je geen alcohol drinken.</p>");
}

?>
</body>
</html>


