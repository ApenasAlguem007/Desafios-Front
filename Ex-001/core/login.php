<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Login de Usuário </title>
    <link rel="stylesheet" href="login.css">

</head>
<body>

    <!-- Forms UserLogin -->

        <form action="../src/script.php" method="POST">


            <div class="login-container">


                <div class="login-section">

                    <div id="title-login">
                        <label for="user-login"> <h3> Fazer Login </h3> </label>
                    </div>


                    <div id="email-login">
                        <label for="user-email"> E-Mail </label>
                        <input type="email" name="user-email" placeholder="Insira Seu E-Mail" required>
                    </div>


                    <div id="password-login">
                        <label for="user-password"> Senha </label>
                        <input type="password" name="user-password" placeholder="Insira Sua Senha" required>
                    </div>


                    <div id="error-message">
                        <?php
                            if(isset($_GET['login-error'])) {
                                echo "<p> E-mail ou senha incorretos. </p>";
                            }
                        ?>
                    </div>


                    <div id="login-button">
                        <input type="submit" value="Login" ></button>
                    </div>


                </div>


            </div>


        </form>


</body>
</html>