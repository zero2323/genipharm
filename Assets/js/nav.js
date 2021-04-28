// Begin navbar -------------
let url = window.location.pathname;
var nav = document.getElementById("nav-bar");
var link = document.getElementsByClassName("nav-link");
var linktwo = document.getElementsByClassName("nav-item");
var image = document.getElementById("logo_img");
var navb = document.getElementById("nav-b");
var btns = document.getElementById("scroll");
var imag = document.getElementById("img_logo");
var toggler = document.getElementById("btn-togler");
var icon = document.getElementById("icon-togler");
let drop = document.querySelectorAll(".dropdown-menu");
let social  = document.querySelectorAll(".soc");

nav.addEventListener("mouseover", function() {
    'use strict';
    nav.style.height = "70px";
    nav.style.background = "rgba(255, 255, 255, 0.8)";
    nav.style.background = "linear-gradient(to left, rgba(255, 255, 255, 1) 50%, transparent 50%) right";
    nav.style.backgroundSize = "200%";
    toggler.style.borderColor = "#000000";
    toggler.style.borderRadius = "2px";
    icon.style.color = "#000";
    nav.style.transition = "all 1s ease";
    image.src = base_url + "Assets/img/logo.png";
    for (let index = 0; index < link.length; index++) {
        link[index].style.color = "#000000";
        link[index].style.fontWeight = "500";
        link[index].style.fontSize = "1em";
        link[index].style.transition = "all .1s ease";
    }
    for (let index = 0; index < social.length; index++) {
        social[index].style.color = "#000000";
        
    }

})

nav.addEventListener("mouseout", function() {
    'use strict';
    nav.style.height = "70px";
    nav.style.background = "rgb(255, 255, 255)";
    nav.style.transition = "all 1s ease";
    toggler.style.borderRadius = "2px";
    icon.style.color = "#000";
    image.src = base_url + "Assets/img/logo.png";
    imag.style.borderRight = "1px solid #000000";
    navb.style.borderColor = 'rgb(255, 255,255, 0.3)';
    for (let index = 0; index < link.length; index++) {
        link[index].style.color = "#000";
        link[index].style.fontWeight = "500";
        link[index].style.fontSize = "1em";
        link[index].style.transition = "all .1s ease";
    }
    for (let index = 0; index < social.length; index++) {
        social[index].style.color = "#000000";
        
    }

})

function set() {
    'use strict';
    nav.style.height = "70px";
    nav.style.background = "rgb(255, 255, 255)";
    // nav.style.background = " linear-gradient(90deg, rgba(255,255,255,1) 0%, rgba(255,255,255,0.10127801120448177) 100%);";
    nav.style.transition = "all 1s ease";
    image.src = base_url + "Assets/img/logo.png";
    navb.style.borderColor = 'rgba(0,0,0, 0.3)';
    imag.style.borderRight = "1px solid #000000";
    toggler.style.borderRadius = "2px";
    toggler.style.borderColor = "#000";
    icon.style.color = "#000";
    for (let index = 0; index < link.length; index++) {
        link[index].style.color = "#000000";
        link[index].style.fontWeight = "500";
        link[index].style.fontSize = "1em";
        link[index].style.transition = "all .1s ease";
    }
    for (let index = 0; index < social.length; index++) {
        social[index].style.color = "#000000";
        
    }
}

function reset(check) {
    'use strict';
    if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
        check = false;
    } else {
        check = true;
    }
    if (check) {
        nav.style.height = "75px";
        nav.style.backgroundColor = "transparent";
        nav.style.transition = "all .5s easet";
        toggler.style.borderRadius = "2px";
        toggler.style.borderColor = "rgba(255, 255, 255, 0.8)";
        icon.style.color = "#fff";
        nav.style.background = "linear-gradient(to right, rgba(255,0,0,0), rgba(255,0,0,0))";
        if (url != "/genipharm/" ){
            image.src = base_url + "Assets/img/logo.png";
        } else {
            image.src = base_url + "Assets/img/logo_new.png";
        }
        
        imag.style.borderRight = "1px solid rgba(255, 255, 255, 0.6)";
        for (let index = 0; index < link.length; index++) {
            link[index].style.color = "#fff";
            link[index].style.fontSize = "1.00em";
            link[index].style.fontWeight = "500";
            link[index].style.transition = "all .4s ease";
        }
        for (let index = 0; index < social.length; index++) {
            social[index].style.color = "#f2f2f2";
            
        }
    }

}

nav.onmouseout = function() { reset() };

function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        btns.style.display = "block";
    } else {
        btns.style.display = "none";
    }
}

function scrolling() {
    if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
        set();

    } else {
        reset(false);

    }
}
window.onscroll = function() {
    scrolling();
};
window.addEventListener("scroll", scrollFunction);


let btn_comp = document.getElementById("show-compl");
let btn_cos = document.getElementById("show-cos");

let prod_wrap = document.querySelectorAll(".compl");

btn_comp.addEventListener("click", ()=> {
    if (!prod_wrap[0].classList.contains("prod-show")) {
        prod_wrap[0].classList.add("prod-show");
        prod_wrap[1].classList.remove("prod-show");
    }
})

btn_cos.addEventListener("click", ()=> {
    if (!prod_wrap[1].classList.contains("prod-show")) {
        prod_wrap[1].classList.add("prod-show");
        prod_wrap[0].classList.remove("prod-show");
    }
})



// modify the carousel 

const domaine_title = document.querySelectorAll(".titre");


// create the counter function 
function animateValue(id, start, end, duration) {
    if (start === end) return;
    var range = end - start;
    var current = start;
    var increment = end > start? 1 : -1;
    var stepTime = Math.abs(Math.floor(duration / range));
    var obj = document.getElementById(id);
    var timer = setInterval(function() {
        current += increment;
        obj.innerHTML = current;
        if (current == end) {
            clearInterval(timer);
        }
    }, stepTime);
}

animateValue("chiffre-produit", 0, 13, 2000);
animateValue("chiffre-employe", 0, 50, 2000);
animateValue("chiffre-activite",2000, 2020, 2000);

