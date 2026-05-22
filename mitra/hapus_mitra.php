<?php 
require '../koneksi.php';

$id = $_GET['id'];

$cek = mysqli_query($koneksi, "SELECT * FROM toko_mitra WHERE id_mitra = '$id'");

if(mysqli_num_rows($cek) > 0){
    echo "<script>
            alert('Tidak bisa dihapus! Masih ada toko dengan mitra ini.');
            window.location='/tubes/mitra/mitra.php';
        </script>";
} else {
    mysqli_query($koneksi, "DELETE FROM mitra WHERE id_mitra = '$id'");
    echo "<script>
            alert('Data berhasil dihapus!');
            window.location='/tubes/mitra/mitra.php';
        </script>";
}
?>