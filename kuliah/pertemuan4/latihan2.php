<?php
// menghitung total volume 2 kubus
// sisi kubus a=9 b=4
// $sisi_a = 9;
// $sisi_b = 4;
// $volume_a = $sisi_a * $sisi_a * $sisi_a;
// $volume_b = $sisi_b * $sisi_b * $sisi_b;
// $total = $volume_a + $volume_b;
// echo "total volume kubus a & b = $total"; -->


// function Luas_dua_kubus ($a, $b){
// // sebaiknya menggunakan return
// }

// membuat fungsi
function total_volume_dua_kubus($a, $b) {
    $volume_a = $a * $a *$a;
    $volume_b = $b * $b *$b;
    $total = $volume_a + $volume_b;
    return $total;
}

echo "total volume kubus a & b = " . total_volume_dua_kubus(9, 4);
echo "<br>";
echo "total volume kubus c & d = " . total_volume_dua_kubus(10, 15);
