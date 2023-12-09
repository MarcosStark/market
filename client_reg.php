<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="style.css"> 
    </head>

    <body>
        <div>
            <form id="client-reg" class="register">
                <h4>Cadastro de cliente</h4>
                <label>Nome</label><br>
                <input type="text" name="name" placeholder="Digite o nome..."><br>
                <label>CPF</label><br>
                <input type="text" name="cpf" placeholder="Digite o cpf..."><br>
                <label>Telefone</label><br>
                <input type="text" name="telephone" placeholder="Digite o telefone..."><br>
                <label>Email</label><br>
                <input type="email" name="email" placeholder="Digite o email..."><br>
                <label>Idade</label><br>
                <input type="number" name="age" placeholder="Digite a idade..."><br><br>

                <button type="button" id="client_reg_btn">Cadastrar</button>
            </form>
        </div>
    </body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="market_bd.js"></script> 
    <script src="bootstrap/js/bootstrap.min.js"></script>

</html>