<?php
include "templates/header.php";

//session_start();
session_destroy();
echo 'Succesfully logged out!';
header('Refresh:1; url=../');

include "templates/footer.php";

?>