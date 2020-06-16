<html>
<head>
<style>
.h1
{
margin-left:550px;
margin-top:40px;
}
.hello
{
margin-left:90px;
}
.heading
{
border-bottom:1px solid black;
margin-left:600px;
}
</style>
</head>
<body>

<div class='heading'>
<h1>Book Issue</h1>

</div>

<?php
include("exp.php");
error_reporting (0);
$p=$_GET['q'];
$query="select book.* from  book where book.isbn='$p'";
$data=mysqli_query($conn,$query);
$result= mysqli_fetch_assoc($data);
echo "
<div class='h1'>
<div class='ui card'>

  <div class='content'>
<form  action='http://localhost/library/insertborrow.php'>
<div class='ui form'>


    <div class='field'>
      <label><h4>ISBN</h4></label>
      <input type='text' placeholder='8 or 12digits' name='isbn' value='$result[isbn]'>
    </div>
    <div class='field'>
      <label><h4>Title</h4></label>
      <input type='text' placeholder='Enter Title' name='title' value='$result[Title]'>
    </div>
    <div class='field'>
      <label><h4>Author's</h4></label>
      <input type='text' placeholder='Author Name' name='author' value='$result[Author]'>
    </div>



    <div class='field'>
      <label><h4>Designation</h4></label>
      <input type='text' placeholder='#profession..' name='designation'>
    </div>
    <div class='field'>
      <label><h4>Name</h4></label>
      <input type='text' placeholder='Enter name' name='name'>
    </div>
    <div class='field'>
      <label><h4>ID</h4></label>
      <input type='text' placeholder='Enter roll number' name='roll'>
    </div>
  </div>
<br>
<div class='hello'>
<button class='ui teal button' type='submit' value='Submit'>Submit</button>
</div>
  </div>
 </div>
</div>
</div>

<form>";

?>

  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.13/semantic.min.css'>

    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.13/semantic.min.js'></script>
</body>
</html>






 