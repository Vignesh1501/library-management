<!DOCTYPE html>
<html lang="en">
<head>
    
        
	<title>Add </title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/noui/nouislider.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<head>
   
</head>
<body>
        
         <div class="hay">
	<div class="container-contact100"  >
		<div class="wrap-contact100">
			<form method = "POST" action="createp.php" class="contact100-form validate-form">
				<span class="contact100-form-title">
					Project Details
				</span>
               

				<div class="wrap-input100 bg2 rs1-wrap-input100">
					<span class="label-input100">Title *</span>
					<input class="input100" type="text" name="title" placeholder="Enter Project Name">
				</div>
				<div class="wrap-input100 bg1 rs1-wrap-input100">
					<span class="label-input100">Mentor </span>
					<input class="input100" type="text" name="mname" placeholder="Enter Mentor Name">
                    
				</div>
                <div class="wrap-input100 validate-input bg1 rs1-wrap-input100" >
					<span class="label-input100">Std_roll1 </span>
					<input class="input100" type="text" name="roll1" placeholder="Enter Student Roll Number ">
				</div>
                <div class="wrap-input100 validate-input bg1 rs1-wrap-input100" >
					<span class="label-input100">Student1 </span>
					<input class="input100" type="text" name="std1" placeholder="Enter Student Name ">
				</div>
				<div class="wrap-input100 validate-input bg1 rs1-wrap-input100" >
					<span class="label-input100">Std_roll2 </span>
					<input class="input100" type="text" name="roll2" placeholder="Enter Student Roll Number ">
				</div>
				<div class="wrap-input100 validate-input bg1 rs1-wrap-input100" >
					<span class="label-input100">Student2 </span>
					<input class="input100" type="text" name="std2" placeholder="Enter Student Name ">
				</div>
				<div class="wrap-input100 validate-input bg1 rs1-wrap-input100" >
					<span class="label-input100">Std_roll3 </span>
					<input class="input100" type="text" name="roll3" placeholder="Enter Student Roll Number ">
				</div>
				<div class="wrap-input100 validate-input bg1 rs1-wrap-input100" >
					<span class="label-input100">Student3 </span>
					<input class="input100" type="text" name="std3" placeholder="Enter Student Name ">
				</div>
				<div class="wrap-input100 validate-input bg1 rs1-wrap-input100" >
					<span class="label-input100">Std_roll4 </span>
					<input class="input100" type="text" name="roll4" placeholder="Enter Student Roll Number ">
				</div>
				<div class="wrap-input100 validate-input bg1 rs1-wrap-input100" >
					<span class="label-input100">Student4 </span>
					<input class="input100" type="text" name="std4" placeholder="Enter Student Name ">
				</div>

				
			

				
				<div class="wrap-input100 bg1 rs1-wrap-input100">
					<span class="label-input100">Year</span>
					<input class="input100" type="text" name="year" placeholder="Enter Year">
				</div>
                
                                  <div class="wrap-input100 validate-input bg1 rs1-wrap-input100" >
					<span class="label-input100"> Category</span>
				<select name="category">
                                 <option value="btech">Btech</option>
                                   <option value="mtech">Mtech</option>
                            </select>
				</div>
         
                
				
                
                
                
       

				


				<div class="container-contact100-form-btn">
					<input type="submit"  value="submit" onclick="clicked(event)">
						<span>
    
							<i class="" aria-hidden="true"></i>
                        </span>
                        <script>
function clicked(e)
{
    if(!confirm('Do you want to Insert record '))e.preventDefault();
}
</script>
                                
				</div>
            </form>
		</div>
	</div>

</div>

<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
	<script>
		$(".js-select2").each(function(){
			$(this).select2({
				minimumResultsForSearch: 20,
				dropdownParent: $(this).next('.dropDownSelect2')
			});


			$(".js-select2").each(function(){
				$(this).on('select2:close', function (e){
					if($(this).val() == "Please chooses") {
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
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="vendor/noui/nouislider.min.js"></script>
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
	        $('.contact100-form-range-value input[name="from-value"]').val($('#value-lower').html());
	        $('.contact100-form-range-value input[name="to-value"]').val($('#value-upper').html());
	    });
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
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