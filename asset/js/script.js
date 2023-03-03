"use strict";

let introDone = 0;
let intro = document.getElementById("introLooped");


function changeToEndIntro() {
    intro.removeAttribute("onclick");
    intro.pause();
    intro.getElementsByTagName('source')[0].src="asset/medias/logo_animation_end_v3.mp4";
    intro.loop = false;
    intro.load();
    intro.play();
}

/* function wait(ms){ // Fonction pour attendre, unused
    var start = new Date().getTime();
    var end = start;
    while(end < start + ms) {
      end = new Date().getTime();
   }
} */

/* function stopIntro(){ // fonction qui avait pour but de gérer un délai, unused
    wait(5000);
    intro.pause(); // On pause la vidéo
    intro.getElementsByTagName('source')[0].src=''; // On vide la source
    /*intro.load();*/ // On recharge la vidéo vide pour l'actualiser
    /* intro.classList.add("hidden"); // On ajoute la class hidden à la vidéo
} */
const scrollContainer = () => {
    return document.documentElement; // Cet élément retourne l'élément html du document
};

const pageProgressBar = document.getElementById("progress-bar") //On récupère la progress bar par son id
document.addEventListener("scroll", () => {
  const pourcentageScroll =
      (scrollContainer().scrollTop / (scrollContainer().scrollHeight - scrollContainer().clientHeight)) * 100; //On calcule le pourcentage de scroll
      console.log(scrollContainer().scrollTop)
  
  pageProgressBar.style.width = `${pourcentageScroll}%` //On attribue ce pourcentage à la width de la progressBar
});

const divCopy = document.getElementById("shareCopy")
if(divCopy){
    divCopy.addEventListener("click", () => {
        navigator.clipboard.writeText(window.location.href);
        alert("Lien copié : " + window.location.href);
    })
}

// Easter egg, si on clique sur la photo, on remonte au menu
const photo = document.getElementById("photo") // on récupère l'élément
if(photo){ // on vérifie que l'élément existe
    photo.addEventListener("click", () => {
        document.body.scrollIntoView({behavior: "smooth"}) // on scroll vers le haut de la page
    });
}


// Bouton du backoffice pour prendre le texte existant comme base pour le modifier
const boutonBase = document.getElementById("baseTextArea")
if (boutonBase){
    boutonBase.addEventListener("click", () => {
        document.getElementById("texttoupdate").value = document.getElementById("texttoupdate").placeholder
    })
}
