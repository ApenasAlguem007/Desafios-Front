<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Venda de Bilhtes </title>


</head>

<body>


    <form action="sale.php" method="POST">

        <div class="sale-container">

            <div class="sale-section">
                <div id="sale">
                    <label for="sale">Bilhetes à Venda:</label>
                </div>


                <div>

                    <label for="name"> Nome: </label>
                    <input type="text" name="nome" required> <br><br>

                    <label for="sobrenome"> Sobrenome: </label>
                    <input type="text" name="sobrenome" required> 


                    <br/>


                    <div id="quant">

                        <label for="quantidade">Quantidade de Bilhetes:</label>
                        <input type="number" name="quantidade" min="1" required><br><br>

                        <input type="number" name="valorIngresso">

                        <input type="submit" value="Comprar">

                    </div>


                </div>


            </div>


        </div>


    </form>




</body>

</html>