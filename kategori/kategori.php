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
        <!-- Header -->
        <div class="table-header">

            <div>
                <h4>Data Kategori</h4>
                <p>Kategori makanan yang tersedia</p>
            </div>

            
            <a href="tambah_kategori.php">
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
                            <th>Kategori Makanan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php 
                            $query = "SELECT * FROM kategori";

                            $result = mysqli_query($koneksi, $query);
                            $i = 1;

                            while($row = mysqli_fetch_assoc($result)){
                        ?>
                        <tr>
                            <td><?= $i++; ?></td>
                            <td><?= $row['kategori_makanan']; ?></td>
                            <td>
                                <a href="edit_kategori.php?id=<?= $row['id_kategori']; ?>">
                                    <button class="btn-action edit">
                                    <i class="fa-solid fa-pen-to-square"></i>
                                    </button>
                                </a>

                                <a href="hapus_kategori.php?id=<?= $row['id_kategori']; ?>" onclick="return confirm('Yakin ingin menghapus data ini?')">
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

