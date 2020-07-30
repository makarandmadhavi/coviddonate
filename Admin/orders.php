<?php include 'templates/header.php'; ?>
<?php include 'backend/getproducts.php'; ?>
<?php include 'backend/getorders.php'; ?>
<?php include 'backend/getuserdetails.php'; 
    $orders = getallorders();
    //print_r($orders);
    $numberoforders=0;
    $earnings=0;
?>

<div class="container">
    <h1 class="text-center">All Orders</h1>
    <table class="table table-hover table-bordered">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Order ID</th>
                <th scope="col">Username</th>
                <th scope="col">Product</th>
                <th scope="col">Product-ID</th>
                <th scope="col">Price</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>

            <?php foreach($orders as $order){
                $numberoforders++;
                
                    $user = getuserdetails($order['userid']);
                    $product = getsingleproduct($order['productid']);
                    $earnings = $earnings + $product['price'];
            ?>
            <tr>
                <th scope="row">
                    <?=$order['id']?>
                </th>
                <td>
                    <?=$user['username']?>
                </td>
                <td>
                    <?=$product['name']?>
                </td>
                <td>
                    <?=$product['id']?>
                </td>
                <td>
                    <?=$product['price']?>
                </td>
                <td><a href="orders.php">dispatch</a></td>
            </tr>
            <?php }  ?>

            <tr>
                <th colspan="2" scope="row">Total</th>
                <td>Total orders = <?=$numberoforders?></td>
                <td colspan="3" >Earnings = <?=$earnings?></td>
            </tr>
        </tbody>
    </table>

</div>


<?php  include 'templates/footer.php'; ?>