<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/styleRegPage.css">
</head>
<body>
    <main>
        <form action="regValidate.php" method="post">
            <h1>Sign Up</h1>
            <input type="text" name="loginReg" id="loginReg" placeholder="Login (3-9 letters)"> <br>
            <input type="password" name="passwordReg" id="passwordReg" placeholder="Password (8-24 letters)"> <br>
            <br><br>I accept terms of service:  <br> <br><div class="checkbox-wrapper-44">
            <label class="toggleButton">
            <input type="checkbox" name="termsReg" id="termsReg">
            <div>
                <svg viewBox="0 0 44 44">
                <path d="M14,24 L21,31 L39.7428882,11.5937758 C35.2809627,6.53125861 30.0333333,4 24,4 C12.95,4 4,12.95 4,24 C4,35.05 12.95,44 24,44 C35.05,44 44,35.05 44,24 C44,19.3 42.5809627,15.1645919 39.7428882,11.5937758" transform="translate(-2.000000, -2.000000)"></path>
                </svg>
            </div>
            </label>
            </div>

            <br> <br>
            <input type="submit" value="Sign Up"> <br> <br>
        </form>
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
        <a href='log.php'>
            <div id="login-href">
                <h2>Login</h2> <br>
                <h3>Go to the login page -></h3>
            </div>
        </a>
        
        
    </main>
</body>
</html>