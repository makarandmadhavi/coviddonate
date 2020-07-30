<?php include 'templates/header.php'; ?>
<?php include 'backend/getproducts.php'; 
$categories = getcategories();
?>

<div class="container">
    <br>
    <table class="table">
        <thead>
            <tr>
                <th scope="col" colspan="2">Available Categories</th>
                
            </tr>
        </thead>
        <tbody>
            <?php foreach($categories as $cat){ ?>
            <tr>
                <td><?=$cat['category']?></td>
                <td><button onclick="removecategory(<?=$cat['id']?>)" class="btn btn-danger">Remove</button></td>               
            </tr>
            <?php } ?>
        </tbody>
    </table>


    <br><br>
    <h3>Add a category</h3>
    <div class="form-group">
        <label for="exampleInputEmail1">Category Name</label>
        <input type="text" class="form-control" id="category" aria-describedby="emailHelp" placeholder="category">
    </div>
    <div>
        <button onclick="addcategory()" class="btn btn-success">Submit</button>
    </div>

</div>

<?php include 'templates/footer.php'; ?>