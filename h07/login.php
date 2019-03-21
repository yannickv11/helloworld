<?php
/**
 * Created by PhpStorm.
 * User: yannick
 * Date: 20-3-2019
 * Time: 12:12
 */
session_start();
$users = array(
  "yannick" => array("pwd" => "1234", "rol" => "Adminstrator"),
  "pieter" => array("pwd" => "1122", "rol" => "Gebruiker"),
    "bart" => array("pwd" => "0000", "rol" => "Adminstrator")
);
if (isset($_GET["loguit"])) {
    $_SESSION = array();
    session_destroy();
}

if (isset($_POST["knop"])
    && isset($users[$_POST["login"]])
    && $users[$_POST["login"]]["pwd"] == $_POST["pwd"] ) {
    $_SESSION["user"] = array("naam"=>$_POST["login"],
                           "pwd" => $users[$_POST["login"]]["pwd"],
                           "rol" =>  $users[$_POST["login"]]["rol"]
        );
    $message = "Welkom ".$_SESSION["user"]["naam"]. " met de rol ".$_SESSION["user"]["rol"];

} else {
    $message = "Inloggen!";
}
print_r($_SESSION);
?>

<html xmlns="http://www.w3.org/1999/html">
<body>
<h1><?php echo $message; ?></h1>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
      <div class="form-group">
          <label for="login">Login: </label>
          <input type="text" name="login" value="">
      </div>
      <div class="form-group">
    <label for="pwd">Wachtwoord: </label>
    <input type="password" name="pwd" value="">
    </div>
<input type="submit" name="knop">

</form>
<P><a href="login2.php">website</a></P>
<p><a href="login.php?loguit">uitloggen</a> </p>
<p><a href="admin.php">admin gedeelte website</a> </p>
<BR>
<p><a href="../homepage/index.php">Terug naar inhouds opgave</a> </p>
</body>
</html>



