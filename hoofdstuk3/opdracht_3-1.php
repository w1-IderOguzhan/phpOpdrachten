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
    $tochtNaam = "<u>Elfstedentocht</u>";
    $tochtFries = "<u>Alvestêdetocht</u>";
    $afstand = "<u>200</u>";
    $soortTocht = "<u>schaatstocht</u>";
    $type = "<u>natuurijs</u>";
    $verenigingNaam = "<u>Koninklijke Vereniging De Friesche Elf Steden</u>";
    $plaats = "<u>Leeuwarden</u>";
    $provincie = "<u>Friesland</u>";
    $aantal = "<u>15</u>";
    $jaar = "<u>1909</u>";

    $verhaal = "De $tochtNaam (Fries: $tochtFries) is een $afstand
                kilometer lange $aantal over $type die wordt
                georganiseerd door de $verenigingNaam. $plaats, de hoofdstad van $provincie, is start- en
                aankomstplaats. De $soortTocht  is inmiddels $aantal maal
                verreden en werd voor het eerst in $jaar gereden en wordt
                maximaal 1 keer per winter gehouden.";
    echo ("<h1>Taak 1</h1>");
    echo ("<p>$verhaal</p>");

    $verhaal2 = "De " . $tochtNaam .  " (Fries: " . $tochtFries . ") is een " . $afstand . " kilometer lange " . $aantal . " over " . $type . " die wordt
                georganiseerd door de " . $verenigingNaam .". " . $plaats . ",  de hoofdstad van " . $provincie . ",  is start- en
                aankomstplaats. De " . $soortTocht . " is inmiddels " . $aantal . " maal
                verreden en werd voor het eerst in " . $jaar . " gereden en wordt
                maximaal 1 keer per winter gehouden.";
    echo ("<h1>Taak 2</h1>");
    echo ("<p>$verhaal2</p>");
    ?>
    </div>

    </body>
    </html><?php
