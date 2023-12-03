<?php

    require_once('db_connection.php');

    $sql = "SELECT * FROM client ORDER BY id DESC";

    $objDb = new db();
    $link = $objDb->mysql_connection();
    
    $result = mysqli_query($link, $sql);

    if($result){
        while($rows = mysqli_fetch_array($result)){

        echo "<a href='#' class='list-group-item'>";
        echo $rows['id'], $rows['name'], $rows['cpf'], $rows['telephone'], $rows['email'], $rows['age'];   
        echo "</a>";

        }
    }
?>