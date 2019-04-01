<?php
/**
 * Created by PhpStorm.
 * User: yannick
 * Date: 26-3-2019
 * Time: 12:02
 */
foreach($_POST['img2'] as $auto) {
    echo "<img src='img2/".$auto.".jpg'>";
}
echo "<br>";
echo "<a href='opdracht3.html'>Terug naar opdracht3</a>";