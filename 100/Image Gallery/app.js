let images = document.querySelectorAll("img");
let wrapper = document.querySelector(".imageWrapper");
let close = document.querySelector(".imageWrapper span");
let imageWrapper =document.getElementById("fullImg");

console.log(images);
console.log(imageWrapper);
console.log(close);
console.log(wrapper);

images.forEach((img, index) =>{
    img.addEventListener("click", ()=>{
        openModal(`images/img${index}.jpg`);
    });
});

close.addEventListener("click", ()=> {
    wrapper.style.display = "none";
});

function openModal(pic) {
    wrapper.style.display = "flex";
    imageWrapper.src=pic;
}