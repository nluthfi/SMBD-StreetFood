<?php

include '../koneksi.php';

$nama = $_POST['nama_mitra'];

$fileName = $_FILES['logo']['name'];
$tmpName  = $_FILES['logo']['tmp_name'];

$fileBaru = time() . '-' . $fileName;
$tujuan = "../img/logo/" . $fileBaru;

move_uploaded_file($tmpName, $tujuan);

$query = "
    INSERT INTO mitra VALUES (
        NULL,
        '$nama',
        '$fileBaru'
    )
";

$result = mysqli_query($koneksi, $query);

if($result){
    header("Location: mitra.php?success=tambah");
}else{
    header("Location: mitra.php?error=tambah");

}