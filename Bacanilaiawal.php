<?php
    header('Content-Type:application/json');
	include('Koneksi.php');
	
	$select = "SELECT * FROM tbl_nilaiawal WHERE id_nilaiawal= 1 ORDER BY id_nilaiawal DESC LIMIT 1";
	$result = $sql->query($select);
	$dataResult = $result->fetch_object() ;

	echo json_encode($dataResult);

	$sql->close();
?>