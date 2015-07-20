<?php
//PHP 5.5.3
include_once "Bee.php";

session_start();

class GamePlay
{

  public static $bees;

  function __construct() {
    GamePlay::$bees = array(new Queen());

    for ($i = 1; $i <= 13; $i++) {
      if ($i <= 5) // 5 Workers
      GamePlay::$bees[] = new Worker();
      else // 8 Drone
      GamePlay::$bees[] = new Drone();
    }
  }

  static function startGame()
  {
    //global $bees;
    //self::__construct();
    echo "<pre>";
    //print_r(GamePlay::$bees);
    echo "</pre>";

  }

  static function hitBee()
  {
    //self::__construct();
    echo "\n----------------------------------------\n";
    echo "<pre>";
    $ramdon_key=array_rand(GamePlay::$bees);
    //print_r(GamePlay::$bees[$ramdon_key]);
    GamePlay::$bees[$ramdon_key]->beingHit();
    print_r(GamePlay::$bees[$ramdon_key]);
    echo "</pre>";
    echo "<pre>";
    //print_r(GamePlay::$bees);
    echo "</pre>";

  }

}

//GamePlay::startGame();
//$hola=New GamePlay();
$_SESSION["test"] = $hola::$bees;
?>
