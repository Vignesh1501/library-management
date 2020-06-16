
<html>
<head>

</head>
<body>

<?php
include("exp.php");
error_reporting (0);
?>

<?php
$redirect_page="http://localhost/library/sign.html";
$uname=$_POST['username'];
$pass=$_POST['password'];
$query="insert into admin values(?,?)";
$stmt=mysqli_stmt_init($conn);
mysqli_stmt_prepare($stmt,$query);
$hpass=password_hash($pass,PASSWORD_DEFAULT);
mysqli_stmt_bind_param($stmt,"ss",$uname,$hpass);
mysqli_stmt_execute($stmt);
header('Location:'.$redirect_page);

?>
</body>
</html>