<?php
include 'koneksi.php';

$id = $_GET['id'];
$sql = "SELECT * FROM perpustakaan WHERE id='$id'";
$query = mysqli_query($connect,$sql);
$pel = mysqli_fetch_assoc($query);

if(mysqli_num_rows($query) < 1){
    die("data tidak ditemukan");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data</title>
</head>
<body>
    <form action="edit.php" method="post">
        <h3>edit data siswa</h3>
        <p><label for="">id : <input value="<?php echo $pel['id']?>" required="required" name="id"></label></p>
        <p><label for="">nama peminjam : <input value="<?php echo $pel['nama_peminjam']?>" required="required" name="nama_peminjam"></label></p>
        <p><label for="">judul buku : <input type="text" name="judul_buku" value="<?php echo $pel['judul_buku']?>"></label></p>
        <p><label for="">nomor buku : <input value="<?php echo $pel['nomor_buku']?>" type="number" name="nomor_buku"></label></p>
        <p><label for="">kelas : <input value="<?php echo $pel['kelas']?>" type="number" name="kelas"></label></p>
        <p><label for="">nisn : <input value="<?php echo $pel['nisn']?>" type="number" name="nisn"></label></p>
        <p><label for="">alamat : <textarea  type="text" name="alamat"><?php echo $pel['alamat']?></textarea></label></p>
        <p><label for="">tanggal peminjam : <input value="<?php echo $pel['tanggal_peminjam']?>" type="text" name="tanggal_peminjam"></label></p>
        <p><label for="">tanggal pengembalian : <input value="<?php echo $pel['tanggal_pengembalian']?>" type="text" name="tanggal_pengembalian"></label></p>
        <input type="submit" name="simpan" value="simpan">
    </form>

    
</body>
</html>