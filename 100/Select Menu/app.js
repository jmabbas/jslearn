let selectField = document.querySelector("#selectField");
let selectText = document.querySelector("#selectText");
let arrow = document.getElementById("arrowIcon");

let list = document.getElementById("list");

let options = document.getElementsByClassName("options");

console.log(selectField);
console.log(selectText);
console.log(arrow);
console.log(list);
console.log(options);

selectField.addEventListener("click", ()=>{
    list.classList.toggle("hide");
    arrow.classList.toggle("rotate");
});

for (option of options) {
    option.onclick = function() {
        selectText.innerHTML = this.textContent;
        list.classList.toggle("hide");
        arrow.classList.toggle("rotate");
    }
}