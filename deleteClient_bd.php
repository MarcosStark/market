<?php

	require_once('db_connection.php');

	$id = $_GET['id']; 

	$objDb = new db();
	$link = $objDb->mysql_connection();

	$sql = "DELETE FROM client WHERE id = $id";  
    
	mysqli_query($link, $sql);

	//header("Location: consult_clients.php");

?>	