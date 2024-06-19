const menu = document.querySelector(".menu");
const links = document.querySelectorAll("li");
const highlight= document.querySelector(".highlight");
const btn = document.querySelector(".btn");

console.log(menu);
console.log(links);
console.log(highlight);
console.log(btn);

btn.addEventListener("click", function() {
    console.log(this);
    if(this.dataset.open==="close") {
        menu.style.clipPath = "circle(100% at 50% 50%)";
        this.dataset.open="open"
    } else {
        menu.style.clipPath = "";
        this.dataset.open = "close";
        highlight.style="";
    }
});

links.forEach((link) => {
    link.addEventListener("pointerover", function(){

        console.log(this);
        const w = this.offsetWidth
        const h = this.offsetHeight;
        const t= this.offsetTop;
        highlight.style.cssText=`transform: translateY(${t}px); width: ${w}px;height:${h}px`;
    });
});