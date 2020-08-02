<?php
    include '../../Backend/conn.php';
    $data = $_POST;
    $username = $data['username'];
    $ngo = $data['ngo'];
    $sql = "SELECT * from victims WHERE username='$username'";
    $result = $conn->query($sql);
    $row = $result -> fetch_assoc();
    $service = $row['service'];
    $sql = "UPDATE victims SET service='$service $ngo' WHERE username='$username'";
    $result = $conn->query($sql);
    if($result){
        echo 'SUCCESS';
    }
?>