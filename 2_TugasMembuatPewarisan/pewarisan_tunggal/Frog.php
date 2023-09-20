<?php
require_once('Animal.php');

class Frog extends Animal
{
  public $legs = 4;
  public $cold_blooded = "no";

  public function jump($jump){
    return "Jump : " . $jump . "<br><br>";
  }
}
?>