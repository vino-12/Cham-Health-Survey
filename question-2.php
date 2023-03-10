<?php

include "data-collector.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="styles/style.css" rel="stylesheet">
    <script src="scripts/script.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

	<!-- ===== Top header and Navbar include ===== --->
	<?php
		 include 'headerAndNav.php';
	?>

	<!-- ===== Question-box ===== --->
	<div class="container mt-3 pt-5">

		<!-- ====== question-box top-row ====== -->
		<div class="row">
			<div class="col-sm-12 bg-info text-white text-center p-3 h5">
				Question Two
			</div>
		</div>

		<!-- ====== question-box bottom-row ====== -->
		<div class="row text-center">

			<!-- ====== question-col ====== -->
			<div class="col-md-6 bg-secondary text-white p-3 border-right">
				Do you take nutritional supplements?
			</div>

			<!-- ====== form-col ====== -->
			<div class="col-md-6 bg-secondary text-white p-3 text-center">

				<!-- ====== form start ====== -->
				<form action="question-3.php" class="text-center" method="post">

					<div class="form-check text-start">
						

					<input type="radio" class="form-check-input text-center" id="radio1" name="optradio" value="option1">
                    <label class="form-check-label radioYes" for="radio1">Yes</label>
					</div>
                   
					<div class="form-check text-start">
			
					<input type="radio" class="form-check-input text-center" id="radio2" name="optradio" value="option2">
                    <label class="form-check-label radioNo" for="radio2"> No </label>

					</div>

					<input type="hidden" name="lastPageID" value="question-2">

					<button type="submit" class="btn btn-primary mt-3">
							Next
					</button>
				</form> 
				<!-- ====== form end ====== -->

			</div>
		</div>
	</div>	
	
	<!-- ===== footer include ===== --->
	<?php
		include 'footer.php';
	
		// prettyPrint($_SESSION);

	?>


     <!-- ===== J.S form Validation ===== --->
     <script>
         document.querySelector("form").addEventListener("submit", function(event) {
        var radioButtons = document.querySelectorAll("input[name='optradio']");
        var isChecked = false;
        for (var i = 0; i < radioButtons.length; i++) {
            if (radioButtons[i].checked) {
                isChecked = true;
                break;
            }
        }
        if (!isChecked) {
            alert("Please select an option");
            event.preventDefault();
        }
          });
    </script>
</body>