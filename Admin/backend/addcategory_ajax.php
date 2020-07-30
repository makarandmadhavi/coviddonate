<?php
    include 'conn.php';
    $data = $_POST;
    $category = $data['category'];
    $sql = "INSERT INTO categories (category) VALUES('$category')";
    $result = $conn->query($sql);
    if($result){
        echo 'SUCCESS';
    }
?>