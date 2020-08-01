<?php include "templates/header.php"; ?>
<?php include "templates/headerend.php"; ?>

<div class="container">
	<h1>Victims database</h1>
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
			echo ' <div class="table-responsive">
		<table class="table table-bordered table-hover table-striped" >
		  <thead>
		    <tr>
      <th scope="col">Name</th>
      <th scope="col">Description</th>
      <th scope="col">Aadhar</th>
      <th scope="col">Contact</th>
      <th scope="col">Email</th>
      <th scope="col">Address</th>
      <th scope="col">Username</th>

    </tr>
  </thead>
  <tbody> ';

		// Check connection
			$sql = "SELECT name,description,aadhar,contact,email,address,username FROM victims ORDER by description";
			$result = $conn->query($sql);
			if ($result->num_rows > 0) {
			// output data of each row
			while($row = $result->fetch_assoc()) {
				echo "<tr><td>" . $row["name"] . "</td><td>" . $row["description"]. "</td><td>" . $row["aadhar"]. "</td><td>" . $row["contact"]."</td><td>" . $row["email"]. "</td><td>" . $row["address"]."</td><td>" . $row["username"]. "</td></tr>";
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
<?php include "templates/footer.php"; ?>