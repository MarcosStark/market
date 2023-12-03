<?php
    require_once('db_connection.php');

    $name = $_POST['name'];
    $cpf = $_POST['cpf'];
    $telephone = $_POST['telephone'];
    $email = $_POST['email'];
    $age = $_POST['age'];

    $objDb = new db();
    $link = $objDb->mysql_connection();

    $sql = "insert into client(name, cpf, telephone, email, age) values ('$name', '$cpf', '$telephone', '$email', '$age')";

    mysqli_query($link, $sql);

?>