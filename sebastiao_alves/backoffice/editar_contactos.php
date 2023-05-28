<?php
require_once("../config/base_dados.php");
require_once("../config/config.php"); 
require_once("../config/funcoes.php");
estaLogado();

$editado = false;
$item = selectSQL("SELECT * FROM contactos"); 

if(isset($_GET["id"])){

    $form = isset($_GET["id"]) && isset($_GET["telefone"]) && isset($_GET["morada"]) && isset($_GET["email"]) && isset($_GET["horario"]);

    if($form){

        iduSQL("UPDATE contactos SET telefone='$_GET[telefone]', morada='$_GET[morada]', email='$_GET[email]', horario='$_GET[horario]'WHERE id='$_GET[id]'");
        $editado = true;
    
    }
    else{

            $contacto_especifico = selectSQLUnico("SELECT * FROM contactos WHERE id='$_GET[id]'");
            if(empty($contacto_especifico)){
                header("Location: contactos.php");
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
        <h1>EDITAR CONTACTOS</h1>
    </header>

    <main>

        <div class="caixa" id = "caixa1" >

            <?php if(isset($_GET["id"]) && (!$editado)): ?>
            
                <form class = "inbanner">

                    <input type="hidden" name="id" value="<?= $contacto_especifico["id"]; ?>">
                    <h3>TELEFONE</h3>
                    <input type="text" name="telefone" placeholder="Telefone:" value="<?= $contacto_especifico["telefone"]; ?>" >
                    <br>
                    <h3>MORADA</h3>
                    <input type="text" name="morada" placeholder="Morada:" value="<?= $contacto_especifico["morada"]; ?>" >
                    <br>
                    <h3>E-MAIL</h3>
                    <input type="text" name="email" placeholder="E-mail:" value="<?= $contacto_especifico["email"]; ?>" >
                    <br>
                    <h3>HORARIO</h3>
                    <input type="text" name="horario" placeholder="Horario:" value="<?= $contacto_especifico["horario"]; ?>" >
                    <br>
                    <br>
                
                    <button>EDITAR</button>
                </form>

                <?php else: ?>
                    <h1>Contactos editados!</h1>
                    <a href="contactos.php"><button>Voltar</button></a>
            <?php endif; ?>
        </div>
        
            
        
    </main>

    <footer>

    </footer> 

</body>
</html>