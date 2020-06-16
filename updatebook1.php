
<?php
$redirect1_page="displayallbooks.php";
include("exp.php");
error_reporting (0);
$isbn=$_POST['Isbn'];
$isbn1=$_POST['Is1'];
$title=$_POST['Title'];
$author=$_POST['author'];
$publication=$_POST['publication'];
$edition=$_POST['edition'];
$quantity=$_POST['quantity'];


$query="update  book set Title=?,Author=?,publication=? , edition=? ,  quantity=?  where isbn=?";
$stmt=mysqli_stmt_init($conn);
mysqli_stmt_prepare($stmt,$query);
mysqli_stmt_bind_param($stmt,"ssssss",$title,$author,$publication,$edition,$quantity,$isbn);
mysqli_stmt_execute($stmt);





$query2="UPDATE book SET isbn = ? WHERE book.isbn = ?";
$stmt2=mysqli_stmt_init($conn);
mysqli_stmt_prepare($stmt2,$query2);
mysqli_stmt_bind_param($stmt2,"ss",$isbn,$isbn1);
mysqli_stmt_execute($stmt2);




$query1="update borrow set isbn=? where  isbn=?";
$stmt1=mysqli_stmt_init($conn);
mysqli_stmt_prepare($stmt1,$query1);
mysqli_stmt_bind_param($stmt1,"ss",$isbn,$isbn1);
mysqli_stmt_execute($stmt1);

header('Location:'.$redirect1_page);


?>