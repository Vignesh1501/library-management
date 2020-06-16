
<?php
$redirect1_page="displayall.php";
include("exp.php");
error_reporting (0);
$id=$_GET['q'];
$query="delete from   project  where id=?";
$stmt=mysqli_stmt_init($conn);
mysqli_stmt_prepare($stmt,$query);
mysqli_stmt_bind_param($stmt,"s",$id);
mysqli_stmt_execute($stmt);
$query1="delete from  team_details where id=?"; 
$stmt1=mysqli_stmt_init($conn);
mysqli_stmt_prepare($stmt1,$query1);
mysqli_stmt_bind_param($stmt1,"s",$id);
mysqli_stmt_execute($stmt1);
header('Location:'.$redirect1_page);
?>