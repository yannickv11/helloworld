<?php
/**
 * Created by PhpStorm.
 * User: yannick
 * Date: 30-1-2019
 * Time: 09:15
 */


if (isset($_POST['knop'])) {
    $email = $_POST['email'];
    $wachtwoord = $_POST['wachtwoord'];
}
if ($email == "piet@worldonline.nl" && $wachtwoord == "doetje123" ||
    $email == "klaas@carpets.nl" && $wachtwoord == "snoepje777"||
    $email == "truushendriks@wegweg.nl" && $wachtwoord == "arkiearkie201") {
    echo "Welkom !!";
} else {
    echo "Ga weg !!";
}



echo"<br><a href='../h05/loginpagina.html'>Terug naar inlog pagina</a>";