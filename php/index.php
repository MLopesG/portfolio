<?php 
    session_start();

    include "conexao.php";
    include 'modulos/servicos.php';
    include 'modulos/projetos.php';

    /**
     * Acessar modulos
     */

    $getModulo = filter_input(INPUT_GET, 'm', FILTER_SANITIZE_SPECIAL_CHARS);
    $getQuery = filter_input(INPUT_GET, 'q', FILTER_SANITIZE_SPECIAL_CHARS);
    $getId = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_SPECIAL_CHARS);

    if(isset($getModulo)){
        switch($getModulo){
            case "servicos":
                getServicosFunction($getQuery, $getId);
                break;
            default:
                $_SESSION['mensagem'] = "Query não encontrada!";
                break;
        }
    }