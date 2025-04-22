

<!-- Script Login Page -->

    <?php


        include '../core/login.php';


        $userEmail = 'useremail@domain.com';
        $userPassword = '1234567890';


            if($_SERVER["REQUEST_METHOD"] === "POST") {

                    if ($_POST['user-email'] === $userEmail && 
                            $_POST['user-password'] === $userPassword) {

                        header("Location: home.html", true, 301);
                        exit();

                    } else {

                        header("Location: ../core/login.php?login-error=1");
                        exit();

                    }

            }


    ?>
