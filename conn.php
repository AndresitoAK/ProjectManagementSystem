<?php
$dsn = "mysql:host=localhost;dbname=taskmanagementsystem";
$user = 'root';
$pass = "";
try{
    $conn = new PDO($dsn, $user,$pass);
}catch(PDOException $e){
    echo $e->getMessage();
}
?>