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
include "../Include/header.php"
?>

<form action="checklogin.php" method="post">
    <label>Username: </label>
    <input type="text" name="username"><br>
    <label>Password: </label>
    <input type="password" name="password"><br>
    <input type="submit" value="Submit">
</form>

<?php
echo $message;
?>


<?php
include "../include/footer.php"
?>
