<?php
    include 'conn.php';
    $data = $_POST;
    $username = $data['username'];
    $verify = $data['verify'];
    $sql = "UPDATE organizations SET isverified=$verify WHERE username='$username'";
    $result = $conn->query($sql);
    if($result){
        echo 'SUCCESS';
    }
?>