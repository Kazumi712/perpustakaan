<?php
include 'koneksi.php';

if (isset($_POST['simpan'])) {
    $id = $_POST['id'];
    $nama_peminjam = $_POST ['nama_peminjam'];
    $judul_buku =$_POST ['judul_buku'];
    $nomor_buku =$_POST ['nomor_buku'];
    $kelas =$_POST ['kelas'];
    $nisn =$_POST ['nisn'];
    $alamat =$_POST ['alamat'];
    $tanggal_peminjam =$_POST ['tanggal_peminjam'];
    $tanggal_pengembalian =$_POST ['tanggal_pengembalian'];
    // var_dump($)

    $sql = "UPDATE  perpustakaan SET nama_peminjam='$nama_peminjam', judul_buku='$judul_buku', nomor_buku='$nomor_buku', kelas='$kelas', nisn='$nisn', alamat='$alamat', tanggal_peminjam='$tanggal_peminjam', tanggal_pengembalian='$tanggal_pengembalian' WHERE id='$id'";

    $query = mysqli_query($connect, $sql);

    if($query){
        header('Location: tampilandatasiswa.php');
    }
    else{
        header('Location: simpan.php?satatus=gagal');
    }
}
    ?>
    