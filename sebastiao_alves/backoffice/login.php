<?php

require_once("../config/base_dados.php");
require_once("../config/config.php"); 
require_once("../config/funcoes.php");

$form = isset($_POST["login"]) && isset($_POST["senha"]);

if($form){
    $login = $_POST["login"];
    $senha = $_POST["senha"];
    if(fazerLogin($login, $senha)){
        header("Location: inicio.php");
    }
    else{
        header("Location: index.php?mensagem=inval_log");
    }
}

?>