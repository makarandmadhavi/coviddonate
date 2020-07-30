<?php
    include 'conn.php';
    $data = $_POST;
    $id = $data['id'];    
    $sql = "DELETE FROM products WHERE id='$id'";
    $result = $conn->query($sql);
    if($result){
       echo 'SUCCESS';
   }
?>