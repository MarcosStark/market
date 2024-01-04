<?php

    require_once('db_connection.php');

    $objDb = new db();
    $link = $objDb->mysql_connection();

    $sql = "SELECT * FROM client ORDER BY id DESC";

    $result = mysqli_query($link, $sql);

    $rows = mysqli_fetch_array($result);
 
        echo "<tr>";
   
        echo "<th style='border: 3px solid black; border-style: inset; padding: 3px; text-align: center;'>"; echo "ID"; "</th>";
        echo "<th style='border: 3px solid black; border-style: inset; padding: 3px; text-align: center;'>"; echo "Nome"; "</th>";
        echo "<th style='border: 3px solid black; border-style: inset; padding: 3px; text-align: center;'>"; echo "Idade"; "</th>";
        echo "<th style='border: 3px solid black; border-style: inset; padding: 3px; text-align: center;'>"; echo "Cpf"; "</th>";
        echo "<th style='border: 3px solid black; border-style: inset; padding: 3px; text-align: center;'>"; echo "email"; "</th>";
        echo "<th style='border: 3px solid black; border-style: inset; padding: 3px; text-align: center;'>"; echo "Telefone"; "</th>";
        echo "</tr>";

   
     
            echo "<tr>";
                echo "<a href='#' class='list-group-itemtext-align: center;'>";
                echo "<form id='client-edit'>";
                echo "<td style='border: 3px solid black; border-style: inset; padding: 3px; text-align: center;'>".$rows['id']."</td>";
                echo "<td style='border: 3px solid black; border-style: inset; padding: 3px; text-align: center;'>"."<input type='text' name='name' value='$rows[name]'>"."</td>";
                echo "<td style='border: 3px solid black; border-style: inset; padding: 3px; text-align: center;'>"."<input type='text' name='age' value='$rows[age]'>"."</td>";
                echo "<td style='border: 3px solid black; border-style: inset; padding: 3px; text-align: center;'>"."<input type='text' name='cpf' value='$rows[cpf]'>"."</td>";
                echo "<td style='border: 3px solid black; border-style: inset; padding: 3px; text-align: center;'>"."<input type='email' name='email' value='$rows[email]'>"."</td>";
                echo "<td style='border: 3px solid black; border-style: inset; padding: 3px; text-align: center;'>"."<input type='text' name='telephone' value='$rows[telephone]'>"."</td>";
                echo "<td style='border: 3px solid black; border-style: inset; padding: 3px; text-align: center;'>"."<button class='edit2-btn' type='button' data-id_client='$rows[id]'>"."Salvar"."</button>"."</td>";
                echo "</form>";

                echo "</a>";
            echo "</tr>";
        

    echo "<script src='market_bd.js'></script>";
?>