<?php
/**
 * User: Oguzhan Ider
 * Date: 14-2-2020
 * Time: 12:08
 * File: index.php
 */
?>
<?php
include "../include/header.php";
?>
<h1>Restaria Kees Kroket</h1>
<p>Visserstraat 12</p>
<p>5211 DN s'Hertogenbosch</p>
<p>073 613 6720</p>
<p>info@restariaKeesKroket.nnl</p>
<br>

<h3>Taak1</h3>
<div class="formInfo">
    <form action="form_data.php" method="get">
        <label>Bedrijfsnaam: </label><br>
        <input name="company" type="text"><br><br>
        <label>Voornaam: </label><br>
        <input name="firstname" type="text"><br><br>
        <label>Achternaam: </label><br>
        <input name="lastname" type="text"><br><br>
        <label>Telefoon: </label><br>
        <input name="number" type="text"><br><br>
        <label>E-mail: </label><br>
        <input name="mail" type="text"><br><br>
        <label>Bericht: </label><br>
        <input name="message" type="text"><br><br>
        <input type="submit" name="Verzend" value="verzend">
    </form>
</div>
<?php
include "../include/footer.php"
?>
