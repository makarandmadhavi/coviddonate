<?php
    include 'conn.php';
    $data = $_POST;
    $productid = $data['productid'];
    $userid = $data['userid'];
    $sql = "INSERT INTO orders (userid,productid) VALUES('$userid','$productid')";
    $result = $conn->query($sql);
    $sql2 = "DELETE FROM cart WHERE userid='$userid' AND productid='$productid'";
    $result2 = $conn->query($sql2);
    if($result && $result2){
        echo 'SUCCESS';
    }
?>