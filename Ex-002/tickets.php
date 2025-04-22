<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tickets</title>
</head>
<body>


<?php
date_default_timezone_set("America/Sao_Paulo");


$quebraDeLinha = "<br></br>";
$hora = date("H:i");

$valorIngresso = 0;


echo "Hora Atual: $hora" . $quebraDeLinha;


if ($hora >= 10 &&
        $hora <= 12) {

    $valorIngresso = 10.0;

    echo "Valor do Ingresso" . $quebraDeLinha;
    echo "Matinal: R$ ", number_format($valorIngresso, 2, ",", ".");


} else if ($hora > 12 &&
        $hora <= 17) {

    $valorIngresso = 20.0;

    echo "Valor do Ingresso" . $quebraDeLinha;
    echo "Vespertino: R$ ", number_format($valorIngresso, 2, ",", ".");


} else if ($hora > 17 &&
        $hora <= 22) {

    $valorIngresso = 30.0;

    echo "Valor do Ingresso" . $quebraDeLinha;
    echo "Noturno: R$ ", number_format($valorIngresso, 2, ",", ".");
    
    
} else if ($hora > 22 &&
        $hora < 24) {

    $valorIngresso = 40.0;

    echo "Valor do Ingresso" . $quebraDeLinha;
    echo "Última Sessão: R$ ", number_format($valorIngresso, 2, ",", ".");
    

}else {

    echo "Nenhum ingresso disponível para compra nesse horário!";
    
}


?>
</body>
</html>