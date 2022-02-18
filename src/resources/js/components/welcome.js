import Typed from 'typed.js';
let textJalan = $("#welcome_text_jumbotron").text();

var typed = new Typed("#typed", {
    strings: [
        textJalan,
    ],
    showCursor: false,
    typeSpeed: 30,
    backSpeed: 30,
    fadeout: true,
    startDelay: 120,
    loop: true
});