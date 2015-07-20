<?php
//PHP 5.5.3
include_once "Bee.php";

class GamePlay
{

  static function startGame()
  {
    $bees = array(new Queen());

    for ($i = 1; $i <= 13; $i++) {
      if ($i <= 5) // 5 Workers
      $bees[] = new Worker();
      else // 8 Drone
      $bees[] = new Drone();
    }
    echo "----------------------------------------------"."<br/>";
    echo "STARTING GAME ... GOOD LUCK!"."<br/>";
    echo "----------------------------------------------"."<br/>";
    echo "<pre>";
    print_r($bees);
    echo "</pre>";
    return $bees;

  }

  static function hitBee($inputBees)
  {
    $random_key=array_rand($inputBees);
    //$random_key=rand(0, count($inputBees));
    //print_r(GamePlay::$bees[$ramdon_key]);
    $inputBees[$random_key]->beingHit();
    echo "------------------------------------------------------"."<br/>";
    echo "HITTING THIS RANDOM BEE ... HONEY!"."<br/>";
    echo "TO WIN THE QUEEN MUST BE DEAD ... SHE IS THE KEY"."<br/>";
    echo "<pre>";
    echo "RANDOM INDEX ==> " . $random_key . "<br/>";
    if ($random_key == 0){
      echo "WELL DONE SHE WAS THE QUEEN"."<br/>";
      if ($inputBees[$random_key]->getLifeSpan() <= 0){
        echo "GAME OVER FOR THE QUEEN! YOU WIN!!!"."<br/>";
        $_SESSION["myBees"] = GamePlay::startGame();
        return $_SESSION["myBees"];
      }
    }
    echo "HIT ==> " . $inputBees[$random_key]->getLifeSpan() . "<br/>";
    if ($inputBees[$random_key]->getLifeSpan() <= 0){
      unset($inputBees[$random_key]);
      $inputBees = array_values($inputBees);
    }

    print_r($inputBees[$random_key]);
    echo "</pre>";
    echo "------------------------------------------------------"."<br/>";
    echo "<pre>";
    print_r($inputBees);
    echo "</pre>";

    return $inputBees;
  }

}

?>
