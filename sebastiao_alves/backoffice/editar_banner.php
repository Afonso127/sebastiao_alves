<?php
require_once("../config/base_dados.php");
require_once("../config/config.php"); 
require_once("../config/funcoes.php");
estaLogado();

$editado = false;
$item = selectSQL("SELECT * FROM carousel"); 


if(isset($_GET["id"])){

    $form = isset($_GET["id"]) && isset($_GET["imagem_mobile"]) && isset($_GET["imagem_desktop"]) && isset($_GET["titulo"]) && isset($_GET["subtitulo"]) && isset($_GET["tag"]) && isset($_GET["link"]);

    if($form){

        date_default_timezone_set("Europe/Lisbon");
        $data_atual = date("H:i:s - d/m/Y");

        iduSQL("UPDATE carousel SET imagem_mobile='$_GET[imagem_mobile]',imagem_desktop='$_GET[imagem_desktop]',titulo='$_GET[titulo]', subtitulo='$_GET[subtitulo]', tag='$_GET[tag]', data_atualizacao='$data_atual',link='$_GET[link]'WHERE id='$_GET[id]'");
        $editado = true;
    
    }
    else{

            $banner_especifico = selectSQLUnico("SELECT * FROM carousel WHERE id='$_GET[id]'");
            if(empty($banner_especifico)){
                header("Location: carousel.php");
                exit();
            }
    
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
        <h1>EDITAR BANNER</h1>
    </header>

    <main>

        <div class="caixa" id = "caixa1" >

            <?php if(isset($_GET["id"]) && (!$editado)): ?>
            
                <form class = "inbanner">
                    <input type="hidden" name="id" value="<?= $banner_especifico["id"]; ?>">
                    <h3>LINK IMAGEM MOBILE - BANNER</h3>
                    <input type="text" name="imagem_mobile" placeholder="Imagem Mobile" value="<?= $banner_especifico["imagem_mobile"]; ?>" >
                    <br><br>
                    <a href="<?= $url_base; ?>/filemanager/tinyfilemanager.php" target="_blank" onclick="window.open(this.href, 'popupwindow', 'width=800,height=600'); return false;"><button type="button">Buscar</button></a>

                    <br>
                    <h3>LINK IMAGEM DESKTOP - BANNER</h3>
                    <input type="text" name="imagem_desktop" placeholder="Imagem Desktop" value="<?= $banner_especifico["imagem_desktop"]; ?>" >
                    <br><br>
                    <a href="<?= $url_base; ?>/filemanager/tinyfilemanager.php" target="_blank" onclick="window.open(this.href, 'popupwindow', 'width=800,height=600'); return false;"><button type="button">Buscar</button></a>
                   
                    <br><br>
                    <h3>TÍTULO - BANNER</h3>
                    <input type="text" name="titulo" placeholder="titulo" value="<?= $banner_especifico["titulo"]; ?>" >
                    <br><br>
                    <h3>SUBTÍTULO - BANNER</h3>
                    <textarea name="subtitulo" rows="4" cols="80" placeholder="subtitulo"><?= $banner_especifico["subtitulo"]; ?></textarea>
                    <h3>TAG - BANNER</h3>
                    <input type="text" name="tag" placeholder="tag" value="<?= $banner_especifico["tag"]; ?>" >
                    <h3>LINK (SABER-MAIS) - BANNER</h3>
                    <input type="text" name="link" placeholder="link" value="<?= $banner_especifico["link"]; ?>" >
                    <br><br>
                    <button>EDITAR</button>
                </form>

                <?php else: ?>
                    <h1>Banner editado!</h1>
                    <a href="carousel.php"> <button>VOLTAR</button></a>
            <?php endif; ?>
        </div>
        
            
        
    </main>

    <footer>

    </footer> 

</body>
</html>