<?php include "templates/header.php"; ?>
<?php include "templates/headerend.php"; ?>

<div class="container">
	<br>
	<div class="row">
		<div class="col-sm-6">
		<h1>Victims database</h1> 
		</div>
		<div class="col-sm-6">
		
		</div>
	</div>
	
<?php
		$conn = mysqli_connect("localhost", "root", "", "covid");
		// Check connection
		if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
		}
		
		$username = $_SESSION['username'];
		$check = " SELECT * from organizations where username= "."'".$username."'"." and isverified = 1";
		$res = $conn->query($check);

		if ($res->num_rows == 0) 
		{
			echo " Your NGO is not verified yet";
		}

		else
		{
			?>
			<button id="btnExport" class="btn btn-info" onclick="fnExcelReport('table');"> EXPORT </button><br>
			<?php
			echo ' <div class="table-responsive">
		<table id="table" class="table table-bordered table-hover table-striped" >
		  <thead>
		    <tr>
      <th scope="col">Name</th>
      <th scope="col">Description</th>
      <th scope="col">Aadhar</th>
      <th scope="col">Contact</th>
      <th scope="col">Email</th>
      <th scope="col">Address</th>
	  <th scope="col">Username</th>
	  <th scope="col">Verified</th>
	  <th scope="col">NGO attending</th>
    </tr>
  </thead>
  <tbody> ';

		// Check connection
			$sql = "SELECT * FROM victims ORDER by description";
			$result = $conn->query($sql);
			if ($result->num_rows > 0) {
			// output data of each row
			while($row = $result->fetch_assoc()) {
				if($row['isverified']){
					$row['isverified']='Yes';
				} else {
					$row['isverified']='No';
				}
				echo "<tr><td>" . $row["name"] . "</td><td>" . $row["description"]. "</td><td>" . $row["aadhar"]. "</td><td>" . $row["contact"]."</td><td>" . $row["email"]. "</td><td>" . $row["address"]."</td><td>" . $row["username"]. "</td><td>".$row["isverified"]."</td><td>".$row["service"]."</td></tr>";
			}
			echo "</table>";
			} else { echo "0 results"; }

			echo "</tbody>
			</table>
			</div>";
		}

		$conn->close();
		?>

</div>
<iframe id="txtArea1" style="display:none"></iframe>
<?php include "templates/footer.php"; ?>