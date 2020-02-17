<?php
/**
 * User: Oguzhan Ider
 * Date: 14-2-2020
 * Time: 12:08
 * File: index.php
 */
?>
    <!doctype html>
    <html lang="en">
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
    <div>
        <?php
            $text1 = "Hallo";
            $text2 = "een makkelijke taal";
            $text3 = "toch zo'n makkelijke taal";
            $text4 = "wat is";
            $text5 = "PHP";
            $text6 = "Nooit gedacht dat";
            $text7 = "de instalatie is best ingewikkeld";
            $text8 = "fijn";
            $text9 = "?";
            $text10 = ".";
            $text11 = ",";
            $text12 = "<br>";
            $text13 = "is";
            $text14 = "vind je niet";
            $text15 = "toch";
        ?>
        <h2>Taak 1</h2>
        <?php
        echo ("<p> $text1$text11 $text4 $text5 $text3$text10 $text12 $text7$text10 $text8 $text15$text9 $text12 $text6 $text3 $text13$text10 </p>")
        ?>
        <h2>Taak 2</h2>
        <?php
        echo ("<p>$text1$text11 $text12 $text8 $text15 dat $text5 $text3$text10 $text12 $text7$text10 $text14$text9</p>")
        ?>
    </div>
    </body>
    </html><?php
