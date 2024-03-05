<?php
$binatang = ["🦒", "🐅", "🦁", "🐭"];
array_push($binatang, "😺");
$makanan = ["🍜", "🍚", "🍕", "🍟", "🥨"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan array</title>
</head>
<body>
    <H3>Daftar Binatang</H3>
    <ol>
        <?php for($i = 0; $i < count($binatang); $i++) { ?>
        <li><?php echo $binatang[$i]; ?></li>
        <?php } ?>
    </ol>

<H3>Daftar Makanan</H3>
<ul>
<?php for($i = 0; $i < count($makanan); $i++) { ?>
        <li><?php echo $makanan[$i]; ?></li>
        <?php } ?>
</ul>

<hr>

<h3>Daftar Binatang</h3>
<ol>
    <?php foreach ($binatang as $b) { ?>
    <li><?php echo $b; ?></li>
    <?php } ?>
</ol>
<!-- kurung kurawal buka bisa diganti dengan : dan kurung kurawal tutup diganti end....(diisi nama) -->
<!-- php echo bisa  diganti = -->
<hr>
<h3>Daftar Makanan</h3>
<ol>
    <?php foreach ($makanan as $m) : ?>
    <li><?= $m; ?></li>
    <?php endforeach ?>
</ol>

</body>
</html>