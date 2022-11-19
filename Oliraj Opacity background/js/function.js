const logo = document.querySelectorAll(".logo");
const menus = document.querySelectorAll(".menus");
const search = document.querySelectorAll(".search");
let w = window.innerWidth;
if(w<1024){
    menus.classList.remove(".search");
}
