<?php include 'templates/header.php'; ?>
<?php include 'backend/getorganizations.php';

                $organizations = getallorganizations();

?>

<h1 class="text-center" >All organizations</h1>

<div class="container">
    <div class="row">
    <?php foreach($organizations as $product){ ?>
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
</div>

<?php  include 'templates/footer.php'; ?>