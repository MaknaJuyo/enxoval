// NAV BAR

class MobileNavbar {
}

// ##################################

function alerta(){
    nMsg = Math.floor(Math.random() * 5);

    if(nMsg == 1){
        alert('Mais um item pro apartamentinho!')
    } else if (nMsg == 2) {
        alert('Hihi enxovalzão em!')
    } else if (nMsg == 3) {
        alert('Falta menos um item pra ter uma casinha maravilhosa!')
    } else {
        alert('Mais um? Hihi!')
    }

}

function contar(){
    return document.querySelectorAll(".cbox").length; 
}

function contarSelecionado(){
    var checkBoxes = document.querySelectorAll(".cbox");
    var selecionados = 0;
    checkBoxes.forEach(function(el) {
        
    if(el.checked) {
        selecionados++;
    }
    
    });
    return selecionados                   
}

function alterarProgresso(){
    const progresso = document.querySelector(".barra div")
    const valorProgresso = document.getElementById("valorProgresso")

    var nPro

    nPro = (100*contarSelecionado())/contar()
    valorProgresso.textContent = parseInt(nPro)+"%"
    progresso.setAttribute("style", "width: "+parseInt(nPro)+"%")
}

function carregaFormulario(){
    
}