<?php 
include '../layout/header.php';
include '../layout/sidebar.php';
include '../koneksi.php';

$mitra = mysqli_query($koneksi, "SELECT * FROM mitra");
$metode = mysqli_query($koneksi, "SELECT * FROM bayar");
?>

<main class="main-content">
    <div class="form-page">
        <div class="form-card">
            <div class="form-title">
                <h2>Tambah Toko</h2>
                <p>
                    Tambahkan data street food beserta mitra dan metode pembayaran
                </p>
            </div>

            <form action="proses_tambah.php" method="POST" enctype="multipart/form-data">
                <div class="mb-3">
                    <label class="form-label">
                        Nama Toko
                    </label>
                    <input type="text" name="nama_toko" class="form-control"
                    placeholder="Masukkan nama toko" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">
                        Foto Outlet
                    </label>
                    <input type="file" name="foto_outlet" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">
                        Nomor Telepon
                    </label>
                    <input type="number" name="no_telepon" class="form-control"
                    placeholder="Masukkan nomor telepon" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">
                        Lokasi
                    </label>
                    <textarea name="lokasi" class="form-control" rows="3"
                    placeholder="Masukkan lokasi toko"required></textarea>
                </div>

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label class="form-label">
                            Jam Buka
                        </label>
                        <input type="time" name="jam_buka" class="form-control" required>

                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="form-label">
                            Jam Tutup
                        </label>
                        <input type="time" name="jam_tutup" class="form-control" required>
                    </div>
                </div>

                <div class="mb-4">
                    <label class="form-label">
                        Status Halal
                    </label>

                    <select name="status_halal" class="form-select" required>

                        <option value="">
                            -- Pilih Status --
                        </option>
                        <option value="tersertifikasi">
                            Tersertifikasi
                        </option>
                        <option value="belum tersertifikasi">
                            Belum Tersertifikasi
                        </option>
                        <option value="non halal">
                            Non Halal
                        </option>

                    </select>
                </div>

                <div class="mb-4">
                    <label class="section-title">
                        Pilih Mitra :
                    </label>

                    <div class="checkbox-container">
                        <?php while($m = mysqli_fetch_assoc($mitra)){ ?>
                            <label class="checkbox-card">
                                <input type="checkbox" name="mitra[]" value="<?= $m['id_mitra']; ?>">
                                <span>
                                    <?= $m['nama_mitra']; ?>
                                </span>
                            </label>
                        <?php } ?>
                    </div>
                </div>

                <div class="mb-4">
                    <label class="section-title">
                        Pilih Metode Pembayaran :
                    </label>

                    <div class="checkbox-container">
                        <?php while($b = mysqli_fetch_assoc($metode)){ ?>
                            <label class="checkbox-card">
                                <input type="checkbox" name="metode[]" value="<?= $b['id_metode']; ?>">
                                <span>
                                    <?= $b['metode_pembayaran']; ?>
                                </span>
                            </label>
                        <?php } ?>
                    </div>
                </div>

                <div class="form-action">
                    <button type="submit"
                            class="form-button primary">
                        <i class="fa-solid fa-floppy-disk"></i>
                        Simpan
                    </button>

                    <a href="toko.php" class="form-button secondary text-decoration-none">
                        Kembali
                    </a>
                </div>
            </form>
        </div>
    </div>
</main>

<?php include '../layout/footer.php'; ?>