
<?php
$redirect1_page="displayall.php";
include("exp.php");
error_reporting (0);
$id=$_POST['id'];
$title=$_POST['title'];
$mentor=$_POST['mname'];
$roll1=$_POST['roll1'];
$std1=$_POST['std1'];
$roll2=$_POST['roll2'];
$std2=$_POST['std2'];
$roll3=$_POST['roll3'];
$std3=$_POST['std3'];
$roll4=$_POST['roll4'];
$std4=$_POST['std4'];
$year=$_POST['year'];
$cat=$_POST['category'];
$query="update  top_project set title=? , year=? ,  category=?  where id=?";
$stmt=mysqli_stmt_init($conn);
mysqli_stmt_prepare($stmt,$query);
mysqli_stmt_bind_param($stmt,"ssss",$title,$year,$cat,$id);
mysqli_stmt_execute($stmt);
$query1="update  top_team_detail   set student1=?, student2=?,student3=? ,student4=? , roll1=? ,roll2=? , roll3=? , roll4=? ,mentor=?  where id=?"; 
$stmt1=mysqli_stmt_init($conn);
mysqli_stmt_prepare($stmt1,$query1);
mysqli_stmt_bind_param($stmt1,"ssssssssss",$std1,$std2,$std3,$std4,$roll1,$roll2,$roll3,$roll4,$mentor,$id);
mysqli_stmt_execute($stmt1);
header('Location:'.$redirect1_page);
?>