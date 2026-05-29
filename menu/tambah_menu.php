<?php 
include '../layout/header.php';
include '../layout/sidebar.php';
include '../koneksi.php';

$kategori = mysqli_query($koneksi, "SELECT * FROM kategori");
$toko = mysqli_query($koneksi, "SELECT * FROM toko");
?>

<main class="main-content">

<div class="form-page">
    <div class="form-card">
        <div class="form-title">
            <h2>Tambah Menu</h2>
            <p>Tambahkan menu street food baru</p>
        </div>

        <form action="proses_tambah.php" method="POST" enctype="multipart/form-data">

            <!-- NAMA MENU -->
            <div class="mb-3">
                <label class="form-label">Nama Menu</label>
                <input type="text" name="nama_menu" class="form-control" required>
            </div>

            <!-- FOTO -->
            <div class="mb-3">
                <label class="form-label">Foto Menu</label>
                <input type="file" name="foto_menu" class="form-control" required>
            </div>

            <!-- DESKRIPSI -->
            <div class="mb-3">
                <label class="form-label">Deskripsi</label>
                <textarea name="deskripsi" class="form-control" rows="3" required></textarea>
            </div>

            <!-- HARGA -->
            <div class="mb-3">
                <label class="form-label">Harga</label>
                <input type="number" name="harga" class="form-control" required>
            </div>

            <!-- RASA -->
            <div class="mb-3">
                <label class="form-label">Rasa</label>
                <input type="text" name="rasa" class="form-control" required>
            </div>

            <!-- KATEGORI -->
            <div class="mb-3">
                <label class="form-label">Kategori</label>
                <select name="id_kategori" class="form-select" required>

                    <option value="">-- Pilih Kategori --</option>

                    <?php while($k = mysqli_fetch_assoc($kategori)) { ?>

                        <option value="<?= $k['id_kategori']; ?>">
                            <?= $k['kategori_makanan']; ?>
                        </option>

                    <?php } ?>

                </select>
            </div>

            <!-- TOKO -->
            <div class="mb-3">
                <label class="form-label">Toko</label>

                <select name="id_toko" class="form-select" required>

                    <option value="">-- Pilih Toko --</option>

                    <?php while($t = mysqli_fetch_assoc($toko)) { ?>

                        <option value="<?= $t['id_toko']; ?>">
                            <?= $t['nama_toko']; ?>
                        </option>

                    <?php } ?>

                </select>
            </div>

            <!-- BUTTON -->
            <div class="form-action">

                <button type="submit" class="form-button primary">
                    <i class="fa-solid fa-floppy-disk"></i>
                    Simpan
                </button>

                <a href="menu.php" class="form-button secondary text-decoration-none">
                    Kembali
                </a>

            </div>

        </form>
    </div>
</div>

</main>

<?php include '../layout/footer.php'; ?>
