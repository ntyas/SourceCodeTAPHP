<?php
	include('Koneksi.php');

	$select = mysqli_query($sql, "SELECT ppm_bawah FROM tbl_nilaiawal");
	foreach($select as $row){
		echo $row['ppm_bawah'];
	}

?>