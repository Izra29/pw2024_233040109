<?php
// $mahasiswa = [
//     // ["Nauval Azis", "233040109", "nauval.233040109@mail.unpas.ac.id", "Teknik Informatika"],
//     // ["Izra", "233040029", "Izra.233040029@mail.unpas.ac.id", "Teknik Informatika"]
// ];

// array associative
// definisinya sama array numerik, kecuali
// key nya string yang kita buat sendiri
$mahasiswa = [
    [
"nama" => "Nauval Azis", 
"nrp" => "233040109", 
"email" => "nauval.233040109@mail.unpas.ac.id",
"jurusan" => "Teknik Informatika",
// "gambar" => "nama file gambar"
    ],
    [
        "nama" => "Izra", 
        "nrp" => "233040029", 
        "email" => "Izra.233040029@mail.unpas.ac.id",
        "jurusan" => "Teknik Informatika",
        // "gambar" => "nama file gambar"
            ]
];

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>
    
<H1>Daftar Mahasiswa</H1>

<?php foreach( $mahasiswa as $mhs ) : ?>
<ul>
<!-- //contoh tambahan gambar -->
    <!-- <li>
        <img src="img/<?= $mhs["gambar"]; ?>">
    </li> --> 
    <li>Nama : <?= $mhs["nama"]; ?></li>
    <li>NRP :<?= $mhs["nrp"]; ?></li>
    <li>Email :<?= $mhs["email"]; ?></li>
    <li>Jurusan :<?= $mhs["jurusan"]; ?></li>
</ul>
<?php endforeach; ?>

</body>
</html>