<?php
	include('Koneksi.php');

	$select = mysqli_query($sql, "SELECT intensitas_makan FROM tbl_nilaiawal");
	foreach($select as $row){
		echo $row['intensitas_makan'];
	}

?>