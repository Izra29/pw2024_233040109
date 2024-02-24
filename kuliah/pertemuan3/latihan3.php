<?php
echo 'mulai <br>';
$nilai_awal = 5;
while($nilai_awal <= 100) {

    echo "hello World! $nilai_awal x <br>";
    $nilai_awal = $nilai_awal + 5;
}
echo "selesai<br>";

echo "<hr>";

echo "mulai <br>";
for($nilai_awal = 1; $nilai_awal <= 10; $nilai_awal +=1) {
    // +=1 / ++  (sama aja)
    echo "Hello World $nilai_awal x ! <br>";
    // $+i (bisa juga)
}
echo "selesai <br>";

echo "<hr>";

echo "mulai <br>";
for($nilai_awal = 10; $nilai_awal >= 1; $nilai_awal -=1) {
    // +=1 / ++  (sama aja)
    echo "Hello World $nilai_awal x ! <br>";
    // $+i (bisa juga)
}
echo "selesai <br>";