<?php
/**
 * Created by PhpStorm.
 * User: yannick
 * Date: 21-3-2019
 * Time: 12:10
 */
session_start();
if (isset($_SESSION["user"]) && $_SESSION["user"]["rol"] == "Adminstrator" ) {
    echo "<h1>welkom " . $_SESSION["user"]["naam"] . " op het admingedeelte van de website </h1>";
    echo "<p><a href='login.php'>Login</a> </p>";

}else {
    header('location: login.php');
    // Terug naar inlogscherm
}