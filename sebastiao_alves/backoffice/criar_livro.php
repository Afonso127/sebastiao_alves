<?php
require_once("../config/base_dados.php");
require_once("../config/config.php"); 
require_once("../config/funcoes.php");

estaLogado();
$livro_registado = false;


$imagem_livro = isset($_GET["imagem_livro"]) ? $_GET["imagem_livro"] : "";
$titulo_livro = isset($_GET["titulo_livro"]) ? $_GET["titulo_livro"] : "";
$texto_livro = isset($_GET["texto_livro"]) ? $_GET["texto_livro"] : "";

if (!empty($imagem_livro) || !empty($titulo_livro) || !empty($texto_livro)) {
    iduSQL("INSERT INTO livros (imagem_livro,titulo_livro,texto_livro) VALUES ('$imagem_livro','$titulo_livro', '$texto_livro')");
    $livro_registado = true;
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
        <h1>CRIAR LIVRO</h1>
    </header>

    <main>

        <div class="caixa" id = "caixa1" >

            <?php if(!$livro_registado): ?>

                <form class = "inbanner">
                    
                    <h3>LINK IMAGEM LIVRO </h3>
                    <input type="text" name="imagem_livro" placeholder="Imagem do livro:">
                    <a href="<?= $url_base; ?>/filemanager/tinyfilemanager.php" target="_blank" onclick="window.open(this.href, 'popupwindow', 'width=800,height=600'); return false;"><button type="button">Buscar</button></a>
                    <br>
                    <h3>TÍTULO - LIVRO</h3>
                    <input type="text" name="titulo_livro" placeholder="Titulo do livro:" >
                    <br><br>
                    <h3>DESCRIÇÃO - LIVRO</h3>
                    <textarea id="editor" name="texto_livro" placeholder="texto_livro"></textarea>
                    <script>
                            ClassicEditor
                            .create( document.querySelector( '#editor' ) )
                            .catch( error => {
                            console.error( error );
                            } );
                    </script>
                    
                    <br><br>
                    <button>Criar</button>
                </form>

            <?php else: ?>
                <h1>LIVRO criado!</h1>
                <a href="livros.php"><button>Voltar</button></a>
            <?php endif;?>
        </div>
        
    </main>

    <footer>

    </footer> 

</body>
</html>