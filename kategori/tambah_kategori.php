<?php 
include '../layout/header.php';
include '../layout/sidebar.php';
include '../koneksi.php';
?>

<main class="main-content">
    <div class="form-page">
        <div class="form-card">
            <!-- Title -->
            <div class="form-title">
                <h2>Tambah Kategori</h2>
                <p>
                    Tambahkan kategori makanan baru
                </p>
            </div>

            <!-- Form -->
            <form action="proses_tambah.php" method="POST">
                <!-- Input -->
                <div class="mb-3">
                    <label class="form-label">
                        Nama Kategori
                    </label>
                    <input type="text" name="kategori_makanan" class="form-control"
                    placeholder="Masukkan kategori makanan" required>
                </div>
                <!-- Button -->
                <div class="form-action">
                    <button type="submit" class="form-button primary">
                        <i class="fa-solid fa-floppy-disk"></i>
                        Simpan
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