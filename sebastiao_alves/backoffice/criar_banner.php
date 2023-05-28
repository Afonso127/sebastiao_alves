<?php
require_once("../config/base_dados.php");
require_once("../config/config.php"); 
require_once("../config/funcoes.php");
estaLogado();
$banner_registado = false;


$form = isset($_GET["imagem_mobile"]) && isset($_GET["imagem_desktop"]) && isset($_GET["titulo"]) && isset($_GET["subtitulo"]) && isset($_GET["tag"]) && isset($_GET["link"]);

if($form){
    iduSQL("INSERT INTO carousel (imagem_mobile,imagem_desktop,titulo,subtitulo,tag,link) VALUES ('$_GET[imagem_mobile]', '$_GET[imagem_desktop]', '$_GET[titulo]', '$_GET[subtitulo]', '$_GET[tag]', '$_GET[link]')");
    $banner_registado = true;
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
        <h1>CRIAR BANNER</h1>
    </header>

    <main>

        <div class="caixa" id = "caixa1" >

            <?php if(!$form && (!$banner_registado)): ?>

                <form class = "inbanner">
                    
                    <h3>LINK IMAGEM MOBILE - BANNER</h3>
                    <input type="text" name="imagem_mobile" placeholder="Imagem Mobile:">
                    <a href="<?= $url_base; ?>/filemanager/tinyfilemanager.php" target="_blank" onclick="window.open(this.href, 'popupwindow', 'width=800,height=600'); return false;"><button type="button">Buscar</button></a>
                    <br>
                    <h3>LINK IMAGEM DESKTOP - BANNER</h3>
                    <input type="text" name="imagem_desktop" placeholder="Imagem Desktop:">
                    <a href="<?= $url_base; ?>/filemanager/tinyfilemanager.php" target="_blank" onclick="window.open(this.href, 'popupwindow', 'width=800,height=600'); return false;"><button type="button">Buscar</button></a>
                    <br><br>
                    <h3>Título - BANNER</h3>
                    <input type="text" name="titulo" placeholder="TÍtulo:">
                    <br><br>
                    <h3>Subtítulo - BANNER</h3>
                    <textarea name="subtitulo" rows="4" cols="40" placeholder="Subtítulo:"></textarea>
                    <h3>TAG - BANNER</h3>
                    <input type="text" name="tag" placeholder="Tag:">
                    <h3>LINK (SABER-MAIS) - BANNER</h3>
                    <input type="text" name="link" placeholder="Link pretendido:">
                    <br><br>
                    <button>CRIAR</button>
                </form>

                <?php else: ?>
                    <h1>Banner criado!</h1>
                    <a href="carousel.php"> <button>VOLTAR</button></a>


            <?php endif;?>
        </div>
        
            
        
    </main>

    <footer>

    </footer> 

</body>
</html>