<?php

include("exp.php");
error_reporting (0);

$query="select count(id) as hay1 from top_project where category='mtech'";
$data=mysqli_query($conn,$query);
while($result= mysqli_fetch_assoc($data))
{
echo $result[hay1];


}
?>