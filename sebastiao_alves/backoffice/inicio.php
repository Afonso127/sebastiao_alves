<?php
require_once("../config/funcoes.php");
estaLogado();
$pag_atual = pathinfo($_SERVER['PHP_SELF'], PATHINFO_FILENAME);

?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>

    <header>
        <h1>BACKOFFICE (<?= ucfirst($pag_atual) ?>)</h1>

        <hr>
        <br>    
            <div class="nav">
              <a href="inicio.php" <?php if ($pag_atual === 'inicio') echo 'class="active"' ?>>INÍCIO</a>
              <a href="carousel.php" <?php if ($pag_atual === 'carousel') echo 'class="active"' ?>>CAROUSEL</a>
              <a href="home.php" <?php if ($pag_atual === 'home') echo 'class="active"' ?>>HOME</a>
              <a href="autor.php" <?php if ($pag_atual === 'autor') echo 'class="active"' ?>>AUTOR</a>
              <a href="livros.php" <?php if ($pag_atual === 'livros') echo 'class="active"' ?>>LIVROS</a>
              <a href="destaques.php" <?php if ($pag_atual === 'destaques') echo 'class="active"' ?>>DESTAQUES</a>
              <a href="imprensa.php" <?php if ($pag_atual === 'imprensa') echo 'class="active"' ?>>IMPRENSA</a>
              <a href="contactos.php" <?php if ($pag_atual === 'contactos') echo 'class="active"' ?>>CONTACTOS</a>
              <a href="redes.php" <?php if ($pag_atual === 'redes') echo 'class="active"' ?>>REDES</a>
              <a href="configuracoes.php" <?php if ($pag_atual === 'configuracoes') echo 'class="active"' ?>>CONFIGURAÇÕES</a>
              <a href="logout.php" <?php if ($pag_atual === 'logout') echo 'class="active"' ?>>SAIR</a>
            </div>
        <br>
       <hr>

    </header>

    <main>
        <div class="caixa">
            <h2>Bem vindo, <?= $_SESSION["colaborador"]["login"] ?>.</h2>
            <hr>
            <h3>- O seu último acesso foi:  [<?= $_SESSION["colaborador"]["acessos"] ?>]</h3>
        </div>
    </main>

    <footer>

    </footer> 

</body>
</html>