<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styleRegPage.css">
</head>
<body>
    <form action="regValidate.php" method="post">
        Login (3-9 letters): <input type="text" name="loginReg" id="loginReg"> <br>
        Password (8-24 letters): <input type="password" name="passwordReg" id="passwordReg"> <br>
        I accept terms of service <input type="checkbox" name="termsReg" id="termsReg"> <br>
        <input type="submit" value="Accept"> <br>
        <div id="errorsRegister">
            <?php
                if (isset($_SESSION['errorRegister'])) {
                    echo $_SESSION['errorRegister'].'<br>';
                    unset($_SESSION['errorRegister']);
                }
                if(isset($_SESSION['loginErrorsRegister'])){
                    echo $_SESSION['loginErrorsRegister'].'<br>';
                    unset($_SESSION['loginErrorsRegister']);
                }
                if(isset($_SESSION['passwordErrorsRegister'])){
                    echo $_SESSION['passwordErrorsRegister'].'<br>';
                    unset($_SESSION['passwordErrorsRegister']);
                }
                if(isset($_SESSION['termsErrorsRegister'])){
                    echo $_SESSION['termsErrorsRegister'].'<br>';
                    unset($_SESSION['termsErrorsRegister']);
                }
            ?>
        </div>
    </form>
    <a href='log.php'><button>Log in</button></a>
</body>
</html>