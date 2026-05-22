<?php 
require '../koneksi.php';

$id = $_GET['id'];

$cek = mysqli_query($koneksi, "SELECT * FROM menu WHERE id_kategori = '$id'");

if(mysqli_num_rows($cek) > 0){
    echo "<script>
            alert('Tidak bisa dihapus! Masih ada menu dengan kategori ini.');
            window.location='/tubes/kategori/kategori.php';
        </script>";
} else {
    mysqli_query($koneksi, "DELETE FROM kategori WHERE id_kategori = '$id'");
    echo "<script>
            alert('Data berhasil dihapus!');
            window.location='/tubes/kategori/kategori.php';
        </script>";
}
?>