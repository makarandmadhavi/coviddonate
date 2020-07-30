<?php
    include 'conn.php';
    $data = $_POST;
    $productid = $data['productid'];
    $userid = $data['userid'];
    $sql = "DELETE FROM cart WHERE userid='$userid' AND productid='$productid'";
    $result = $conn->query($sql);
    if($result){
        echo 'SUCCESS';
    }
?>