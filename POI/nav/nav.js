var menuBtn = document.getElementById("menuBtn")
var sideNav = document.getElementById("sideNav")
var menu = document.getElementById("menu")

sideNav.style.left == "-250px";

menuBtn.onclick = function () {
    if (sideNav.style.left == "-250px") {
        sideNav.style.left = "0";
        menu.src = "image/close.png";
    } else {
        sideNav.style.left = "-250px";
        menu.src = "image/menu.png";
    }
}
//Popup page 
const open1 = document.getElementById('open1');
const modal_container1 = document.getElementById('modal_container1');
const close1 = document.getElementById('close1');

open1.addEventListener('click', () => {
    modal_container1.classList.add('show');
});

close1.addEventListener('click', () => {
    modal_container1.classList.remove('show');
});
//end of Popup page

//Popup page 
const open2 = document.getElementById('open2');
const modal_container2 = document.getElementById('modal_container2');
const close2 = document.getElementById('close2');

open2.addEventListener('click', () => {
    modal_container2.classList.add('show');
});

close2.addEventListener('click', () => {
    modal_container2.classList.remove('show');
});
//end of Popup page

//error Popup page 
const modal_container3 = document.getElementById('modal_container3');
const close3 = document.getElementById('close3');

modal_container3.classList.add('show');

close3.addEventListener('click', () => {
    modal_container3.classList.remove('show');
});
        //end of error Popup page