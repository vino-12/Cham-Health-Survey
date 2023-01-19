					
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
				Question Four
			</div>
		</div>

		<!-- ====== question-box bottom-row ====== -->
		<div class="row text-center">

			<!-- ====== question-col ====== -->
			<div class="col-md-6 bg-secondary text-white p-3 border-right">
				What additional physical activity do you do most?
			</div>

			<!-- ====== form-col ====== -->
			<div class="col-md-6 bg-secondary text-white p-3 text-center">

				<!-- ====== form start ====== -->
                
                <!-- Get all checkboxes -->
				



				<form action="question-5.php" class="text-center" method="post">

					<input type="hidden" name="lastPageID" value="question-4">

					<div class="form-check text-start">
						<input type="checkbox" class="form-check-input" id="checkbox-1" name="checkbox-1" value="option1">None
						<label class="form-check-label radioYes" for="checkbox-1">
						</label>
					</div>
					<div class="form-check text-start">
						<input type="checkbox" class="form-check-input" id="checkbox-2" name="checkbox-2" value="Lifting weights">Lifting weights
						<label class="form-check-label radioNo" for="checkbox-2">
						</label>
					</div>
					<div class="form-check text-start">
						<input type="checkbox" class="form-check-input" id="checkbox-3" name="checkbox-3" value="Walking">Walking
						<label class="form-check-label" for="checkbox-3">
						</label>
					</div>
					<div class="form-check text-start">
						<input type="checkbox" class="form-check-input" id="checkbox-4" name="checkbox-4" value="Jogging">Jogging
						<label class="form-check-label" for="checkbox-4">
						</label>
					</div>
					<div class="form-check text-start">
						<input type="checkbox" class="form-check-input" id="checkbox-5" name="checkbox-5" value="Running">Running
						<label class="form-check-label" for="checkbox-5">
						</label>
					</div>
					<div class="form-check text-start">
						<input type="checkbox" class="form-check-input" id="checkbox-6" name="checkbox-6" value="Swimming">Swimming
						<label class="form-check-label" for="checkbox-6">
						</label>
					</div>
					<div class="form-check text-start">
						<input type="checkbox" class="form-check-input" id="checkbox-7" name="checkbox-7" value="Dancing">Dancing
						<label class="form-check-label" for="checkbox-7">
						</label>
					</div>
					<div class="form-check text-start">
						<input type="checkbox" class="form-check-input" id="checkbox-8" name="checkbox-8" value="Aerobics">Aerobics
						<label class="form-check-label" for="checkbox-8">
						</label>
					</div>
					<div class="form-check text-start">
						<input type="checkbox" class="form-check-input" id="checkbox-9" name="checkbox-9" value="Pilates">Pilates
						<label class="form-check-label" for="checkbox-9">
						</label>
					</div>
					<div class="form-check text-start">
						<input type="checkbox" class="form-check-input" id="checkbox-10" name="checkbox-10" value="teamSports">Team Sports
						<label class="form-check-label" for="checkbox-10">
						</label>
					</div>
					<div class="input-group mb-3">
    					<div class="input-group-text">
      						<input type="checkbox" class="form-check-input" id="checkbox-11" name="checkbox11" >
    					</div>
    					<input type="text" class="form-control" placeholder="other activity">
  					</div>

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
		prettyPrint($_SESSION);
	?>
	<script>
      // Get all checkboxes
      var checkboxes = document.querySelectorAll("input[type='checkbox']");

      // Get the "None" checkbox
      var noneCheckbox = document.getElementById("checkbox-1");

      // Add an event listener to the "None" checkbox
      noneCheckbox.addEventListener("change", function() {
        // If the "None" checkbox is checked
        if (noneCheckbox.checked) {
          // Loop through all checkboxes
          for (var i = 0; i < checkboxes.length; i++) {
            // If the checkbox is not the "None" checkbox
            if (checkboxes[i] != noneCheckbox) {
              // Disable the checkbox
              checkboxes[i].disabled = true;
              checkboxes[i].checked = false;
            }
          }
        } else {
          // Loop through all checkboxes
          for (var i = 0; i < checkboxes.length; i++) {
            // If the checkbox is not the "None" checkbox
            if (checkboxes[i] != noneCheckbox) {
              // Enable the checkbox
              checkboxes[i].disabled = false;
            }
          }
        }
      });

      // Add an event listener to the form
      var form = document.querySelector("form");
      form.addEventListener("submit", function(e) {
        var atLeastOneChecked = false;

        // Loop through all checkboxes
        for (var i = 0; i < checkboxes.length; i++) {
          // If the checkbox is checked
          if (checkboxes[i].checked) {
            atLeastOneChecked = true;
          }
        }

        // If no checkbox is checked
        if (!atLeastOneChecked) {
          // Prevent the form from submitting
          e.preventDefault();
          alert("Please select at least one option");
        }
      });
    </script>

</body>