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

shoppingCart.clearCart();
displayCart();

$('#valider').on("click", function(event) {

    n = [];
    quantity = [];
    prix = [];

    $(".p_name").each(function() {
        n.push($(this).attr("data"));
    });
    $(".p_quantity").each(function() {
        quantity.push(parseInt($(this).attr("data")));
    });
    $(".p_prix").each(function() {
        prix.push($(this).attr("data"));
    });

    for (i = 0; i < n.length; i++) {
        shoppingCart.addItemToCart(n[i], prix[i], quantity[i]);
        displayCart();
    };

    $('#exampleModal').modal('show');
});

$("#validate_command").on("click", function(e) {
    var id = [];
    var q = [];
    $(".id").each(function() {
        id.push($(this).attr("data-pid"));
    });
    $(".item-count.form-control").each(function() {
        q.push($(this).attr("value"));
    });


    for (i = 0; i < id.length; i++) {
        $.ajax({
            type: "POST",
            url: base_url + "v_command",
            data: { id: id[i], q: q[i] },
            dataType: "json",
            success: function(res) {
                shoppingCart.clearCart();
                displayCart();
            }
        });
    }

    shoppingCart.clearCart();
    displayCart();
    $('#exampleModal').modal('hide');
});

$("#command_close").on("click", function(e) {
    shoppingCart.clearCart();
    displayCart();
});



const pen = document.querySelectorAll('.fa-pen');
const input = document.querySelectorAll('.inputchange');
const annuler = document.querySelectorAll('.btn-danger');
console.log(annuler);


for (let index = 0; index < pen.length; index++) {
    pen[index].addEventListener("click", () => {
        for (let index = 0; index < input.length; index++) {
            input[index].removeAttribute('readonly');

        }
    })

}

annuler[0].addEventListener("click", () => {
    for (let index = 0; index < input.length; index++) {
        input[index].setAttribute("readonly", "readonly");
    }
})


function change_status() {
    $(".recu").on("click", function(e) {
        var id = $(this).attr("data-id");
        $.ajax({
            type: "POST",
            url: base_url + "update_command",
            data: { id: id },
            dataType: "json",
            complete: function(res) {
                location.reload();
            }
        });
    });
}

function delete_command() {
    $(".del").on("click", function(e) {
        var id = $(this).attr("data-id");
        $.ajax({
            type: "POST",
            url: base_url + "delete_command",
            data: { id: id },
            dataType: "json",
            complete: function(res) {
                location.reload();
            }
        });
    });
}

change_status();
delete_command();