<?php

class DataBuku {
    // Property
    public $judul, $pengarang, $tahunTerbit, $penerbit;

    // Constructor
    public function __construct(
        $judul = "Judul buku belum tercantum", 
        $pengarang = "Pengarang belum tercantum", 
        $tahunTerbit = "Tahun terbit belum tercantum", 
        $penerbit = "Penerbit belum tercantum"
    ) {
        $this->judul = $judul;
        $this->pengarang = $pengarang;
        $this->tahunTerbit = $tahunTerbit;
        $this->penerbit = $penerbit;
    }

    // Method
    public function tampilInformasi() {
        return "Judul: {$this->judul}, Pengarang: {$this->pengarang}, Tahun Terbit: {$this->tahunTerbit}, Penerbit: {$this->penerbit}";
    }

}

// Object
$buku1 = new DataBuku("Harry Potter and the Philosopher's Stone", "J.K. Rowling", 1997, "Bloomsbury");
$buku2 = new DataBuku("To Kill a Mockingbird", "Harper Lee", 1960, "J. B. Lippincott & Co.");

// Menampilkan pada program utama
echo "Data Buku 1: " . $buku1->tampilInformasi();
echo "<br>";
echo "Data Buku 2: " . $buku2->tampilInformasi();

?>
