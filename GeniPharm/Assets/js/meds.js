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

// Begin navbar -------------

var nav = document.getElementById("nav-bar");
var link = document.getElementsByClassName("nav-link");
var image = document.getElementById("logo_img");
var navb = document.getElementById("nav-b");
var btns = document.getElementById("scroll");
var par = document.getElementById("bien");
var imag = document.getElementById("img_logo");
var toggler = document.getElementById("btn-togler");
var icon = document.getElementById("icon-togler");

nav.addEventListener("mouseover", function(){
  'use strict';
  nav.style.height = "70px";
  nav.style.background = "rgb(43,79,97)";
  nav.style.background = "linear-gradient(90deg, rgba(0,156,225,1) 0%, rgba(6,179,214,1) 100%);";
  par.style.color = "#000000";
  toggler.style.borderColor = "#000000";
  toggler.style.borderRadius="2px";
  icon.style.color = "#000";
  nav.style.transition = "all .5s ease";
  image.src = "Assets/img/logo.png";
  for (let index = 0; index < link.length; index++) {
    link[index].style.color = "#000000";
    link[index].style.fontWeight = "500";
    link[index].style.fontSize = "1em";
    link[index].style.transition = "all .1s ease";
    
  } 

})

nav.addEventListener("mouseout", function(){
  'use strict';
  nav.style.height = "70px";
  nav.style.background = "rgb(255, 255, 255)";
  // nav.style.background = " linear-gradient(90deg, rgba(255,255,255,1) 0%, rgba(255,255,255,0.10127801120448177) 100%);";
  nav.style.transition = "all 1s ease";
  toggler.style.borderRadius="2px";
  icon.style.color = "#000";
  image.src = "Assets/img/logo.png";
  par.style.color = "#000000";
  imag.style.borderRight = "1px solid #000000";
  navb.style.borderColor = 'rgb(0, 0, 0, 0)';
  for (let index = 0; index < link.length; index++) {
    link[index].style.color = "#000000";
    link[index].style.fontWeight = "500";
    link[index].style.fontSize = "1em";
    link[index].style.transition = "all .1s ease";
    
    
  } 

})
function set(){
  'use strict';
  nav.style.height = "70px";
  nav.style.background = "rgb(255, 255, 255)";
  
  // nav.style.background = " linear-gradient(90deg, rgba(255,255,255,1) 0%, rgba(255,255,255,0.10127801120448177) 100%);";
  nav.style.transition = "all 1s ease";
  image.src = "Assets/img/logo.png";
  par.style.color = "#000000";
  navb.style.borderColor = 'rgba(255, 255, 255, 0.3)';
  imag.style.borderRight = "1px solid #000000";
  toggler.style.borderRadius="2px";
  toggler.style.borderColor = "#000";
  icon.style.color = "#000";
  for (let index = 0; index < link.length; index++) {
    link[index].style.color = "#000000";
    link[index].style.fontWeight = "500";
    link[index].style.fontSize = "1em";
    link[index].style.transition = "all .1s ease";
    
    
  } 
}
function reset(check){
  'use strict';
  if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50){
    check = false;
  } else {
    check = true ; 
  }
  if (check){
    nav.style.height = "75px";
    nav.style.backgroundColor = "transparent";
    nav.style.transition = "all .5s easet";
    toggler.style.borderRadius="2px";
    toggler.style.borderColor = "rgba(255, 255, 255, 0.4)";
    icon.style.color = "#000";
    par.style.color = "#000";
    nav.style.background = "linear-gradient(to right, rgba(255,0,0,0), rgba(255,0,0,0))";
    image.src = "Assets/img/logo.png";
    imag.style.borderRight = "1px solid rgba(255, 255, 255, 0.3)";
    for (let index = 0; index < link.length; index++) {
      link[index].style.color = "#000";
      link[index].style.fontSize = "1.12em";
      link[index].style.fontWeight = "500"; 
      link[index].style.transition = "all .4s ease";
    }
  }
   
}

nav.onmouseout = function(){reset()};

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
function scrolling(){
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
btns.addEventListener("click", topFunction);
// End Navbar ---------------

// Navigation in the web site


$("#btn-accueil").click(function () {
  $("html, body").animate({ scrollTop: $("#accueil").offset().top - $("#nav-bar").height() }, 100);
  return true;
});

$("#btn-propos").click(function () {
  $("html, body").animate({ scrollTop: $("#information").offset().top - $("#nav-bar").height() }, 100);
  return true;
});

$("#navbarDropdown").click(function () {
  $("html, body").animate({ scrollTop: $("#big-section").offset().top - $("#nav-bar").height() }, 100);
  return true;
});

$("#btn-galerie").click(function () {
  $("html, body").animate({ scrollTop: $("#galerie").offset().top - $("#nav-bar").height() }, 100);
  return true;
});

$("#btn-contact").click(function () {
  $("html, body").animate({ scrollTop: $("#contact").offset().top - $("#nav-bar").height() }, 100);
  return true;
});


//togle active class

$(document).ready(function() {
  $(".navbar-nav li a ").click(function () {
      $(".navbar-nav li a").removeClass("active-link");
      $(this).addClass("active-link");     
  });
});


// Start Pagination 

let rowOne = document.getElementById("rowone");
let rowTwo = document.getElementById("rowtwo");
let rowThree = document.getElementById("rowthree");
let pageOne = document.getElementById("p1");
let pageTwo = document.getElementById("p2");





pageOne.addEventListener("click", ()=> {
  pageOne.style.color = "#ddd";
  pageTwo.style.color = "rgba(5, 158, 226, 0.8) ";
  if (rowOne.classList.contains("notdisplaying") && rowTwo.classList.contains("notdisplaying")) {
    rowOne.classList.remove("notdisplaying");
    rowTwo.classList.remove("notdisplaying");

    rowOne.classList.add("displaying");
    rowTwo.classList.add("displaying");

    rowThree.classList.remove("displaying");
    rowThree.classList.add("notdisplaying");
  }
})

pageTwo.addEventListener("click", ()=> {
  pageOne.style.color = "rgba(5, 158, 226, 0.8) ";
  pageTwo.style.color = "#ddd";
  if (rowThree.classList.contains("notdisplaying") ) {
    rowOne.classList.add("notdisplaying");
    rowTwo.classList.add("notdisplaying");

    rowThree.classList.remove("notdisplaying");
    rowThree.classList.add("displaying");
  }
})


// begin carousel 

let products = document.getElementsByClassName("btn-primary");
let img1 = document.getElementById("productone");
console.log(img1);
let img2 = document.getElementById("producttwo");
for (let index = 0; index < products.length; index++) {
  
  if(products[index].getAttribute("value") === "FERTOP") {
    products[index].addEventListener("click", ()=>{
      img1.src = "Assets/img/medicaments/a1.jpg";
      img2.src = "Assets/img/medicaments/b1.jpg";
    })
  } else if (products[index].getAttribute("value") === "GYNOVAIRE") {
    products[index].addEventListener("click", ()=>{
    img1.src = "Assets/img/medicaments/a2.jpg";
    img2.src = "Assets/img/medicaments/b2.jpg";
  })
  }else if (products[index].getAttribute("value") === "GYNOVAIRE PLUS") {
    products[index].addEventListener("click", ()=>{
    img1.src = "Assets/img/medicaments/a3.jpg";
    img2.src = "Assets/img/medicaments/b3.jpg";
  })
  }else if (products[index].getAttribute("value") === "HEPATIX") {
    products[index].addEventListener("click", ()=>{
    img1.src = "Assets/img/medicaments/a4.jpg";
    img2.src = "Assets/img/medicaments/b4.jpg";
  })
  }else if (products[index].getAttribute("value") === "MAXI CARDIO") {
    products[index].addEventListener("click", ()=>{
    img1.src = "Assets/img/medicaments/a5.jpg";
    img2.src = "Assets/img/medicaments/b5.jpg";
  })
  }else if (products[index].getAttribute("value") === "PROMENO") {
    products[index].addEventListener("click", ()=>{
    img1.src = "Assets/img/medicaments/a6.jpg";
    img2.src = "Assets/img/medicaments/b6.jpg";
  })
  }else if (products[index].getAttribute("value") === "RICOVRI") {
    products[index].addEventListener("click", ()=>{
    img1.src = "Assets/img/medicaments/a7.jpg";
    img2.src = "Assets/img/medicaments/b7.jpg";
  })
  }else if (products[index].getAttribute("value") === "SYNAPSE") {
    products[index].addEventListener("click", ()=>{
    img1.src = "Assets/img/medicaments/a8.jpg";
    img2.src = "Assets/img/medicaments/b8.jpg";
  })
  }
  
}











