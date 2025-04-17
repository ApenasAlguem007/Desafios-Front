<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../core/styles.css">

</head>
<body>


    <?php


        include '../core/index.html';


        $userEmail = 'useremail@domain.com';
        $userPassword = '1234567890';


            if($_SERVER["REQUEST_METHOD"] == "POST") {

                    if ($_POST['user-email'] == $userEmail && 
                            $_POST['user-password'] == $userPassword) {

                        header("Location: home.html", true, 301);
                        exit();

                    } else {

                        $mensagemErro = 'E-Mail e/ou Senha de Usuário Inválido(s).';
                        echo $mensagemErro;

                    }

            }


    ?>


</body>
</html>