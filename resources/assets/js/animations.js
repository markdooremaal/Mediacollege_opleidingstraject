//ScrolReveal
import ScrollReveal from 'scrollreveal'

window.sr = ScrollReveal({
    reset: true,
    duration: 300,
    opacity: .0,
    scale: 0.9,
    easing: 'linear',
});

sr.reveal('.box');


// Hover Scrolling

let fase2 = document.querySelector('.fase-2');
let fase2b = document.querySelector('.fase-2b');

let fase3 = document.querySelector('.fase-3');
let fase3b = document.querySelector('.fase-3b');

let fase4 = document.querySelector('.fase-4');
let fase4b = document.querySelector('.fase-4b');

fase2.addEventListener("mouseenter", function (event) {
    fase2.classList.add("is-active");
    fase2b.classList.add("is-active");
}, false);

fase2.addEventListener("mouseleave", function (event) {
    fase2.classList.remove("is-active")
    fase2b.classList.remove("is-active")
}, false);

fase2b.addEventListener("mouseenter", function (event) {
    fase2.classList.add("is-active");
    fase2b.classList.add("is-active");
}, false);

fase2b.addEventListener("mouseleave", function (event) {
    fase2.classList.remove("is-active")
    fase2b.classList.remove("is-active")
}, false);

fase3.addEventListener("mouseenter", function (event) {
    fase3.classList.add("is-active");
    fase3b.classList.add("is-active");
}, false);

fase3.addEventListener("mouseleave", function (event) {
    fase3.classList.remove("is-active")
    fase3b.classList.remove("is-active")
}, false);

fase3b.addEventListener("mouseenter", function (event) {
    fase3.classList.add("is-active");
    fase3b.classList.add("is-active");
}, false);

fase3b.addEventListener("mouseleave", function (event) {
    fase3.classList.remove("is-active")
    fase3b.classList.remove("is-active")
}, false);

fase4.addEventListener("mouseenter", function (event) {
    fase4.classList.add("is-active");
    fase4b.classList.add("is-active");
}, false);

fase4.addEventListener("mouseleave", function (event) {
    fase4.classList.remove("is-active")
    fase4b.classList.remove("is-active")
}, false);

fase4b.addEventListener("mouseenter", function (event) {
    fase4.classList.add("is-active");
    fase4b.classList.add("is-active");
}, false);

fase4b.addEventListener("mouseleave", function (event) {
    fase4.classList.remove("is-active")
    fase4b.classList.remove("is-active")
}, false);

