<?php
//PHP 5.5.3
include_once "Bee.php";

class GamePlay
{

  static $bees;

  static function startGame()
  {
    //global $bees;

    $this->$bees = array(new Queen());

    for ($i = 1; $i <= 13; $i++) {
      if ($i <= 5) // 5 Workers
        $bees[] = new Worker();
      else // 8 Drone
        $bees[] = new Drone();
    }

    echo "<pre>";
    print_r($bees);
    echo "</pre>";

  }

  static function hitBee()
  {

    global $bees;
    echo "\n----------------------------------------\n";
    echo "<pre>";
    array($bees);
    echo "</pre>";

  }
  /* setter */
      function setBees($aBees) {
          $this->bees  = $aBees;
      }

      /* getter */
      function getBees() {
          return $this->bees;
      }

}

//GamePlay::startGame();

?>
