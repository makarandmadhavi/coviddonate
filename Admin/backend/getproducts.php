<?php
    
    function getallorganizations(){
        include 'conn.php';
        $data = array();
        $sql = "SELECT * FROM organizations";
        $result = $conn->query($sql);
        if($result){     
            while($row = $result -> fetch_assoc()){
            array_push($data,$row);
            }
        }
    return $data;
    }

    function getsingleproduct($id){
        include 'conn.php';
        $sql = "SELECT * FROM organizations WHERE id=$id";
        $result = $conn->query($sql);
        $row=$result->fetch_assoc();
        return $row;
    }

    function getorganizationsbycategory($category){
        include 'conn.php';
        $data = array();
        $sql = "SELECT * FROM organizations WHERE category='$category'";
        $result = $conn->query($sql);
        if($result){     
            while($row = $result -> fetch_assoc()){
            array_push($data,$row);
            }
        }
    return $data;
    }

    function getcart($userid){
        include 'conn.php';
        $data = array();
        $sql = "SELECT * FROM cart WHERE userid='$userid'";
        $result = $conn->query($sql);
        if($result){     
            while($row = $result -> fetch_assoc()){
            array_push($data,$row);
            }
        }
    return $data;
    }

    function getcategories(){
        include 'conn.php';
        $data = array();
        $sql = "SELECT * FROM categories";
        $result = $conn->query($sql);
        if($result){     
            while($row = $result -> fetch_assoc()){
            array_push($data,$row);
            }
        }
    return $data;
    }

?>