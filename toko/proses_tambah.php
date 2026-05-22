<?php
include '../koneksi.php';

$nama_toko = $_POST['nama_toko'];
$lokasi = $_POST['lokasi'];
$jam_buka = $_POST['jam_buka'];
$jam_tutup = $_POST['jam_tutup'];
$status = $_POST['status_halal'];
$no_telp = $_POST['no_telepon'];

$mitra = isset($_POST['mitra']) ? $_POST['mitra'] : [];
$metode = isset($_POST['metode']) ? $_POST['metode'] : [];

$nama_foto = $_FILES['foto_outlet']['name'];
$tmp_foto = $_FILES['foto_outlet']['tmp_name'];

move_uploaded_file(
    $tmp_foto,
    "../img/pict/" . $nama_foto
);

mysqli_query($koneksi, "
    INSERT INTO toko(
        nama_toko,
        foto_outlet,
        lokasi,
        jam_buka,
        jam_tutup,
        status_halal,
        no_telepon,
        rating
    )
    VALUES(
        '$nama_toko',
        '$nama_foto',
        '$lokasi',
        '$jam_buka',
        '$jam_tutup',
        '$status',
        '$no_telp',
        NULL
    )
");

$id_toko = mysqli_insert_id($koneksi);

foreach($mitra as $id_mitra){

    mysqli_query($koneksi, "
        INSERT INTO toko_mitra(
            id_toko,
            id_mitra
        )
        VALUES(
            '$id_toko',
            '$id_mitra'
        )
    ");

}

foreach($metode as $id_metode){

    mysqli_query($koneksi, "
        INSERT INTO metode_toko(
            id_toko,
            id_metode
        )
        VALUES(
            '$id_toko',
            '$id_metode'
        )
    ");

}

echo "
<script>
    alert('Data berhasil ditambahkan!');
    window.location='toko.php';
</script>
";
?>