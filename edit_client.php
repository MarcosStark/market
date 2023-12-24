<?php

    require_once('db_connection.php');

    $id = $_POST['id_client'];
    $name = $_POST['name'];
    $cpf = $_POST['cpf'];
    $telephone = $_POST['telephone'];
    $email = $_POST['email'];
    $age = $_POST['age'];

    $objDb = new db();
    $link = $objDb->mysql_connection();
    
    $sql = "UPDATE client SET name = '$name', cpf = '$cpf', telephone = '$telephone', email = '$email', age = '$age' WHERE id = $id";

    $result = mysqli_query($link, $sql);


    echo "<script src='market_bd.js'></script>";
?>