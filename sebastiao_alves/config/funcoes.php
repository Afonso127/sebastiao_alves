<?php

function fazerLogin($login, $senha){

    $colaborador = selectSQLUnico("SELECT * FROM colaboradores WHERE login='$login'");

    if(!empty($colaborador)){
        if(password_verify($senha, $colaborador["senha"])){
            session_start();
            $_SESSION["colaborador"] = $colaborador;
            
            $id = $colaborador["ID"];
            date_default_timezone_set("Europe/Lisbon");
            $data_atual = date("H:i:s - d/m/Y");
            
            iduSQL("UPDATE colaboradores SET acessos='$data_atual' WHERE id='$id'");

            return true;
        }
        else{
            return false;
        }
    }
    else{
        return false;
    }

}

function senhaOk($senha){

    estaLogado();

   if(password_verify($senha,$_SESSION["colaborador"]["senha"])){
    return true;
   }

   else{
    return false;
   }

}

function estaLogado(){
    session_start();
    if(!isset($_SESSION["colaborador"])){
        header("Location: index.php");
        exit();
    }
}

function logout(){
    session_start();
    session_destroy();
    header("Location: index.php");
}

function novoAcesso($id_usuario){

    date_default_timezone_set("Europe/Lisbon");
    $data_atual = date("H:i:s - d/m/Y");

    iduSQL("INSERT INTO acessos (data, id_usuario) VALUES ('$data_atual', '$id_usuario')");

}



function getLivroID($id){
    return selectSQLUnico("SELECT * FROM livros WHERE id= '$id'");
}

function getLivrosSubmenu(){
    return selectSQL("SELECT id,titulo_livro FROM livros ORDER BY titulo_livro ASC");
}





?>