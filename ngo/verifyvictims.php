<?php include "templates/header.php"; ?>
<?php include "templates/headerend.php"; ?>
<?php include 'backend/getallvictims.php';
	 $victims = getallvictims();

?>

<div class="container">
    <h1 class="text-center">All Victims</h1>
    <table class="table table-hover table-bordered">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Description</th>
                <th scope="col">Aadhar</th>
                <th scope="col">Contact</th>
                <th scope="col">Email</th>
                <th scope="col">Address</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
        	
        	 <?php foreach($victims as $temp){
                
            ?>
            <tr>
                <th scope="row">
                    <?=$temp['name']?>
                </th>
                <td>
                     <?=$temp['description']?> </a>
                </td>
                
                <td>
                    <?=$temp['aadhar']?>
                </td>

                <td>
                    <?=$temp['contact']?>
                </td>

                <td>
                    <?=$temp['email']?>
                </td>

                <td>
                    <?=$temp['address']?>
                </td>

                <td>
                    <?php if($temp['isverified']==0){ ?>
                        <button class="btn btn-info btn-sm" onclick="verify1('<?=$temp['username']?>','<?=$temp['name']?>');">Verify</button>

                    <?php } else {
                        echo 'Verified';
                    } ?>
                </td>
                
            </tr>
            <?php }  ?>

        </tbody>
    </table>

</div>


<?php  include 'templates/footer.php'; ?>