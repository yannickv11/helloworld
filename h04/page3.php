<?php
/**
 * Created by PhpStorm.
 * User: yannick
 * Date: 25-1-2019
 * Time: 10:57
 */
echo "<h1>Celsuis</h1>";

$celsius = null;
function getFahrenheit($celsius)
{
    $fahrenheit = ($celsius * 1.8000 + 32.00);
    echo $fahrenheit."°C.";
}
getFahrenheit(10);


echo "<br>";
echo "<a href='../homepage/index.php'>Terug naar inhouds opgave</a>";