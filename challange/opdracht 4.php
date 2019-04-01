<?php
$autos = array(

    array(
    'kenteken' => "DL-LT-87",
    'merk' => "Citroen",
    'type' => "XM",
    'datumapk' => "1999-09-23",
    'kilometerstand' => "34500",
),
    array(
        'kenteken' => "GF-NX-07",
        'merk' => "Volkswagen",
        'type' => "Polo",
        'datumapk' => "1999-07-12",
        'kilometerstand' => "78000",
    ),
    array(
        'kenteken' => "GF-PD-34",
        'merk' => "Volkswagen",
        'type' => "Golf",
        'datumapk' => "1999-09-23",
        'kilometerstand' => "57500",
    ),
    array(
        'kenteken' => "KR-RT-65",
        'merk' => "Volkswagen",
        'type' => "Polo",
        'datumapk' => "1999-08-08",
        'kilometerstand' => "42000",
    ),
    array(
        'kenteken' => "PT-ER-45",
        'merk' => "Ford",
        'type' => "Fiesta",
        'datumapk' => "1999-08-08",
        'kilometerstand' => "25000",
    ),
    array(
        'kenteken' => "TT-PR-73",
        'merk' => "Citroen",
        'type' => "XM",
        'datumapk' => "1999-03-02",
        'kilometerstand' => "1200",
    ),
    array(
        'kenteken' => "TT-RW-01",
        'merk' => "Volkswagen",
        'type' => "Polo",
        'datumapk' => "1999-11-14",
        'kilometerstand' => "4500",
    ),
);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title> Opdracht 4</title>
</head>
<body>

<table id="autostabel" border="1">
    <tr>
        <th>Kenteken</th>
        <th>Merk</th>
        <th>Type</th>
        <th>Datum APK</th>
        <th>Kilometerstand</th>
    </tr>

    <?php for ($row = 0; $row < 7; $row++) {
        echo "<tr>";
        for ($au = 0; $au <5; $au++) {
        echo "<td>".$autos[$row][$au]."</td>";
        }
        echo "</tr>";
    }?>



</table>
</body>
</html>