<?php 
require '../koneksi.php';

$id = $_GET['id'];

$cek = mysqli_query($koneksi, "SELECT * FROM metode_toko WHERE id_metode = '$id'");

if(mysqli_num_rows($cek) > 0){
    echo "<script>
            alert('Tidak bisa dihapus! Masih ada toko yang menggunakan metode pembayaran ini.');
            window.location='/tubes/bayar/bayar.php';
        </script>";
} else {
    mysqli_query($koneksi, "DELETE FROM bayar WHERE id_metode = '$id'");
    echo "<script>
            alert('Data berhasil dihapus!');
            window.location='/tubes/bayar/bayar.php';
        </script>";
}
?>