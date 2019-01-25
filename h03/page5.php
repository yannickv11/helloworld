<?php
/**
 * Created by PhpStorm.
 * User: yannick
 * Date: 22-1-2019
 * Time: 09:58
 */
$spartelkuikens = 25;
$dewaterbuffels = 32;
$plonsminderin = 11;
$bommetje = 23;

$spartelkuikenstekstvalue = "";
$dewaterbuffelstekstvalue = "";
$plonsminderinstekstvalue = "";
$bommetjetekstvalue ="" ;

for ($count = 5; $count <= $spartelkuikens;$count +=5){
    $spartelkuikenstekstvalue.= "<th>&#50883</th>";
}
for ($count = 5; $count <= $dewaterbuffels;$count +=5){
    $dewaterbuffelstekstvalue.= "<th>&#50883</th>";
}
for ($count = 5; $count <= $plonsminderin;$count +=5){
    $plonsminderinstekstvalue.= "<th>&#50883</th>";
}
for ($count = 5; $count <= $bommetje;$count +=5){
    $bommetjetekstvalue.= "<th>&#50883</th>";
}


echo "
<style> table {border 1px solid black}* </style>

<table border='2' style='collapse: collaps'>


<tr>
<th>Spartelkuikens</th>
<th>25</th>
<th>$spartelkuikenstekstvalue</th>
</tr>

<tr>
<th>De watterbuffels</th>
<th>32</th>
<th>$dewaterbuffelstekstvalue</th>
</tr>

<tr>
<th>Plonsminderin</th>
<th>11</th>
<th>$plonsminderinstekstvalue</th>
</tr>

<tr>
<th>Bommetje</th>
<th>23</th>
<th>$bommetjetekstvalue</th>
</tr>

</table>

<a href='../homepage/index.php'>Terug naar inhouds opgave</a>
";