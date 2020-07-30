<?php
    include 'conn.php';
    $data = $_POST;
    $name = $data['name'];
    $price = $data['price'];
    $description = $data['description'];
    $img = $data['img'];
    $category = $data['category'];
    $sql = "INSERT INTO products (name,price,description,img,category) VALUES('$name','$price','$description','$img','$category')";
    $result = $conn->query($sql);
    if($result){
        echo 'SUCCESS';
    }
?>