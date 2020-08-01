<?php include 'templates/header.php'; ?>
<?php include 'backend/getorganizations.php';

                $organizations = getallorganizations();

?>

<h1 class="text-center" >All organizations</h1>

<div class="container">
    <div class="row">
        <?php foreach($organizations as $product){ ?>
        <div class="col-sm-4">
            
            <div class="card" style="">
            <!-- <h5 class="text-right" style="margin:5px;color:grey;">X</h5> -->
                <img class="card-img-top" style="width:640px height:480px" src="<?=$product['img']?>" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title"><?=$product['name']?> - Rs.<?=$product['price']?></h5>
                    <p class="card-text"><?=$product['description']?></p>      
                    <a href="editproduct.php?id=<?=$product['id']?>" class="btn btn-primary">Edit Product</a>
                    <button onclick="removeproduct(<?=$product['id']?>)" class="btn btn-danger">Remove Product</button>                 
                </div>
                
            </div>
            
        </div>   
        <?php } ?>
      
    </div>
</div>

<?php  include 'templates/footer.php'; ?>