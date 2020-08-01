<?php include "templates/header.php"; 
//include "backend/getorganizations.php";
if(isset($_SESSION['username'])){
    $username = $_SESSION['username'];
    $id = $_SESSION['id'];
    $cart = getcart($id);
    $sum=0;
}
else{
    $username='User';
}

//print_r($cart)

?>

<div class="container text-center">
    <h1>Your Cart</h1>
    <br>
    <ul class="list-unstyled">
    <?php foreach($cart as $element){ 
        $productid=$element['productid'];
        $product=getsingleproduct($productid);
        //print_r($product);
        $sum=$sum+$product['price'];
        ?>
        <li class="media my-5">
            <img class="mr-3" style="width: 200px;" src="<?=$product['img']?>" alt="Generic placeholder image">
            <div class="media-body">
                <h5 class="mt-0 mb-1"><?=$product['name']?> - Price = <?=$product['price']?></h5>
                <p><?=$product['description']?></p>
                <div class="btn-group btn-block">
                <button onclick="placeorder('<?=$product['id']?>','<?=$id?>')" class="btn btn-success btn-block">Place Order</button>
                <button onclick="removecart(<?=$product['id']?>,<?=$id?>)" class="btn btn-danger ">Remove item</button>
                </div>
            </div>
        </li>
    <?php } ?>   
    </ul>
    <h2>Your Total Amount = Rs.<?=$sum?> </h1>

</div>

<?php include "templates/footer.php"; ?>