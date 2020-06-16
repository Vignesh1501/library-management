<?php
$obj =json_decode($_GET["q"], false);
include("exp.php");
error_reporting (0);
echo"
<table class='ui   table'>
  <thead>
    <tr><th class='one wide'><h5 class='ui header'>Id</h5></th>
    <th class='one wide'><h5 class='ui header'>Title</h5></th>
    <th class='one wide'><h5 class='ui header'>Year</h5></th>
    <th class='two wide'><h5>Student_details</h5></th>
    <th class='two wide'><h5 class='ui header'>Mentor</h5></th>
    <th class='two wide'><h5 class='ui header'>More</h5></th>

  </tr></thead>
  <tbody>";
$query="select project.*,team_details.* from  project,team_details where project.id=team_details.id and project.year like '%$obj->year%' and project.title like '%$obj->title%' and project.category like '%$obj->category%'";
$data=mysqli_query($conn,$query);
$i=0;
$j=1;
while($result= mysqli_fetch_assoc($data))
{
$eid=$result['id'];
if($i%2==0)
{
echo "<tr>";
}
else
{
echo "<tr class='warning'>";
}
 echo  " <td data-label='Id'><div class='ui tiny header'>".$j."</div></td>";
   echo"   <td data-label='title'><div class='ui tiny header'>".$result[title]."</div></td>";
     echo" <td data-label='year'>".$result[year]."</td>";
echo "<td data-label='student1,student2,student3,student4'><div class='ui tiny header'>".$result['student1']."(".$result['roll1'].")<br>".$result['student2']."(".$result['roll2'].")<br>".$result['student3']."(".$result['roll3'].")<br>".$result['student4']."(".$result['roll4'].")"."</div></td>";
echo "<td data-label='Mentor'><div class='ui tiny header'>".$result['mentor']."</div></td>";
echo "<td data-label='More'>
<div class='drop'>
<div class='ui compact menu'>
  <div class='ui simple dropdown item'>
  <a> More</a>
    <i class='dropdown icon'></i>
    <div class='menu'>
      <div class='item'><i class='delete icon' onclick='Delete({$eid})'></i><button class='tiny ui red button'  onclick='Delete({$eid})'>Remove</button></div>
      <div class='item'><i class='edit icon' onclick='update({$eid})'></i><button class='tiny ui yellow button'  onclick='update({$eid})'>Edit</button></div>
      <div class='item'><i class='file outline icon'  onclick='print({$eid})'></i>Print</div>
    </div>
  </div>
</div>
</div>

</td>";

echo "</tr>";
$i=$i+1;
$j=$j+1;
}
?>

<html>
<script>
function update(str)
{
  
    location.replace('http://localhost/library/updateadd.php?q='+str);
}
function Delete(str)
{
  
    location.replace('http://localhost/library/deleterec.php?q='+str);
}
</script>
</html>