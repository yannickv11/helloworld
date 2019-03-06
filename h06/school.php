<?php
/**
 * Created by PhpStorm.
 * User: yannick
 * Date: 6-2-2019
 * Time: 13:46
 */

$user= "schooluser";
$pass= "Toernooi46";
try {
    $dbh = new PDO('mysql:host=localhost;dbname=school; port=8889', $user, $pass);
    foreach($dbh->query('SELECT * from cursist') as $row) {
        print_r($row);
    }
    $dbh = null;
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}
echo"<br> "
?>


