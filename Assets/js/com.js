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

nav.addEventListener("mouseover", function() {
    'use strict';
    nav.style.height = "70px";
    nav.style.background = "rgb(43,79,97)";
    nav.style.background = "linear-gradient(90deg, rgba(0,156,225,1) 0%, rgba(6,179,214,1) 100%);";
    par.style.color = "#000000";
    toggler.style.borderColor = "#000000";
    toggler.style.borderRadius = "2px";
    icon.style.color = "#000";
    nav.style.transition = "all .5s ease";
    image.src = base_url + "Assets/img/logo.png";
    for (let index = 0; index < link.length; index++) {
        link[index].style.color = "#000000";
        link[index].style.fontWeight = "500";
        link[index].style.fontSize = "1em";
        link[index].style.transition = "all .1s ease";

    }

})

nav.addEventListener("mouseout", function() {
    'use strict';
    nav.style.height = "70px";
    nav.style.background = "rgb(255, 255, 255)";
    // nav.style.background = " linear-gradient(90deg, rgba(255,255,255,1) 0%, rgba(255,255,255,0.10127801120448177) 100%);";
    nav.style.transition = "all 1s ease";
    toggler.style.borderRadius = "2px";
    icon.style.color = "#000";
    image.src = base_url + "Assets/img/logo.png";
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

function set() {
    'use strict';
    nav.style.height = "70px";
    nav.style.background = "rgb(255, 255, 255)";

    // nav.style.background = " linear-gradient(90deg, rgba(255,255,255,1) 0%, rgba(255,255,255,0.10127801120448177) 100%);";
    nav.style.transition = "all 1s ease";
    image.src = base_url + "Assets/img/logo.png";
    par.style.color = "#000000";
    navb.style.borderColor = 'rgba(255, 255, 255, 0.3)';
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
        toggler.style.borderColor = "rgba(255, 255, 255, 0.4)";
        icon.style.color = "#000";
        par.style.color = "#000";
        nav.style.background = "linear-gradient(to right, rgba(255,0,0,0), rgba(255,0,0,0))";
        image.src = base_url + "Assets/img/logo.png";
        imag.style.borderRight = "1px solid rgba(255, 255, 255, 0.3)";
        for (let index = 0; index < link.length; index++) {
            link[index].style.color = "#000";
            link[index].style.fontSize = "1.12em";
            link[index].style.fontWeight = "500";
            link[index].style.transition = "all .4s ease";
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
// End Navbar ---------------




// Opening the modal when entring the first time after sing up 
if (true) {
    $(document).ready(function() {
        $('#staticBackdrop').modal('show');
    });
}

// end the modal function
var shoppingCart = (function() {
    // =============================
    // Private methods and propeties
    // =============================
    cart = [];

    // Constructor
    function Item(name, price, count) {
        this.name = name;
        this.price = price;
        this.count = count;
    }

    // Save cart
    function saveCart() {
        sessionStorage.setItem('shoppingCart', JSON.stringify(cart));
    }

    // Load cart
    function loadCart() {
        cart = JSON.parse(sessionStorage.getItem('shoppingCart'));
    }
    if (sessionStorage.getItem("shoppingCart") != null) {
        loadCart();
    }


    // =============================
    // Public methods and propeties
    // =============================
    var obj = {};

    // Add to cart
    obj.addItemToCart = function(name, price, count) {
            for (var item in cart) {
                if (cart[item].name === name) {
                    cart[item].count++;
                    saveCart();
                    return;
                }
            }
            var item = new Item(name, price, count);
            cart.push(item);
            saveCart();
        }
        // Set count from item
    obj.setCountForItem = function(name, count) {
        for (var i in cart) {
            if (cart[i].name === name) {
                cart[i].count = count;
                break;
            }
        }
    };
    // Remove item from cart
    obj.removeItemFromCart = function(name) {
        for (var item in cart) {
            if (cart[item].name === name) {
                cart[item].count--;
                if (cart[item].count === 0) {
                    cart.splice(item, 1);
                }
                break;
            }
        }
        saveCart();
    }

    // Remove all items from cart
    obj.removeItemFromCartAll = function(name) {
        for (var item in cart) {
            if (cart[item].name === name) {
                cart.splice(item, 1);
                break;
            }
        }
        saveCart();
    }

    // Clear cart
    obj.clearCart = function() {
        cart = [];
        saveCart();
    }

    // Count cart 
    obj.totalCount = function() {
        var totalCount = 0;
        for (var item in cart) {
            totalCount += cart[item].count;
        }
        return totalCount;
    }

    // Total cart
    obj.totalCart = function() {
        var totalCart = 0;
        for (var item in cart) {
            totalCart += cart[item].price * cart[item].count;
        }
        return Number(totalCart.toFixed(2));
    }

    // List cart
    obj.listCart = function() {
        var cartCopy = [];
        for (i in cart) {
            item = cart[i];
            itemCopy = {};
            for (p in item) {
                itemCopy[p] = item[p];

            }
            itemCopy.total = Number(item.price * item.count).toFixed(2);
            cartCopy.push(itemCopy)
        }
        return cartCopy;
    }

    // cart : Array
    // Item : Object/Class
    // addItemToCart : Function
    // removeItemFromCart : Function
    // removeItemFromCartAll : Function
    // clearCart : Function
    // countCart : Function
    // totalCart : Function
    // listCart : Function
    // saveCart : Function
    // loadCart : Function
    return obj;
})();



// add to cart 
// Add item
$('.add-to-cart').click(function(event) {
    event.preventDefault();
    var name = $(this).data('name');
    var price = Number($(this).data('price'));
    shoppingCart.addItemToCart(name, price, 1);
    displayCart();
});

$('.clear-cart').click(function() {
    shoppingCart.clearCart();
    displayCart();
});


function displayCart() {
    var cartArray = shoppingCart.listCart();
    var output = "";
    for (var i in cartArray) {
        output += "<tr>" +
            "<td>" + cartArray[i].name + "</td>" +
            "<td>(" + cartArray[i].price + ")</td>" +
            "<td><div class='input-group'><button class='minus-item input-group-addon btn btn-primary' data-name=" + cartArray[i].name + ">-</button>" +
            "<input type='number' class='item-count form-control' data-name='" + cartArray[i].name + "' value='" + cartArray[i].count + "'>" +
            "<button class='plus-item btn btn-primary input-group-addon' data-name=" + cartArray[i].name + ">+</button></div></td>" +
            "<td><button class='delete-item btn btn-danger' data-name=" + cartArray[i].name + ">X</button></td>" +
            " = " +
            "<td>" + cartArray[i].total + "</td>" +
            "</tr>";
    }
    $('.show-cart').html(output);
    $('.total-cart').html(shoppingCart.totalCart());
    $('.total-count').html(shoppingCart.totalCount());
}
// display cart 
// Delete item button

$('.show-cart').on("click", ".delete-item", function(event) {
    var name = $(this).data('name')
    shoppingCart.removeItemFromCartAll(name);
    displayCart();
})


// -1
$('.show-cart').on("click", ".minus-item", function(event) {
        var name = $(this).data('name')
        shoppingCart.removeItemFromCart(name);
        displayCart();
    })
    // +1
$('.show-cart').on("click", ".plus-item", function(event) {
    var name = $(this).data('name')
    shoppingCart.addItemToCart(name);
    displayCart();
})

// Item count input
$('.show-cart').on("change", ".item-count", function(event) {
    var name = $(this).data('name');
    var count = Number($(this).val());
    shoppingCart.setCountForItem(name, count);
    displayCart();
});


displayCart();