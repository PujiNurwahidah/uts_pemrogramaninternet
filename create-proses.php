<?php

    include 'koneksi.php';

    $npsn               = $_POST['npsn'];
    $status             =  $_POST['status'];
    $bentuk_pendidikan  =  $_POST['bentuk_pendidikan'];
    $nama_sekolah       = $_POST['nama_sekolah'];
    $sk_pendirian       =  $_POST['sk_pendirian'];
    $tgl_pendirian      =  $_POST['tgl_pendirian'];
    $sk_izin_oprasional =  $_POST['sk_izin_oprasional'];
    $tgl_izin_oprasional=  $_POST['tgl_izin_oprasional'];
    $alamat             =  $_POST['alamat'];
    $rt                 =  $_POST['rt'];
    $rw                 =  $_POST['rw'];
    $dusun              =  $_POST['dusun'];
    $desa               =  $_POST['desa'];
    $kecamatan          =  $_POST['kecamatan'];
    $kabupaten          =  $_POST['kabupaten'];
    $provinsi           =  $_POST['provinsi'];
    $kode_pos           =  $_POST['kode_pos'];

    $query = "INSERT INTO tbl_data (npsn, status, bentuk_pendidikan, nama_sekolah, sk_pendirian, tgl_pendirian, sk_izin_oprasional, tgl_izin_oprasional, alamat, rt, rw, dusun, desa, kecamatan, kabupaten, provinsi, kode_pos) VALUES ('$npsn', '$status', '$bentuk_pendidikan', '$nama_sekolah', '$sk_pendirian', '$tgl_pendirian', 
            '$sk_izin_oprasional', '$tgl_izin_oprasional', '$alamat', '$rt', '$rw', '$dusun', '$desa', '$kecamatan', '$kabupaten', '$provinsi', '$kode_pos')";

    $result = mysqli_query($koneksi, $query);

    if ($result){
        header('location: index.php');
    }else {
        echo("Data gagal ditambahkan");
    }   
?>


