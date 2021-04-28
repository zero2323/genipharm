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

let compl = document.getElementById("show-compl");
let para = document.getElementById("show-cos");
let btn_produit = document.querySelectorAll(".btn-produit");

compl.addEventListener("click", ()=> {
    btn_produit[0].href = "page/compliments";
})
para.addEventListener("click", ()=> {
    btn_produit[0].href = "page/parapharma";
})




// editing domaine 

let complement = document.getElementById("typeone");
let dermo = document.getElementById("typetwo");
let domaine_com = document.getElementById("domaine-comp");
let icon_wrapper = document.getElementById("icon-wrapper");
let domaine_dermo = document.getElementById("domaine-dermo");
let back = document.getElementById("back-icon");


complement.addEventListener("click", ()=> {
    dermo.classList.add("hide");
    complement.style.borderRight = "0px";
    domaine_com.classList.add("show");
    domaine_com.classList.remove("hide");
    icon_wrapper.style.display = "flex"
    icon_wrapper.style.justifyContent = "center";
    icon_wrapper.style.alignItems = "center";
    back.classList.remove("hide");
    
})

dermo.addEventListener("click", ()=> {
    domaine_dermo.classList.remove("hide");
    domaine_dermo.classList.add("show");
    complement.style.borderRight = "0px";
    complement.classList.add("hide");
    icon_wrapper.style.display = "flex"
    icon_wrapper.style.justifyContent = "center";
    icon_wrapper.style.alignItems = "center";
    back.classList.remove("hide");
    
})

back.addEventListener("click", ()=> {
    complement.classList.add("show");
    dermo.classList.add("show");
    dermo.classList.remove("hide");
    complement.classList.remove("hide");
    domaine_com.classList.add("hide");
    domaine_com.classList.remove("show");
    domaine_dermo.classList.remove("show");
    domaine_dermo.classList.add("hide");
    complement.style.borderRight = "solid 1px rgba(0, 0, 0, 0.1)";
    back.classList.add("hide");
    back.classList.remove("show");
})
// ENd editing domaine 
