<?php
/**
 * Created by PhpStorm.
 * User: yannick
 * Date: 16-1-2019
 * Time: 10:35
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Organiseren met functies</title>
</head>
<body>
<ul>
<?php
$dieren = array("Paard", "Aap", "Vogel", "Leeuw", "Vis", "Gorilla");
shuffle($dieren);
echo "<li>er zijn ".count($dieren)." dieren in de array </li>";
foreach($dieren as $dier) {
    echo "<li>".$dier."</li>";
}
?>
</ul>
<br>
<a href="../homepage/index.php">Terug naar inhouds opgave</a>
</body>
</html>
