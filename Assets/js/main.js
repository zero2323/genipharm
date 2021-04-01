/*global window console document $*/


/*begin carousel */
var slider = document.getElementsByClassName('slider');
var carousel = document.getElementsByClassName('carousel-item');

function setHeight(div) {
    'use strict';

    var vuee = window.innerHeight;
    var i = 0;
    while (i < div.length) {
        div[i].setAttribute('style', 'height:' + vuee + 'px');
        i += 1;
    }
}
slider[0] = setHeight(slider);
carousel[0] = setHeight(carousel);

/*End Carousel */



// Navigation in the web site


$("#btn-accueil").click(function() {
    $("html, body").animate({ scrollTop: $("#accueil").offset().top - $("#nav-bar").height() }, 100);
    return true;
});

$("#btn-propos").click(function() {
    $("html, body").animate({ scrollTop: $("#information").offset().top - $("#nav-bar").height() }, 100);
    return true;
});

$("#navbarDropdown").click(function() {
    $("html, body").animate({ scrollTop: $("#big-section").offset().top - $("#nav-bar").height() }, 100);
    return true;
});

$("#btn-galerie").click(function() {
    $("html, body").animate({ scrollTop: $("#galerie").offset().top - $("#nav-bar").height() }, 100);
    return true;
});

$("#btn-contact").click(function() {
    $("html, body").animate({ scrollTop: $("#contact").offset().top - $("#nav-bar").height() }, 100);
    return true;
});


//togle active class

$(document).ready(function() {
    $(".navbar-nav li a ").click(function() {
        $(".navbar-nav li a").removeClass("active-link");
        $(this).addClass("active-link");
    });
});



//