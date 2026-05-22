<?php

include '../koneksi.php';

if(isset($_POST['simpan'])) {

    $id = $_POST['id_kategori'];
    $kategori = $_POST['kategori_makanan'];

    $query = "
        UPDATE kategori
        SET kategori_makanan = '$kategori'
        WHERE id_kategori = '$id'
    ";

    if(mysqli_query($koneksi, $query)) {
        header("Location: kategori.php?success=edit");
    } else {
        header("Location: kategori.php?error=edit");
    }

}
?>