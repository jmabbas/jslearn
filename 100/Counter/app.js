const countEl = document.getElementById("count");
const incr = document.querySelector(".increment-btn");
const save = document.querySelector(".save-btn");
const saveEl = document.getElementById("save");
const decr = document.querySelector(".decrement-btn");
const clear = document.querySelector(".clear-btn");

let count = 0;

incr.addEventListener("click", ()=>{
    count +=1;
    countEl.textContent = count;
});

decr.addEventListener("click", () =>{
    count -=1;
    countEl.textContent = count;
});

clear.addEventListener("click", ()=>{
    countEl.textContent = 0;
});

save.addEventListener("click", ()=>{
    let countStr = count + ", ";
    saveEl.textContent += countStr;
});