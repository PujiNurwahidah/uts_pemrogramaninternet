<?php
    include 'koneksi.php';

    $npsn = $_POST['npsn'];

    $query = "DELETE FROM tbl_data WHERE npsn = '$npsn'";
    $result = mysqli_query($koneksi, $query);

    if ($result){
        header('location: index.php');
    }else {
        echo "Data gagal dihapus";
    }  

?>