<?php
	include('Koneksi.php');

	$select = mysqli_query($sql, "SELECT suhu_atas FROM tbl_nilaiawal");
	foreach($select as $row){
		echo $row['suhu_atas'];
	}

?>