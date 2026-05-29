<?php
include '../koneksi.php';

if(isset($_POST['nama_menu'])){

    // Menggunakan mysqli_real_escape_string agar aman dari error tanda petik (')
    $nama      = mysqli_real_escape_string($koneksi, $_POST['nama_menu']);
    $deskripsi = mysqli_real_escape_string($koneksi, $_POST['deskripsi']);
    $harga     = $_POST['harga'];
    $rasa      = mysqli_real_escape_string($koneksi, $_POST['rasa']);
    $kategori  = $_POST['id_kategori'];
    $toko      = $_POST['id_toko'];

    $foto = $_FILES['foto_menu']['name'];
    $tmp  = $_FILES['foto_menu']['tmp_name'];

    $folder = "../img/makanan/";
    $namaFileBaru = time() . "_" . $foto;
    $path = $folder . $namaFileBaru;

    if(move_uploaded_file($tmp, $path)){

        $query = "INSERT INTO menu 
                    (nama_menu, foto_menu, deskripsi, harga, rasa, id_kategori, id_toko)
                    VALUES
                    ('$nama', '$namaFileBaru', '$deskripsi', '$harga', '$rasa', '$kategori', '$toko')";
        
        $simpan = mysqli_query($koneksi, $query);

        if($simpan) {
            echo "<script>
                alert('Menu berhasil ditambahkan!');
                window.location='menu.php';
            </script>";
        } else {
            // Membantu tracking jika ada error pada database
            echo "Gagal menyimpan ke database: " . mysqli_error($koneksi);
        }

    } else {
        echo "<script>
            alert('Upload foto gagal! Periksa apakah folder ../img/makanan/ sudah ada.');
            window.history.back();
        </script>";
    }
}
?>
