<?php
/**
 * Created by PhpStorm.
 * User: yannick
 * Date: 19-3-2019
 * Time: 09:25
 */
echo "<h1>Cookies</h1>";
$a = 12 ;
setcookie("a",12,time()+60);
echo $a. "<br>";
?>
<a href="page1b.php">Naar pagina b</a>
<br> <br>
<a href='../homepage/index.php'>Terug naar inhouds opgave</a>