<?php
include 'koneksi.php';

if (isset($_GET['id'])){
    $id = $_GET['id'];
    $sql = "DELETE FROM perpustakaan WHERE id ='$id'";
    $query = mysqli_query($connect, $sql);
   
    if ($query) {
       header('Location: tampilandatasiswa.php');
    }else{
       header('Location: hapus.php?status=gagal');
    }
}
 ?>