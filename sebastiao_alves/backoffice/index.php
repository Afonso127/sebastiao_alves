<!DOCTYPE html>
<html lang="pt">
<?php
require_once("../config/funcoes.php");

$form = isset($_GET["login"]);
session_start();
if(!empty($_SESSION["colaborador"])){
    header("Location: inicio.php");
    exit();
}
$mensagem = isset($_GET['mensagem']) ? $_GET['mensagem'] : '';

?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>

    <header>

    </header>

    <main>

        <h1>BEM VINDO AO BACKOFFICE</h1>

        <?php if ($mensagem == 'inval_log'): ?>

            <h3 class= "erro">Login Inválido! Tente de novo!</h3>
            
        <?php endif; ?>

        <div class="caixa">

            <h3>LOGIN</h3>

            <form action="login.php" method="POST">

                <input class = "in1" type="text" name="login" placeholder="Login" required="required">
                <br><br>
                <input class = "in1" type="password" name="senha" placeholder="Senha" required="required">
                <br><br>
                <input class = "in2" type="submit" value="ENTRAR">

            </form>

        </div>

    </main>


    </div>

    <footer>

    </footer>

    

</body>
</html>