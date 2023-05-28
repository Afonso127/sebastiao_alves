<?php
require_once("../config/base_dados.php");
require_once("../config/config.php"); 
require_once("../config/funcoes.php");

estaLogado();

$editado = false;
$item = selectSQL("SELECT * FROM livros"); 


if(isset($_GET["id"])){

    $form = isset($_GET["id"]) && isset($_GET["imagem_livro"]) && isset($_GET["titulo_livro"]) && isset($_GET["texto_livro"]);

    if($form){
        
        date_default_timezone_set("Europe/Lisbon");
        $data_atual = date("H:i:s - d/m/Y");
       
        iduSQL("UPDATE livros SET imagem_livro='$_GET[imagem_livro]',titulo_livro='$_GET[titulo_livro]', texto_livro='$_GET[texto_livro]', data_atualizacao='$data_atual'WHERE id='$_GET[id]'");
        $editado = true;
    
    }
    else{

            $livro_especifico = selectSQLUnico("SELECT * FROM livros WHERE id='$_GET[id]'");
            if(empty($livro_especifico)){
                header("Location: livros.php");
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
        <h1>EDITAR LIVRO</h1>
    </header>

    <main>

        <div class="caixa" id = "caixa1" >

            <?php if(isset($_GET["id"]) && (!$editado)): ?>
            
                <form class = "inbanner">
                    <input type="hidden" name="id" value="<?= $livro_especifico["id"]; ?>">
                    <h3>LINK IMAGEM LIVRO</h3>
                    <input type="text" name="imagem_livro" placeholder="Imagem livro" value="<?= $livro_especifico["imagem_livro"]; ?>" >
                    <a href="<?= $url_base; ?>/filemanager/tinyfilemanager.php" target="_blank" onclick="window.open(this.href, 'popupwindow', 'width=800,height=600'); return false;"><button type="button">Buscar</button></a>
                    <br>
                    <h3>Título - LIVRO</h3>
                    <input type="text" name="titulo_livro" placeholder="Titulo Livro" value="<?= $livro_especifico["titulo_livro"]; ?>" >
                    <br><br>
                    <h3>DESCRIÇÃO - LIVRO</h3>
                    <textarea name="texto_livro" id = "editor" rows="4" cols="40" placeholder="subtitulo" required><?= $livro_especifico["texto_livro"]; ?></textarea>
                    <script>
                            ClassicEditor
                            .create( document.querySelector( '#editor' ) )
                            .catch( error => {
                            console.error( error );
                            } );
                        </script>
                    
                    <br><br>
                    <button>EDITAR</button>
                </form>

                <?php else: ?>
                    <h1>Livro editado!</h1>
                    <a href="livros.php"><button>Voltar</button></a>
            <?php endif; ?>
        </div>
        
            
        
    </main>

    <footer>

    </footer> 

</body>
</html>