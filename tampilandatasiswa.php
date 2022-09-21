<?php
include 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>web perpustakaan</title>
    <style>
        <?php include 'style.css';?>
        
    </style>
</head>
<body>

<aside>
    <div class="sidebar">
        <h2>user name</h2>
        <img src="iconuser.png" alt="">
        <ul>
            <li></li>
            <li></li>
        </ul>
        <h3><a class="datasiswa" href="datasiswa.html">Data Siswa</a></h3>
        <h3><a class="databuku" href="">Data Buku</a></h3>
        
    </div>

</aside>
<div class="right">
    <h4><a href="datasiswa.html">{+} Tambah Baru</a></h4>
    <table border="1" class="table">
        <tr>
            <th>Id</th>
            <th>Nama Peminjam</th>
            <th>judul buku</th>
            <th>nomor buku</th>
            <th>kelas</th>
            <th>nisn</th>
            <th>alamat</th>
            <th>tanggal peminjam</th>
            <th>tanggal pengembalian</th>
            <th>action</th>
        </tr>
        <?php
        $sql = "SELECT * FROM perpustakaan";
        $query = mysqli_query($connect,$sql);
        while($pel = mysqli_fetch_array($query)){
            echo "
            <tr>
             <td>$pel[id]</td>
             <td>$pel[nama_peminjam]</td>
             <td>$pel[judul_buku]</td>
             <td>$pel[nomor_buku]</td>
             <td>$pel[kelas]</td>
             <td>$pel[nisn]</td>
             <td>$pel[alamat]</td>
             <td>$pel[tanggal_peminjam]</td>
             <td>$pel[tanggal_pengembalian]</td>
             <td>
                <a href='formedit.php?id=".$pel['id']."'>Edit</a>
                <a href='hapus.php?id=".$pel['id']."'>hapus</a>
            </td>
            </tr>"; 
        }
?>     
</div>   
</body>
</html>