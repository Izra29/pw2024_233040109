<?php
// 1. membuat array
$hari = array("Senin", "Selasa", "Rabu");
$bulan = ["Januari", "Februari", "Maret"];
$mahasiswa = ["Nauval", 3.98, false];
// 2. cara cetak array
// var_dump() atau print_r()
var_dump($hari);
echo "<br>";
print_r($bulan);
// 3. memanipulasi array
// menambah isi array di akhir array: [] atau array_push()
$hari[] = "Kamis";
$hari[] = "Jumat";
print_r($hari);
echo "<br>";
array_push($bulan, "April", "Mei");
print_r($bulan);
echo "<br>";

//di awal array: array_unshift()
array_unshift($mahasiswa, "233040109");
print_r($mahasiswa);

echo "<hr>";

//menghapus isi array
//diakhir: array_pop()
//diawal: array_shift()

array_pop($hari);
print_r($hari);

echo "<br>";
array_shift($bulan);
print_r($bulan);





