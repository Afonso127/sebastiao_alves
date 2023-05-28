var menu_mobile_aberto = false;


function botaoMenu() {
  let nav_mobile = document.getElementById("navbarSupportedContent");
  let botao_mobile = document.querySelector("#botao-menu-mobile img");

  if (!menu_mobile_aberto) {
    nav_mobile.classList.add("show");
    botao_mobile.src = "imagens/fechar.svg";
    menu_mobile_aberto = true;
  } else {
    nav_mobile.classList.remove("show");
    botao_mobile.src = "imagens/menu.svg";
    menu_mobile_aberto = false;
  }
}

function clicaFoot(){
  setTimeout( () => ($("#botao-livros").dropdown('toggle')),550);
}

function voltarAtras(){
  window.history.back();
}

mover();

function mover(){
  
  document.getElementById("caixa_branca").scrollIntoView();
}


function verMaisAutor(event){
  event.preventDefault()


  document.getElementById("texto_pequeno").classList.toggle("d-none");

  document.getElementById("texto_grande").classList.toggle("d-none");
  document.getElementById("texto_grande").classList.toggle("d-block");
 

}