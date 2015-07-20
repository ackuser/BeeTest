<?php
//curl http://127.0.0.1/BeeTest/EntryPoint.php?play=true
include_once "Game.php";

session_start();

?>
<html>
<body>

<h1>Bee Test</h1>

<p>Karim Abdeselam Canales</p>

<form action="http://127.0.0.1/BeeTest/index.php" method="get">
  <input type="text" name="play" value="start" hidden><br>
  <input type="submit" value="Start">
</form>

<form action="http://127.0.0.1/BeeTest/index.php" method="get">
  <input type="text" name="play" value="hit" hidden><br>
  <input type="submit" value="Hit">
</form>

<?php
if(isset($_GET['play']) && $_GET['play'] == "start"){
  $_SESSION["myBees"] = GamePlay::startGame();
}
else if(isset($_GET['play']) && $_GET['play'] == "hit"){
  $_SESSION["myBees"] = GamePlay::hitBee($_SESSION["myBees"]);
}
?>


</body>
</html>
