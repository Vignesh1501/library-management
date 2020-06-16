<html>
<head>
</head>
<?php

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
$query="select top_project.*,top_team_detail.* from  top_project,top_team_detail where top_project.id=top_team_detail.id ";
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
      <div class='item'><i class='delete icon' onclick='hello7({$eid})'></i><button class='tiny ui red button'  onclick='hello7({$eid})'>Remove</button></div>
      <div class='item'><i class='edit icon' onclick='hello2({$eid})'></i><button class='tiny ui yellow button'  onclick='hello2({$eid})'>Edit</button></div>
      <div class='item'><i class='file outline icon'></i>Print</div>
      <div class='item'><i class='upload icon' onclick='hello8({$eid})'></i>Upload</div>
       <div class='item'><i class='eye icon' onclick='hello9({$eid})'></i>View</div>
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

<body>

</body>




</html>