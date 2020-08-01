<?php
    include 'Backend/conn.php';
    $data = $_POST;
    $name = $data['name'];
    $username = $data['username'];
    $password = $data['password'];
    $website = $data['website'];
    $phone = $data['phone'];
    $email = $data['email'];
    $registration = $data['registration'];
   
// echo $name.'<br>';
// echo $username.'<br>';
// echo $password.'<br>';
// echo $aadhar.'<br>';
// echo $phone.'<br>';
// echo $email.'<br>';
// echo $address.'<br>';
// echo $description.'<br>';
    $sql1 = "SELECT * From login WHERE username='$username'";
    $result1 = $conn->query($sql1);
    $row1 = $result1->fetch_assoc();
    if($row1){
        echo 'username already exists';
        ?>
        <script>
            alert("username already exists");
            history.back()
        </script>
        <?php
    } 
    else {
        $sql = "INSERT INTO `organizations` (`name`, `websitelink`, `username`, `registration`) VALUES ('$name', '$website', '$username', '$registration')";
        $result3 = $conn->query($sql);
        $sql = "INSERT INTO `login` (`username`, `password`, `type`) VALUES ('$username', '$password', 'ngo')";
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