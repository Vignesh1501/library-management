<?php
$redirect1_page="displayallbooks.php";
$isbn=$_GET['q'];
$id=$_get['q1'];

include("exp.php");
error_reporting (0);

$query="update borrow set bstatus='false' where borrow.id=$id";
$data=mysqli_query($conn,$query);
$query="update book set quantity=quantity+1 where book.isbn=$isbn";
$data=mysqli_query($conn,$query);
$today = date('Y-m-d H:i:s');
$query="update borrow set return_date=$today where borrow.id=$id";
$data=mysqli_query($conn,$query);
header('Location:'.$redirect1_page);

?>