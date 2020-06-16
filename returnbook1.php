<?php
$redirect1_page="displayallbooks.php";
$i=$_GET['q'];
include("exp.php");
error_reporting (0);
$false="false";
$query="update borrow set bstatus='$false' where id='$i'";
$data=mysqli_query($conn,$query);

$query1="select * from borrow where id='$i'";
$data1=mysqli_query($conn,$query1);
$result= mysqli_fetch_assoc($data1);
$p=$result[isbn];


$query2="update  book set quantity=quantity+1 where isbn='$p'";

$data2=mysqli_query($conn,$query2);


$today = date('Y-m-d H:i:s');
$query3="update borrow set return_date='$today' where id='$i'";
$data3=mysqli_query($conn,$query3);
header('Location:'.$redirect1_page);
?>