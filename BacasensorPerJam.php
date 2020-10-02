<?php
	header('Refresh: 5');
	include('Koneksi.php');
	
	$select = "SELECT * FROM tbl_akuaponik ORDER BY id_akuaponik DESC LIMIT 30";
	$result = $sql->query($select);
	$dataResult = [] ;
	while ($obj = $result->fetch_object()) {
		$dataResult[] =$obj ;
	}

	echo json_encode($dataResult);

	$sql->close();
?>