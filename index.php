<?php include "templates/header.php"; ?>
<?php include "templates/headerend.php"; ?>

<?php

    if(isset($_SESSION['username'])){
        $username = $_SESSION['username'];
        $id = $_SESSION['id'];
    }
    else{
        $username='';
    }
    if(isset($_GET['category'])){
        //$category = $_GET['category'];
        $products = getproductsbycategory($category);
    }else{
        //$category='Our Products';
        $products = getallproducts();
    }
    //echo $_GET['category'];

    //echo sha1("123");
?>

<div class="jumbotron">
    <div class="row">
        <div class="col-sm-6">
            <h1 class="display-4">Hello,
                <?=$username;?>!!</h1>
            <p class="lead">What if you could go to your place of aid every day with a renewed sense of purpose and
                direction,
                confident in the knowledge that the work you do contributes to the greater good? When you work with us
                as a
                Philanthropist, this could be your life. Be a part of a close-knit, enthusiastic team under the
                direction of
                visionary fundraising organization's to donate and exceed fundraising goals. Make a change in the life
                of the
                people who are in the need for support. A tiny step taken by you today can transform someone's future
                tomorrow.
            </p>
            <hr class="my-4">
            <p class="lead">
                <a class="btn btn-primary btn-lg" href="#" role="button">Register</a>
        </div>
        <div class="col-sm-6">
            <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active crop">
                        <img class="d-block w-100" src="images/donate.png" alt="First slide">
                    </div>
                    <div class="carousel-item crop">
                        <img class="d-block w-100" src="images/work.png" alt="Second slide">
                    </div>
                    <div class="carousel-item crop">
                        <img class="d-block w-100" src="images/s.png" alt="Third slide">
                    </div>
                </div>
            </div>
        </div>
    </div>


    </p>

</div>

<h1 class="text-center">Donate to a cause!</h1>
<br><br>
<div class="container main">

    <?php foreach($products as $product){ ?>
    <br><br>
    <div class="row add-box">
        <div class="col-sm-4">
            <div class="site-logo-div">
                <img class="site-logo" src="<?=$product['img']?>" alt="Card image cap">
            </div>
        </div>
        <div class="col-sm-8">
            <div class="card-body">
                <h5 class="card-title"><?=$product['name']?> </h5>
                <p class="card-text"><?=$product['description']?></p>
                <a href="<?=$product['websitelink']?>" target="_blank" class="btn btn-primary">Go to site</a>
                <?php if(isset($_SESSION['username'])){ ?>
                <button onclick="addtocart('<?=$product['id']?>','<?=$id?>')" class="btn btn-success">Add to
                    cart</button>
                <?php } ?>
            </div>
        </div>
        <div class="col-sm-6">

        </div>
    </div>
    <?php } ?>
</div>

<?php include "templates/footer.php"; ?>