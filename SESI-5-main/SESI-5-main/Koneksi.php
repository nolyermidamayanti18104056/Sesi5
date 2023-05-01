<?php
    //cara menyertakan file
    include("Konfigurasi.php");
    
    $hasil = mysqli_connect(DBHOST, DBUSERNAME, DBPASS);

    if($hasil){
        echo"Koneksi ke Mysql Sukses";
    }else{
        echo"Koneksi ke Mysql Gagal";
    }
   