<?php
//curl http://127.0.0.1/BeeTest/EntryPoint.php?play=true
include_once "Game.php";

session_start();

//print_r(var_dump($aux));

if(isset($_GET['play']) && $_GET['play'] == "true"){
  $initBees = GamePlay::startGame();
  $_SESSION["myBees"] = $initBees;
  print_r(var_dump($_SESSION["myBees"]));
}
else if(isset($_GET['play']) && $_GET['play'] == "hit"){
  //print_r(var_dump($_SESSION["myBees"]));
  $initBees = GamePlay::hitBee($_SESSION["myBees"]);
}
?>
