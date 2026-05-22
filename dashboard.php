<?php include 'layout/header.php'; ?>
<?php include 'layout/sidebar.php'; ?>

<!-- Main Content -->
<main class="main-content">

    <!-- Header -->
    <div class="mb-4">
        <h2 class="fw-bold">Dashboard</h2>

        <p class="text-muted">
            Selamat datang di dashboard admin Street Food.
        </p>
    </div>

    <!-- Statistik -->
    <div class="row g-4">

        <!-- Card -->
        <div class="col-md-3 col-sm-6">
            <div class="dashboard-card">

                <div>
                    <h6>Total Mitra</h6>
                    <h3>25</h3>
                </div>

                <div class="card-icon bg-primary">
                    <i class="fa-solid fa-building-columns"></i>
                </div>

            </div>
        </div>

        <!-- Card -->
        <div class="col-md-3 col-sm-6">
            <div class="dashboard-card">

                <div>
                    <h6>Total Toko</h6>
                    <h3>40</h3>
                </div>

                <div class="card-icon bg-success">
                    <i class="fa-solid fa-store"></i>
                </div>

            </div>
        </div>

        <!-- Card -->
        <div class="col-md-3 col-sm-6">
            <div class="dashboard-card">

                <div>
                    <h6>Total Menu</h6>
                    <h3>120</h3>
                </div>

                <div class="card-icon bg-warning">
                    <i class="fa-solid fa-utensils"></i>
                </div>

            </div>
        </div>

        <!-- Card -->
        <div class="col-md-3 col-sm-6">
            <div class="dashboard-card">

                <div>
                    <h6>Pembayaran</h6>
                    <h3>5</h3>
                </div>

                <div class="card-icon bg-danger">
                    <i class="fa-solid fa-money-bill-wave"></i>
                </div>

            </div>
        </div>

    </div>

</main>

<?php include 'layout/footer.php'; ?>