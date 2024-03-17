<?php
$mahasiswa = [
    [
        "nama" => "Nauval Azis", 
        "nrp" => "233040109", 
        "email" => "nauval.233040109@mail.unpas.ac.id",
        "jurusan" => "Teknik Informatika"
    ],
    [
        "nama" => "Izra", 
        "nrp" => "233040029", 
        "email" => "Izra.233040029@mail.unpas.ac.id",
        "jurusan" => "Teknik Informatika"
    ],
    [
        "nama" => "Abdul", 
        "nrp" => "233040001", 
        "email" => "Abdul.233040001@mail.unpas.ac.id",
        "jurusan" => "Teknik Mesin"
    ],
    [
        "nama" => "Ansyari Ramadhan", 
        "nrp" => "233040030", 
        "email" => "Ansyari.233040030@mail.unpas.ac.id",
        "jurusan" => "Sastra Jepang"
    ],
    [
        "nama" => "Rizki", 
        "nrp" => "233040002", 
        "email" => "Rizki.233040002@mail.unpas.ac.id",
        "jurusan" => "Teknik Pangan"
    ],
    [
        "nama" => "Satrio", 
        "nrp" => "233040005", 
        "email" => "Satrio.233040005@mail.unpas.ac.id",
        "jurusan" => "Teknik Informatika"
    ],
    [
        "nama" => "Saeful Bahri", 
        "nrp" => "233040010", 
        "email" => "Saeful.233040010@mail.unpas.ac.id",
        "jurusan" => "Teknik Informatika"
    ],
    [
        "nama" => "Arifin H", 
        "nrp" => "233040108", 
        "email" => "Arifin.233040108@mail.unpas.ac.id",
        "jurusan" => "Teknik Pangan"
    ],
    [
        "nama" => "Arya Wiradarma", 
        "nrp" => "233040100", 
        "email" => "Arya.233040100@mail.unpas.ac.id",
        "jurusan" => "Teknik Informatika"
    ],
    [
        "nama" => "Auliya Ghevyra", 
        "nrp" => "233040005", 
        "email" => "Auliya.233040005@mail.unpas.ac.id",
        "jurusan" => "Ilmu Hadits"
    ]
]
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
    <li>Nama : <?= $mhs["nama"]; ?></li>
    <li>NRP :<?= $mhs["nrp"]; ?></li>
    <li>Email :<?= $mhs["email"]; ?></li>
    <li>Jurusan :<?= $mhs["jurusan"]; ?></li>
</ul>
<?php endforeach; ?>

</body>
</html>