<?php
    require 'controller.php';
    $donasi = query ("SELECT * FROM tb_donasi");

    if (isset ($_POST["submit"]) ){
        $donasi = search($_POST["keyword"]);
      }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project Tugas Akhir Kelas X</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">

    <style>
        h1,h2,h3,h4,h6{
            font-weight: bold;
        }
        body{
            margin:0;
            padding: 0;
        }
        nav{
            display: flex;
            margin-top: 15px;
            margin-bottom: 15px;
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
        p{
            color: #919191;
        }
        .content1{
            margin: 0px 70px;
        }
        img{
            border-radius: 10px;
        }
        .content3{
            margin: 152px 50px 70px;
            padding: 15px;
        }
        .isi1, .isi2{
            display: flex;
            list-style: none;
        }
        .card{
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            display: flex;
            flex-wrap: wrap;
            flex-direction: row;
            margin: 15px 15px 50px 20px;
            border-radius: 15px;
        }
        .content4{
            margin: 30px 70px;
            padding: 30px;
        }
        .content5{
            margin: 30px 70px;
            padding: 10px;
        }
        .content6{
            margin: 30px 70px;
            padding: 10px;
        }
        .kartu{
            display: flex; 
            margin: 5px;
        }
        .card-img-top{
            float: left;
            width: 100px;
            height: 100px;
            margin-top:25px; 
            margin-left:15px;
        }
        li{
            list-style: none;
        }

        .footer-grid{
            display: flex;
            margin: 25px 0px;
            padding: 10px;
            background-color: #001E42;
            color: #fff;
        }
        .footer-1, .footer-2{
            display: inline;
            margin: 85px;

        }
        .footer-3{
            font-size: 12px;
            text-align: center;
        }
        .text{
            color: #1F3984;
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
                    <a class="nav-link active" aria-current="page" href="#content1">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#content4">Cara Wakaf</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#content5">Data Wakaf</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#content6">Gallery</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#content7">Web Wikrama</a>
                </li>
            </ul>
        </nav>
    </header>

    <main>
        <article>
            <div class="content1">
                <img src="img/masjid 0.png" style=" width:400px; height:400px; float:right; margin-right: 30px;">
                <p>Masjid Besar SMK Wikrama Bogor</p>
                <h1>Mari <div class="text">Tingkatkan Keimanan</div>Masyarakat <br> SMK Wikrama Bogor</h1>
                <br>
                <a class="btn btn-primary" style="background-color:#1F3984;" href="donasi.php" role="button">Beri Bantuan Shodaqoh</a>
            </div>

            <div class="content2">
                <!-- <marquee><img src="img/masjid 1.jpg" /></marquee> -->
            </div>

            <div class="content3">
                <h1><div class="text">Manfaat</div> Wakaf, Infaq <br> Shodaqoh.</h1>
                <p>Berikut adalah beberapa keutamaan wakaf, infaq dan <br> shodaqoh yang akan anda dapatkan.</p>
                <img src="img/tangan.jpg" style="width: 320px; heigth: 360px; float: right;">
                <div class="isi1">
                    <div class="card" style="width: 20rem;">
                        <img src="img/logo 1.png" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Mendapatkan Ketenangan Hati dan Jiwa</h5>
                            <p class="card-text">Dapat memberikan manfaat berupa ketenangan hati bagi orang yang melakukannya. Allah menyatakan ini dalam firmannya pada surat Al-Baqarah ayat 274</p>
                        </div>
                    </div>
                    <div class="card" style="width: 20rem;">
                        <img src="img/logo 2.png" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Terbukanya Pintu Rezeki</h5>
                            <p class="card-text">Allah SWT akan membuka pintu rezeki dari arah yang tidak dikira sebelumnya, dengan balasan yang berlipat-lipat di sisi Allah SWT</p>
                        </div>
                    </div>
                </div>
                <div class="isi2">
                    <div class="card" style="width: 20rem;">
                        <img src="img/logo 3.png" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Menjauhkan dari bahaya</h5>
                            <p class="card-text">Rasulullah SAW pernah bersabda: “Bersegeralah untuk bersedekah, karena musibah dan bencana tidak bisa mendahului sedekah."</p>
                        </div>
                    </div>
                    <div class="card" style="width: 20rem;">
                        <img src="img/logo 4.png" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Pahala yang Tak Terputus</h5>
                            <p class="card-text">Dapat disebut sebagai sedekah Jariyah, yang dapat menolong kita di akhirat nantinya, seperti menyelamatkannya dari api neraka.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="content4">
                <h2> <div class="text">Cara Melakukan</div> Wakaf, Infaq Shodaqoh.</h2>
                <p>Berikut adalah cara melakukan Wakaf, Infaq Shodaqoh untuk Membantu Pembangunan Masjid Besar SMK Wikrama Bogor</p>
                <div class="isi1">
                    <div class="card" style="width: 35rem;">
                        <div class="card-body">
                            <h4 class="text">01</h4>
                            <h4 class="card-title">Isi Form Data Diri</h4>
                            <p class="card-subtitle mb-2 text-body-secondary">Anda dapat mengisi form data diri, dengan mengeklik "Beri Bantuan Shoqaqoh" di atas. Isi data diri anda dengan teliti.</p>
                        </div>
                    </div>
                    <div class="card" style="width: 35rem;">
                        <div class="card-body">
                            <h4 class="text">02</h4>
                            <h4 class="card-title">Isi Nominal Shodaqoh</h4>
                            <p class="card-subtitle mb-2 text-body-secondary">Isikan kategori dan nominal yang akan anda shodaqohkan. Pastikan isi nominal dengan seiklasnya tanpa ada paksaan apapun.</p>
                        </div>
                    </div>
                </div>
                <div class="isi2">
                    <div class="card" style="width: 35rem;">
                        <div class="card-body">
                            <h4 class="text">03</h4>
                            <h4 class="card-title">Upload Bukti Pembayaran</h4>
                            <p class="card-subtitle mb-2 text-body-secondary">Pilihlah metode pembayaran yang tersedia di dalam form data diri</p>
                        </div>
                    </div>
                    <div class="card" style="width: 35rem;">
                        <div class="card-body">
                            <h4 class="text">04</h4>
                            <h4 class="card-title">Verifikasi Pembayaran</h4>
                            <p class="card-subtitle mb-2 text-body-secondary">Pembayaran anda akan di verifikasi oelh admin dan jika terverifikasi nama anda akan tampil.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="content5">
                <h2><div class="text">Data Donatur</div> Wakaf, Infaq Shodaqoh.</h2>
                <br>
                <p>Berikut Adalah Data Donatur Wakaf, Infaq Shodaqoh Untuk Masjid Besar SMK Wikrama Bogor</p>
                <br>
                <form action="" method="post">
                    <input type="text" name="keyword" id="">
                    <button class="btn btn-outline-primary" type="submit" name="submit">cari</button>
                </form>
                <br>

                <table class="table" border="1">
                    <thead class="table-light">
                        <tr>
                            <th scope="col">Nama</th>
                            <th scope="col">Email</th>
                            <th scope="col">Kategori</th>
                            <th scope="col">Nominal/Barang</th>
                            <th scope="col">.</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($donasi as $data) {?>
                        <tr>
                            <td> <?= $data["nama"]?></td>
                            <td> <?= $data["email"]?></td>
                            <td> <?= $data["kategori"]?></td>
                            <td> <?= $data["nominal"]?></td>
                            <td>
                                <a class="btn btn-outline-primary" href="hapus.php?id=<?= $data["id"] ?>" onclick="return confirm('Yakin data mau di hapus?')" >Hapus</a>
                                <a class="btn btn-outline-primary" href="lihat.php?id=<?= $data["id"]?>"> Lihat</a>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
                <a class="btn btn-outline-primary" href="index.php" role="button">Kembali</a>
            </div>

            <div class="content6">
                <h2><div class="text">Gallery</div> Masjid Besar SMK <br> Wikrama Bogor.</h2>
                <p>Berikut Adalah Galerry Masjid Besar SMK Wikrama Bogor.</p>

                <div class="kartu">
                    <img src="img/masjid 3.jpg" style="margin:10px; width: 20rem;">
                    <img src="img/masjid 4.jpg" style="margin:10px; width: 20rem;">
                    <img src="img/masjid 5.jpg" style="margin:10px; width: 20rem;">
                </div>
                <div class="kartu">
                    <img src="img/masjid 6.jpg" style="margin:10px; width: 20rem;">
                    <img src="img/masjid 7.jpg" style="margin:10px; width: 20rem;">
                    <img src="img/masjid 2.jpg" style="margin:10px; width: 20rem;">
                </div>
            </div>
        </article>
    </main>

    <div class="clearfix"></div>
        <footer class="footer-main">
            <div class="footer-grid">   
                <section class="footer-1">
                    <a class="navbar-brand" href="#">
                        <img src="img/logo wikrama.png" alt="Logo" width="70" height="70" class="d-inline-block align-text-top">
                        SMK Wikrama Bogor
                    </a>
                    <h4>Alamat</h4>
                    <ul>
                        <li>Alamat<br> Jl.Raya Wangun<br>Kelurahan Sindangsari<br>Bogor Timur 16720</li>
                        <hr>
                        <li>Telepon<br> 0251-8242411 / <br> 082221718035 (Whatsapp)</li>
                    </ul>

                </section>
                <section class="footer-2">
                    <h4>Tentang Wikrama</h4>
                    <ul>
                        <li><a style="text-decoration: none; color:#fff;" href="https://smkwikrama.sch.id/" target="_blank">Sejarah</a></li>
                        <li> <a style="text-decoration: none; color:#fff;" href="https://smkwikrama.sch.id/" target="_blank">Peraturan Sekolah</a></li>
                        <li> <a style="text-decoration: none; color:#fff;" href="https://smkwikrama.sch.id/" target="_blank">Rencana Strategi & Prestasi</a></li>
                        <li> <a style="text-decoration: none; color:#fff;" href="https://smkwikrama.sch.id/" target="_blank">Yayasan</a></li>
                        <li> <a style="text-decoration: none; color:#fff;" href="https://smkwikrama.sch.id/" target="_blank">Struktur Organisasi</a>Struktur </li>
                        <li> <a style="text-decoration: none; color:#fff;" href="https://smkwikrama.sch.id/" target="_blank">Cabang</a></li>
                        <li> <a style="text-decoration: none; color:#fff;" href="https://smkwikrama.sch.id/" target="_blank">Penghargaan</a></li>
                        <li> <a style="text-decoration: none; color:#fff;" href="https://smkwikrama.sch.id/" target="_blank">Kerjasama</a></li>
                    </ul>
                </section>
                <section class="footer-2">
                <form>
                    <h4>Kirim Pesan</h4>
                    <div class="mb-3">
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama">
                    </div>
                    <div class="mb-3">
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email">
                    </div>
                    <div class="mb-3">
                        <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Pesan Anda" rows="5"></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
                </section>
            </div>
            <section class="footer-3">
                <p>Copyright © 2023 - SMK Wikrama Bogor. All Right Reserved.</p>
            </section>
        </footer>
    </div>
</body>
</html>