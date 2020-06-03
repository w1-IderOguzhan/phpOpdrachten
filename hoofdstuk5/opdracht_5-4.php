<?php
include "../Include/header.php"
?>
    <style>
        .groen{
            color: green;
        }
        .rood{
            color: red;
        }
    </style>
    <form action="Opdracht_5-4.php" method="post">
        <label>Komt er een ambulance aan?</label>
        <input name="ambulance" type="radio" value="ja">ja
        <input name="ambulance" type="radio" value="nee">nee<br>

        <label>Stoplicht kleur?</label>
        <input name="trafficLight" type="radio" value="groen">Groen
        <input name="trafficLight" type="radio" value="oranje">Oranje
        <input name="trafficLight" type="radio" value="rood">Rood<br>
        <input type="submit" name="submit" value="submit">
    </form>
<?php
if (isset($_POST['submit'])) {
    echo "<h2>Wat is de situatie en wat moet ik doen?</h2><div>";
    if (!isset($_POST['trafficLight']) || !isset($_POST['ambulance'])) {
        echo "Of stoplicht kleur is onbekend of het is onbekend of de ambulance komt.";
    }
    else
    {
        $trafficLight = $_POST['trafficLight'];
        $ambulance = $_POST['ambulance'];
        echo "Stoplicht staat op $trafficLight en er komt: $ambulance een
                ambulance aan.";
        //Bepalen of je wel of niet mag doorrijden
        if ($trafficLight == "groen" && $ambulance == 'nee')
        {
            echo "<div class='groen box'>U mag doorrijden";
        }
        else
        {
            echo " <div class='rood box'>U moet stoppen";
        }
        echo "</div>";
    }
}
?>


<?php
include "../Include/footer.php"
?>