
<html>
<?php

include("exp.php");
error_reporting (0);
echo"
<div class='nav2'>
<div class='ui menu'>
  <div class='item'>
    <div class='ui icon input'>
      <input type='text' placeholder='@name' id='ex' onkeyup='search()'>
      <i class='search icon'></i>
    </div>
  </div>
  <div class='right item'>
    <div class='ui action input'>
      <input type='text' placeholder='@rollnum' id='ex1' onkeyup='search()'>
      <div class='ui button'>Go</div>
    </div>
  </div>
</div>
</div>
";
echo"
<div id='hello1'>
<table class='ui celled table'>
  <thead>
     <tr>
     <th><h5 class='ui header'>Id</h5></th>
     <th><h5 class='ui header'>ISBN</h5></th>
     <th><h5 class='ui header'>Name</h5></th>
     <th><h5 class='ui header'>Designation</h5></th>
     <th><h5 class='ui header'>RollNo</h5></th>
    <th><h5 class='ui header'>Taken date</h5></th>
<th><h5 class='ui header'>Return date</h5></th>
  
  </tr></thead>
  <tbody>";

$query="select book.*,borrow.* from  book,borrow where borrow.isbn=book.isbn  and borrow.bstatus='false'";
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

</div>
<style>
.nav2{
margin-left:840px;
}
</style>
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.13/semantic.min.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.13/semantic.min.js"></script>


<script>

function search()
{
 var y = ex.value;
var t  = ex1.value;
var obj = {"year":y, "title":t};
obj1=JSON.stringify(obj);
 
  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById('hello1').innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "http://localhost/library/searchhistory.php?q="+obj1, true);
  xhttp.send();
}
</script>



</html>