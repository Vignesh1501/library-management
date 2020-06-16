<html>
<head>
<style>
.b1
{
margin-left:25px;
}
.butt
{

margin-top:10px;
}

.button
{
border:none;
shadow:none;
}
.container1
{
display:flex;
}
.one
{
width:500px;
padding:10px;
margin-left:120px;
}
.container2
{
display:flex;
}
.two
{
width:210px;
flex:1;
}
.nav1
{
width:500px;
height:50px;
margin-top:5px;
}
.three
{
flex:6;
}
.heading
{
display:flex;
border-bottom:1px solid black;
}
.innerh
{
flex:6;
}
.innerl
{
flex:6;
margin-left:800px;
}
</style>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

</head>
<body>

<div class="heading">
<div class="innerh">
<h1 class="ui huge header">Books Management</h1>
</div>
<div class="innerl">
<h2>@kitsw..</h2>
</div>
</div>



<div class="container2">
<div class="butt">
<button class="ui blue button">
  <a href="http://localhost/library/home.php" style="color:white;">Home</a></button>
</div>
<div class="menu1">
<div class="one">
<div class="ui three item menu">
  <a class="item" href="http://localhost/library/displayallbooks.php" >All Books</button>
  <a class="item" onclick="myFunction('borrow')">Borrow</a>
  <a class="item" onclick="myFunction1('Overdue')">Overdue</a>
  
</div>
</div>
</div>




<div id="replace">

<div class="nav1">
<div class="ui menu">
  <div class="item">
    <div class="ui icon input">
      <input type="text" placeholder="@Author..." id="ex" onkeyup="search()">
      <i class="search icon"></i>
    </div>
  </div>
  <div class="right item">
    <div class="ui action input">
      <input type="text" placeholder="@Title..." id="ex1" onkeyup="search()">
      <div class="ui button">Go</div>
    </div>
  </div>
</div>
</div>



</div>

</div>
<div class="container1">

<div id="replace1">
<div class="two">
<div class="ui vertical menu">
 <div class="item">
    <div class="ui transparent icon input">
      <input type="text" placeholder="Search by ISBN"  id="ex2" onkeyup="search1()">
      <i class="search icon"></i>
    </div>
  </div>  
<div class="item">
    <div class="ui transparent icon input">
      <input type="text" placeholder="Search by roll_number"  id="ex3" onkeyup="search1()">
      <i class="search icon"></i>
    </div>
  </div>  

<div class="item">
    <div class="ui transparent icon input">
      <input type="text" placeholder="Search by name"  id="ex4" onkeyup="search1()">
      <i class="search icon"></i>
    </div>
  </div>  


 <div class="item">
    <div class="b1">
   <button class="ui blue button"><a href=" http://localhost/library/history.php" style="color:white;">History</a></button>

    </div>
  </div>   
  </div>






 

</div>
</div>

<div class="three">
<div id="hello">  
<table class="ui celled table">
  <thead>
    <th><h5 class="ui header">ISBN</h5></th>
    <th><h5 class="ui header">Title</h5></th>
     <th><h5 class="ui header">Author</h5></th>
    <th><h5 class="ui header">Publication</h5></th>
    <th><h5  class="ui header"></h5>Edition</th>
    <th><h5  class="ui header"></h5>Quantity</th>
    <th><h5 class="ui header">Update</h5></th>
    <th><h5 class="ui header">Delete</h5></th>
<th><h5 class="ui header">Issue</h5></th>

  </tr></thead>
  <tbody>
  <?php
include("exp.php");
error_reporting (0);
$query="select * from  book";
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
echo "<td data-label='Delete'><button class='ui   button' onclick='Delete({$eid})'>
Delete
</button>
</td>
";
if ($quan<=0)
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
</div>
</div>
  </tbody>
</table>

</div>
</div>

<script>




var global='none';
var value;
value=replace1.innerHTML;
window.onload=check(global);
function check(global)
{

if(global=='none')
{
document.getElementById('replace1').innerHTML = "";
}
else
{
document.getElementById('replace1').innerHTML=value;
}
}


function Return(str)
{
  
    location.replace('http://localhost/library/returnbook1.php?q='+str);
}
function Return1(str)
{
  
    location.replace('http://localhost/library/returnbook1.php?q='+str);
}
function myFunction(str)
{
  console.log(value);
  global='borrow';
  document.getElementById('replace1').innerHTML=value;
  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById('hello').innerHTML = this.responseText;
        document.getElementById('replace').innerHTML = "";
     
    }
  };
  xhttp.open("GET", "http://localhost/library/displayborrow.php?q="+str, true);
  xhttp.send();
}
function myFunction1(str)
{
  
  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById('hello').innerHTML = this.responseText;
      document.getElementById('replace').innerHTML = "";
document.getElementById('replace1').innerHTML = "";
     
    }
  };
  xhttp.open("GET", "http://localhost/library/displayoverdue.php?q="+str, true);
  xhttp.send();
}



function search1(str)
{
 var y = document.getElementById('ex2').value;
 var t  = document.getElementById('ex3').value;
var p  = document.getElementById('ex4').value;
 var obj = {"isbn":y, "roll":t ,"name":p};
 obj1=JSON.stringify(obj);

 xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById('hello').innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "http://localhost/library/searchborrowbooks.php?q="+obj1, true);
  xhttp.send();

}
function search()
{

 var y = ex.value;
 var t  = ex1.value;
 var obj = {"author":y, "title":t};
 obj1=JSON.stringify(obj);
 
  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById('hello').innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "http://localhost/library/searchbooks.php?q="+obj1, true);
  xhttp.send();
}
function update(str)
{
  
    location.replace('http://localhost/library/updatebook.php?q='+str);
}

function Delete(str)
{
  
    location.replace('http://localhost/library/deletebook.php?q='+str);
}
function issue(str)
{
  
    location.replace('http://localhost/library/borrowbook.php?q='+str);
}


function update1(str)
{
  
    location.replace('http://localhost/library/updatebookborrow.php?q='+str);
}
</script>


  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.13/semantic.min.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.13/semantic.min.js"></script>




</body>
</html>