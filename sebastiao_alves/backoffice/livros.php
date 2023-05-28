<?php
require_once("../config/base_dados.php");
require_once("../config/config.php"); 
require_once("../config/funcoes.php");

estaLogado();

$pag_atual = pathinfo($_SERVER['PHP_SELF'], PATHINFO_FILENAME);

$item = selectSQL("SELECT * FROM livros"); 

if(isset($_GET["apagar"])){
    $livro_especifico = selectSQLUnico("SELECT * FROM livros WHERE id='$_GET[apagar]'");
    if(!empty($livro_especifico)){
        iduSQL("DELETE FROM livros WHERE id='$_GET[apagar]'");
    }

    else{
        header("Location: livros.php");
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
        <h1>BACKOFFICEt (<?= ucfirst($pag_atual) ?>)</h1>

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
        <div class="table">
            <?php if(!empty($item)): ?> 
                <?php if(!isset($_GET["apagar"])): ?>


                    <table>
                        <thead>
                            <tr>
                                <th>IMAGEM</th>
                                <th>TITULO</th>
                                <th>TEXTO</th>
                                <th>DATA ATUALIZAÇÃO</th>
                    
                                <th>AÇÕES</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php foreach($item as $i): ?>

                            <tr>
                                <td> <img src="<?= $i["imagem_livro"] ?>" alt=""></td>
                                <td><?= $i["titulo_livro"] ?></td>
                                <td class ="subt"><?= $i["texto_livro"] ?></td>
                                <td><?= $i["data_atualizacao"] ?></td>
                                <td> 
                                    <form action="editar_livro.php">
                                        <button name="id" value="<?= $i["id"] ?>">EDITAR!</button>
                                    </form>
                                    <form>
                                        <button name="apagar" value="<?= $i["id"] ?>">APAGAR!</button>
                                    </form>
                                </td>
                            
                            </tr>
                            <?php endforeach; ?>
                        <t/body>
                                
                    </table> 

                        
                    <a href="criar_livro.php">
                        <button id="botesp">Criar Novo Livro</button>
                    </a>

                    <?php else: ?>
                        <h3>Livro apagado!</h3>
                        <a href="livros.php"><button>Voltar</button></a>

                <?php endif; ?>


            <?php endif; ?>

            
        </div>
    </main>

    <footer>

    </footer> 

</body>
</html>