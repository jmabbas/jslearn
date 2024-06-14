const open = document.getElementById("open");
const close = document.getElementById("close");
const modal = document.getElementById("modal");

open.addEventListener("click", () => modal.classList.add("show-modal"));
close.addEventListener("click", ()=> modal.classList.remove("show-modal"));

window.addEventListener("click", (f)=> {
    f.target === modal ? modal.classList.remove("show-modal") : false;

    console.log(f.target===modal);
});