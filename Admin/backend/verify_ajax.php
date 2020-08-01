<?php
    include 'conn.php';
    $data = $_POST;
    $username = $data['username'];
    $sql = "UPDATE organizations SET isverified=1 WHERE username='$username'";
    $result = $conn->query($sql);
    if($result){
        echo 'SUCCESS';
    }
?>