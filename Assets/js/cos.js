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


// // Start Pagination 

// let rowOne = document.getElementById("rowone");
// let rowTwo = document.getElementById("rowtwo");
// let rowThree = document.getElementById("rowthree");
// let pageOne = document.getElementById("p1");
// let pageTwo = document.getElementById("p2");





// pageOne.addEventListener("click", () => {
//     pageOne.style.color = "#ddd";
//     pageTwo.style.color = "rgba(5, 158, 226, 0.8) ";
//     if (rowOne.classList.contains("notdisplaying") && rowTwo.classList.contains("notdisplaying")) {
//         rowOne.classList.remove("notdisplaying");
//         rowTwo.classList.remove("notdisplaying");

//         rowOne.classList.add("displaying");
//         rowTwo.classList.add("displaying");

//         rowThree.classList.remove("displaying");
//         rowThree.classList.add("notdisplaying");
//     }
// })

// pageTwo.addEventListener("click", () => {
//     pageOne.style.color = "rgba(5, 158, 226, 0.8) ";
//     pageTwo.style.color = "#ddd";
//     if (rowThree.classList.contains("notdisplaying")) {
//         rowOne.classList.add("notdisplaying");
//         rowTwo.classList.add("notdisplaying");

//         rowThree.classList.remove("notdisplaying");
//         rowThree.classList.add("displaying");
//     }
// })


// // begin carousel 

// let products = document.getElementsByClassName("btn-primary");
// let img1 = document.getElementById("productone");
// console.log(img1);
// let img2 = document.getElementById("producttwo");
// for (let index = 0; index < products.length; index++) {

//     if (products[index].getAttribute("value") === "FERTOP") {
//         products[index].addEventListener("click", () => {
//             img1.src = base_url + "Assets/img/cos/a1.jpg";

//         })
//     } else if (products[index].getAttribute("value") === "GYNOVAIRE") {
//         products[index].addEventListener("click", () => {
//             img1.src = base_url + "Assets/img/cos/a2.jpg";

//         })
//     } else if (products[index].getAttribute("value") === "GYNOVAIRE PLUS") {
//         products[index].addEventListener("click", () => {
//             img1.src = base_url + "Assets/img/cos/a3.jpg";

//         })
//     } else if (products[index].getAttribute("value") === "HEPATIX") {
//         products[index].addEventListener("click", () => {
//             img1.src = base_url + "Assets/img/cos/a4.jpg";
//         })
//     } else if (products[index].getAttribute("value") === "MAXI CARDIO") {
//         products[index].addEventListener("click", () => {
//             img1.src = base_url + "Assets/img/cos/a5.jpg";

//         })
//     } else if (products[index].getAttribute("value") === "PROMENO") {
//         products[index].addEventListener("click", () => {
//             img1.src = base_url + "Assets/img/cos/a6.jpg";

//         })
//     } else if (products[index].getAttribute("value") === "RICOVRI") {
//         products[index].addEventListener("click", () => {
//             img1.src = base_url + "Assets/img/cos/a7.jpg";

//         })
//     }
// }