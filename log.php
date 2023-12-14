<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/styleLog.css">
</head>
<body>
    <main>
        <form action="loginValidation.php" method="post">
            <h1>Login</h1>
            <input type="text" name="loginLogin" id="loginLogin" placeholder="Login">
            <input type="password" name="passwordLogin" id="loginLogin" placeholder="Password"> <br> <br>
            <input type="submit" value="Log in"> <br> <br> <br> <br>
            <div id="errorsLogin">
                <?php
                        if (isset($_SESSION['errorLogin'])) {
                            echo $_SESSION['errorLogin'].'<br>';
                            unset($_SESSION['errorLogin']);
                        }
                        if(isset($_SESSION['loginErrorsLogin'])){
                            echo $_SESSION['loginErrorsLogin'].'<br>';
                            unset($_SESSION['loginErrorsLogin']);
                        }
                        if(isset($_SESSION['passwordErrorsLogin'] )){
                            echo $_SESSION['passwordErrorsLogin'].'<br>';
                            unset($_SESSION['passwordErrorsLogin']);
                        }
                    
                ?>
            </div>
            <a href="reg.php">
                <div id="register-href">
                    <h2>Register</h2>
                    <h3>Go to the page -></h3>
                </div>
            </a>
        </form>
    </main>
</body>
</html>