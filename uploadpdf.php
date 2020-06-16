<html>
<head>
</head>
<body>
<form action="" method="POST" enctype="multipart/form-data">
<input  type="file" name="file">
<input type="submit">
</form>
<?php
include("exp.php");
error_reporting (0);
$p=$_GET['q'];



$file= $_FILES['file'];
print_r($file);
$fileName=$_FILES['file']['name'];
$fileTmpName=$_FILES['file']['tmp_name'];
$fileSize=$_FILES['file']['size'];
$fileError=$_FILES['file']['error'];
$fileType=$_FILES['file']['type'];
$fileExt=explode('.',$fileName);
$fileActualExt= strtolower(end($fileExt));
$allowed=array('jpg','jpeg','png','pdf'); 
if(in_array($fileActualExt,$allowed))
{

if($fileError===0)
{
if($fileSize<1000000)
{
 $fileNameNew= $fileName.".".$fileActualExt;
$hay=$result[title];
 $fileDestination='uploads/'.$fileName;
move_uploaded_file($fileTmpName,$fileDestination);
$query1="delete from pdf where id='$p'";
$data1=mysqli_query($conn,$query1);
$resultcheck1=mysqli_num_rows($data1);
$query="insert into pdf(id,name,img_dir) values('$p','$fileName','$fileDestination') ";
$data=mysqli_query($conn,$query);
$resultcheck=mysqli_num_rows($data);
$redirect_page="http://localhost/library/displayall.php";
header('Location:'.$redirect_page);
}else
{
echo "there was an error in uploading the file";
}
}
else{
echo "u cannot upload files of this fotmat";
}

}


?>
</body>
</html>