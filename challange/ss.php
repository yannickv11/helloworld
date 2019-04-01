<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
<h1>Opdracht 4</h1>
<?php
$autos = array(
    array(
        'kenteken' => "DL-LT-87",
        'merk' => "Citroen",
        'type' => "XM",
        'datumAPK' => "1999-09-23",
        'kilometerstand' => "34500"
    ),
    array(
        'kenteken' => "GF-NX-07",
        'merk' => "Volkswagen",
        'type' => "Polo",
        'datumAPK' => "1999-07-12",
        'kilometerstand' => "78000"
    ),
    array(
        'kenteken' => "GF-PD-34",
        'merk' => "Volkswagen",
        'type' => "Golf",
        'datumAPK' => "1999-09-23",
        'kilometerstand' => "57500"
    ),
    array(
        'kenteken' => "KR-RT-65",
        'merk' => "Volkswagen",
        'type' => "Polo",
        'datumAPK' => "1999-08-08",
        'kilometerstand' => "42000"
    ),
    array(
        'kenteken' => "PT-ER-45",
        'merk' => "Ford",
        'type' => "Fiesta",
        'datumAPK' => "1999-08-08",
        'kilometerstand' => "25000"
    ),
    array(
        'kenteken' => "TT-PR-73",
        'merk' => "Citroen",
        'type' => "XM",
        'datumAPK' => "1999-03-02",
        'kilometerstand' => "1200"
    ),
    array(
        'kenteken' => "TT-RW-01",
        'merk' => "Volkswagen",
        'type' => "Polo",
        'datumAPK' => "1999-11-14",
        'kilometerstand' => "4500"
    ),
);
?>
<table border='3'>
    <tr>
        <th>Kenteken</th>
        <th>Merk</th>
        <th>Type</th>
        <th>DatumAPK</th>
        <th>Kilometerstand</th>
    </tr>
    <?php
    $i = 1;
    foreach ($autos as $auto) {
    ?>
    <tr>
        <td> <? echo $auto['kenteken'] ?> </td>
        <td> <? echo $auto['merk'] ?> </td>
        <td> <? echo $auto['type'] ?> </td>
        <td> <? echo $auto['datumAPK'] ?> </td>
        <td> <? echo $auto['kilometerstand'] ?> </td>
        <?php
        $i++;
        }
        ?>
</body>
</html>