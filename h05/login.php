<?php
/**
 * Created by PhpStorm.
 * User: yannick
 * Date: 30-1-2019
 * Time: 09:15
 */

$users = array("yannick" => "1234");

$email = $_POST['email'];
$wachtwoord = $_POST['wachtwoord'];


echo $users["yannick"]  ? "welkomm" : "ga weg" ;

echo"<br><a href='../h05/loginpagina.html'>Terug naar inlog pagina</a>";