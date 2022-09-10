// JavaScript para implementar ou remover a classe de ACTIVE, para exibir ou ocultar o bloco de codigo(html)

let VarNotification=document.querySelector(".notification");
let VarAvatar=document.querySelector(".avatar");
//pode ser escrito assim também
//let notification=document.querySelector(".notification"),avatar=document.querySelector(".avatar");

DropMenu(VarAvatar);
DropMenu(VarNotification);
//console.log(VarAvatar);

function DropMenu(seletor){
    // console.log(seletor);
    seletor.addEventListener("click", () => {
    //está pegando a classe (.dropdown_menu) e colocando numa variavel (VarDropdown)
    let VarDropdown = seletor.querySelector(".dropdown_menu");
        // está verificando se a variavel (VarDropdown) tem o estado de ACTIVE, se tiver, quando clicar remove se não adiciona
    VarDropdown.classList.contains("active") ? VarDropdown.classList.remove("active") : VarDropdown.classList.add("active");
    });
}