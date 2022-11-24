<?php

    $server = 'localhost';
    $user = 'root';
    $password = '';
    $db_name   = 'data_db';

    $koneksi = mysqli_connect($server, $user, $password, $db_name);

    if($koneksi){
        //echo "Berhasil";
    }else{
        echo "Gagal";
    }