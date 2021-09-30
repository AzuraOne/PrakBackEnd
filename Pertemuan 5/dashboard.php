<?php
session_start();
$username = $_SESSION['username'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!------ Include the above in your HEAD tag ---------->

</head>

<body>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <a class="navbar-brand" href="#">Dashboard</a>

                </ul>
                <div class="d-flex">
                    <h3 class="text-secondary">Selamat datang  <?= $username ?></h3>
                    <a href="logout.php" style="margin-left: 20px;" class="btn btn-danger">Logout?</a>

                </div>
            </div>
        </div>
    </nav>

    <div style="margin-top: 20px;" class="d-flex justify-content-center">
        <div class="container overflow-hidden">
            <div class="row gy-5">
                <div class="col-6">
                    <div class="p-3 border bg-light">
                        <div class="card" style="width: 18rem;">
                            <img src="img/receipt.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Pemasukkan</h5>
                                <p class="card-text">Masukkan laporan keuangan anda disini untuk mengkalkulasi</p>
                                <a href="inputpemasukkan.php" class="btn btn-primary">klik disini</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="p-3 border bg-light">
                        <div class="card" style="width: 18rem;">
                            <img src="img/shopping-cart.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Laporan Keuangan</h5>
                                <p class="card-text">Berisi laporan Keuangan yang membuatmu lebih tahu keuangan</p>
                                <a href="laporankeuangan.php" class="btn btn-primary">Klik Disini</a>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-6">
                    <div class="p-3 border bg-light">
                        <div class="card" style="width: 18rem;">
                            <img src="img/time-left.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Rencana</h5>
                                <p class="card-text">Rencanakan keuanganmu yang ingin kamu pakai di masa depan</p>
                                <a href="rencana.php" class="btn btn-primary">Klik disini</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="p-3 border bg-light">
                        <div class="card" style="width: 18rem;">
                            <img src="img/receipt.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Statistik Keuangan</h5>
                            </div>

                            <p class="card-text">Statistik keuanganmu untuk mengetahui pengeluaran dan pemasukkan</p>
                            <a href="statistikkeuangan.php" class="btn btn-primary">klik disini</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</html>