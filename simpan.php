<?php
include 'koneksi.php';

if(isset($_POST['simpan'])){
    $id = $_POST['id'];
    $nama_peminjam =$_POST['nama_peminjam'];
    $judul_buku =$_POST['judul_buku'];
    $nomor_buku =$_POST['nomor_buku'];
    $kelas =$_POST['kelas'];
    $nisn =$_POST['nisn'];
    $alamat =$_POST['alamat'];
    $tanggal_peminjam =$_POST['tanggal_peminjam'];
    $tanggal_pengembalian =$_POST['tanggal_pengembalian'];

    $sql = "INSERT INTO perpustakaan (nama_peminjam,judul_buku,nomor_buku,kelas,nisn,alamat,tanggal_peminjam,tanggal_pengembalian )VALUES('$nama_peminjam','$judul_buku','$nomor_buku','$kelas','$nisn','$alamat','$tanggal_peminjam','$tanggal_pengembalian')";

    $query = mysqli_query($connect, $sql);

    // var_dump($query);
    // die;

    if($query){
        header('Location: tampilandatasiswa.php'); 
    }else{
        header('Location: simpan.php?status=gagal');
    }
}

