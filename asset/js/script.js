"use strict";

let introDone = 0;
let intro = document.getElementById("introLooped");
$('body').addClass('stop-scrolling');
$('body').bind('touchmove', function(e){e.preventDefault()});


function changeToEndIntro() {
    intro.removeAttribute("onclick");
    intro.pause();
    intro.getElementsByTagName('source')[0].src="asset/medias/logo_animation_end_v2.mp4";
    intro.loop = false;
    intro.load();
    intro.play();
    $('body').unbind('touchmove');
    $('body').classList.remove("stop-scrolling");
}

function wait(ms){ // Fonction pour attendre
    var start = new Date().getTime();
    var end = start;
    while(end < start + ms) {
      end = new Date().getTime();
   }
 }

function stopIntro(){
    wait(5000);
    intro.pause(); // On pause la vidéo
    intro.getElementsByTagName('source')[0].src=''; // On vide la source
    /*intro.load();*/ // On recharge la vidéo vide pour l'actualiser
    /* intro.classList.add("hidden"); */ // On ajoute la class hidden à la vidéo
}