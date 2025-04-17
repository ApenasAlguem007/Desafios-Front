<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php


        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

                $nome = htmlspecialchars($_POST['nome']);
                $sobrenome = htmlspecialchars($_POST['sobrenome']);
                $quantidade = (int) ($_POST['quantidade']);
                $valorIngresso = 10.0;


            // Calcula o preço total
                $precoTotal = $quantidade * $valorIngresso;


            // Exibe o resumo da compra
                echo "<h1>Resumo da Compra</h1>";
                echo "<p>Nome: $nome $sobrenome </p>";
                echo "<p>Quantidade de Bilhetes: $quantidade</p>";
                echo "<p>Preço Unitário: R$ " . number_format($valorIngresso, 2, ",", ".") . "</p>";
                echo "<p>Preço Total: R$ " . number_format($precoTotal, 2, ",", ".") . "</p>";
                echo "<br><a href='index.php'>Voltar</a>";

        } else {
            echo "<p>Acesso inválido. Por favor, volte para o formulário.</p>";
        }


    ?>
    
</body>
</html>

    