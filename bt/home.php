
<html>
<head>
 	<link rel="stylesheet" href="https://formden.com/static/cdn/bootstrap-iso.css">
<style>

.container1{

display:flex;

}

.container1 div{

}
.one
{
border-right:1px #ccc solid;
padding:10px;
border-bottom:1px #ccc solid;
flex:6;
height:657px;


}
.two
{
border-left:1px #ccc solid;
padding:10px;
border-bottom:1px #ccc solid;
flex:6;
}
.innerone
{
margin-left:120px;
margin-top:400px;
}
.innertwo
{
margin-right:120px;
margin-top:400px;
}

</style>
</head>
<body>

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
<div class="container1">
<div class="one">
<h1 class="display-4">Manage your library 
<br>
Here</h1>
<div class="innerone">
<h3 align="center"><button type="button"  class="btn btn-primary "><strong><a href="http://localhost/library/displayallbooks.php" style="color:white;">Library</a></strong></button></h3>
</div>
</div>
<div class="two">
<h1 class="display-4">Manage Projects 
<br>
Here</h1>
<div class="innertwo">
<h3 align="center"><button type="button"  class="btn btn-primary "><strong><a href="http://localhost/library/displayall.php" style="color:white;">Project</a></strong></button></h3>
</div>
</div>

</div>
</body>
</html>