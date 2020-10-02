<?php

require_once('Koneksi.php');
    if($_SERVER['REQUEST_METHOD']=='POST'){

        $id_nilaiawal = $_POST['id_nilaiawal'];
        $ph_bawah = $_POST['ph_bawah'];
        $ph_atas = $_POST['ph_atas'];
        $ppm_bawah = $_POST['ppm_bawah'];
        $ppm_atas = $_POST['ppm_atas'];
        $suhu_bawah = $_POST['suhu_bawah'];
        $suhu_atas = $_POST['suhu_atas'];
        $intensitas = $_POST['intensitas_makan'];

        $setawal = "UPDATE tbl_nilaiawal SET ph_bawah = '$ph_bawah', ph_atas = '$ph_atas', ppm_bawah = '$ppm_bawah', ppm_atas = '$ppm_atas', suhu_bawah = '$suhu_bawah', suhu_atas = '$suhu_atas', intensitas_makan = '$intensitas' WHERE id_nilaiawal = $id_nilaiawal";
        

        if($sql->query($setawal)){
            echo 'Berhasil disimpan';
        }else{
            echo 'Gagal menyimpan';
        }

        $sql->close();
    }

?>