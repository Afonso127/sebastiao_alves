<?php
require_once("../config/base_dados.php");
require_once("../config/config.php"); 
require_once("../config/funcoes.php");
estaLogado();

$pag_atual = pathinfo($_SERVER['PHP_SELF'], PATHINFO_FILENAME);

$item = selectSQL("SELECT * FROM destaques"); 

if(isset($_GET["apagar"])){
    $destaque_especifico = selectSQLUnico("SELECT * FROM destaques WHERE id='$_GET[apagar]'");
    if(!empty($destaque_especifico)){
        iduSQL("DELETE FROM destaques WHERE id='$_GET[apagar]'");
    }

    else{
        header("Location: destaques.php");
        exit();  
    }
   
}


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
            <a href="criar_destaque.php">
                <button id = "botesp">CRIAR NOVO DESTAQUE</button>
            </a>
            <br><br>

        <div class="table">
            <?php if(!empty($item)): ?> 
                <?php if(!isset($_GET["apagar"])): ?>


                    <table>
                        <thead>
                            <tr>
                                <th>IMAGEM</th>
                                <th>TÍTULO</th>
                                <th>TEXTO</th>
                                <th>OBSERVAÇÃO</th>
                    
                                <th>AÇÕES</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php foreach($item as $i): ?>

                            <tr>
                                <td> <img src="<?= $i["img"] ?>" alt=""></td>
                                <td><?= $i["titulo"] ?></td>
                                <td><?= $i["texto"] ?></td>
                                <td><?= $i["observacao"] ?></td>
                                <td> 
                                    <form action="editar_destaque.php">
                                        <button name="id" value="<?= $i["id"] ?>">EDITAR!</button>
                                    </form>
                                    <br><br>
                                    <form>
                                        <button name="apagar" value="<?= $i["id"] ?>">APAGAR!</button>
                                    </form>
                                </td>
                            
                            </tr>
                            <?php endforeach; ?>
                        <t/body>
                                
                    </table> 
                    <br>
                    
                    <?php else: ?>
                        <h1>Destaque apagado!</h1>
                        <a href="destaques.php"><button type= "button">Voltar</button></a>

                <?php endif; ?>


            <?php endif; ?>

            
        </div>
    </main>

    <footer>
        <!-- o x .., voltar atras, scroll view, o ver mais, -->

    </footer> 

</body>
</html>