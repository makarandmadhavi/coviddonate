<?php include 'templates/header.php'; ?>

<?php include "backend/getorganizations.php"; 
$id = $_GET['id'];
$product = getsingleproduct($id);
$categories = getcategories();
//print_r($categories);
//print_r($product);
?>

<div class="container">
  <h1>Edit Product</h1>
  <div class="form-group">
    <label for="exampleInputEmail1">Name</label>
    <input type="text" class="form-control" id="name" aria-describedby="emailHelp" value="<?=$product['name']?>">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Price</label>
    <input type="number" class="form-control" id="price" placeholder="Price" value="<?=$product['price']?>">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Description</label>
    <input type="text" class="form-control" id="description" placeholder="Description" value="<?=$product['description']?>">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Image</label>
    <input type="text" class="form-control" id="img" placeholder="Image Link" value="<?=$product['img']?>">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Category</label>
    <select class="form-control" id="category">
      <?php foreach($categories as $category){ ?>
      <option value="<?=$category['category']?>" <?php if($product['category']==$category['category'] ){ echo "selected" ;} ?> >
        <?=$category['category']?>
      </option>
      <?php } ?>
      <!-- <option value="Mobiles" <?php if($product['category']=="Mobiles" ){ echo "selected" ;} ?>>Mobiles</option>
      <option value="TVs" <?php if($product['category']=="TVs" ){ echo "selected" ;} ?>>TVs</option>
      <option value="Laptops" <?php if($product['category']=="Laptops" ){ echo "selected" ;} ?>>Laptops</option> -->
    </select>
  </div>
  <div>
    <button onclick="editproduct(<?=$id?>)" class="btn btn-success">Submit</button>
  </div>

</div>

<?php  include 'templates/footer.php'; ?>