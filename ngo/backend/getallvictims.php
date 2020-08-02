<?php
    
    function getallvictims(){
        include 'backend/conn.php';
        $data = array();
        $sql = "SELECT * FROM victims ORDER BY isverified";
        $result = $conn->query($sql);
        if($result){     
            while($row = $result -> fetch_assoc()){
            array_push($data,$row);
            }
        }
    return $data;
    }
?>