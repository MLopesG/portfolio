<?php

function connect()
{    
    $host = "localhost";
    $user = "root";
    $port = "3308";
    $password = "";
    $database = "portfolio";
    
    try{
        return $conexao = new PDO("mysql:host={$host};port={$port};dbname={$database}", $user, $password, array(
            PDO::ATTR_PERSISTENT => false
        ));
    }catch(PDOException $e){
        return  "Não foi possivel estabelecer conexão com banco de dados.";
    } 
}