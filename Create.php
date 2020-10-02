<?php

    include('Koneksi.php');

    $sensorph = $_GET['ph_air'];
    $sensortds = $_GET['ppm_air'];
    $sensorsuhu = $_GET['suhu_air'];
    $sensorwaterflow = $_GET['aliran_air'];
    $waktu_masuk = date('Y-m-d H:i:s');
    $kondisi_ph = $_GET['kondisi_ph'];
    $kondisi_ppm = $_GET['kondisi_ppm'];
    $kondisi_suhu = $_GET['kondisi_suhu'];

    $db = "INSERT INTO tbl_akuaponik (ph_air,ppm_air,suhu_air,aliran_air,waktu_masuk,kondisi_ph,kondisi_ppm,kondisi_suhu)
    VALUES ('{$sensorph}','{$sensortds}','{$sensorsuhu}','{$sensorwaterflow}','{$waktu_masuk}',{$kondisi_ph},{$kondisi_ppm},{$kondisi_suhu})";
    
    if($sql->query($db)){
    	echo "Sukses menyimpan";
    }else{
    	echo "Gagal menyimpan";
    }
?>

