<?php

    //session_start();

	require_once('db_connection.php');

	//$id = $_SESSION['id']; 

    //echo "<script> alert($id); </script>";

	$objDb = new db();
	$link = $objDb->mysql_connection();

	$sql = "DELETE FROM client WHERE id = $id";  
    
	mysqli_query($link, $sql);

	//header("Location: consult_clients.php");

?>	