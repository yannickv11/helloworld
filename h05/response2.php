<?php
/**
 * Created by PhpStorm.
 * User: yannick
 * Date: 29-1-2019
 * Time: 13:23
 */
//print_r($_POST);

//print_r($_POST['img']);

foreach($_POST['img'] as $speler) {
    echo "<img src='img/".$speler.".jpg'>";
}
echo "<br>";
 echo "<a href='selectbox2.html'>Terug naar guru-level</a>";