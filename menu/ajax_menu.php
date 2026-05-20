<?php
include '../koneksi.php';

$keyword = $_POST['keyword'] ?? '';

$query = mysqli_query($koneksi, "
    SELECT * FROM toko
    WHERE nama_toko LIKE '%$keyword%'
    ORDER BY nama_toko ASC
    LIMIT 20
");

echo '<option value="">-- Pilih Toko --</option>';

while($row = mysqli_fetch_assoc($query)){
    echo '<option value="'.$row['id_toko'].'">'
        .$row['nama_toko'].
    '</option>';
}
?>