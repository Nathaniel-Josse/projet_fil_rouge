function changeToEndIntro() {
    document.getElementById("introLooped").pause();
    document.getElementById("introLooped").getElementsByTagName('source')[0].src="asset/medias/logo_animation_end.mp4";
    document.getElementById("introLooped").loop = false;
    document.getElementById("introLooped").load();
    document.getElementById("introLooped").play();
}