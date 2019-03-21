<?php
/**
 * Created by PhpStorm.
 * User: yannick
 * Date: 20-3-2019
 * Time: 09:12
 */
session_start();
echo "<h1>Sessions</h1>";
$_SESSION['user'] = "yannick" ;
echo $_SESSION['user'];
?>
<br>
<a href="page2b.php">ga naar B</a>
<br> <br>
<a href="../homepage/index.php">Terug naar inhouds opgave</a>