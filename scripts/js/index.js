//MODAL SCRIPT
function open_modal(modal_name){
    let modal = document.getElementById(modal_name);
    console.log(modal)
    if (typeof modal == 'undefined' || modal === null)
        return;

        modal.style.display = 'flex';
}
function close_modal(modal_name){
    let modal = document.getElementById(modal_name);

    if (typeof modal == 'undefined' || modal === null)
        return;

        modal.style.display = 'none';
}


//HAMBURGER MENU
var hamburger = document.querySelector(".hamburger");
var nav_menu = document.querySelector(".menu");

hamburger.addEventListener("click", () => {
    hamburger.classList.toggle("active");
    nav_menu.classList.toggle("active");
})
document.querySelectorAll(".nav_link").forEach(n => n.addEventListener("click", () => {
    hamburger.classList.remove("active");
    nav_menu.classList.remove("active");
}))

//################### MENU_ITEM_SCROLL
const menu_bar = document.querySelector('.main_header');

function active_scroll(){
    menu_bar.classList.toggle('ativo_scroll', scrollY > 0);
}
window.addEventListener('scroll', active_scroll);