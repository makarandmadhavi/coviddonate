<?php
$admin = 0;
$type = 'donor';
if(isset($_SESSION['isAdmin'])){
    $admin = $_SESSION['isAdmin'];
}
if(isset($_SESSION['type'])){
    $type = $_SESSION['type'];
} else {
    header('Location: ../index.php');
}
if($admin){
    header('Location: Admin/home.php');

} elseif($type=='ngo'){
    header('Location: ngo/ngo.php');

}


?>