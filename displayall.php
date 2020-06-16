 <?php
session_start();
$str="please login first";
$redirect_page="http://localhost/library/index1.php?q=+'$str'";
if(strcmp($_SESSION["status"],"true")==0)
{

}
else
{
header('Location:'.$redirect_page);
}
?>
<html>
<head>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
.innerar
{
margin-left:1069px;
}
.head
{
margin-left:280px;
}
.drop
{
width:70px;
height:30px;
}
.butt
{
margin:7px;
height:20px;
width:70px;

}
.button
{
border:none;
shadow:none;
}
.container1
{
display:flex;
overflow-x: auto;
}
.one
{
width:500px;
padding:10px;
margin-left:201px;
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
margin-left:146px;
}
.three
{
flex:6

}

.heading
{

width:1350px;
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
<script
  src="https://code.jquery.com/jquery-3.4.1.js"
  integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
  crossorigin="anonymous"></script>
<script>
window.onload = function(){
    $('#select').dropdown();
};

var isMobile = /iPhone|iPad|iPod|Android/i.test(navigator.userAgent);
		var element = document.getElementById('text');
		if (isMobile) {

var head = document.getElementsByTagName('HEAD')[0];  
  
  
        var link = document.createElement('link'); 
  
      
        link.rel = 'stylesheet';  
      
        link.type = 'text/css'; 
      
        link.href = 'style.css';  
  

        head.appendChild(link);  
   
  			
		} else {
 

	                
		}

</script>

</head>
<body>


<div class="heading">
<div class="ui menu">
  <a class="item" href="http://localhost/library/home.php">
 <i class="home icon"></i>Home
  </a>
  <a class="item">
 Messages
  </a>
<div class="innerar" >
  <a class=" red item active" >
<i class="power off icon"></i>
Logout
  </a>
</div>
</div>
</div>
<div class="container2">





<div class="menu1">
<div class="one">
<div class="ui three item menu">
  <a class="item" href="http://localhost/library/displayall.php" >All</button>
  <a class="item" onclick="myFunction('btech')" ><i class="filter icon"></i>Btech</a>

  <a class="item" onclick="myFunction1('mtech')"><i class="filter icon"></i>Mtech</a>
</div>
</div>
</div>









<div id="replace">
<div class="nav1">
<div class="ui menu">
  <div class="item">
    <div class="ui icon input">
      <input type="text" placeholder="@Year..." id="ex" onkeyup="search()">
      <i class="search icon"></i>
    </div>
  </div>
  <div class="right item">
    <div class="ui action input">
      <input type="text" placeholder="@Title..." id="ex1" onkeyup="search()">
      <div class="ui button" ></div>
    </div>
  </div>
</div>
</div>
</div>



</div>
<div class="container1">


<div class="two">
<div class="ui vertical menu">
 <div class="item">
    <div class="ui transparent icon input">
      <input type="text" placeholder="Search by roll">
      <i class="search icon"></i>
    </div>
  </div>  



<a class="active teal item" onclick="hello1()">
    Top_projects
    <div class="ui teal left pointing label"><div id="allcount">24</div></div>
  </a>
  <a class="item" onclick="hello('btech')">
  Top_projects Btech
    <div class="ui label">
<div id="topbnumber">51</div></div>
  </a>
  <a class="item" onclick="hello6('mtech')">
    Top_projects Mtech
    <div class="ui label">
<div id="topmnumber">
1</div></div>
  </a>
 <div class="item">
    <div class="ui transparent icon input">
  <i class="upload icon"></i><button class="ui blue button" id ="trans1"><a href=" http://localhost/library/uploadmid.php" style="color:white;">Insert New Record</a></button>

    </div>
  </div>  



 

</div>
</div>

<div class="three">
<div id="hello">  
<table class="ui   table">
  <thead>
    <tr><th class="one wide"><h5 class="ui header">Id</h5></th>
    <th class="one wide"><h5 class="ui header">Title</h5></th>
    <th class="one wide"><h5 class="ui header">Year</h5></th>
    <th class="two wide"><h5>Student_details</h5></th>
    <th class="two wide"><h5 class="ui header">Mentor</h5></th>
    <th class="two wide"><h5 class="ui header">More</h5></th>

  </tr></thead>
  <tbody>
  <?php
include("exp.php");
error_reporting (0);

?>

  
<?php
$i=2;
$j=1;
$query="select project.*,team_details.* from  project,team_details where project.id=team_details.id";
$data=mysqli_query($conn,$query);
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
      <div class='item' ><i class='delete icon' onclick='Delete({$eid})'></i><button class='tiny ui red button'  onclick='Delete({$eid})'>Remove</button></div>
      <div class='item' id='trans2'><i class='edit icon' onclick='update({$eid})'></i><button class='tiny ui yellow button'  onclick='update({$eid})'>Edit</button></div>
      <div class='item'><i class='file outline icon' onclick='print({$eid})'></i>Print</div>
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
</div>
</div>
  </tbody>
</table>

</div>

</div>


<div class="ui basic modal">
  <div class="ui icon header">
    <i class="power off icon"></i>
   Do you want to log out
  </div>
  <div class="content">
    <h4>If you log out your session will be ended</h4>
  </div>
  <div class="actions">
    <div class="ui red basic cancel inverted button">
      <i class="remove icon"></i>
      No
    </div>
    <div class="ui green ok inverted button" onclick="logout()">
      <i class="checkmark icon" ></i>
      Yes
    </div>
  </div>
</div>



<script>

$('.innerar').click(function(){
$('.ui.basic.modal')
  .modal('show')
;
});

$('#trans').click(function(){
$('#hello')
  .transition('fly right')
;
    
});

$('#trans1').hover(function(){
$('#hello')
  .transition('fade')
;
   
});



$('#trans2').click(function(){
$('#hello')
  .transition('fly right')
;
    
});



var cat;

window.onload=countmtech();
window.onload=countall1();
function myFunction(str)
{
  cat='btech';
  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById('hello').innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "http://localhost/library/displaybtech.php?q="+str, true);
  xhttp.send();
}
function myFunction1(str)
{
  cat='mtech';
  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById('hello').innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "http://localhost/library/displaymtech.php?q="+str, true);
  xhttp.send();
}
function search()
{
 var y = ex.value;
var t  = ex1.value;
var obj = {"year":y, "title":t,"category":cat};
obj1=JSON.stringify(obj);
 
  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById('hello').innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "http://localhost/library/search.php?q="+obj1, true);
  xhttp.send();
}

function hello(str)
{
  
  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById('hello').innerHTML = this.responseText;
 document.getElementById('replace').innerHTML = "";  
    }
  };
  xhttp.open("GET", "http://localhost/library/top.php?q="+str, true);
  xhttp.send();
}


function hello6(str)
{
  
  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById('hello').innerHTML = this.responseText;
 document.getElementById('replace').innerHTML = "";  
    }
  };
  xhttp.open("GET", "http://localhost/library/top1.php?q="+str, true);
  xhttp.send();
}
function hello1()
{
  
  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById('hello').innerHTML = this.responseText;
        document.getElementById('replace').innerHTML = "";   
    }
  };
  xhttp.open("GET", "http://localhost/library/topall.php", true);
  xhttp.send();
}

function countall1()
{
xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById('allcount').innerHTML = this.responseText; 
    }
  };
  xhttp.open("GET", "http://localhost/library/countall.php", true);
  xhttp.send();
}
function countbtech()
{
xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById('topbnumber').innerHTML = this.responseText; 
    }
  };
  xhttp.open("GET", "http://localhost/library/countbtech.php", true);
  xhttp.send();
}
function countmtech()
{
xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById('topmnumber').innerHTML = this.responseText; 
    }
  };
  xhttp.open("GET", "http://localhost/library/countmtech.php", true);
  xhttp.send();
}


function update(str)
{
  
    location.replace('http://localhost/library/updateadd.php?q='+str);
}
function print(str)
{
  
    location.replace('http://localhost/library/print.php?q='+str);
}
function Delete(str)
{
  
    location.replace('http://localhost/library/deleterec.php?q='+str);
}

function hello2(str)
{
  location.replace('http://localhost/library/topupdateadd.php?q='+str);
}
function hello3(str)
{
  location.replace('http://localhost/library/topbtechupdateadd.php?q='+str);
}
function hello4(str)
{
  location.replace('http://localhost/library/topbtechupdateadd.php?q='+str);
}
function hello7(str)
{
  location.replace('http://localhost/library/deletetop.php?q='+str);
}
function hello8(str)
{
  location.replace('http://localhost/library/uploadpdf.php?q='+str);
}

function hello9(str)
{
  location.replace('http://localhost/library/viewpdf.php?q='+str);
}

function logout()
{
  location.replace('http://localhost/library/logout.php');
}


window.onload=countbtech;



</script>


  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.13/semantic.min.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.13/semantic.min.js"></script>

</body>
</html>