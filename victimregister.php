<?php
    include 'Backend/conn.php';
    $data = $_POST;
    $name = $data['name'];
    $username = $data['username'];
    $password = $data['password'];
    $aadhar = $data['aadhar'];
    $phone = $data['phone'];
    $email = $data['email'];
    $address = $data['address'];
    $description = $data['description'];
    $iscovidpositive = $data['iscovidpositive'];
// echo $name.'<br>';
// echo $username.'<br>';
// echo $password.'<br>';
// echo $aadhar.'<br>';
// echo $phone.'<br>';
// echo $email.'<br>';
// echo $address.'<br>';
// echo $description.'<br>';
    $sql1 = "SELECT * From login WHERE username='$username'";
    $sql2 = "SELECT * From victims WHERE aadhar='$aadhar'";
    $result1 = $conn->query($sql1);
    $result2 = $conn->query($sql2);
    $row1 = $result1->fetch_assoc();
    $row2 = $result2->fetch_assoc();
    print_r($row2);
    echo $aadhar;
    if($row1){
        echo 'username already exists';
        ?>
        <script>
            alert("username already exists");
            history.back()
        </script>
        <?php
    } elseif ($row2) {
        echo 'aadhar already exists';
        ?>
        <script>
            alert("aadhar already exists");
            history.back()
        </script>
        <?php
    }
    else {
        $sql = "INSERT INTO `victims` (`name`, `description`, `aadhar`, `contact`, `email`, `address`, `username`, `iscovidpositive`) VALUES ('$name', '$description', '$aadhar', '$phone', '$email', '$address', '$username', '$iscovidpositive')";
        $result3 = $conn->query($sql);
        $sql = "INSERT INTO `login` (`username`, `password`, `type`) VALUES ('$username', '$password', 'victim')";
        $result4 = $conn->query($sql);
        if($result4 && result3){
         echo 'SUCCESS';
         ?>
        <script>
            alert("Registration successful");
            window.location = 'login.php';
        </script>
        <?php
        }
    }
?>