let btns = document.querySelectorAll(".btn");

const body = document.body;

btns.forEach((btn)=>{
    btn.addEventListener("click", ()=>{
        number =btn.value;
        console.log(number);

        body.style.backgroundColor=btn.value;
    });
});