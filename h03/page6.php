<?php
/**
 * Created by PhpStorm.
 * User: yannick
 * Date: 23-1-2019
 * Time: 11:05
 */

echo "<h1>Kapper Agenda</h1>";
echo "<br>";
$kapperagenda["9:15"] = "kees";
$kapperagenda["9:30"] = "hugo";
$kapperagenda["9:45"] = "";
$kapperagenda["10:00"] = "jan";
$kapperagenda["10:15"] = "piet";
$kapperagenda["10:30"] = "";

foreach ($kapperagenda as $label => $waarde) {
    echo $label . " is gereseveerd door: ".$waarde."<br>";
}
print("<br>de volgende tijden zijn nog beschickbaar:<ul>");
foreach ($kapperagenda as $label =>$tijd) {
    if ($tijd == "") {
        print ("<li>".$label."</li>");
    }
}
echo "<br>";


echo "<a href='../homepage/index.php'>Terug naar inhouds opgave</a>";