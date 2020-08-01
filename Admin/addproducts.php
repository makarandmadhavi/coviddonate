<?php include 'templates/header.php'; ?>
<?php include 'backend/getorganizations.php';

$categories = getcategories();
//print_r($categories);
?>

<div class="container">
    <h1>Add a Product</h1>
    <div class="form-group">
    <label for="exampleInputEmail1">Name</label>
    <input type="text" class="form-control" id="name" aria-describedby="emailHelp" placeholder="Name">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Price</label>
    <input type="number" class="form-control" id="price" placeholder="Price">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Description</label>
    <input type="text" class="form-control" id="description" placeholder="Description">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Image</label>
    <input type="text" class="form-control" id="img" placeholder="Image Link">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Category</label>
    <select class="form-control" id="category">
        <?php foreach($categories as $category){ ?>
        <option value="<?=$category['category']?>"><?=$category['category']?></option>
        <?php } ?>
        <!-- <option value="TVs">TVs</option>
        <option value="Laptops">Laptops</option> -->
    </select>
  </div>
  <div>
    <button onclick="addproduct()" class="btn btn-success" >Submit</button>
  </div>

</div>

<?php  include 'templates/footer.php'; ?>