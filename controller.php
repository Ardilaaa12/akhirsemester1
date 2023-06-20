<?php
    $connect = mysqli_connect("localhost", "root", "", "db_masjid");

    function query( $query ){
        global $connect;
        $result = mysqli_query($connect, $query);
        $wadah = [];
        while ($baju = mysqli_fetch_assoc($result) ) {
            $wadah[] = $baju;
        }
        return $wadah;
    }

    function tambah( $data ){
        global $connect;
        $nama= htmlspecialchars($data["nama"]);
        $alamat= htmlspecialchars($data["alamat"]);
        $notlp = htmlspecialchars($data["notlp"]);
        $email = htmlspecialchars($data["email"]);
        $kategori = htmlspecialchars($data["kategori"]);
        $nominal = htmlspecialchars($data["nominal"]);
        $metode = htmlspecialchars($data["metode"]);


        $query = "INSERT INTO tb_donasi
                     VALUES 
                ('', '$nama', '$alamat', '$notlp', '$email', '$kategori', '$nominal', '$metode')";

        mysqli_query($connect, $query);

        return  mysqli_affected_rows($connect);
    }

    function hapus( $id ){
        global $connect;
        mysqli_query($connect, "DELETE FROM tb_donasi WHERE id = $id");

        return mysqli_affected_rows($connect);
    }

    function search( $keyword ){
        $query = "SELECT * FROM tb_donasi
            WHERE
                nama LIKE '%$keyword%' OR
                email LIKE '%$keyword%' OR
                kategori LIKE '%$keyword%' OR
                nominal LIKE '%$keyword%'
            ";
            return query( $query );
    }

?>