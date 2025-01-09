




let EntrarPainel = document.getElementById("EntrarPainel")
let CadastroSite = document.getElementById("CadastroSite")
let Indicador = document.getElementById("Indicador")

function Cadastro(){
    CadastroSite.style.transform = "translatex(0px)";
    EntrarPainel.style.transform = "translatex(0px)";
    Indicador.style.transform = "translatex(100px)";
}

function Entrar(){

    CadastroSite.style.transform = "translatex(300px)";
    EntrarPainel.style.transform = "translatex(300px)";
    Indicador.style.transform = "translatex(0px)";
}

