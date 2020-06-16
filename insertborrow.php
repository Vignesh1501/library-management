<?php

$isbn=$_GET['isbn'];
$designation=$_GET['designation'];
$name=$_GET['name'];
$roll=$_GET['roll'];
$bstatus="true";
include("exp.php");
error_reporting (0);
$today = date('Y-m-d H:i:s');
$query="insert into borrow(isbn,designation,stud_id,name,bstatus,taken_date) values(?,?,?,?,?,?)";
$stmt=mysqli_stmt_init($conn);
mysqli_stmt_prepare($stmt,$query);

mysqli_stmt_bind_param($stmt,"ssssss",$isbn,$designation,$roll,$name,$bstatus,$today);
mysqli_stmt_execute($stmt);
$query="update  book set quantity=quantity-1 where isbn=?";
$stmt=mysqli_stmt_init($conn);
mysqli_stmt_prepare($stmt,$query);

mysqli_stmt_bind_param($stmt,"s",$isbn);
mysqli_stmt_execute($stmt);
$redirect1_page="displayallbooks.php";
header('Location:'.$redirect1_page);

?>