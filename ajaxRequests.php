<?php
$dsn = "myql:host=localhost;username=root;dbname=projectmanagementsystem";
$pass = "";
try{
    $conn = new PDO($dsn, $pass);
}catch(PDOException $e){
    echo $e->getMessage();
}
?>