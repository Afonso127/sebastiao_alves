<?php
require_once("../config/base_dados.php");
require_once("../config/config.php"); 
require_once("../config/funcoes.php");

estaLogado();

$editado = false;
$item = selectSQL("SELECT * FROM contactos"); 

if(isset($_GET["id"])){

    $form = isset($_GET["id"]) && isset($_GET["facebook"]) && isset($_GET["instagram"]) && isset($_GET["linkedin"]);

    if($form){

        iduSQL("UPDATE contactos SET facebook='$_GET[facebook]', instagram='$_GET[instagram]', linkedin='$_GET[linkedin]' WHERE id='$_GET[id]'");
        $editado = true;
    
    }
    else{

            $contacto_especifico = selectSQLUnico("SELECT * FROM contactos WHERE id='$_GET[id]'");
            if(empty($contacto_especifico)){
                header("Location: redes.php");
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
        <h1>EDITAR REDES</h1>
    </header>

    <main>

        <div class="caixa" id = "caixa1" >

            <?php if(isset($_GET["id"]) && (!$editado)): ?>
            
                <form class = "inbanner">

                    <input type="hidden" name="id" value="<?= $contacto_especifico["id"]; ?>">
                    <h3>FACEBOOK</h3>
                    <input type="text" name="facebook" placeholder="Facebook:" value="<?= $contacto_especifico["facebook"]; ?>" >
                    <br>
                    <h3>INSTAGRAM</h3>
                    <input type="text" name="instagram" placeholder="Instagram:" value="<?= $contacto_especifico["instagram"]; ?>" >
                    <br>
                    <h3>LINKEDIN</h3>
                    <input type="text" name="linkedin" placeholder="Linkedin:" value="<?= $contacto_especifico["linkedin"]; ?>" >
                    <br>
                    <br>
                
                    <button>EDITAR</button>
                </form>

                <?php else: ?>
                    <h1>Redes editadas!</h1>
                    <a href="redes.php"><button>VOLTAR</button></a>
            <?php endif; ?>
        </div>
        
            
        
    </main>

    <footer>

    </footer> 

</body>
</html>