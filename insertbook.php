<html>
<head>
<style>
.h1
{
margin-left:530px;
margin-top:50px;
}
</style>
</head>
<body>
<h1>Enter Book Details</h1>
<div class='h1'>
<div class='ui card'>

  <div class='content'>
<form  action="insertb.php">
    <div class="ui form">
 <div class="field">
      <label><h4>ISBN</h4></label>
      <input type="text" placeholder="8 or 12digits" name="isbn">
    </div>
    <div class="field">
      <label><h4>Title</h4></label>
      <input type="text" placeholder="Enter Title" name="title">
    </div>
    <div class="field">
      <label><h4>Author's</h4></label>
      <input type="text" placeholder="Author Name" name="author">
    </div>





    <div class="field">
      <label><h4>Publication</h4></label>
      <input type="text" placeholder="@Publication_name" name="publication">
    </div>
    <div class="field">
      <label><h4>Edition</h4></label>
      <input type="text" placeholder="Version.." name="edition">
    </div>
 <div class="field">
      <label><h4>Quantity</h4></label>
      <input type="number" placeholder="@number.." name="quantity">
    </div>
<br>
<button class="ui teal button" type="submit" value="Submit">Submit</button>

  </div>
<form>

</div>
</div></div>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.13/semantic.min.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.13/semantic.min.js"></script>
</body>
</html>