<?php
require 'koneksi.php';

$desert = query("SELECT * FROM desert");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Daftar Data Testimoni Oreo Bolu Softcake di Shoope</h1>
    <table border="1" cellpadding="10" cellspasing="10">
        <tr>
            <th>No.</th>
            <th>Nama</th>
            <th>Tanggal</th>
            <th>Rasa</th>
            <th>Kualitas</th>
            <th>Screenshot</th>
            <th>Aksi</th>
        </tr>
        <?php $i =1; ?>
        <?php foreach ($desert as $dst): ?>
        <tr>
            <td><?=$i;?></td>
            <td><?= $dst["Nama"];?></td>
            <td><?= $dst["Tanggal"];?></td>
            <td><?= $dst["Rasa"];?></td>
            <td><?= $dst["Kualitas"];?></td>
            <td><img src="img/<?=$dst["Screenshot"]?>" alt="" width="350"</td>
            <td>
                <a href="">Ubah</a>
                <a href="">Hapus</a>
            </td>
        </tr>
        <?php $i++; ?>
        <?php endforeach; ?>
    </table>        
</body>
</html>
