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

$(".btn-primary").on("click", function(e) {
    description = $(this).parent().find('.card-text').text();
    title = $(this).parent().find('.card-title').text();
    file = $(this).parent().find('#file').attr("value");
    image = $(this).parent().find('.image');
    $(".carousel-inner").html("");
    for (i = 0; i < image.length; i++) {
        if (i == 0)
            html = '<div class="carousel-item active"> <' +
            'img src= "' + image[i].value + '"' +
            'class = "w-75"' +
            'id = "productone"' +
            'alt = "..." >' +
            '</div>';
        else
            html = '<div class="carousel-item"> <' +
            'img src= "' + image[i].value + '"' +
            'class = "w-75"' +
            'id = "productone"' +
            'alt = "..." >' +
            '</div>';
        $(".carousel-inner").prepend(html);
    }
    $("#fichier_d_n").attr("href", file);
    $(".description").html("<h3>" + title + "</h3>" + description);
});


// modifiyin text of card 

const text = document.getElementsByClassName("card-text");
const length = 250; 
for (let index = 0; index < text.length; index++) {
    
    var myTruncatedString = text[index].innerHTML.substring(0,length);
    text[index].innerText = myTruncatedString + "...etc.";
}