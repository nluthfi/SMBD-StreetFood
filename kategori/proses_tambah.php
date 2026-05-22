<?php

include '../koneksi.php';

$kategori = $_POST['kategori_makanan'];

$query = "INSERT INTO kategori VALUES (
    NULL,
    '$kategori'
)";

$result = mysqli_query($koneksi, $query);

if($result){
    header("Location: kategori.php?success=tambah");
}else{
    header("Location: kategori.php?error=gagal");
}