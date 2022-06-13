/** @format */

let menu = document.querySelector(".menu-toggle");
let menuWrapper = document.querySelector(".menu-wrapper");
let close = document.querySelector(".close");

menu.addEventListener("click", function () {
    menuWrapper.classList.toggle("active");
    close.classList.toggle("active");
});
close.addEventListener("click", function () {
    menuWrapper.classList.toggle("active");
    close.classList.toggle("active");
});
