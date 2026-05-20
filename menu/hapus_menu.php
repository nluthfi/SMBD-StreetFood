<?php
include '../koneksi.php';

$id = $_GET['id'];

$data = mysqli_fetch_assoc(mysqli_query($koneksi, "
    SELECT foto_menu FROM menu WHERE id_menu='$id'
"));

$folder = "../img/makanan/";
$foto = $data['foto_menu'];

if(!empty($foto)){
    if(file_exists($folder.$foto)){
        unlink($folder.$foto);
    }
}

mysqli_query($koneksi, "
    DELETE FROM menu WHERE id_menu='$id'
");

echo "<script>
alert('Menu berhasil dihapus!');
window.location='menu.php';
</script>";
?>