<?php

include ('exp.php');
error_reporting(0);
          
          $file = $_FILES['file']['tmp_name'];
          $handle = fopen($file, "r");
          $c = 0;
          while(($filesop = fgetcsv($handle, 1000, ",")) !== false)
                    {
          
$title=$filesop[0];
$mentor=$filesop[1];
$roll1=$filesop[2];
$std1=$filesop[3];
$roll2=$filesop[4];
$std2=$filesop[5];
$roll3=$filesop[6];
$std3=$filesop[7];
$roll4=$filesop[8];
$std4=$filesop[9];
$year=$filesop[10];
$cat=$filesop[11];
$query="insert into project(title,year,category) values(?,?,?)";
$stmt=mysqli_stmt_init($conn);
mysqli_stmt_prepare($stmt,$query);
mysqli_stmt_bind_param($stmt,"sss",$title,$year,$cat);
mysqli_stmt_execute($stmt);
$id=$stmt->insert_id;
$query1="INSERT INTO team_details( id,student1, student2, student3, student4, roll1, roll2, roll3, roll4, mentor) VALUES
 (?,?,?,?,?,?,?,?,?,?)";
$stmt1=mysqli_stmt_init($conn);
mysqli_stmt_prepare($stmt1,$query1);
mysqli_stmt_bind_param($stmt1,"ssssssssss",$id,$std1,$std2,$std3,$std4,$roll1,$roll2,$roll3,$roll4,$mentor);
mysqli_stmt_execute($stmt1);

         $c = $c + 1;
           }
$redirect_page="http://localhost/library/displayall.php";
header('Location:'.$redirect_page);
      
?>