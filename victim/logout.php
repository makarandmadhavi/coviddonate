<?php
include "templates/header.php";

//session_start();
session_destroy();
echo 'Succesfully logged out!';
header('Refresh:0; url=../index.php');

include "templates/footer.php";

?>