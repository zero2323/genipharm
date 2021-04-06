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
            "<td><div class='input-group'><button class='minus-item input-group-addon btn btn-primary' data-name='" + cartArray[i].name + "'>-</button>" +
            "<input type='number' class='item-count form-control' data-name='" + cartArray[i].name + "' value='" + cartArray[i].count + "'>" +
            "<button class='plus-item btn btn-primary input-group-addon' data-name='" + cartArray[i].name + "'>+</button></div></td>" +
            "<td><button class='delete-item btn btn-danger' data-name='" + cartArray[i].name + "'>X</button></td>" +
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


function parapharm(p, search) {
    if (search == null)
        $.ajax(base_url + 'getcommand/p/' + p, {
            beforeSend: function() {
                $('.parapharm').html('                    <div class="col-12 title">' +
                    '<div class="clip ">Produits Parapharmaceutique</div>' +
                    '</div>' + '<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="margin: auto; background: rgb(241, 242, 243,0) none repeat scroll 0% 0%; display: block;" width="200px" height="200px" viewBox="0 0 100 100" preserveAspectRatio="xMidYMid">' +
                    '<g transform="rotate(0 50 50)">' +
                    '  <rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#ffb856">' +
                    '    <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.9166666666666666s" repeatCount="indefinite"></animate>' +
                    '  </rect>' +
                    '</g><g transform="rotate(30 50 50)">' +
                    '  <rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#ffb856">' +
                    '    <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.8333333333333334s" repeatCount="indefinite"></animate>' +
                    '  </rect>' +
                    '</g><g transform="rotate(60 50 50)">' +
                    '  <rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#ffb856">' +
                    '    <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.75s" repeatCount="indefinite"></animate>' +
                    '  </rect>' +
                    '</g><g transform="rotate(90 50 50)">' +
                    '  <rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#ffb856">' +
                    '    <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.6666666666666666s" repeatCount="indefinite"></animate>' +
                    '  </rect>' +
                    '</g><g transform="rotate(120 50 50)">' +
                    '  <rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#ffb856">' +
                    '    <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.5833333333333334s" repeatCount="indefinite"></animate>' +
                    '  </rect>' +
                    '</g><g transform="rotate(150 50 50)">' +
                    '  <rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#ffb856">' +
                    '    <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.5s" repeatCount="indefinite"></animate>' +
                    '  </rect>' +
                    '</g><g transform="rotate(180 50 50)">' +
                    '  <rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#ffb856">' +
                    '    <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.4166666666666667s" repeatCount="indefinite"></animate>' +
                    '  </rect>' +
                    '</g><g transform="rotate(210 50 50)">' +
                    '  <rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#ffb856">' +
                    '    <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.3333333333333333s" repeatCount="indefinite"></animate>' +
                    '  </rect>' +
                    '</g><g transform="rotate(240 50 50)">' +
                    '  <rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#ffb856">' +
                    '    <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.25s" repeatCount="indefinite"></animate>' +
                    '  </rect>' +
                    '</g><g transform="rotate(270 50 50)">' +
                    '  <rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#ffb856">' +
                    '    <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.16666666666666666s" repeatCount="indefinite"></animate>' +
                    '  </rect>' +
                    '</g><g transform="rotate(300 50 50)">' +
                    '  <rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#ffb856">' +
                    '    <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.08333333333333333s" repeatCount="indefinite"></animate>' +
                    '  </rect>' +
                    '</g><g transform="rotate(330 50 50)">' +
                    '  <rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#ffb856">' +
                    '    <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="0s" repeatCount="indefinite"></animate>' +
                    '  </rect>' +
                    '</g>' +
                    '</svg>');
            },
            success: function(data, status, xhr) { // success callback function
                var res = '                    <div class="col-12 title">' +
                    '<div class="clip ">Produits Parapharmaceutique</div>' +
                    '</div>';
                if (data == "")
                    data = "Aucun Resultats";
                setTimeout(function() {
                    $(".parapharm").html(res + data);
                    // add to cart 
                    // Add item
                    $('.add-to-cart.produitP').click(function(event) {
                        event.preventDefault();
                        var name = $(this).data('name');
                        var price = Number($(this).data('price'));
                        shoppingCart.addItemToCart(name, price, 1);
                        displayCart();
                    });
                    $(".page-link.parapharm").on('click', function(e) {
                        e.preventDefault();
                        parapharm($(this).attr("data-ci-pagination-page"));
                    });
                }, 1000);
            }
        });
    else {
        $.ajax(base_url + 'getcommand/p/' + p + "?search=" + search, {
            beforeSend: function() {
                $('.parapharm').html('                    <div class="col-12 title">' +
                    '<div class="clip ">Produits Parapharmaceutique</div>' +
                    '</div>' + '<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="margin: auto; background: rgb(241, 242, 243,0) none repeat scroll 0% 0%; display: block;" width="200px" height="200px" viewBox="0 0 100 100" preserveAspectRatio="xMidYMid">' +
                    '<g transform="rotate(0 50 50)">' +
                    '  <rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#ffb856">' +
                    '    <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.9166666666666666s" repeatCount="indefinite"></animate>' +
                    '  </rect>' +
                    '</g><g transform="rotate(30 50 50)">' +
                    '  <rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#ffb856">' +
                    '    <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.8333333333333334s" repeatCount="indefinite"></animate>' +
                    '  </rect>' +
                    '</g><g transform="rotate(60 50 50)">' +
                    '  <rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#ffb856">' +
                    '    <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.75s" repeatCount="indefinite"></animate>' +
                    '  </rect>' +
                    '</g><g transform="rotate(90 50 50)">' +
                    '  <rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#ffb856">' +
                    '    <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.6666666666666666s" repeatCount="indefinite"></animate>' +
                    '  </rect>' +
                    '</g><g transform="rotate(120 50 50)">' +
                    '  <rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#ffb856">' +
                    '    <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.5833333333333334s" repeatCount="indefinite"></animate>' +
                    '  </rect>' +
                    '</g><g transform="rotate(150 50 50)">' +
                    '  <rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#ffb856">' +
                    '    <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.5s" repeatCount="indefinite"></animate>' +
                    '  </rect>' +
                    '</g><g transform="rotate(180 50 50)">' +
                    '  <rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#ffb856">' +
                    '    <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.4166666666666667s" repeatCount="indefinite"></animate>' +
                    '  </rect>' +
                    '</g><g transform="rotate(210 50 50)">' +
                    '  <rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#ffb856">' +
                    '    <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.3333333333333333s" repeatCount="indefinite"></animate>' +
                    '  </rect>' +
                    '</g><g transform="rotate(240 50 50)">' +
                    '  <rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#ffb856">' +
                    '    <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.25s" repeatCount="indefinite"></animate>' +
                    '  </rect>' +
                    '</g><g transform="rotate(270 50 50)">' +
                    '  <rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#ffb856">' +
                    '    <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.16666666666666666s" repeatCount="indefinite"></animate>' +
                    '  </rect>' +
                    '</g><g transform="rotate(300 50 50)">' +
                    '  <rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#ffb856">' +
                    '    <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.08333333333333333s" repeatCount="indefinite"></animate>' +
                    '  </rect>' +
                    '</g><g transform="rotate(330 50 50)">' +
                    '  <rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#ffb856">' +
                    '    <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="0s" repeatCount="indefinite"></animate>' +
                    '  </rect>' +
                    '</g>' +
                    '</svg>');
            },
            success: function(data, status, xhr) { // success callback function
                var res = '                    <div class="col-12 title">' +
                    '<div class="clip ">Produits Parapharmaceutique</div>' +
                    '</div>';
                if (data == "")
                    data = "Aucun Resultats";
                setTimeout(function() {
                    $(".parapharm").html(res + data);
                    // add to cart 
                    // Add item
                    $('.add-to-cart.produitP').click(function(event) {
                        event.preventDefault();
                        var name = $(this).data('name');
                        var price = Number($(this).data('price'));
                        shoppingCart.addItemToCart(name, price, 1);
                        displayCart();
                    });
                    $(".page-link.parapharm").on('click', function(e) {
                        e.preventDefault();
                        parapharm($(this).attr("data-ci-pagination-page"));
                    });
                }, 1000);
            }
        });
    }
}

function complement(p, search) {
    if (search == null)
        $.ajax(base_url + 'getcommand/c/' + p, {
            beforeSend: function() {
                $('.complement').html('                    <div class="col-12 title">' +
                    '<div class="clip ">Complément Alimentaire</div>' +
                    '</div>' + '<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="margin: auto; background: rgb(241, 242, 243,0) none repeat scroll 0% 0%; display: block;" width="200px" height="200px" viewBox="0 0 100 100" preserveAspectRatio="xMidYMid">' +
                    '<g transform="rotate(0 50 50)">' +
                    '  <rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#ffb856">' +
                    '    <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.9166666666666666s" repeatCount="indefinite"></animate>' +
                    '  </rect>' +
                    '</g><g transform="rotate(30 50 50)">' +
                    '  <rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#ffb856">' +
                    '    <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.8333333333333334s" repeatCount="indefinite"></animate>' +
                    '  </rect>' +
                    '</g><g transform="rotate(60 50 50)">' +
                    '  <rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#ffb856">' +
                    '    <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.75s" repeatCount="indefinite"></animate>' +
                    '  </rect>' +
                    '</g><g transform="rotate(90 50 50)">' +
                    '  <rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#ffb856">' +
                    '    <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.6666666666666666s" repeatCount="indefinite"></animate>' +
                    '  </rect>' +
                    '</g><g transform="rotate(120 50 50)">' +
                    '  <rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#ffb856">' +
                    '    <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.5833333333333334s" repeatCount="indefinite"></animate>' +
                    '  </rect>' +
                    '</g><g transform="rotate(150 50 50)">' +
                    '  <rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#ffb856">' +
                    '    <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.5s" repeatCount="indefinite"></animate>' +
                    '  </rect>' +
                    '</g><g transform="rotate(180 50 50)">' +
                    '  <rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#ffb856">' +
                    '    <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.4166666666666667s" repeatCount="indefinite"></animate>' +
                    '  </rect>' +
                    '</g><g transform="rotate(210 50 50)">' +
                    '  <rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#ffb856">' +
                    '    <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.3333333333333333s" repeatCount="indefinite"></animate>' +
                    '  </rect>' +
                    '</g><g transform="rotate(240 50 50)">' +
                    '  <rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#ffb856">' +
                    '    <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.25s" repeatCount="indefinite"></animate>' +
                    '  </rect>' +
                    '</g><g transform="rotate(270 50 50)">' +
                    '  <rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#ffb856">' +
                    '    <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.16666666666666666s" repeatCount="indefinite"></animate>' +
                    '  </rect>' +
                    '</g><g transform="rotate(300 50 50)">' +
                    '  <rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#ffb856">' +
                    '    <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.08333333333333333s" repeatCount="indefinite"></animate>' +
                    '  </rect>' +
                    '</g><g transform="rotate(330 50 50)">' +
                    '  <rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#ffb856">' +
                    '    <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="0s" repeatCount="indefinite"></animate>' +
                    '  </rect>' +
                    '</g>' +
                    '</svg>');
            },
            success: function(data, status, xhr) { // success callback function
                var res = '                    <div class="col-12 title">' +
                    '<div class="clip ">Complément Alimentaire</div>' +
                    '</div>';
                if (data == "")
                    data = "Aucun Resultats";
                setTimeout(function() {
                    $(".complement").html(res + data);
                    // add to cart 
                    // Add item
                    $('.add-to-cart.produitC').click(function(event) {
                        event.preventDefault();
                        var name = $(this).data('name');
                        var price = Number($(this).data('price'));
                        shoppingCart.addItemToCart(name, price, 1);
                        displayCart();
                    });
                    $(".page-link.complement").on('click', function(e) {
                        e.preventDefault();
                        complement($(this).attr("data-ci-pagination-page"));
                    });
                    const text = document.querySelectorAll(".card-text");
                    const length = 200;
                
                for (let index = 0; index < text.length; index++) {
                
                    {
                        var myTruncatedString = text[index].innerHTML.substring(0, length);
                        text[index].innerText = myTruncatedString + "...etc.";
                    }
                
                }
                }, 1000);
            }
        });
    else {
        $.ajax(base_url + 'getcommand/c/' + p + "?search=" + search, {
            beforeSend: function() {
                $('.complement').html('                    <div class="col-12 title">' +
                    '<div class="clip ">Complément Alimentaire</div>' +
                    '</div>' + '<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="margin: auto; background: rgb(241, 242, 243,0) none repeat scroll 0% 0%; display: block;" width="200px" height="200px" viewBox="0 0 100 100" preserveAspectRatio="xMidYMid">' +
                    '<g transform="rotate(0 50 50)">' +
                    '  <rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#ffb856">' +
                    '    <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.9166666666666666s" repeatCount="indefinite"></animate>' +
                    '  </rect>' +
                    '</g><g transform="rotate(30 50 50)">' +
                    '  <rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#ffb856">' +
                    '    <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.8333333333333334s" repeatCount="indefinite"></animate>' +
                    '  </rect>' +
                    '</g><g transform="rotate(60 50 50)">' +
                    '  <rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#ffb856">' +
                    '    <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.75s" repeatCount="indefinite"></animate>' +
                    '  </rect>' +
                    '</g><g transform="rotate(90 50 50)">' +
                    '  <rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#ffb856">' +
                    '    <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.6666666666666666s" repeatCount="indefinite"></animate>' +
                    '  </rect>' +
                    '</g><g transform="rotate(120 50 50)">' +
                    '  <rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#ffb856">' +
                    '    <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.5833333333333334s" repeatCount="indefinite"></animate>' +
                    '  </rect>' +
                    '</g><g transform="rotate(150 50 50)">' +
                    '  <rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#ffb856">' +
                    '    <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.5s" repeatCount="indefinite"></animate>' +
                    '  </rect>' +
                    '</g><g transform="rotate(180 50 50)">' +
                    '  <rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#ffb856">' +
                    '    <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.4166666666666667s" repeatCount="indefinite"></animate>' +
                    '  </rect>' +
                    '</g><g transform="rotate(210 50 50)">' +
                    '  <rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#ffb856">' +
                    '    <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.3333333333333333s" repeatCount="indefinite"></animate>' +
                    '  </rect>' +
                    '</g><g transform="rotate(240 50 50)">' +
                    '  <rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#ffb856">' +
                    '    <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.25s" repeatCount="indefinite"></animate>' +
                    '  </rect>' +
                    '</g><g transform="rotate(270 50 50)">' +
                    '  <rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#ffb856">' +
                    '    <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.16666666666666666s" repeatCount="indefinite"></animate>' +
                    '  </rect>' +
                    '</g><g transform="rotate(300 50 50)">' +
                    '  <rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#ffb856">' +
                    '    <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.08333333333333333s" repeatCount="indefinite"></animate>' +
                    '  </rect>' +
                    '</g><g transform="rotate(330 50 50)">' +
                    '  <rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#ffb856">' +
                    '    <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="0s" repeatCount="indefinite"></animate>' +
                    '  </rect>' +
                    '</g>' +
                    '</svg>');
            },
            success: function(data, status, xhr) { // success callback function
                var res = '                    <div class="col-12 title">' +
                    '<div class="clip ">Complément Alimentaire</div>' +
                    '</div>';
                if (data == "")
                    data = "Aucun Resultats";
                setTimeout(function() {
                    $(".complement").html(res + data);
                    // add to cart 
                    // Add item
                    $('.add-to-cart.produitC').click(function(event) {
                        event.preventDefault();
                        var name = $(this).data('name');
                        var price = Number($(this).data('price'));
                        shoppingCart.addItemToCart(name, price, 1);
                        displayCart();
                    });
                    $(".page-link.complement").on('click', function(e) {
                        e.preventDefault();
                        complement($(this).attr("data-ci-pagination-page"));
                    });
                }, 1000);
            }
        });
    }
}

$( document ).ajaxComplete(function( event,request, settings ) {
    const text = document.querySelectorAll(".card");
    const length = 50;
    console.log(text.length);
});


function valid_command() {
    $("#validate_command").on("click", function(e) {
        var name = [];
        var quantity = [];
        $(".item-count.form-control").each(function() {
            name.push($(this).attr("data-name"));
            quantity.push($(this).attr("value"));
        });

        $.ajax({
            type: "POST",
            url: base_url + "command",
            data: { name: name, quantity: quantity },
            dataType: "json",
            complete: function(res) {
                shoppingCart.clearCart();
                displayCart();
            }
        });
    });
}

function search() {
    $("#find").on("click", function(e) {
        e.preventDefault();
        parapharm(1, $('#look').val());
        complement(1, $('#look').val());
    });
}

parapharm(1, null);
complement(1, null);
search();

valid_command()



