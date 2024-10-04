<?php
class Buku {
    public $judul, $pengarang, $tahunTerbit, $genre;

    function __construct($judul,$pengarang,$tahunTerbit,$genre){
        $this->judul = $judul;
        $this->pengarang = $pengarang;
        $this->tahunTerbit = $tahunTerbit;
        $this->genre = $genre;
    }
    function getDetailBuku(){
        return "Judul Buku ".$this->judul . " pengarang " . $this->pengarang . " tahun terbit : " . $this->tahunTerbit . " genre : " . $this->genre;
    }
}
class Perpustakaan {
    public $lokasi;
    public $daftarBuku;

    function __construct($lokasi, $daftarBuku = []){
        $this->lokasi = $lokasi;
        $this->daftarBuku = $daftarBuku;
    }

    public function tambahBuku(Buku $buku){
        $this->daftarBuku[] = $buku;
    }

    function getDaftarBuku(){
            foreach ($this->daftarBuku as $buku) {
                echo $buku->getDetailBuku() . "\n";
            }
    }
}

$buku1 = new Buku("Cantik Itu Luka", "Eka Kurniawan", 2016, "romance");
$buku2 = new Buku("Saman", "Ayu Utami", 2000, "romance");
$buku3 = new Buku("Bumi Manusia", "Pramoedya Ananta Toer", 1980, "romance");

$perpus = new Perpustakaan("pwt");
$perpus->tambahBuku($buku1);
$perpus->tambahBuku($buku2);
$perpus->tambahBuku($buku3);
$perpus->getDaftarBuku();