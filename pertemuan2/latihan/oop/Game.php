<?php
require_once 'Produk.php';
require_once 'Komik.php';

class Game extends Produk {
    public $waktuMain;

    public function __construct($judul, $penulis, $penerbit, $harga, $waktuMain) {
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->waktuMain = $waktuMain;
    }

    public function getHarga() {
        return parent::getHarga();
    }

    public function getInfoProduk() {
        $infoParent = parent::getInfoProduk();
        return "Game : {$infoParent} ~ {$this->waktuMain} Jam";
    }
}

$produk2 = new Game("Uncharted", "Neil", "Sony", 250000, 50);
echo $produk2->getInfoProduk();
echo "<br/>";
?>
