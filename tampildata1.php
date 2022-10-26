<?php
require 'koneksi.php';

$dik = query ("SELECT*FROM siswa");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>slibaww</title>
</head>
<body>
    <h1>DATA SISWA</h1>
    <table border="1">
        <thead>
            <th>no</th>
            <th>Nama</th>
            <th>Kelas</th>
            <th>Jurusan</th>
    <?php $y = 1;?>
    <?php foreach ($dik as $ka) :?>
    </thead>
    <tbody>
        <tr>
            <td><?= $y;?></td>
            <td><?php echo $ka ['nama'];?></td>
            <td><?php echo $ka ['kelas'];?></td>
            <td><?php echo $ka ['jurusan'];?></td>
    </tr>
    <?php $y++?>
<?php endforeach;?>
    </tbody>
</body>
</html>