<html>
<head>


         <meta name="viewport" content="width=device-width, initial-scale=1"> 
      
        <link rel="stylesheet" href= 
    "https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"> 
      
        <script src= 
    "https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"> 
        </script> 
      
        <script src= 
    "https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"> 
        </script> 
      
        <script src= 
    "https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"> 
        </script>
</head>
<body>
<?php
include("exp.php");
error_reporting (0);
$str="not a valid user";
$redirect1_page="http://localhost/library/home.php";
$redirect_page="http://localhost/library/index1.php?q=+'$str'";
$uname = $_POST['username'];
$pass =$_POST['password'];
$query="select *from admin where user_name=?";
$stmt=mysqli_stmt_init($conn);
mysqli_stmt_prepare($stmt,$query);
mysqli_stmt_bind_param($stmt,"s",$uname);
mysqli_stmt_execute($stmt);
$result=mysqli_stmt_get_result($stmt);
$row=mysqli_fetch_assoc($result);
$pcheck=password_verify($pass,$row['password']);
if($pcheck == false)
{
sleep(1);
header('Location:'.$redirect_page);
echo "not a valid user";
}
else
{
sleep(1);
session_start();
$_SESSION["status"]= "true";
header('Location:'.$redirect1_page);
}


?>



</body>
</html>



 