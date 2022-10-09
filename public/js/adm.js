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
//Side bars
let VarSidebar = document.querySelector(".sidebar");
let VarBars = document.querySelector(".bars");
VarBars.addEventListener("click", () => {
    VarSidebar.classList.contains("active") ? VarSidebar.classList.remove("active") : VarSidebar.classList.add("active");
});

// INICIO do botão AÇÃO DropDrown (vizualizar, editar, apagar) 
function actionDrop(id){
    closeDropAction();
    document.getElementById("actionDrop"+id).classList.toggle("show_drop_action");
}
window.onclick = function(event){
    if(!event.target.matches(".drop_btn_action")){
        // document.getElementById("actionDrop").classList.remove("show_drop_action");
    closeDropAction();
    }
}
function closeDropAction(){
    var DropDowns = document.getElementsByClassName("drop_action_item");
    var i;
    for (i = 0; i < DropDowns.length; i++) {
       var OpenDropDown = DropDowns[i];
       if(OpenDropDown.classList.contains("show_drop_action")){
        OpenDropDown.classList.remove("show_drop_action");
       }
    }
}
