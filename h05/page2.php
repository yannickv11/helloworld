<?php
/**
 * Created by PhpStorm.
 * User: yannick
 * Date: 28-1-2019
 * Time: 13:02
 */
print_r($_POST);

if ($_POST['voornaam'] == "" ) {
    echo "<br>je moet nog een voornaam invullen! <br>";
};
if ($_POST['adres'] == "" ) {
    echo "<br>je moet nog een adres invullen!<br>";
};
if ($_POST['email'] == "" ) {
    echo "<br>je moet nog een email invullen!<br>";
};
if ($_POST['wachtwoord'] == "" ) {
    echo "<br>je moet nog een wachtwoord invullen!<br>";

};

echo "<br>";
echo"<br><a href='../h05/formulier2.html'>Terug naar het formulier</a>";