<?php
require_once('Hewan.php');

class Kera extends Hewan
{
  public $kaki = 2;
  public $berdarah_digin = "tidak";

  public function teriak($teriak){
    return "teriak : " . $teriak . " <br>";
  }
}
?>