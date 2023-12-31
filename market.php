<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="style.css"> 
    </head>

    <body>
        <header>
            <div>SAG</div> 
            <div>Sistema Administrativo Geral</div> 
        </header>

        <nav>
            <ul>
                <li id="cad-title">CADASTRAR</li>
                <li><button id="clientReg-btn" class="text_body_btn">CLIENTE</button></li>
                <li><button id="productReg-btn" class="text_body_btn">PRODUTO</button></li>
                <li><button>OFERTA</button></li>
            </ul>
        </nav>
        
        <table>
            <tr>
                <th>
                    <aside>
                        <button id="clientBd-btn">clientes</button> 
                        <button>produtos</button>
                        <button>ofertas</button>
                        <button>relatório de vendas</button>
                    </aside>
                </th>
                <th>
                        <table id="text-body" class="list-group"></table>           
                </th>
              </tr>
        </table>
    </body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="market_ajax&jquery.js"></script> 
    <script src="market_bd.js"></script> 
    <script src="bootstrap/js/bootstrap.min.js"></script>

</html>