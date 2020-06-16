
<?php
$redirect1_page="displayallbooks.php";
include("exp.php");
error_reporting (0);
$isbn=$_POST['Isbn'];
$isbn1=$_POST['Is1'];
$designation=$_POST['designation'];
$stud_id=$_POST['stud_id'];
$name=$_POST['name'];
$taken_date=$_POST['taken_date'];


$query="update  borrow set isbn=?, designation=?,stud_id=?,name=? where id=?";
$stmt=mysqli_stmt_init($conn);
mysqli_stmt_prepare($stmt,$query);
mysqli_stmt_bind_param($stmt,"sssss",$isbn,$designation,$stud_id,$name,$isbn1);
mysqli_stmt_execute($stmt);
header('Location:'.$redirect1_page);
?>