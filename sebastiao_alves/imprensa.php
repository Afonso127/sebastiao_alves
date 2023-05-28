<?php

require_once("config/base_dados.php");
require_once("config/config.php"); 
require_once("config/funcoes.php");

$current_page = basename($_SERVER['PHP_SELF']);
$livros = getLivrosSubmenu();
$item = selectSQL("SELECT * FROM carousel"); 
$contacto = selectSQL("SELECT * FROM contactos"); 




$pagina_atual = (isset($_GET["pagina_atual"])) ? intval($_GET["pagina_atual"]) : 1;
if($pagina_atual <= 0){$pagina_atual = 1;}

$total_elementos = selectSQLUnico("SELECT Count(*) AS total FROM imprensa")["total"];
$elemntos_por_pagina = 2;
$total_paginas = ceil($total_elementos / $elemntos_por_pagina);
$total_a_saltar = ($pagina_atual - 1) * $elemntos_por_pagina;

$imprensa = selectSQL("SELECT * FROM imprensa  ORDER BY SUBSTRING_INDEX(SUBSTRING_INDEX(data_pub, ' ', -1), ' ', 1) DESC LIMIT $elemntos_por_pagina OFFSET $total_a_saltar ");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

     <!-- Links Bootstrap -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
 
     <!-- CSS LOCAL -->
     <link rel="stylesheet" href="estilo.css">    
     
     
     <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
     
</head>

    <body>

      <header class="container-fluid p-0">
      <div class="teste container-fluid d-flex justify-content-around justify-content-center p-0">
            <div id= "topopag" class="row">

              <div class="tit1 col-12 d-flex justify-content-around justify-content-md-center">
            
                <div class="row">Sebastião Alves</div>

                <button id="botao-menu-mobile" class="d-md-none navbar-toggler" type="button" onclick="botaoMenu()">
                
                <img src="imagens/menu.svg" alt="menunavmob">
                </button>
              
            
              </div>
            
              <div class="linhaseparadora mx-auto"></div>

              <nav class="navbar mobnav d-md-none">   
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class=" navbar-nav ">
    
                    <li class="nav-item">
                      <a class="nav-link menu<?php if ($current_page == 'index.php') echo ' active'; ?>" href="index.php">HOME</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link menu<?php if ($current_page == 'autor.php') echo ' active'; ?>" href="autor.php">AUTOR</a>
                    </li>
                
                    <li id = "li-menu-livros" class="nav-item dropdown">
                      <a id = "menu-livros" class="nav-link dropdown-toggle-no-arrow<?php if ($current_page == 'livro.php') echo ' active'; ?>" aria-haspopup="true" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        LIVROS
                      </a>
    
                      <div id="mobdrop" class="dropdown-menu" aria-labelledby="menu-livros">
                        
                      <?php foreach($livros as $l): ?>
                        <a class="dropdown-item submenus" id= "mobitem" href="<?= $url_base; ?>livro.php?id=<?= $l["id"] ?>"><?= $l["titulo_livro"] ?></a>
                        <?php endforeach; ?>
    
                      </div> 
                    </li>
    
                    <li class="nav-item">
                      <a class="nav-link menu<?php if ($current_page == 'imprensa.php') echo ' active'; ?>" href="imprensa.php">IMPRENSA</a>
                    </li>
    
                    <li class="nav-item">
                      <a class="nav-link menu<?php if ($current_page == 'contactos.php') echo ' active'; ?>" href="contactos.php">CONTACTOS</a>
                    </li>
                  </ul>
                </div>
              
              </nav>
              <nav id= "menu-topo" class="navbar navbar-expand-md">
                
                <div id = "navbar-topo" class="d-block-md collapse navbar-collapse">

                  <ul class="navbar-nav mx-auto">

                    <li class="nav-item">
                      <a class="nav-link menu<?php if ($current_page == 'index.php') echo ' active'; ?>" href="index.php">HOME</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link menu<?php if ($current_page == 'autor.php') echo ' active'; ?>" href="autor.php">AUTOR</a>
                    </li>
                
                    <li  class="nav-item dropdown">
                      <a id = "botao-livros" class="nav-link <?php if ($current_page == 'livro.php') echo ' active'; ?> dropdown-toggle-no-arrow" aria-haspopup="true" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        LIVROS
                      </a>

                      <div id="submenu-livros" class="dropdown-menu" aria-labelledby="menu-livros">
                        
                        <?php foreach($livros as $l): ?>
                        <a class="dropdown-item submenus"  href="<?= $url_base; ?>livro.php?id=<?= $l["id"] ?>"><?= $l["titulo_livro"] ?></a>
                        <?php endforeach; ?>

                      </div> 
                    </li>

                    <li class="nav-item">
                    <a class="nav-link menu<?php if ($current_page == 'imprensa.php') echo ' active'; ?>" href="imprensa.php">IMPRENSA</a>
                    </li>

                    <li class="nav-item">
                      <a class="nav-link menu<?php if ($current_page == 'contactos.php') echo ' active'; ?>" href="contactos.php">CONTACTOS</a>
                    </li>
                  </ul>
                </div>
              </nav>
            
            </div>
          </div>

          <div id="carouselExampleIndicators"  class="d-none d-md-block carousel slide" data-bs-ride="carousel">
              
              <div class="carousel-indicators mb-5">
                <?php foreach($item as $index => $i): ?>
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="<?= $index ?>" class="<?= $index == 0 ? 'active' : '' ?>" aria-current="<?= $index == 0 ? 'true' : 'false' ?>" aria-label="Slide <?= $index + 1 ?>"></button>
                <?php endforeach; ?>
              </div>

                <div class="carousel-inner">
                      <?php foreach($item as $i): ?>
                        <div class="carousel-item <?= $i == $item[0] ? 'active' : '' ?>">
                       
                          <img src="<?= $i["imagem_desktop"] ?>" class="d-block w-100 " alt="...">
                        
                          <div class="carousel-caption d-none d-md-block cabecalho-legendas">

                            <div class="banner-novidade"><?= $i["tag"] ?></div>
                            <div class="banner-tituloesp"><?= $i["titulo"] ?></div>
                            <div class="banner-texto">
                              <p>
                              <?= $i["subtitulo"] ?>
                              </p>
                            </div>
                            <div class="topsabermais">
                              <a href="<?= $i["link"] ?>">
                                <button class="sm">SABER MAIS</button>
                              </a>
                            </div>
                      
                          </div>
                        
                        </div> 
                      <?php endforeach; ?>

                </div>
        
            </div>
    
        <div id="mobcarouselExampleIndicators"  class="d-md-none carousel slide" data-bs-ride="carousel">

          <div class="carousel-indicators mb-5">
          <?php foreach($item as $index => $i): ?>
                  <button type="button" data-bs-target="#mobcarouselExampleIndicators" data-bs-slide-to="<?= $index ?>" class="<?= $index == 0 ? 'active' : '' ?>" aria-current="<?= $index == 0 ? 'true' : 'false' ?>" aria-label="Slide <?= $index + 1 ?>"></button>
                <?php endforeach; ?>
          </div>
            <div class="carousel-inner">
              <?php foreach($item as $i): ?>
                <div class="carousel-item <?= $i == $item[0] ? 'active' : '' ?>">
                  <img src="<?= $i["imagem_mobile"] ?>" class="imgmob d-block w-100 " alt="...">
                  <div class="carousel-caption d-md-block mobcabecalho-legendas">
    
                    <div class="mobbanner-novidade"><?= $i["tag"] ?></div>
                    <div class="mobbanner-tituloesp"><?= $i["titulo"] ?></div>
                    <div class="mobbanner-texto">
                      <p>
                      <?= $i["subtitulo"] ?>
                      </p>
                      
                    <div class="topsabermais">
                      <a href="<?= $i["link"] ?>">
                        <button class="sm">SABER MAIS</button>
                      </a>
                    </div>
                  
                    </div>

    
                  </div>
                </div>
              <?php endforeach; ?>
            </div>  
        </div>
             
      </header>
        
    <main class="container-fluid p-0">
      
        <div id = "caixa_branca" class="row topbemvindo">

          <div id = "espbv">

            <div class="row">

              <div class="autor">IMPRENSA</div>
              <br>
              <div class="sobre">ÚLTIMAS NOTÍCIAS</div>
            </div>

          </div>

        </div>

        
  
      <div id = "espimp" class="container-fluid imprensa1">
        <?php foreach($imprensa as $i): ?>

        <div class="container interno ">
            <div class="row">

              <div class="col-12 titemp">
                <?= $i["titulo"]; ?>
              </div>

              <div class="row  mt-2 mx-auto">
                <div class="col-12 linhaemp"></div>
              </div>

              <div class="row text-end mt-2">
                <div class="col-12 dataemp p-0"><?="PUBLICADO A " . $i["data_pub"]; ?></div>
              </div>

            </div>

            <div class="row">
             
                <img class="col-12 impimg" src="<?= $i["img_imprensa"]; ?>" alt="">
             
            </div>

            <div class="row">
              <div class="col-12 text-start textimp">
                <?=  $i["texto"]; ?>
              </div>
            </div>

          
          <?php endforeach; ?>

            
            <div class="row extpag">
              <div class="col-md-12 paginacao d-flex justify-content-center">

                  <form action="">

                  <button class="botpag" name="pagina_atual" value="<?= ($pagina_atual > 1) ? ($pagina_atual-1) : 1; ?>" <?= ($pagina_atual <= 1) ? "disabled" : ""; ?>>
                    <img class="s1d" src="imagens/setaesquerda1.svg" alt="">
                    <img class="s2d" src="imagens/setaesquerda2.svg" alt="">
                  </button>
              
                  <?php for($i=1; $i <= $total_paginas; $i++): ?>
                  <button class="numbers <?= ($i == $pagina_atual) ? "active-page" : ""; ?>" name="pagina_atual" value="<?= $i; ?>"><?= $i; ?></button>
                  <?php endfor; ?>
                  
                  <button class="botpag" name="pagina_atual" value="<?= ($pagina_atual < $total_paginas) ? ($pagina_atual+1) : $total_paginas; ?>" <?= ($pagina_atual >= $total_paginas) ? "disabled" : ""; ?>>
                    <img class="s1d" src="imagens/setadireita1.svg" alt="">
                    <img class="s2d" src="imagens/setadireita2.svg" alt="">
                  </button>

                </form>
              

              </div>
            </div>

        </div>
      </div>

            <div class="base container-fluid">

              <div class="row">

                <div  class="col-12 linhabase mx-auto"></div>

              </div>

              <div class="row">
                <div class="col-12">

                  <nav id= "menu-base" class="navbar navbar-expand-md">
                    <div id = "navbar-topo" class="d-block-md collapse navbar-collapse">
              
                    <ul class="navbar-nav mx-auto">
              
                      <li class="nav-item">
                      <a class="nav-link menu<?php if ($current_page == 'index.php') echo ' active'; ?>" href="index.php">HOME</a>
                      </li>
                      <li class="nav-item">
                      <a class="nav-link menu<?php if ($current_page == 'autor.php') echo ' active'; ?>" href="autor.php">AUTOR</a>
                      </li>

                      <li class="nav-item">
                        <a  class="nav-link menu" href="#" onclick="clicaFoot()">LIVROS</a>
                      </li>
            
                      <li class="nav-item">
                      <a class="nav-link menu<?php if ($current_page == 'imprensa.php') echo ' active'; ?>" href="imprensa.php">IMPRENSA</a>
                      </li>
            
                      <li class="nav-item">
                      <a class="nav-link menu<?php if ($current_page == 'contactos.php') echo ' active'; ?>" href="contactos.php">CONTACTOS</a>
                      </li>
                    </ul>
                    </div>
                  </nav>

                </div>
              </div>

              <div class="row">

                <div id= "linhabaixo" class="col-12 linhabase mx-auto"></div>
    
              </div>
          </div>
    
                
        </main>
    
          
        
        <footer class="container" style="margin-top: 50px; margin-bottom: 70px;">
          
          <div class="row">

            <?php foreach($contacto as $c): ?>
        
              <div class="col-10 col-md-6 mx-auto">
        
                  <div class="row  destaques-titulo">
                    <div class="col-12 text-md-left">Contactos</div>

                  </div>
                  <div class="row " style="margin-top: 20px;">
                      <div class="col-12  col-md-6  text-md-left">
                          <div class="contactos-titulo ">MORADA</div>
                          <div class="contactos-conteudo   mt-2"><?= $c["morada"] ?></div>
                      </div>
                      <div class="col-12 col-md-3  text-md-left mt-3 mt-md-0 p-0">
                          <div class="contactos-titulo">TELEFONE</div>
                          <div class="contactos-conteudo mt-2"><?= $c["telefone"] ?></div>
                      </div> 
                      <div class="col-12 col-md-3  text-md-left mt-3 mt-md-0 p-0">
                          <div class="contactos-titulo">EMAIL</div>
                          <div class="contactos-conteudo mt-2"><?= $c["email"] ?></div>
                      </div>
                  </div>
                  <div class="d-none d-md-block" style="margin-top: 60px;">
                      <a href="https://www.livroreclamacoes.pt/" target="_blank"><img src="imagens/livroreclamacoes.svg" alt="Livro de Reclamações"></a>
                      <a class="ml-5" href=""><img src="imagens/ralc.svg" alt="RALC"></a>
                  </div>
        
              </div>
        
              <div id="siga-redes-sociais" class=" col-12 col-md-5 destaques-titulo">
                <div class="redes">SIGA-ME NAS REDES SOCIAIS</div>

                <div class="mt-4 d-flex justify-content-center gap-3 " >
                  <a class="fav"href="<?= $c["instagram"] ?>" target="_blank"><img src="imagens/instagram1.svg" alt="Livro de Reclamações"></a>
                  <a class="fav" href="<?= $c["facebook"] ?>"><img src="imagens/facebook1.svg" alt="RALC"></a>
                  <a class="fav" href="<?= $c["linkedin"] ?>"><img src="imagens/linkedin1.svg" alt="RALC"></a>
                </div>

                <div class="d-block d-md-none" style="margin-top: 60px;">
                  <a href="https://www.livroreclamacoes.pt/" target="_blank"><img src="imagens/livroreclamacoes.svg" alt="Livro de Reclamações"></a>
                  <a class="ml-5" href=""><img src="imagens/ralc.svg" alt="RALC"></a>
              </div>
        
        
                  <div id="copyright" class="text-center">
                      <a id="politica-cookies" href="">Política de Cookies.</a>
                      <div>Copyright © 2021 Grupo MediaMaster. <br class="d-md-none">Todos os direitos reservados.</div>
                  </div>
        
              </div>
            <?php endforeach; ?>
        
          </div> 
      </footer> 
              
      <script src="config/main.js"> </script>         
    </body>
</html>


