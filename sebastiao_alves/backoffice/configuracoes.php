
<?php
require_once("../config/base_dados.php");
require_once("../config/config.php"); 
require_once("../config/funcoes.php");

estaLogado();

$pag_atual = pathinfo($_SERVER['PHP_SELF'], PATHINFO_FILENAME);

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

        <h3>REDEFINIR SENHA</h3>

        <?php if ($mensagem == 'inval_log'): ?>

        <h3 class= "erro">Erro na mudança de senha. Tente de novo!</h3>

        <?php endif; ?>

        <form action="nsenha.php" method="POST">

            <input class= "input" type="password" name="senha" placeholder="Senha anterior:" required="required">
            <br><br>
            <input class= "input" type="password" name="nova_senha" placeholder="Nova senha:" required="required">
            <br><br>
            <input class= "input" type="password" name="nova_senha1" placeholder="Digite novamente a senha:" required="required">
            <br><br>
            <button id="botesp">NOVA SENHA</button>

        </form>

          
        </div>

    </main>

    <footer>

    </footer>

    

</body>
</html>