<?php
    include 'conn.php';
    $data = $_POST;
    $username = $data['username'];
    $password = sha1($data['password']);
    $sql = "SELECT * FROM login WHERE username='$username' AND password='$password'";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    if($row){
        session_start();
        $_SESSION['username'] = $row['username'];
        $_SESSION['id'] = $row['id'];
        $_SESSION['isAdmin'] = $row['isAdmin'];
        echo 'SUCCESS';
    }
?>