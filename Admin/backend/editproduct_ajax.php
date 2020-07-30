<?php
    include 'conn.php';
    $data = $_POST;
    $id = $data['id'];
    $name = $data['name'];
    $price = $data['price'];
    $description = $data['description'];
    $img = $data['img'];
    $category = $data['category'];
    $sql = "UPDATE products SET name='$name', price='$price', description='$description', img='$img', category='$category' WHERE id='$id' ";
    $result = $conn->query($sql);
    if($result){
        echo 'SUCCESS';
    }
?>