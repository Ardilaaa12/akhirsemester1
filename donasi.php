<?php

require 'controller.php';
$connect = mysqli_connect("localhost", "root", "", "db_masjid");

if (isset($_POST["submit"])) {


    if (tambah($_POST) > 0) {
        echo "<script> alert('data berhasil dimasukan')
                       document.location.href = 'index.php'
                       </script>";
    } else {
        echo "<script>
        alert('data tidak berhasil dimasukan')
        document.location.href = 'index.php'
        </script>";
    };
};
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Shodaqoh</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <style>
        h1{
            text-align: center;
            color: #2c3333;
            padding: 30px;
            font-weight: bold;
        }
        p{
            text-align: center;
            color:#F24C3D ;
        }
        h3{
            text-align: center;
            font-weight: bold;
        }
        form{
            margin: 40px 90px;
        }
        nav{
            display: flex;
            margin-top: 15px;
            margin-bottom: 15px;
            list-style: none;
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
        .content1{
            background-color: #F8F6F4;
            margin: 90px;
            padding: 5px;
            border-radius: 20px;
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

    <div class="content1">
        <h1> FORM DATA DIRI</h1>
        <p>Warning! <br>
            Masukan Data sesuai dengan teliti dan benar.</p>
        <h3>Silahkan Masukan data diri</h3>
    </div>

    <form div="form" action="" method="post">

        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Nama</span>
            <input type="text" class="form-control" name=nama placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
        </div>

        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Alamat</span>
            <input type="text" class="form-control" name=alamat placeholder="Tempat Tinggal Saat Ini" aria-label="Username" aria-describedby="basic-addon1">
        </div>

        <div class="mb-3">
            <label for="basic-url" class="form-label">Nomer Telepon</label>
            <div class="input-group">
                <span class="input-group-text" id="basic-addon3">+62</span>
                <input type="text" class="form-control" name=notlp placeholder="765432345" id="basic-url" aria-describedby="basic-addon3 basic-addon4">
            </div>
        </div>

        <div class="mb-3">
            <label for="basic-url" class="form-label">Email</label>
            <div class="input-group">
                <span class="input-group-text" id="basic-addon3">@</span>
                <input type="text" class="form-control" name=email placeholder="example@gmail.com" id="basic-url" aria-describedby="basic-addon3 basic-addon4">
            </div>
        </div>

        <div class="mb-3">
        <label for="basic-url" class="form-label">Bentuk</label>
            <select class="form-select" name=kategori aria-label="Default select example">
                <option selected>Kategori</option>
                <option value="Barang">Barang</option>
                <option value="Uang">Uang</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="basic-url" class="form-label">Nominal / Barang</label>
            <div class="input-group">
                <span class="input-group-text" id="basic-addon3">$</span>
                <input type="text" class="form-control" name=nominal placeholder="1000 / keramik" id="basic-url" aria-describedby="basic-addon3 basic-addon4">
            </div>
        </div>

        <div class="mb-3">
        <label for="basic-url" class="form-label">Metode Pembayaran</label>
            <select class="form-select" name=metode aria-label="Default select example">
                <option selected>Kategori</option>
                <option value="Transfer">Transfer</option>
                <option value="E-Money">E-Money</option>
                <option value="E-Wallet">E-Wallet</option>
                <option value="Kartu Kredit">Kartu Kredit</option>
                <option value="E-Money">E-Money</option>
                <option value="Pengiriman">Pengiriman</option>
            </select>
        </div>

        <!-- <button type="submit" name="submit">kirim</button> -->
        <button type="submit" class="btn btn-outline-primary" name="submit">Kirim</button>
        <br>

    </form>
</body>

</html>