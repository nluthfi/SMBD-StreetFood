<?php include '../layout/header.php'; ?>
<?php include '../layout/sidebar.php'; ?>
<?php include '../koneksi.php';?>


<!-- Main Content -->
<main class="main-content">
    <!-- Header -->
    <div class="mb-4">
        <h2 class="fw-bold">STREET FOOD</h2>
    </div>

    <div class="table-container">
        <div class="table-header">
            <div>
                <h4>Data Metode Pembayaran</h4>
                <p>Metode pembayaran yang tersedia</p>
            </div>

            <a href="tambah_bayar.php">
            <button class="btn btn-primary">
                    <i class="fa-solid fa-plus"></i>
                    Tambah Data
            </button>
            </a>

        </div>

        <!-- Table -->
        <div class="table-responsive">
            <div class="table-scroll">
                <table class="custom-table">

                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Metode Pembayaran</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php 
                            $query = "SELECT * FROM bayar";
                            $result = mysqli_query($koneksi, $query);
                            $i = 1;
                            while($row = mysqli_fetch_assoc($result)){
                        ?>
                        <tr>
                            <td><?= $i++; ?></td>
                            <td><?= $row['metode_pembayaran']; ?></td>
                            <td>
                                <a href="hapus_bayar.php?id=<?= $row['id_metode']; ?>" onclick="return confirm('Yakin ingin menghapus data ini?')">
                                    <button class="btn-action delete">
                                        <i class="fa-solid fa-trash"></i>
                                    </button>
                                </a>

                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>

                </table>

            </div>
        </div>

</div>
</main>

<?php include '../layout/footer.php'; ?>

