<?php

// Interface untuk kendaraan yang bisa bergerak dan bersuara.
interface KendaraanInterface {
  public function bergerak();
  public function bersuara();
}

// Trait yang menambahkan metode untuk klakson.
trait KlaksonTrait {
  public function klakson() {
      return "Kendaraan {$this->jenis} sedang berbunyi klakson.";
  }
}

// Trait yang menambahkan metode untuk pedal.
trait PedalTrait {
  public function pedal() {
      return "Kendaraan {$this->jenis} sedang dipedal.";
  }
}

class Kendaraan implements KendaraanInterface
{
  protected $jenis;

  public function __construct($jenis)
  {
      $this->jenis = $jenis;
  }

  public function getJenis()
  {
      return $this->jenis;
  }

  public function bergerak()
  {
      return "Kendaraan {$this->jenis} sedang bergerak.";
  }

  public function bersuara()
  {
      return "Kendaraan {$this->jenis} sedang bersuara.";
  }
}

class Mobil extends Kendaraan
{
  use KlaksonTrait;

  public function bersuara()
  {
      return "Mobil {$this->getJenis()} sedang bersuara.";
  }
}

class SepedaMotor extends Kendaraan
{
  use KlaksonTrait;

  public function bunyiKnalpot()
  {
      return "Sepeda motor {$this->getJenis()} sedang membuat bunyi knalpot.";
  }
}

class Sepeda extends Kendaraan
{
  use PedalTrait;

  public function bersuara()
  {
      return "Sepeda {$this->getJenis()} sedang bersuara.";
  }
}

// Contoh penggunaan
$mobil = new Mobil("sedan");
echo $mobil->bergerak() . "<br>";
echo $mobil->klakson() . "<br>";
echo $mobil->bersuara() . "<br><br>";

$sepedaMotor = new SepedaMotor("moped");
echo $sepedaMotor->bergerak() . "<br>";
echo $sepedaMotor->klakson() . "<br>";
echo $sepedaMotor->bunyiKnalpot() . "<br><br>";

$sepeda = new Sepeda("gunung");
echo $sepeda->bergerak() . "<br>";
echo $sepeda->pedal() . "<br>";
echo $sepeda->bersuara() . "<br>";
