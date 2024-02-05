/*!
* Start Bootstrap - Personal v1.0.1 (https://startbootstrap.com/template-overviews/personal)
* Copyright 2013-2023 Start Bootstrap
* Licensed under MIT (https://github.com/StartBootstrap/startbootstrap-personal/blob/master/LICENSE)
*/
// This file is intentionally blank
// Use this file to add JavaScript to your project

document.addEventListener('DOMContentLoaded', function() {
    let elsvideo = document.querySelectorAll('[data-js-video]');
    console.log(elsvideo);

    // Parcourir tous les éléments de la NodeList et appliquer les actions à chacun
    elsvideo.forEach(function(video) {
        // Définit le volume de la vidéo à 0 (muet)
        video.volume = 0;

        // Lorsque la vidéo se termine, on la remet au début et on la lit à nouveau
        video.addEventListener('ended', function() {
            this.currentTime = 0;
            this.play();
        }, false);

        // Démarrer la vidéo
        video.play();
    });
});