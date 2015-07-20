<?php

interface Beeable
{

function beingHit();

}

abstract class Bee implements Beeable
{
  public $lifeSpan;

  public abstract function setLifeSpan();

  public abstract function getLifeSpan();

  public function __construct(){
    $this->setLifeSpan();
  }

  public abstract function beingHit();

  public abstract function printBee();

}
class Queen extends Bee
{

  public function setLifeSpan(){
    $this->lifeSpan = 100;
  }

  public function getLifeSpan(){
    return $this->lifeSpan;
  }

  public function beingHit(){
    $this->lifeSpan = $this->lifeSpan - 8;
  }

  public function printBee(){
    echo "Pretty Queen" . $this->lifeSpan ;
  }
}

class Worker extends Bee
{
  function __construct(){
    parent::__construct();
  }

  public function setLifeSpan(){
    $this->lifeSpan = 75;
  }

  public function getLifeSpan(){
    return $this->lifeSpan;
  }

  public function beingHit(){
    $this->lifeSpan = $this->lifeSpan - 10;
    }

    public function printBee(){
    echo "Pretty Worker" . $this->lifeSpan ;
  }
}

class Drone extends Bee
{
  function __construct(){
    parent::__construct();
  }

  public function setLifeSpan(){
    $this->lifeSpan = 50;
  }

  public function getLifeSpan(){
    return $this->lifeSpan;
  }

  public function beingHit(){
    $this->lifeSpan = $this->lifeSpan - 12;
    }

    public function printBee(){
    echo "Pretty Drone" . $this->lifeSpan ;
  }
}

?>
