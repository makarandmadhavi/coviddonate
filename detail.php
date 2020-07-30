<?php include "templates/header.php"; ?>
<?php
$id = $_GET['id'];
if(isset($_SESSION['id'])){
$userid = $_SESSION['id'];
}
$product = getsingleproduct($id);
//print_r($product);
?>

<br>
<div class="container text-center">
    <h1><?=$product['name']?></h1>
    <img src="<?=$product['img']?>" alt="product image">
    <h1>Price - Rs.<?=$product['price']?></h1>
    <p><?=$product['description']?></p>
    <?php if(isset($_SESSION['username'])){ ?>
    <button onclick="addtocart('<?=$product['id']?>','<?=$userid?>')" class="btn btn-success">Add To Cart</button>
    <?php } ?>
</div>
<br><br><br>

<?php include "templates/footer.php"; ?>