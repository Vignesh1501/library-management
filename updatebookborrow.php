
<html>
<head>
<title>Update</title>
	<meta charset='UTF-8'>
	<meta name='viewport' content='width=device-width, initial-scale=1'>
<!--===============================================================================================-->
	<link rel='icon' type='image/png' href='images/icons/favicon.ico'/>
<!--===============================================================================================-->
	<link rel='stylesheet' type='text/css' href='vendor/bootstrap/css/bootstrap.min.css'>
<!--===============================================================================================-->
	<link rel='stylesheet' type='text/css' href='fonts/font-awesome-4.7.0/css/font-awesome.min.css'>
<!--===============================================================================================-->
	<link rel='stylesheet' type='text/css' href='fonts/iconic/css/material-design-iconic-font.min.css'>
<!--===============================================================================================-->
	<link rel='stylesheet' type='text/css' href='vendor/animate/animate.css'>
<!--===============================================================================================-->
	<link rel='stylesheet' type='text/css' href='vendor/css-hamburgers/hamburgers.min.css'>
<!--===============================================================================================-->
	<link rel='stylesheet' type='text/css' href='vendor/animsition/css/animsition.min.css'>
<!--===============================================================================================-->
	<link rel='stylesheet' type='text/css' href='vendor/select2/select2.min.css'>
<!--===============================================================================================-->
	<link rel='stylesheet' type='text/css' href='vendor/daterangepicker/daterangepicker.css'>
<!--===============================================================================================-->
	<link rel='stylesheet' type='text/css' href='vendor/noui/nouislider.min.css'>
<!--===============================================================================================-->
	<link rel='stylesheet' type='text/css' href='css/util.css'>
	<link rel='stylesheet' type='text/css' href='css/main.css'>
<!--===============================================================================================-->
</head>


<body>
<?php
include('exp.php');
error_reporting (0);
?>

  
<?php
$p=$_GET['q'];
$query="select borrow.* from  borrow where  borrow.id='$p'";
$data=mysqli_query($conn,$query);
$result= mysqli_fetch_assoc($data);
$is=$result[isbn];
$is2=$result[id];
 echo "
         <div class='hay'>
	<div class='container-contact100'  >
		<div class='wrap-contact100'>
			<form method = 'POST'  action='updatebook3.php 'class='contact100-form validate-form'>
				<span class='contact100-form-title'>
					Book Details
				</span>
                            			

                <div class='wrap-input100 bg2 rs1-wrap-input100'>
                <span class='label-input100'>Isbn *</span>
                <input class='input100' type='text' name='Isbn' placeholder='Enter Isbn' value='{$is}'>
            </div>

           <div class='wrap-input100 bg2 rs1-wrap-input100'>
                <span class='label-input100'>designation *</span>
                <input class='input100' type='text' name='designation' placeholder='Enter Designation' value='{$result[designation]}'>
            </div>
	
			

                <div class='wrap-input100 bg1 rs1-wrap-input100'>
					<span class='label-input100'>Stud_id * </span>
					<input class='input100' type='text' name='stud_id' placeholder='Enter stud roll_Name'value='{$result[stud_id]}'>
                    
                </div>
    
          
                <div class='wrap-input100 bg1 rs1-wrap-input100'>
					<span class='label-input100'>Name * </span>
					<input class='input100' type='text' name='name' placeholder='Enter Name' value='{$result[name]}'>
                    
				</div>
 <div class='wrap-input100 bg1 rs1-wrap-input100'>
					<span class='label-input100'>Taken_date * </span>
					<input class='input100' type='text' name='takendate' placeholder='Enter Taken_date 'value='{$result[taken_date]}'>
                    
                </div>
				
		 <input class='input100' type='hidden' name='Is1' placeholder='Enter Isbn' value='{$is2}'>	
                
				
                ";
                
                
 ?>      

				


				<div class='container-contact100-form-btn'>
					<input type='submit'  value='submit' onclick='clicked(event)'>
						<span>
    
							<i class='' aria-hidden='true'></i>
                        </span>
                        <script>
function clicked(e)
{
    if(!confirm('Are you sure?'))e.preventDefault();
}
</script>
                                
				</div>
            </form>
		</div>
	</div>

</div>

<!--===============================================================================================-->
	<script src='vendor/jquery/jquery-3.2.1.min.js'></script>
<!--===============================================================================================-->
	<script src='vendor/animsition/js/animsition.min.js'></script>
<!--===============================================================================================-->
	<script src='vendor/bootstrap/js/popper.js'></script>
	<script src='vendor/bootstrap/js/bootstrap.min.js'></script>
<!--===============================================================================================-->
	<script src='vendor/select2/select2.min.js'></script>
	<script>
		$('.js-select2').each(function(){
			$(this).select2({
				minimumResultsForSearch: 20,
				dropdownParent: $(this).next('.dropDownSelect2')
			});


			$('.js-select2').each(function(){
				$(this).on('select2:close', function (e){
					if($(this).val() == 'Please chooses') {
						$('.js-show-service').slideUp();
					}
					else {
						$('.js-show-service').slideUp();
						$('.js-show-service').slideDown();
					}
				});
			});
		})
	</script>
<!--===============================================================================================-->
	<script src='vendor/daterangepicker/moment.min.js'></script>
	<script src='vendor/daterangepicker/daterangepicker.js'></script>
<!--===============================================================================================-->
	<script src='vendor/countdowntime/countdowntime.js'></script>
<!--===============================================================================================-->
	<script src='vendor/noui/nouislider.min.js'></script>
	<script>
	    var filterBar = document.getElementById('filter-bar');

	    noUiSlider.create(filterBar, {
	        start: [ 1500, 3900 ],
	        connect: true,
	        range: {
	            'min': 1500,
	            'max': 7500
	        }
	    });

	    var skipValues = [
	    document.getElementById('value-lower'),
	    document.getElementById('value-upper')
	    ];

	    filterBar.noUiSlider.on('update', function( values, handle ) {
	        skipValues[handle].innerHTML = Math.round(values[handle]);
	        $('.contact100-form-range-value input[name='from-value']').val($('#value-lower').html());
	        $('.contact100-form-range-value input[name='to-value']').val($('#value-upper').html());
	    });
	</script>
<!--===============================================================================================-->
	<script src='js/main.js'></script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src='https://www.googletagmanager.com/gtag/js?id=UA-23581568-13'></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>
<style>
        input[type=submit] {
            padding:5px 15px; 
            background:skyblue; 
            border:0 none;
            cursor:pointer;
            -webkit-border-radius: 50px;
            border-radius: 50px;
            width: 12em;
            height: 3em;
 
            </style>





</body>
</html>