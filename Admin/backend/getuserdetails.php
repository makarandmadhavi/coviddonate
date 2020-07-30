<?php
    
    function getuserdetails($id){
        include 'conn.php';
        $sql = "SELECT id,username FROM login WHERE id=$id";
        $result = $conn->query($sql);
        $row=$result->fetch_assoc();
        return $row;
    }

?>