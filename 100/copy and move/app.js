const copyText = document.querySelector("textarea[name=copyTxt]");
const finalText= document.querySelector("textarea[name=finalTxt]");
const movebtn  = document.querySelector(".moverBtn");
const copybtn  = document.querySelector(".copyBtn");
const output = document.querySelector(".output");

console.log(copyText);
console.log(finalText);
console.log(movebtn);

movebtn.addEventListener("click", ()=>{
    let tmptxt= copyText.value;
    finalText.value = tmptxt;
});

copybtn.addEventListener("click", ()=> {
    let temptxt = copyText.value;
    copyToClipBoard(temptxt);

    console.log(copyToClipBoard);
});

function copyToClipBoard(str) {
    const outputContainer = document.querySelector(".output-container");
    const textarea= document.createElement('textarea');
    textarea.value = str;
    outputContainer.appendChild(textarea);
    textarea.select();
    document.execCommand("copy");
    outputContainer.removeChild(textarea);
    output.innerHTML=`<h3>Content Copied </h3>`;
    output.classList.add("added");
    setTimeout(()=> {
        output.classList.toggle("added");
        output.textContent="";
    },2000);
}