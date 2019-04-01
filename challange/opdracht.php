<?php
/**
 * Created by PhpStorm.
 * User: yannick
 * Date: 26-3-2019
 * Time: 09:32
 */
?>
<html>
<h1>Achtergrond kleur</h1>

<body style="
background-color: <?php if (isset($_GET["knop"])) {
    echo $_GET["kleur"];
} ?>">
<pre>
<form>
    <h2>Verander achtergrond kleur : <input type="text" name="kleur"/></h2>
    <input type="submit" name="knop">

</form>
</pre>
<a href="../homepage/index.php">Homepage</a>
</body>
</html>



