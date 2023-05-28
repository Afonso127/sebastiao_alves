<?php
require_once("../config/base_dados.php");
require_once("../config/config.php"); 
require_once("../config/funcoes.php");

estaLogado();

$editado = false;
$item = selectSQL("SELECT * FROM imprensa"); 


if(isset($_GET["id"])){

    $form = isset($_GET["id"]) && isset($_GET["img_imprensa"])  && isset($_GET["titulo"]) && isset($_GET["texto"]) && isset($_GET["data_pub"]);

    if($form){

        iduSQL("UPDATE imprensa SET img_imprensa='$_GET[img_imprensa]',titulo='$_GET[titulo]', texto='$_GET[texto]',data_pub='$_GET[data_pub]'WHERE id='$_GET[id]'");
        $editado = true;
    
    }
    else{

            $imprensa_especifica = selectSQLUnico("SELECT * FROM imprensa WHERE id='$_GET[id]'");
            if(empty($imprensa_especifica)){
                header("Location: imprensa.php");
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

    <script src="https://cdn.ckeditor.com/ckeditor5/37.1.0/classic/ckeditor.js"></script>


</head>
<body>

    <header>
        <h1>EDITAR IMPRENSA</h1>
    </header>

    <main>

        <div class="caixa" id = "caixa1" >

            <?php if(isset($_GET["id"]) && (!$editado)): ?>
            
                <form class = "inbanner">
                    <input type="hidden" name="id" value="<?= $imprensa_especifica["id"]; ?>">
                    <h3>LINK IMAGEM IMPRENSA</h3>
                    <input type="text" name="img_imprensa" placeholder="Imagem Imprensa" value="<?= $imprensa_especifica["img_imprensa"]; ?>" >
                    <a href="<?= $url_base; ?>/filemanager/tinyfilemanager.php" target="_blank" onclick="window.open(this.href, 'popupwindow', 'width=800,height=600'); return false;"><button type="button">Buscar</button></a>
                    <br><br>
                    <h3>Título - IMPRENSA</h3>
                    <input type="text" name="titulo" placeholder="titulo" value="<?= $imprensa_especifica["titulo"]; ?>" >
                    <br><br>
                    <h3>TEXTO - IMPRENSA</h3>
                    <textarea name="texto" id="editor" rows="10" cols="40" placeholder="TEXTO" required><?php echo !empty($imprensa_especifica["texto"]) ? $imprensa_especifica["texto"] : " "; ?></textarea>
                    <script>
                            ClassicEditor
                            .create( document.querySelector( '#editor' ) )
                            .catch( error => {
                            console.error( error );
                            } );
                    </script>
                    <br>
                    <h3>DATA DE PUBLICAÇÃO - IMPRENSA</h3>
                    <input type="text" name="data_pub" placeholder="data de publicação" value="<?= $imprensa_especifica["data_pub"]; ?>" >
                    <br><br>
                   <button>EDITAR</button>
                </form>

                <?php else: ?>
                    <h1>POST EDITADO!</h1>
                    <a href="imprensa.php"><button>Voltar</button></a>
            <?php endif; ?>
        </div>
        
            
        
    </main>

    <footer>

    </footer> 

</body>
</html>