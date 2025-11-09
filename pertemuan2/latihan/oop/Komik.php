<?php
require_once 'Produk.php';

class Komik extends Produk {
    public $jmlHalaman;

    public function __construct($judul, $penulis, $penerbit, $harga, $jmlHalaman) {
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->jmlHalaman = $jmlHalaman;
    }

    public function getInfoProduk() {
        $str = "Komik : " . parent::getJudul() . " | " . parent::getLabel() . " | Rp. " . parent::getHarga() . " - {$this->jmlHalaman} Halaman.";
        return $str;
    }
}

$produk1 = new Komik('Naruto', 'Masashi Kishimoto', 'Shonen Jump', 3000, 100);
echo "<br/>";
$produk1->setJudul('Goku');
echo $produk1->getInfoProduk();
echo "<br/>";
echo $produk1->getJudul();
echo "<br/>";
?>