<?php
$obj =json_decode($_GET["q"], false);
include("exp.php");
error_reporting (0);
echo"

<table class='ui celled table'>
<thead>
  <th><h5 class='ui header'>Id</h5></th>
     <th><h5 class='ui header'>ISBN</h5></th>
     <th><h5 class='ui header'>Name</h5></th>
     <th><h5 class='ui header'>Designation</h5></th>
     <th><h5 class='ui header'>RollNo</h5></th>
    <th><h5 class='ui header'>Taken date</h5></th>
   
 <th><h5 class='ui header'>Return date</h5></th>
   


</tr></thead>
<tbody>";
$query="select * from  borrow where  borrow.name like '%$obj->year%' and borrow.stud_id like '%$obj->title%' and borrow.bstatus='false' ";
$data=mysqli_query($conn,$query);
while($result= mysqli_fetch_assoc($data))
{
$eid1=$result[id];
$eid=$result['isbn'];
echo "<tr>";
 echo  " <td data-label='Id'><div class='ui tiny header'>".$eid1."</div></td>";
   echo"   <td data-label='Isbn'><div class='ui tiny header'>".$eid."</div></td>";
     echo" <td data-label='Name'>".$result[name]."</td>";
     echo" <td data-label='Designation'>".$result[designation]."</td>";
     echo" <td data-label='Roll_number'>".$result[stud_id]."</td>";
     echo" <td data-label='Taken Date'>".$result[taken_date]."</td>";
  echo" <td data-label='Taken Date'>".$result[return_date]."</td>";
  echo "</tr>";
}
?>

<html>


<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.13/semantic.min.css'>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.13/semantic.min.js'></script>
<style>
.nav2{
margin-left:840px;
}
</style>

</html>