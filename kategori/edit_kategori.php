<?php

include '../koneksi.php';
include '../layout/header.php';
include '../layout/sidebar.php';

$id = $_GET['id'];

$query = mysqli_query(
    $koneksi,
    "SELECT * FROM kategori WHERE id_kategori = '$id'"
);

$data = mysqli_fetch_assoc($query);

?>

<main class="main-content">
    <div class="form-page">
        <div class="form-card">
            <!-- Title -->
            <div class="form-title">
                <h2>Edit Kategori</h2>
                <p>
                    Ubah data kategori makanan
                </p>
            </div>

            <!-- Form -->
            <form action="proses_edit.php" method="POST">
                <!-- Hidden ID -->
                <input type="hidden"
                    name="id_kategori"
                    value="<?= $data['id_kategori']; ?>">

                <!-- Nama kategori -->
                <div class="mb-3">

                    <label class="form-label">
                        Nama Kategori
                    </label>

                    <input type="text"
                        name="kategori_makanan"
                        class="form-control"
                        value="<?= $data['kategori_makanan']; ?>"
                        required>
                </div>

                <!-- Button -->
                <div class="form-action">
                    <button type="submit" class="form-button primary" name="simpan">
                        <i class="fa-solid fa-floppy-disk"></i>
                        Update
                    </button>

                    <a href="kategori.php" class="form-button secondary text-decoration-none">
                        Kembali
                    </a>
                </div>
            </form>
        </div>
    </div>
</main>

<?php include '../layout/footer.php'; ?>