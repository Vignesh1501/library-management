<?php

include("exp.php");
error_reporting (0);

$query="select count(id) as hay from top_project where category='btech'";
$data=mysqli_query($conn,$query);
while($result= mysqli_fetch_assoc($data))
{
echo $result[hay];

}
?>