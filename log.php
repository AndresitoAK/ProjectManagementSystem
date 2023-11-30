<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="loginValidation.php" method="post">
        Login: <input type="text" name="loginLogin" id="loginLogin">
        Password: <input type="password" name="passwordLogin" id="loginLogin">
        <input type="submit" value="Accept"> <br>
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
    </form>
</body>
</html>