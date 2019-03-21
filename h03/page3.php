<?php
/**
 * Created by PhpStorm.
 * User: yannick
 * Date: 11-1-2019
 * Time: 09:24
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        body {
            text-align: center;
        }
        img {
            height: 300px;
            width: 300px

        }
        .rood {
            border: red solid 5px;
        }
        .groen {
            border: green solid 5px;
        }
    </style>
    <meta charset="UTF-8">
    <title>Arrays, controlestructuren en loops opdracht 3</title>
</head>
<body>
<a href="../homepage/index.php">Terug naar inhouds opgave </a>
<br>
<?php
for ($i = 1; $i <=9;$i++) {

    if ($i % 2 == 0) {
        $class = "class ='rood'";
    } else {
        $class = "class = 'groen'";
    }


    echo "<img ".$class." src ='imgphp/pl" . $i . ".jpg'>";
}


?>
</body>
</html>

