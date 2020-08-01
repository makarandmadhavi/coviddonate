<?php include 'templates/header.php'; ?>
<?php include 'backend/getorganizations.php'; ?>
<?php include 'backend/getorders.php'; ?>
<?php include 'backend/getuserdetails.php'; 
    $oganizations = getallorganizations();
    //print_r($orders);
    $numberoforders=0;
?>

<div class="container">
    <h1 class="text-center">All Orders</h1>
    <table class="table table-hover table-bordered">
        <thead class="thead-dark">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">registration</th>
                <th scope="col">Verified</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>

            <?php foreach($oganizations as $ngo){
                
            ?>
            <tr>
                <th scope="row">
                    <?=$ngo['id']?>
                </th>
                <td>
                    <a href="<?=$ngo['websitelink']?>" target="_blank"> <?=$ngo['name']?> </a>
                </td>
                
                <td>
                    <?=$ngo['registration']?>
                </td>
                <td>
                    <?=$ngo['isverified']?>
                </td>
                <td><button class="btn btn-info btn-sm" onclick="verify('<?=$ngo['username']?>','<?=$ngo['name']?>');">Verify</button></td>
            </tr>
            <?php }  ?>

        </tbody>
    </table>

</div>


<?php  include 'templates/footer.php'; ?>