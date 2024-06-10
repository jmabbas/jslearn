const btn = document.querySelector(".btn");
const trailerContent=document.querySelector(".trailer-container");
const colseIcon= document.querySelector(".close-icon");
const video = document.querySelector("video");

btn.addEventListener('click', () =>{
    trailerContent.classList.remove("active");
    setTimeout(function(){
        video.autoplay=true;
    },500);
});

colseIcon.addEventListener("click", ()=>{
    trailerContent.classList.add('active');
    video.pause();
    video.currentTime=0;
});