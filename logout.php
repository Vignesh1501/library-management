<?php 
session_start();
session_unset();
session_destroy();
$redirect1_page="login.html";
header('Location:'.$redirect1_page);
?>