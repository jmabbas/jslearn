const slides = document.querySelectorAll(".slide");

slides.forEach((slide) =>{
    slide.addEventListener("click", ()=>{
        removeCur();
        slide.classList.add("active");
    });
});

function removeCur() {
    slides.forEach((slide)=>{
        slide.classList.remove("active");
    });
}