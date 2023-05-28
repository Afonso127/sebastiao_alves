<?php
require_once("../config/base_dados.php");
require_once("../config/config.php"); 
require_once("../config/funcoes.php");

estaLogado();

$editado = false;
$item = selectSQL("SELECT * FROM autor"); 




if(isset($_GET["id"])){

    $form = isset($_GET["id"]) && isset($_GET["imagem_autor"]) && isset($_GET["texto_autor"]);

    if($form){

        iduSQL("UPDATE autor SET imagem_autor='$_GET[imagem_autor]', texto_autor='$_GET[texto_autor]'WHERE id='$_GET[id]'");
        $editado = true;
    
    }
    else{

            $autor_especifico = selectSQLUnico("SELECT * FROM autor WHERE id='$_GET[id]'");
            if(empty($autor_especifico)){
                header("Location: autor.php");
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
        <h1>EDITAR AUTOR</h1>
    </header>

    <main>

        <div class="caixa" id = "caixa1" >

            <?php if(isset($_GET["id"]) && (!$editado)): ?>
            
                <form class = "inbanner">
                    <input type="hidden" name="id" value="<?= $autor_especifico["id"]; ?>">
                    <h3>Link da imagem do Autor da página Autor:</h3>
                    <input type="text" name="imagem_autor" placeholder="link" value="<?= $autor_especifico["imagem_autor"]; ?>" >
                    <a href="<?= $url_base; ?>/filemanager/tinyfilemanager.php" target="_blank" onclick="window.open(this.href, 'popupwindow', 'width=800,height=600'); return false;"><button type="button">Buscar</button></a>
                    <br><br>
                    <h3>Texto do campo últimos Livros</h3>
                    <textarea name="texto_autor" id="editor" rows="10" cols="40" placeholder="TEXTO" required><?php echo !empty($autor_especifico["texto_autor"]) ? $autor_especifico["texto_autor"] : " "; ?></textarea>

                        <script>
                            ClassicEditor
                            .create( document.querySelector( '#editor' ) )
                            .catch( error => {
                            console.error( error );
                            } );
                        </script>
                     <br> <br>
                    <button>EDITAR</button>
                    <br> <br>
                </form>

                <?php else: ?>
                    <h1>Autor editado!</h1>
                    <a href="autor.php"><button>VOLTAR</button></a>
                    <br><br>
            <?php endif; ?>
        </div>
        
            
        
    </main>

    <footer>

    </footer> 

</body>
</html>