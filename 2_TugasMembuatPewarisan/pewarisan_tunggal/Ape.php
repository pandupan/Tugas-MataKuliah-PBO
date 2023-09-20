<?php
require_once('Animal.php');

class Ape extends Animal
{
  public $legs = 2;
  public $cold_blooded = "no";

  public function yell($yell){
    return "Yell : " . $yell . " <br>";
  }
}
?>