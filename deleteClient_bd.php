<?php

	require_once('db_connection.php');

	$opa = $_POST['opa']; 

    echo "<script> alert($opa); </script>";

	$objDb = new db();
	$link = $objDb->mysql_connection();

	//$sql = "DELETE FROM client WHERE id = $opa";  
    
	//mysqli_query($link, $sql);

	//header("Location: consult_clients.php");

?>	