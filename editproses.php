<?php

    include 'koneksi.php';

    $npsn               = $_POST['npsn'];
    $status             = $_POST['status'];
    $bentuk_pendidikan  = $_POST['bentuk_pendidikan'];
    $nama_sekolah       = $_POST['nama_sekolah'];
    $sk_pendirian       = $_POST['sk_pendirian'];
    $tgl_pendirian      = $_POST['tgl_pendirian'];
    $sk_izin_oprasional = $_POST['sk_izin_oprasional'];
    $tgl_izin_oprasional= $_POST['tgl_izin_oprasional'];
    $alamat             = $_POST['alamat'];
    $rt                 = $_POST['rt'];
    $rw                 = $_POST['rw'];
    $dusun              = $_POST['dusun'];
    $desa               = $_POST['desa'];
    $kecamatan          = $_POST['kecamatan'];
    $kabupaten          = $_POST['kabupaten'];
    $provinsi           = $_POST['provinsi'];
    $kode_pos           = $_POST['kode_pos'];

    $query = "UPDATE tbl_data SET 
                status              = '$status',
                bentuk_pendidikan   = '$bentuk_pendidikan',
                nama_sekolah        = '$nama_sekolah',
                sk_pendirian        = '$sk_pendirian',
                tgl_pendirian       = '$tgl_pendirian',
                sk_izin_oprasional  = '$sk_izin_oprasional',
                tgl_izin_oprasional = '$tgl_izin_oprasional',
                alamat              = '$alamat',
                rt                  = '$rt',
                rw                  = '$rw',
                dusun               = '$dusun',
                desa                = '$desa',
                kecamatan           = '$kecamatan',
                kabupaten           = '$kabupaten',
                provinsi            = '$provinsi',
                kode_pos            = '$kode_pos',
                WHERE npsn = $npsn";

    $result = mysqli_query($koneksi, $query);

    if ($result){
        header('location: index.php');
    }else {
        echo "Data gagal diubah";
    }   
?>


