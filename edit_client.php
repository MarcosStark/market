<?php

    require_once('db_connection.php');

    $id = $_POST['id_client'];

    $objDb = new db();
    $link = $objDb->mysql_connection();
    
    $sql = "UPDATE client SET name = 'USERTESTE2' WHERE id = $id";

    $result = mysqli_query($link, $sql);



        echo "<tr>";
   
        echo "<th style='border: 3px solid black; border-style: inset; padding: 3px; text-align: center;'>"; echo "ID"; "</th>";
        echo "<th style='border: 3px solid black; border-style: inset; padding: 3px; text-align: center;'>"; echo "Nome"; "</th>";
        echo "</tr>";
        
        while($rows = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<a href='#' class='list-group-itemtext-align: center;'>";
                echo "<td style='border: 3px solid black; border-style: inset; padding: 3px; text-align: center;'>".$rows['id']."</td>";            
                echo "<td style='border: 3px solid black; border-style: inset; padding: 3px; text-align: center;'>"."<input type='text'>"."</td>";
                echo "</a>";
            echo "</tr>";
        }


    echo "<script src='market_bd.js'></script>";
?>