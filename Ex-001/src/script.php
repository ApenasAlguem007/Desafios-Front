<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<body>


    <?php include('index.html'); ?>


    <?php

    $userEmailError = '';
    $userPasswordError = '';

    $userEmail = '';
    $userPassword = $_POST['user-password'];


    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST['user-email']) &&
                empty($_POST['user-password'])) {

            $userEmailError = "E-mail de usuário requerido";
            $userPasswordError = "Senha de usuário requerida";

        } else {

            if ($_POST['user-email'] == 'geovanna.psilva2005@gmail.com'
                && $_POST['user-password'] == '123456789') {

                $database = [
                    "Email" => $_POST['user-email'],
                    "Senha" => $_POST['user-password']
                ];

                echo "Bem-Vindo(a) Ao Sistema!";

            } else {
                $userEmailError = "E-Mail de Usuário Inválido";
                $userPasswordError = "Senha de Usuário Inválido";
  
            }
        
        }

    }


    function testUserInput($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }


    // print_r($database["Email"] . "<br/>");
    // print_r($database["Senha"]);


    ?>

</body>

</html>