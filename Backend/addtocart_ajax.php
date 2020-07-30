<?php
    include 'conn.php';
    $data = $_POST;
    $productid = $data['productid'];
    $userid = $data['userid'];
    $sql = "INSERT INTO cart (userid,productid) VALUES('$userid','$productid')";
    $result = $conn->query($sql);
    if($result){
        echo 'SUCCESS';
    }
?>