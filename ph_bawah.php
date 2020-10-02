<?php
	include('Koneksi.php');

	$select = mysqli_query($sql, "SELECT ph_bawah FROM tbl_nilaiawal");
	foreach($select as $row){
		echo $row['ph_bawah'];
	}

?>