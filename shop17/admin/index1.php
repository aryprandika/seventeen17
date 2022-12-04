<?php
    error_reporting(0);
    require "session.php";
    require "../koneksi.php";

    $queryKategori = mysqli_query($con, "SELECT * FROM kategori");
    $jumlahKategori = mysqli_num_rows($queryKategori);

    $queryProduk = mysqli_query($con, "SELECT * FROM produk");
    $jumlahProduk = mysqli_num_rows($queryProduk);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seventeen17</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../fontawesome/css/fontawesome.min.css">
</head>

<style>

    .summary-kategori{
        background-color: #2596be;
        border-radius: 10px;
    }
    
    .summary-produk{
        background-color: darkslateblue;
        border-radius: 15px;
    }

    .no-decoration{
        text-decoration: none;
    }

    body{
        background-color: #235894;
    }
    h2{
        color: azure;
    }

</style>

<body>
    <div class="container mt-5">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page">
            </li>
        </ol>
</nav>
    <main role="main" class="container">
        <div class="starter-template">
            <h1>Selamat Datang</h1>
            <p class="lead text-white">Selamat Berbelanja Di Seventeen17</p>
        </div>
    </main>

    <div class="container mt-5 text-center">
        <div class="row">
            <div class="col-lg-4 col-md-6 col-12 mb-3">
                <div class="summary-kategori p-5">
                    <div class="row">
                        <div class="col-6">
                            <i class="fa fa-address-card fa-5x text-white-50"></i>
                        </div>
                        <div class="col-6 text-white">
                            <h3 class="fs-2">Owner</h3></h3>
                            <p><a href="login.php" class="text-white no-decoration">Kunjungi</a></p>
                    </div>
                </div>
            </div>
         </div>
    
            <div class="col-lg-4 col-md-6 col-12 mb-3">
            <div class="summary-produk p-5 ">
                <div class="row">
                    <div class="col-6">
                        <i class="fa fa-shopping-cart fa-5x text-white-50"></i>
                    </div>
                    <div class="col-6 text-white">
                        <h3 class="fs-2">Shop</h3></h3>
                        <p><a href="../login1.php" class="text-white no-decoration">Kunjungi</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    <br>
    <br>
    <br>

    <script src="../bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../fontawesome/js/all.min.js"></script>
</body>
</html>