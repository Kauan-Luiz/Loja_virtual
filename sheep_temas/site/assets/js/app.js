let MenuItens = document.getElementById("MenuItens");

MenuItens.style.maxHeight = "0px";

function menucelular(){
    if(MenuItens.style.maxHeight == "0px"){
        MenuItens.style.maxHeight = "200px"
        MenuItens.style.marginTop = "30px"; 
    }else{
        MenuItens.style.maxHeight = "0px"
        MenuItens.style.marginTop = "0px";
    }
       
}


var produtoImg = document.getElementById("produtoImg")

var produtoMiniatura = document.getElementsByClassName("produtoMiniatura")

produtoMiniatura[0].onclick = function(){
    produtoImg.src = produtoMiniatura[0].src;
}
produtoMiniatura[1].onclick = function(){
    produtoImg.src = produtoMiniatura[1].src;
}
produtoMiniatura[2].onclick = function(){
    produtoImg.src = produtoMiniatura[2].src;
}
produtoMiniatura[3].onclick = function(){
    produtoImg.src = produtoMiniatura[3].src;
}


//CARROSEL 


let count = 1;
document.getElementById("radio1").checked = true;

setInterval(function() {
    nextImage();
}, 2000);

function nextImage() {
    count++;
    if (count > 4) {
        count = 1; 
    }
    document.getElementById("radio" + count).checked = true;
}




