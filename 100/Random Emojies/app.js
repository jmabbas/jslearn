const btn = document.getElementById('emoji');
const emojis = [
    "😆",
    "😅",
    "🤣",
    "😂",
    "😀",
    "🤑",
    "🤨",
    "🙂",
    "😊",
    "😗",
    "😛",
    "😏",
    "🤥",
    "😴",
    "🥺",
    "😧",
    "😇",
    "😳",
    "🙃",
    "🥴",
    "🧐",
    "🤨",
    "😒",
    "🤔",
    "🤭",
    "🥰",
    "🤐",
    "👀",
    "🤔",
    "🤪",
    "🥲",
    "😃",
    "😁",
    "😬",
  ];

let  emojis1= emojis.length;

btn.addEventListener("mouseover", () => {
    btn.innerHTML= emojis[Math.floor(Math.random()*emojis.length)];

    console.log(btn);
});

console.log(emojis1);