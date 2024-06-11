const arrow = document.querySelector('.arrow');

window.addEventListener('scroll',() => {
    let position = window.scrollY;

    console.log(position);
    
    

    position<=50 ? arrow.classList.toggle("fade-in") : arrow.classList.toggle("fade-out");
});