<?php include "templates/header.php"; ?>
<?php include "templates/headerend.php"; ?>


<br><br>
<div class="container">

<?php
		
		$conn = mysqli_connect("localhost", "root", "", "covid");
		// Check connection
		if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
		} 
		
		$username = $_SESSION['username']; 
		$sql = "SELECT * from victims where username = '".$username."'";
		$result = $conn->query($sql);

		while ($row = $result->fetch_assoc()) {
		?>
		<h5 class="card-header">Name : <span style="font-weight:100"> <?=$row['name']?></span></h5>
            <div class="card-body">
                <div class="row">


                    <div class="col-sm-10">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">username : <?=$row['username']?></li>
                            <li class="list-group-item">Aadhar : <?=$row['aadhar']?></li>
                            <li class="list-group-item">Phone : <?=$row['contact']?>
                            <li class="list-group-item">email : <?=$row['email']?></li>
                            <li class="list-group-item">NGO in touch : <?=$row['service']?></li>
                        </ul>
                    </div>
                </div>


            </div>
		<?php
		// echo '<h1>Welcome, '.$username.'</h1><br>';	
		// echo '<h4>Name: '.$row["name"].'</h3>';
		// echo '<h4>Username: '.$row["username"].'</h3>';
		// echo '<h4>Aadhar: '. $row["aadhar"].'</h3>';
		// echo '<h4>Contact No: '.$row["contact"].'</h3>';
		// echo '<h4>E-mail: '.$row["email"].'</h3>';
		// echo '<h4>Description: '.$row["description"].'</h3>';
		// echo '<h4>Service: '.$row["service"].'</h3>';
		} 

		


?>
</div>

<?php include "templates/footer.php"; ?>