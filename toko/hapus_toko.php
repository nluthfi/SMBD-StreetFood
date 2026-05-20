<?php
include '../koneksi.php';

$id = $_GET['id'];

mysqli_query($koneksi, "
    DELETE FROM toko_mitra 
    WHERE id_toko = '$id'
");

mysqli_query($koneksi, "
    DELETE FROM metode_toko 
    WHERE id_toko = '$id'
");

mysqli_query($koneksi, "
    DELETE FROM toko 
    WHERE id_toko = '$id'
");

echo "<script>
    alert('Data toko berhasil dihapus!');
    window.location='toko.php';
</script>";
?>