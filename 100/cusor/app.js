let cursor = document.querySelector('.cursor');

document.addEventListener('mousemove', function (client)  {
    moveCursor(client.pageX, client.pageY);
});

function moveCursor(pageX,pageY) {
    cursor.style.left = pageX+"px";
    cursor.style.top = pageY+"px";
}