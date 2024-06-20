const container = document.querySelector(".page-container");
const menu = document.querySelector(".nav-list");
const togglebtn = document.querySelector(".toggle-btn");
const links =document.querySelectorAll(".link");
const overlay = document.querySelector(".overlay");
const pages = document.querySelectorAll(".page");

let pageIndex = 0;

togglebtn.addEventListener("click", ()=> {
    container.classList.toggle("active");
    menu.classList.toggle("active");
    menu.classList.toggle("show");
});

links.forEach((item,i)=>{
    item.addEventListener("click",()=>{
        nextPage(i);
    });
});

function nextPage(index) {
    overlay.style.animation = `slide 1s linear 1`;

    setTimeout(()=>{
        pages[pageIndex].classList.remove("active");
        pages[index].classList.add("active");
        pageIndex=index;
    },500);

    setTimeout(()=>{
        overlay.style.animation=null;
    },1000);
}