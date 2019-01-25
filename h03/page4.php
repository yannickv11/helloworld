<?php
/**
 * Created by PhpStorm.
 * User: yannick
 * Date: 11-1-2019
 * Time: 12:45
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Arrays, controlestructuren en loops opdracht 4</title>
</head>
<body>
<h1>Opdracht 4 prijzen</h1>
<?php
$leeftijd = 13;
$prijs = 10;
if ($leeftijd > 65){
    $prijs = $prijs *0.5;
}
if ($leeftijd <=12){
    $prijs = $prijs *0.5;
}

if ($leeftijd <3) {
    $prijs = 0;
}

echo "Bus reis prijs : ".$prijs;

?>
<br>
<a href="../homepage/index.php">Terug naar inhouds opgave</a>
</body>
</html>

