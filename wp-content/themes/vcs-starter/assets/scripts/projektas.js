
"use strict";
//Fifth section (work gallery block):
$(document).ready(function () {

    $('[data-fancybox="gallery1"]').fancybox({
        loop: true,
        animationEffect: "zoom",
    });
    //Sixth section (work process block - video):
    $('[data-fancybox="gallery2"]').fancybox({
        loop: true,
        animationEffect: "zoom-in-out",
    });
    //Loaded photos:
    $('[data-fancybox="gallery3"]').fancybox({
        loop: true,
        animationEffect: "zoom",
    });

})