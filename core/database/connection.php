<?php 

$dsn = 'mysql:host=localhost; port=3307; dbname=facebook; charset=utf8mb4';
$userAdmin = 'root';
$pass = 'root';


try{
    // $pdo = new PDO('mysql:host=localhost; port=3307; dbname=facebook; charset=utf8mb4', 'root', 'root') ;
    $pdo = new PDO($dsn, $userAdmin, $pass);

} catch(PDOException $e){
    echo  'Connection Error: ' . $e->getMessage();
}




?>