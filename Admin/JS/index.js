function addproduct(){
    name = $('#name').val();
    price = $('#price').val();
    description = $('#description').val();
    img = $('#img').val();
    category = $('#category').val();


    $.ajax({
        type: "POST",
        url: "backend/addproduct_ajax.php",
        data: {
            //data goes here
            name,
            price,
            description,
            img,
            category
        },
        success: function (data) {
           //data is returned here
            if(data == "SUCCESS"){
                alert("Product Added");
                window.location = 'home.php';
            }
            else{
                alert("Failed Add Product, please try again later");
            }
        }
    });

}

function editproduct(id){
    name = $('#name').val();
    price = $('#price').val();
    description = $('#description').val();
    img = $('#img').val();
    category = $('#category').val();


    $.ajax({
        type: "POST",
        url: "backend/editproduct_ajax.php",
        data: {
            //data goes here
            id,
            name,
            price,
            description,
            img,
            category
        },
        success: function (data) {
           //data is returned here
            if(data == "SUCCESS"){
                alert("Product Edited!");
                window.location = 'home.php';
            }
            else{
                alert("Failed to edit product, please try again later");
            }
        }
    });

}


function removeproduct(id){


    $.ajax({
        type: "POST",
        url: "backend/removeproduct_ajax.php",
        data: {
            //data goes here
            id
        },
        success: function (data) {
           //data is returned here
            if(data == "SUCCESS"){
                alert("Product Deleted!");
                window.location = 'home.php';
            }
            else{
                alert("Failed to delete product, please try again later");
            }
            console.log(id);
        }
        
    });

}

function addcategory(){
    category = $('#category').val();
    console.log(category);
    $.ajax({
        type: "POST",
        url: "backend/addcategory_ajax.php",
        data: {
            //data goes here
            category
        },
        success: function (data) {
           //data is returned here
            if(data == "SUCCESS"){
                alert("Category Added");
                window.location = 'managecategories.php';
            }
            else{
                alert("Failed to add category, please try again later");
            }
        }
    });

}

function removecategory(id){
    console.log(id);
    $.ajax({
        type: "POST",
        url: "backend/removecategory_ajax.php",
        data: {
            //data goes here
            id
        },
        success: function (data) {
           //data is returned here
            if(data == "SUCCESS"){
                alert("Category Removed");
                window.location = 'managecategories.php';
            }
            else{
                alert("Failed to remove category, please try again later");
            }
        }
    });

}

function verify(username,name){
    if(confirm("Do you wish to set "+name+" as verified NGO")){
        $.ajax({
            type: "POST",
            url: "backend/verify_ajax.php",
            data: {
                //data goes here
                username
            },
            success: function (data) {
               //data is returned here
                if(data == "SUCCESS"){
                    alert("Verified");
                    window.location = 'verifyorganizations.php';
                }
                else{
                    alert("Failed to update, please try again later");
                }
            }
        });
    }
    

}