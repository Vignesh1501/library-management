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
   
     <th><h5 class='ui header'>Update</h5></th>
     <th><h5 class='ui header'>Return</h5></th>

</tr></thead>
<tbody>";
$query="select book.*,borrow.* from  book,borrow where book.isbn=borrow.isbn and borrow.isbn like '%$obj->isbn%' and borrow.stud_id like  '%$obj->roll%'and  borrow.name  like '%$obj->name%'  and borrow.bstatus='true' ";
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
echo "<td data-label='Update'><button class='ui green button' onclick='update1({$eid1})'>update</button></td>";
echo "<td data-label='Return'><button class='ui  button' onclick='Return({$eid1})'>Return</button></td>";
  echo "</tr>";
}
?>

<html>
<script>

</script>
</html>