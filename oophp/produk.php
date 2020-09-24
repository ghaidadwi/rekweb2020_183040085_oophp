<?php 




class Produk {
	 public $judul = "judul", 
	 		$penulis = "penulis", 
	 		$penerbit = "penerbit",
	 		$harga = 0;

	public function getLabel(){
		return "$this->penulis, $this->penerbit";
	}

}

//intansiasi
// $produk1 = new Produk();
// $produk1 -> judul = "Naruto";
// var_dump($produk1);


// $produk2 = new Produk();
// //ini buat nimpah property
// $produk2 -> judul = "Uncharted";

// //ini buat nambah property karena nama yang beda
// $produk2 -> tambahProperty = "Hahah";
// var_dump($produk2);

//Untuk Komik
$produk3 = new Produk();
$produk3 -> judul = "Naruto";
$produk3 -> penulis = "Masashi Kishimoto";
$produk3 -> penerbit = "Shonen Jump";
$produk3 -> harga = 30000;
var_dump($produk3);

//ini cara manual
echo "<br>";
echo "Komik : $produk3->penulis, $produk3->penerbit";
echo "<br>";
//

//Untuk Game
//ini cara cepet di panggil dari Methodnya
$produk4 = new Produk();
$produk4 -> judul = "Uncharted";
$produk4 -> penulis = "Neil Druckman";
$produk4 -> penerbit = "Sony Computer";
$produk4 -> harga = 250000;
echo "Komik : " . $produk3 ->getLabel();
echo "<br>";
echo "Game : " . $produk4 ->getLabel();
//