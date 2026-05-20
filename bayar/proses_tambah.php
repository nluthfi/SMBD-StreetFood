<?php

include '../koneksi.php';

$nama = $_POST['metode_pembayaran'];

$fileName = $_FILES['logo']['name'];
$tmpName  = $_FILES['logo']['tmp_name'];
$fileBaru = time() . '-' . $fileName;
$tujuan = "../img/logo/" . $fileBaru;

move_uploaded_file($tmpName, $tujuan);

$query = "
    INSERT INTO bayar VALUES (
        NULL,
        '$nama',
        '$fileBaru'
    )
";

$result = mysqli_query($koneksi, $query);

if($result){
    header("Location: bayar.php?success=tambah");
}else{
    header("Location: bayar.php?error=tambah");

}