<?php 

//disimpan di luar kelas , global kalo di oop
// define('NAMA', 'Ghaida Dwi Febriyanti');
// echo NAMA;

// echo "<br>";

// //disimpan di dalam kelas kalo di oop
// const UMUR = 32;
// echo UMUR;



//Ini Const bisanya di dalam kelas 
// class Coba {
// 	const NAMA = 'Ghaida Dwi Febriyanti';
// }

// echo Coba::NAMA;

//Ini menampilkan baris yang nomor yg di sebelah
// echo __LINE__;


//Ini buat mengetahui di function apa
// function coba(){
// 	return __FUNCTION__;
// }
// echo coba();

class Coba{

	public $kelas = __CLASS__;
}

$obj = new Coba;
echo $obj->kelas;

 ?>