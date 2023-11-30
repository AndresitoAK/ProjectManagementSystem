<?php

session_start();
if(isset($_COOKIE['zalogowany'])){
    header('location: index.php');
    exit();
}
function headerLoc($location){
    header("Location: $location");
    exit();
}
function queryDb($parm1,$parm2,$parm3=0,$parm4=0,$location){
    include('conn.php');
    $stmt = $conn->prepare("SELECT username FROM users where username = :username");
    $stmt->bindValue(':username',$parm1);
    $stmt->execute();
    if($stmt->rowCount()==0){
        $stmt = $conn->prepare("INSERT INTO users (id,username, password) VALUES (NULL,:username, :password)");
        $stmt->bindValue(':username',$parm1);
        $stmt->bindValue(':password',$parm2);
        $stmt->execute();
    }else{
        $_SESSION['loginErrorsRegister'] = 'Login is occupied';
        headerLoc('reg.php');
    }
   


    headerLoc($location);

}
function regValidate($login,$password,$cterms){
    //length validation
    if(strlen($login) > 9 || strlen($login) < 3){
        $_SESSION['loginErrorsRegister'] = 'Login must be between 3 and 9 characters';
        headerLoc('reg.php');
        
    }
    if(strlen($password) > 24 || strlen($password) < 8){
        $_SESSION['passwordErrorsRegister'] = 'Password must be between 8 and 24 characters';
        headerLoc('reg.php');
    }
    if($cterms == 'off'){
        $_SESSION['termsErrorsRegister'] = 'You have to check "I accept terms of service"';
        headerLoc('reg.php');
    }
    //sql injection defender
    if(!preg_replace('/[^a-zA-Z0-9]/','',$login)){
        $_SESSION['loginErrorsRegister'] = 'Login has unexpected characters. Please use a-z, A-Z, or 0-9 characters';
       headerLoc('reg.php');
    }
   if(!preg_replace('/[^a-zA-Z1-9!@#$%^&*?+-]/','',$password)){
        headerLoc('reg.php');
        $_SESSION['passwordErrorsRegister'] = "Password has unexpected characters. Please use only these special characters: !,@,#,$,%,^,&,*,?,+,-";
    }
    //query
    queryDb($login,$password,0,0,'log.php');
}
if (!isset($_POST['loginReg']) || !isset($_POST['passwordReg']) || !isset($_POST['termsReg'])){
    $_SESSION['errorRegister'] = 'Please enter all required fields';
    header('Location: reg.php');
    exit();
}else{
    regValidate($_POST['loginReg'], $_POST['passwordReg'], $_POST['termsReg']);
}



?>