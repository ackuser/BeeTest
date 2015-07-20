<?php
//PHP 5.5.3
include_once "Bee.php";

session_start();

class GamePlay
{

  public $bees;

  function __construct() {
    $this->bees = array(new Queen());

    for ($i = 1; $i <= 13; $i++) {
      if ($i <= 5) // 5 Workers
      $this->bees[] = new Worker();
      else // 8 Drone
      $this->bees[] = new Drone();
    }
  }

  function startGame()
  {
    //global $bees;
    //self::__construct();
    echo "<pre>";
    print_r($this->bees);
    echo "</pre>";

  }

  function hitBee()
  {
    //self::__construct();
    echo "\n----------------------------------------\n";
    echo "<pre>";    
    $ramdon_key=array_rand($this->bees);
    print_r($this->bees[$ramdon_key]);
    $this->bees[$ramdon_key]->beingHit();
    print_r($this->bees[$ramdon_key]);
    echo "</pre>";
    echo "<pre>";
    print_r($this->bees);
    echo "</pre>";

  }

}

//GamePlay::startGame();
$hola=New GamePlay();
$_SESSION["test"] = $hola;
?>
