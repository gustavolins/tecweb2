<?php
$dsn = 'mysql:host=localhost;dbname=cadastro;';
$user = 'root';
$pass = '';


function getConnection(){

    try{

        $pdo = new PDO($dsn, $user, $pass);
    
    }catch(PDOException $ex){
    echo'ERRO :' .$ex->getMessage();
    
    }
    

}