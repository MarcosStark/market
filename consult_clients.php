<?php

    require_once('db_connection.php');

    $sql = "SELECT * FROM client ORDER BY id DESC";

    $objDb = new db();
    $link = $objDb->mysql_connection();
    
    $result = mysqli_query($link, $sql);

    if($result){

        echo "<tr>";
   
        echo "<th style='border: 3px solid black; border-style: inset; padding: 3px; text-align: center;'>"; echo "ID"; "</th>";
        echo "<th style='border: 3px solid black; border-style: inset; padding: 3px;text-align: center;'>"; echo "Nome"; "</th>";
        echo "<th style='border: 3px solid black; border-style: inset; padding: 3px;text-align: center;'>"; echo "Idade"; "</th>";
        echo "<th style='border: 3px solid black; border-style: inset; padding: 3px;text-align: center;'>"; echo "Cpf"; "</th>";
        echo "<th style='border: 3px solid black; border-style: inset; padding: 3px;text-align: center;'>"; echo "email"; "</th>";
        echo "<th style='border: 3px solid black; border-style: inset; padding: 3px;text-align: center;'>"; echo "Telefone"; "</th>";
        echo "</tr>";
        
        while($rows = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<a href='#' class='list-group-itemtext-align: center;'>";
                echo "<td style='border: 3px solid black; border-style: inset; padding: 3px;text-align: center;'>".$rows['id']."</td>";
                echo "<td style='border: 3px solid black; border-style: inset; padding: 3px;text-align: center;'>".$rows['name']."</td>";
                echo "<td style='border: 3px solid black; border-style: inset; padding: 3px;text-align: center;'>".$rows['age']."</td>";
                echo "<td style='border: 3px solid black; border-style: inset; padding: 3px;text-align: center;'>".$rows['cpf']."</td>";
                echo "<td style='border: 3px solid black; border-style: inset; padding: 3px;text-align: center;'>".$rows['email']."</td>";
                echo "<td style='border: 3px solid black; border-style: inset; padding: 3px;text-align: center;'>".$rows['telephone']."</td>";
                //echo "<td style='border: 3px solid black; border-style: inset; padding: 3px;text-align: center;'>".'<button type="button">Editar</button>'."</td>";
                //echo "<td style='border: 3px solid black; border-style: inset; padding: 3px;text-align: center;'>".'<button type="button">Apagar</button>'."</td>";
                $ok = $rows['id'];
                //"<a 'button type='button' class='deleteClient-btn' href='deleteClient_bd.php?id=$rows[id]'>"."Apagar"."</button>"."</a>"."</td>";
                echo "<td>"."<form id='test'>"."<input type='text' name='opa' value=$ok>"."<button type='button' class='deleteClient-btn'>Apagar2</button>"."</form>"."</td>";
                echo "</a>";
            echo "</tr>";
        }

    }

    echo "<script src='market_bd.js'></script>";
?>