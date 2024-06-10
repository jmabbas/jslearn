const toggler = document.getElementById('switch');

console.log(toggler);

toggler.addEventListener('click',()=>{
    toggler.checked === true ? document.body.style.backgroundColor="#000" : document.body.style.backgroundColor="#fff";
});