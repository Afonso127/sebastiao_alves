<?php
require_once("../config/base_dados.php");
require_once("../config/config.php"); 
require_once("../config/funcoes.php");

estaLogado();
$imprensa_registada = false;


$form = isset($_GET["img_imprensa"])  && isset($_GET["titulo"]) && isset($_GET["texto"]) && isset($_GET["data_pub"]);

if($form){
    iduSQL("INSERT INTO imprensa (img_imprensa,titulo,texto,data_pub) VALUES ('$_GET[img_imprensa]','$_GET[titulo]','$_GET[texto]','$_GET[data_pub]')");
    $imprensa_registada = true;
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
        <h1>CRIAR IMPRENSA</h1>
    </header>

    <main>

        <div class="caixa" id = "caixa1" >

                <?php if(!$form && (!$imprensa_registada)): ?>

                <form class = "inbanner">
            
                <h3>LINK IMAGEM IMPRENSA </h3>
                <input type="text" name="img_imprensa" placeholder="Imagem:">
                <a href="<?= $url_base; ?>/filemanager/tinyfilemanager.php" target="_blank" onclick="window.open(this.href, 'popupwindow', 'width=800,height=600'); return false;"><button type="button">Buscar</button></a>
                <br>
                <h3>TÍTULO - IMPRENSA</h3>
                <input type="text" name="titulo" placeholder="Titulo do post:">
                <br><br>
                <h3>TEXTO - IMPRENSA</h3>
                <textarea id="editor" name="texto" placeholder="texto_livro"></textarea>
                
                <script>
                    ClassicEditor
                    .create( document.querySelector( '#editor' ) )
                    .catch( error => {
                    console.error( error );
                    } );
                </script>
            
                <br><br>
                <h3>DATA DE PUBLICAÇÃO - IMPRENSA</h3>
                <input type="text" name="data_pub" placeholder="Data de publicação:">
                <br><br>
                <button>CRIAR</button>
                <br><br>
            </form>

            <?php else: ?>
            <h1>Post criado!</h1>
            <a href="imprensa.php"><button>Voltar</button></a>


            <?php endif;?>
        </div>
            
        
    </main>

    <footer>

    </footer> 

</body>
</html>