<?php
$isbn=$_GET['isbn'];
$title=$_GET['title'];
$publication=$_GET['publication'];
$author=$_GET['author'];
$edition=$_GET['edition'];
$quantity=$_GET['quantity'];

include("exp.php");
error_reporting (0);

$query="insert into book values('$isbn','$title','$author','$publication','$edition','$quantity')";
$data=mysqli_query($conn,$query);
$redirect1_page="displayallbooks.php";
header('Location:'.$redirect1_page);

?>