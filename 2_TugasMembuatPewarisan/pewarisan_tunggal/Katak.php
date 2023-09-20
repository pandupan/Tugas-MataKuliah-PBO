<?php
require_once('Hewan.php');

class Katak extends Hewan
{
  public $kaki = 4;
  public $berdarah_digin = "tidak";

  public function loncat($loncat){
    return "loncat : " . $loncat . "<br><br>";
  }
}
?>