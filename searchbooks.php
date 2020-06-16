<?php
$obj =json_decode($_GET["q"], false);
include("exp.php");
error_reporting (0);
echo"
<table class='ui celled table'>
<thead>

<th><h5 class='ui header'>ISBN</h5></th>
<th><h5 class='ui header'>Title</h5></th>
 <th><h5 class='ui header'>Author</h5></th>
<th><h5 class='ui header'>Publication</h5></th>
<th><h5  class='ui header'></h5>Edition</th>
<th><h5  class='ui header'></h5>Quantity</th>
<th><h5  class='ui header'></h5>Update</th>
<th><h5  class='ui header'></h5>Delete</th>
<th><h5  class='ui header'></h5>Issue</th>


</tr></thead>
  <tbody>";
  $query="select book.* from  book where book.isbn like '%$obj->isbn%' and book.Title like '%$obj->title%' and book.Author like '%$obj->author%'";
$data=mysqli_query($conn,$query);
while($result= mysqli_fetch_assoc($data))
{
$quan=$result['quantity'];
$eid=$result['isbn'];
if ($quan<=0)
{
echo  "<tr class='warning'>";
}
else
{
     echo "<tr>";
}
     echo  " <td data-label='isbn'><div class='ui tiny header'>".$eid."</div></td>";
     echo  " <td data-label='title'><div class='ui tiny header'>".$result['Title']."</div></td>";
     echo  " <td data-label='author_name'><div class='ui tiny header'>".$result['Author']."</div></td>";
     echo  " <td data-label='publication'><div class='ui tiny header'>".$result['publication']."</div></td>";
     echo  " <td data-label='Edition'><div class='ui tiny header'>".$result['edition']."</div></td>";
     echo  " <td data-label='Quantity'><div class='ui tiny header'>".$quan."</div></td>";
     echo "<td data-label='Update'><button class='ui green button' onclick='update({$eid})'>update</button></td>";
echo "<td data-label='Delete'><button class='ui  button' onclick='Delete({$eid})'>Delete</button></td>";
if ($quan<1)
{
echo "<td data-label='Issue'><button class='ui  button' >OutOfStock</button></td>";
}
else
{
echo "<td data-label='Issue'><button class='ui  button' onclick='issue({$eid})'>Issue</button></td>";
}  
  echo "</tr>";
}
?>

<html>
<script>
function update(str)
{
  
    location.replace('http://localhost/library/updatebook.php?q='+str);
}
function Delete(str)
{
  
    location.replace('http://localhost/library/deletebook.php?q='+str);
}
</script>
</html>