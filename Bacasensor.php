<?php
	header('Refresh: 5');
	include('Koneksi.php');
	
	$select = "SELECT * FROM tbl_akuaponik ORDER BY id_akuaponik DESC LIMIT 1";
	$result = $sql->query($select);
	$dataResult =$result->fetch_object() ;

	echo json_encode($dataResult);

	$sql->close();
?>

