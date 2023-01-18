"use strict";

let introDone = 0;
let intro = document.getElementById("introLooped");

function changeToEndIntro() {
    intro.removeAttribute("onclick");
    intro.pause();
    intro.getElementsByTagName('source')[0].src="asset/medias/logo_animation_end.mp4";
    intro.loop = false;
    setTimeout(stopIntro(), 4350);
    intro.load();
    intro.play();
}

function stopIntro(){
    intro;
    intro.pause();
    intro.removeAttribute("src"); // On vide la source
    intro.load();
    intro.classList.add("hidden");
}