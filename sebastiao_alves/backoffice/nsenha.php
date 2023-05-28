<?php

require_once("../config/base_dados.php");
require_once("../config/config.php"); 
require_once("../config/funcoes.php");

$form = isset($_POST["senha"]) && isset($_POST["nova_senha"])  && isset($_POST["nova_senha1"]);

if($form){

    if(senhaOk($_POST["senha"])){
        if($_POST["nova_senha"] == $_POST["nova_senha1"]){
            $senha = $_POST["nova_senha1"];
            $senha_cif = password_hash($senha, PASSWORD_DEFAULT);
            iduSQL("UPDATE colaboradores SET senha='$senha_cif'");
            logout();
        }

        else{
            header("Location: configuracoes.php?mensagem=inval_log");
            
        }

    }

    else{
        header("Location: configuracoes.php?mensagem=inval_log");
        exit();
    }

}

else{
    header("Location: configuracoes.php?mensagem=inval_log");
    exit();
}



?>