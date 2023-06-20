<?php
    require 'controller.php';

    $id = $_GET ["id"];
    $data = query("SELECT * FROM tb_donasi WHERE id = $id")[0];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lihat Data</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <style>
        body{
        }
        h1{
            text-align: center;
            color: #2c3333;
            background-color: #F8F6F4;
            border-radius: 5px; 
            padding: 30px;
            margin: 25px 70px;
        }
        .card-body{
            text-align: center;
        }
        .card{
            margin: 10px 400px;
        }
        nav{
            display: flex;
        }
        .nav-item{
            margin: 10px;
            float: right;
        }
        .logo{
            float: left;
        }
        .container{
            list-style: none;
        }
</style>
</head>
<body>
    <header>
        <nav>
            <ul class="container">
                <li class="logo">
                    <a class="navbar-brand" href="#">
                    <img src="img/logo wikrama.png" alt="Logo" width="90" height="90" class="d-inline-block align-text-top">
                    SMK Wikrama Bogor
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php">Cara Wakaf</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php">Data Wakaf</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php">Gallery</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php">Web Wikrama</a>
                </li>
            </ul>
        </nav>
    </header>

    <h1>Data Donatur</h1>
    <div class="card" style="width: 30rem;">
        <div class="card-body">
            <h5 class="card-title"><?= $data["nama"] ?></h5>
            <p class="card-text"><?= $data["email"] ?></p>
        </div>
        <ul class="list-group list-group-flush" div="text">
            <li class="list-group-item">Nomer Telepon        :<?= $data["notlp"] ?></li>
            <li class="list-group-item">Alamat               :<?= $data["alamat"] ?></li>
            <li class="list-group-item">Bentuk yang di pilih :<?= $data["kategori"] ?></li>
            <li class="list-group-item">Nominal              : <?= $data["nominal"] ?></li>
            <li class="list-group-item">Metode Pembayaran    : <?= $data["metode"] ?></li>
         </ul>
        <div class="card-body">
            <a class="btn btn-outline-primary" href="index.php" role="button">Kembali</a>
        </div>
    </div>
    
</body>
</html>