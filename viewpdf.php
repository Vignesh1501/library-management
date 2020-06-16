<?php
include("exp.php");
error_reporting (0);
$p=$_GET['q'];
$query="select * from pdf where id='$p'";
$data=mysqli_query($conn,$query);
while($result= mysqli_fetch_assoc($data))
{
$r=$result['img_dir'];
$file = $r;
$filename=$r;
header('Content-type: application/pdf');
header('Content-Disposition: inline; filename="' . $filename . '"');
header('Content-Transfer-Encoding: binary');
header('Content-Length: ' . filesize($file));
header('Accept-Ranges: bytes');
@readfile($file);
}
?>
