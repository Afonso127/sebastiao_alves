<?php
require_once("../config/base_dados.php");
require_once("../config/config.php"); 
require_once("../config/funcoes.php");

estaLogado();

$editado = false;
$item = selectSQL("SELECT * FROM destaques"); 


if(isset($_GET["id"])){

    $form = isset($_GET["id"]) && isset($_GET["img"]) && isset($_GET["titulo"])  && isset($_GET["texto"])  && isset($_GET["link"])  && isset($_GET["observacao"]);

    if($form){

        iduSQL("UPDATE destaques SET img='$_GET[img]', titulo='$_GET[titulo]', texto='$_GET[texto]',link='$_GET[link]', observacao='$_GET[observacao]'WHERE id='$_GET[id]'");
        $editado = true;
    
    }
    else{

            $destaque_especifico = selectSQLUnico("SELECT * FROM destaques WHERE id='$_GET[id]'");
            if(empty($destaque_especifico)){
                header("Location: destaques.php");
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
        <h1>EDITAR DESTAQUES</h1>
    </header>

    <main>

        <div class="caixa" id = "caixa1" >

            <?php if(isset($_GET["id"]) && (!$editado)): ?>
            
                <form class = "inbanner">
                    <input type="hidden" name="id" value="<?= $destaque_especifico["id"]; ?>">
                    <h3>Link da imagem do Destaque:</h3>
                    <input type="text" name="img" placeholder="Link da imagem:" value="<?= $destaque_especifico["img"]; ?>" >
                    <a href="<?= $url_base; ?>/filemanager/tinyfilemanager.php" target="_blank" onclick="window.open(this.href, 'popupwindow', 'width=800,height=600'); return false;"><button type="button">Buscar</button></a>
                    <br><br>
                    <h3>Observação do Destaque</h3>
                    <input type = "text" name = "observacao" value="<?= $destaque_especifico["observacao"]; ?>" placeholder="Observação do destaque:" >
                    <br><br>
                    <h3>Título do destaque</h3>
                    <input type="text" name="titulo" placeholder="Título:" value="<?= $destaque_especifico["titulo"]; ?>" >
                    <br><br>
                    <h3>Texto do destaque</h3>
                    <textarea name="texto" rows="4" cols="80" placeholder="Texto:"><?= $destaque_especifico["texto"]; ?></textarea>
                    <br><br>
                    <h3>Link (saber-mais) - destaque</h3>
                    <input type="text" name="link" placeholder="link" value="<?= $destaque_especifico["link"]; ?>" >
                    <br><br>
                    <button>EDITAR</button>
                </form>

                <?php else: ?>
                    <h1>Destaque editado!</h1>
                    <a href="destaques.php"> <button>VOLTAR</button></a>
            <?php endif; ?>
        </div>
        
            
        
    </main>

    <footer>

    </footer> 

</body>
</html>