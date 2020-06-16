<?php
$btech=$_GET['q'];
include("exp.php");
error_reporting (0);

echo"
<table class='ui celled table'>
  <thead>
     <tr>
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
  $query='select book.*,borrow.* from  borrow,book where book.isbn=borrow.isbn and borrow.bstatus="true" ';
  $data=mysqli_query($conn,$query);
$id=1;
  while($result= mysqli_fetch_assoc($data))
  {
   
   $date= $result[taken_date];
   $today = date("Y/m/d");
   $date1=date_create($date);
   $date2=date_create($today);
   $diff=date_diff($date1,$date2);
  if($diff->format("%R%a days")>=0)
  {
  
          $eid=$result[id];
          $eid1=$result[isbn];
    echo "<tr>";
   echo  " <td data-label='Id'><div class='ui tiny header'>".$eid."</div></td>";
   echo"   <td data-label='Isbn'><div class='ui tiny header'>".$eid1."</div></td>";
     echo" <td data-label='Name'>".$result[name]."</td>";
     echo" <td data-label='Designation'>".$result[designation]."</td>";
     echo" <td data-label='Roll_number'>".$result[stud_id]."</td>";
     echo" <td data-label='Taken Date'>".$result[taken_date]."</td>";
echo "<td data-label='Update'><button class='ui green button' onclick='update1({$eid})'>update</button></td>";
echo "<td data-label='Delete'><button class='ui  button' onclick='Return1({$eid})'>Return</button></td>";
  echo "</tr>";
    }
  }
?>
<html>
<script>

function update(str)
{
  
    location.replace('http://localhost/library/updatebook.php?q='+str);
}

</script>
</html>