
<?php
$redirect1_page="displayallbooks.php";
include("exp.php");
error_reporting (0);
$isbn=$_GET['q'];
$query="delete from   book  where isbn=?";
$stmt=mysqli_stmt_init($conn);
mysqli_stmt_prepare($stmt,$query);
mysqli_stmt_bind_param($stmt,"s",$isbn);
mysqli_stmt_execute($stmt);
$query="delete from   borrow  where isbn=?";
$stmt=mysqli_stmt_init($conn);
mysqli_stmt_prepare($stmt,$query);
mysqli_stmt_bind_param($stmt,"s",$isbn);
mysqli_stmt_execute($stmt);
header('Location:'.$redirect1_page);
?>