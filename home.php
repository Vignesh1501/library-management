<html>
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
<head>

<style>

.a
{
color:white;
}

.inneronetwo
{
margin-top:400px;
margin-left:400px;
}
.innertwotwo
{
margin-top:400px;
margin-right:400px;
}
.one {
 
flex:6;
border-right:1px solid black;
height:660px;

 }
.innerone
{
margin-top:50px;
margin-left:70px;

}
.innertwo
{
margin-left:70px;
margin-top:50px;

}
.two {
   height:660px;
flex:6;
    }
.cont
{
display:flex;
background-image: url("3.jpg");
}

</style>


<script
  src="https://code.jquery.com/jquery-3.4.1.js"
  integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
  crossorigin="anonymous"></script>

</head>
<body>

<div class="cont">
 
<div class="one">
<div class="innerone">
 <div class="ui huge header">
Manage Your Library
<br>
Here
</div>



<div class="inneronetwo">
<div class="ui blue animated button" tabindex="0" >
  <div class="visible content"><a href="http://localhost/library/displayallbooks.php" style="color:white;">Library</a></div>
  <div class="hidden content">
<a href="http://localhost/library/displayallbooks.php" style="color:white;">
    <i class="left arrow icon"></i>
</a>
  </div>
</div>
</div>
</div>



</div>
<div class="two">
<div class="innertwo">
 <div class="ui huge header">
Manage Your project
<br>
Here
</div>
<div class="innertwotwo">
<div class="ui blue animated button" tabindex="0">
  <div class="visible content"><a href="http://localhost/library/displayall.php" style="color:white;" >Project</a></div>
  <div class="hidden content">
<a href="http://localhost/library/displayall.php" style="color:white;" >
    <i class="right arrow icon"></i>
</a>
  </div>
</div>
</div>
  <p></p>
</div>
</div>




</div>

<script>



window.onload = function(){
$('.innerone')
  .transition('browse')
;
$('.innerone')
  .transition('browse')
;

$('.innertwo')
  .transition('browse  right')
;
$('.innertwo')
  .transition('browse  right')
;

}






</script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.13/semantic.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.13/semantic.min.js"></script>
</body>
</html>