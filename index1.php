<html>
    <head>
 
        
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <!-- Popper -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <!-- Latest compiled and minified Bootstrap JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
 

<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

      
        <style>


            .bg {
  /* The image used */
  

  /* Full height */
height:670px;

        



  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}

.card {
 
  border: none;
  margin-top: 140px;
  margin-left:200px;
  background-color: rgba(255,255,255, 0);

}


        </style>

        </head>

    <body>

         


                    <div class="row">
                            <div class="col-sm" >
                                    <h1 class="display-4">Enter Your
                                        <br>Credentails!</h1>
                                        

                                  </div>
                                                                                  
                                    <div class="col-sm">
                    <div class="hay">
                                    <div class="card" style="width: 19rem;">
                                     <div class="card-body">
                                              <h3 class="card-title">Login Form</h3>
                                              <p class="card-text">
                                                 <div class="form-group">
                                                            <form method="POST" action="http://localhost/library/login.php">
                                                            <label for="exampleInputEmail1"><strong>Email address</strong></label>
                                                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter UserName" name="username">
                                
                                                          </div>
                                                          <div class="form-group">
                                                            <label for="exampleInputPassword1"><strong>Password</strong></label>
                                                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
                                                          </div>
                                                          <button type="submit" class="btn btn-primary" >Submit</button>
                                                        </form>
                                              </p>
</div>
                                             
                                            </div>
                                          </div>
                                    
                      </div>
                     
                    </div>
                  </div>







<?php
$p=$_GET['q'];


?>
<div aria-live="polite" aria-atomic="true" style="position: relative; min-height: 200px;">
  <div class="toast" style="position: absolute; top: 0; right: 0;">
    <div class="toast-header">
      <img src="1.jpg" class="rounded mr-2" alt="..." height="20" width="20">
      <strong class="mr-auto">Bootstrap</strong>
      <small>Just now</small>
      <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div class="toast-body">
        <?php
      echo $p;
     ?>
    </div>
  </div>
</div>

</body>



  </html>  
