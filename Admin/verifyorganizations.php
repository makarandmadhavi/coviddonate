<?php include 'templates/header.php'; ?>
<?php include 'backend/getorganizations.php'; ?>
<?php include 'backend/getorders.php'; ?>
<?php include 'backend/getuserdetails.php'; 
    $oganizations = getallorganizations();
    //print_r($orders);
    $numberoforders=0;
?>

<div class="container">
<br>
<div class="row">
<div class="col-sm-3">
<h1 class="text-center">Verify</h1>
</div>
<div class="col-sm-9">
<a href="https://ngodarpan.gov.in/index.php/home">NGO Darpan</a>
<br>
<a href="https://thenationaltrust.gov.in/content/registered_organization.php">National Trust</a>
</div>
</div>
    
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
                   <?php  if($ngo['isverified']){ echo 'Verified';} else { echo 'Not Verified';} ?>
                </td>
                <td>
                    <?php if(!$ngo['isverified']){ ?>
                    <button class="btn btn-info btn-sm" onclick="verify('<?=$ngo['username']?>','<?=$ngo['name']?>','1');">Verify</button>
                    <?php } else{ ?>
                        <button class="btn btn-danger btn-sm" onclick="verify('<?=$ngo['username']?>','<?=$ngo['name']?>','0');">Un Verify</button>
                    <?php } ?>
                </td>
            </tr>
            <?php }  ?>

        </tbody>
    </table>

</div>


<?php  include 'templates/footer.php'; ?>