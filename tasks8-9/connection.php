<?php 
$db = "mysql:host=localhost;dbname=registration";
$userName = "root";
$password = "";
try{
    $pdo = new PDO($db , $userName , $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
    echo "connection failed" . $e->getMessage();
}
?>