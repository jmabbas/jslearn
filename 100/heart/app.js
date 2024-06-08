const grayheart= document.querySelector('.gray-heart');
const redheart = document.querySelector('.red-heart');

console.log(grayheart);
console.log(redheart);

grayheart.addEventListener("click", ()=> {
    redheart.classList.add('animation');
    redheart.classList.add('fill-color');
});

redheart.addEventListener("click", ()=> {
    redheart.classList.remove('animation');
    redheart.classList.remove('fill-color');
});