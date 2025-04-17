<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Nota de Estudante </title>
    <link rel="stylesheet" href="styles.css">

</head>
<body>
        <form action="boletim">

        
        </form>

    <?php
    
    
        $nota = 10;


        switch ($nota){

            case ($nota >= 0 && $nota < 5):
                echo "Reprovado!";
            break;

            case ($nota >= 5 && $nota < 7):
                echo "Está de Recuperação!";
            break;

            case ($nota >= 7 && $nota < 11):
                echo "Aprovado!";
            break;

            default:
                echo "Insira uma nota válida" . "<br></br>";
                echo "Nota Mínima: 0.0" . "<br></br>";
                echo "Nota Máxima: 10.0";
            break;

        }


    ?>


</body>
</html>