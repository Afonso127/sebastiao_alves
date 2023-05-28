<?php
require_once("../config/base_dados.php");
require_once("../config/config.php"); 
require_once("../config/funcoes.php");

estaLogado();
$item = selectSQL("SELECT * FROM destaques"); 
$destaque_registado = false;
$inf = false;

$form = isset($_GET["img"]) && isset($_GET["titulo"]) && isset($_GET["texto"]) && isset($_GET["link"]) && isset($_GET["observacao"]);

if ($form) {
    if(count($item) < 3){
        iduSQL("INSERT INTO destaques (img, titulo, texto, link, observacao) 
             VALUES ('$_GET[img]','$_GET[titulo]', '$_GET[texto]', '$_GET[link]', '$_GET[observacao]')");
        $destaque_registado = true;
        $inf = true;
    } else {
        $error_message = "Já existem 3 destaques registados.";
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

    <script src="https://cdn.ckeditor.com/ckeditor5/37.1.0/classic/ckeditor.js"></script>

</head>
<body>

    <header>
        <h1>CRIAR DESTAQUE</h1>
    </header>

    <main>

        <div class="caixa" id = "caixa1" >

            <?php if(!$form && (!$destaque_registado) && (!isset($error_message))): ?>
                
                    <form class = "inbanner">
                    
                        <h3>Link da imagem do Destaque:</h3>
                        <input type="text" name="img" placeholder="Link da imagem:">
                        <a href="<?= $url_base; ?>/filemanager/tinyfilemanager.php" target="_blank" onclick="window.open(this.href, 'popupwindow', 'width=800,height=600'); return false;"><button type="button">Buscar</button></a>
                        <br><br>
                        <h3>Observação do Destaque</h3>
                        <input type = "text" name = "observacao" placeholder="Observação do destaque:">
                        <br><br>
                        <h3>Título do destaque</h3>
                        <input type="text" name="titulo" placeholder="Título:">
                        <br><br>
                        <h3>Texto do destaque</h3>
                        <textarea name="texto" rows="4" cols="80" placeholder="Texto:"></textarea>
                        <br><br>
                        <h3>Link (saber-mais) - destaque</h3>
                        <input type="text" name="link" placeholder="link">
                        <br><br>
                        <button>CRIAR</button>
                    </form>
            <?php elseif (isset($error_message)): ?>
                    <h1><?= $error_message ?></h1>
                    <a href="destaques.php"><button>Voltar</button></a>
            <?php else: ?>
                    <h1>Destaque criado!</h1>
                    <a href="destaques.php"><button>Voltar</button></a>
            <?php endif;?>
        </div>
        
    </main>

    <footer>

    </footer> 

</body
