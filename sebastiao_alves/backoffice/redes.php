<?php
require_once("../config/base_dados.php");
require_once("../config/config.php"); 
require_once("../config/funcoes.php");

estaLogado();

$pag_atual = pathinfo($_SERVER['PHP_SELF'], PATHINFO_FILENAME);

$item = selectSQL("SELECT * FROM contactos"); 

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
              <a href="configuracoes.php" <?php if ($pag_atual === 'cofiguracoes') echo 'class="active"' ?>>CONFIGURAÇÕES</a>
              <a href="logout.php" <?php if ($pag_atual === 'logout') echo 'class="active"' ?>>SAIR</a>
            </div>
        <br>
       <hr>

    </header>

    <main>
        <div id = "caixa1" class="caixa">

            <h3>REDES</h3>
            <?php foreach($item as $i): ?>

            <h3>FACEBOOK</h3>
            <p id="p"><?= $i["facebook"] ?></p>
            <hr>
            <h3>INSTAGRAM</h3>
            <p id="p"><?= $i["instagram"] ?></p>
            <hr>
            <h3>LINKEDIN</h3>
            <p id="p"><?= $i["linkedin"] ?></p>
            

            <form action="editar_redes.php">
                <button name="id" value="<?= $i["id"] ?>">EDITAR!</button>
            </form>

            <?php endforeach; ?>
            
           

            
        </div>
    </main>

    <footer>

    </footer> 

</body>
</html>