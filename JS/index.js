function signup(){
    username = $('#username').val();
    password = $('#password').val();
   // console.log(x);
   // console.log(y);
    $.ajax({
        type: "POST",
        url: "backend/signup_ajax.php",
        data: {
            //data goes here
            username,
            password
        },
        success: function (data) {
           //data is returned here
            if(data == "SUCCESS"){
                alert("Successfully Registered");
                window.location = 'login.php';
            }
            else{
                alert("Failed to signup, please try again later");
            }
        }
    });
}

function addtocart(productid, userid){
    //console.log(productid, userid);
    $.ajax({
        type: "POST",
        url: "backend/addtocart_ajax.php",
        data: {
            //data goes here
            productid,
            userid
        },
        success: function (data) {
           //data is returned here
            if(data == "SUCCESS"){
                alert("Successfully Added to Cart");
                window.location = 'cart.php';
            }
            else{
                alert("Failed Add to cart, please try again later");
            }
        }
    });

}


function login(){
    username = $('#username').val();
    password = $('#password').val();
   // console.log(x);
   // console.log(y);
    $.ajax({
        type: "POST",
        url: "backend/login_ajax.php",
        data: {
            //data goes here
            username,
            password
        },
        success: function (data) {
           //data is returned here
            if(data == "SUCCESS"){
                alert("Successful Login");
                window.location = 'index.php';
            }
            else{
                alert("Incorect Username, password combination");
                window.location = '';
            }
        }
    });
}

function removecart(productid, userid){
    //console.log(productid, userid);
    $.ajax({
        type: "POST",
        url: "backend/removecart_ajax.php",
        data: {
            //data goes here
            productid,
            userid
        },
        success: function (data) {
           //data is returned here
            if(data == "SUCCESS"){
                alert("Successfully removed from Cart");
                window.location = 'cart.php';
            }
            else{
                alert("Failed to remove, please try again later");
            }
        }
    });

}

function placeorder(productid, userid){
    //console.log(productid, userid);
    $.ajax({
        type: "POST",
        url: "backend/placeorder_ajax.php",
        data: {
            //data goes here
            productid,
            userid
        },
        success: function (data) {
           //data is returned here
            if(data == "SUCCESS"){
                alert("Order Placed!");
                window.location = 'cart.php';
            }
            else{
                alert("Failed to place order, please try again later");
            }
        }
    });

}