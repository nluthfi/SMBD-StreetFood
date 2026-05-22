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
                <h2>Tambah Metode Pembayaran</h2>
                <p>
                    Tambahkan metode pembayaran yang tersedia
                </p>
            </div>

            <!-- Form -->
            <form action="proses_tambah.php" method="POST" enctype="multipart/form-data">
                <!-- Input -->
                <div class="mb-3">
                    <label class="form-label">
                        Metode Pembayaran
                    </label>

                    <input type="text"
                        name="metode_pembayaran"
                        class="form-control"
                        placeholder="Masukkan jenis metode pembayaran"
                        required>
                </div>

                <div class="mb-3">
                    <label class="form-label">
                        Logo 
                    </label>

                    <input type="file"
                        name="logo"
                        class="form-control"
                        accept="image/*"
                        required>
                </div>

                <!-- Button -->
                <div class="form-action">
                    <button type="submit"
                            class="form-button primary">
                        <i class="fa-solid fa-floppy-disk"></i>
                        Simpan
                    </button>

                    <a href="bayar.php" class="form-button secondary text-decoration-none">
                        Kembali
                    </a>
                </div>
            </form>
        </div>
    </div>
</main>

<?php include '../layout/footer.php'; ?>