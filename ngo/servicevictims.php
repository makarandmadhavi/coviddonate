<?php include "templates/header.php"; ?>
<?php include "templates/headerend.php"; ?>

<div class="container">
    <h1 class="text-center">Verified Victims</h1>
    <table class="table table-hover table-bordered">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Description</th>
                <th scope="col">Aadhar</th>
                <th scope="col">Contact</th>
                <th scope="col">Email</th>
                <th scope="col">Address</th>
                <th scope="col">Service status</th>
            </tr>
        </thead>
        <tbody>

            <?php 
            $victims = getverifiedvictims();
            //print_r($victims);
            
            foreach($victims as $victim){
                
            ?>
            <tr>
                <th scope="row">
                    <?=$victim['name']?>
                </th>
                <td>
                    <?=$victim['description']?>
                </td>

                <td>
                    <?=$victim['aadhar']?>
                </td>
                <td>
                    <?=$victim['contact']?>
                </td>
                <td>
                    <?=$victim['email']?>
                </td>
                <td>
                    <?=$victim['address']?>
                </td>
                <td>
                    <p><?php if($victim['service']){ ?>Picked up by : <?=$victim['service']?> <?php } ?></p>
                   
                    <?php if(strpos($victim['service'], $_SESSION['username'])==false){ ?>
                    <button class="btn btn-info btn-sm"
                        onclick="pickup('<?=$victim['name']?>','<?=$victim['username']?>','<?=$_SESSION['username']?>');">Pickup</button>
                    <?php } ?>
                </td>
            </tr>
            <?php }  ?>

        </tbody>
    </table>

</div>

<?php include "templates/footer.php"; ?>