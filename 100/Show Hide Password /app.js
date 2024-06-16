const input = document.querySelector("input");
const eye = document.querySelector("#eye-icon");

console.log(input);
console.log(eye);

eye.addEventListener("click", ()=> {
    input.type === "password" ? (input.type = "text") : (input.type = "password");
});