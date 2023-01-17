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
				Question Three
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
				<form action="question-3.php" class="text-center" method="post">
					<div class="form-check text-start">
						<input type="radio" class="form-check-input" id="q3-radio1" name="q3-radio" value="option1" checked>No additional physical activity
						<label class="form-check-label radioYes" for="q3-radio1">
						</label>
					</div>
					<div class="form-check text-start">
						<input type="radio" class="form-check-input" id="q3-radio2" name="q3-radio" value="option2">Lifting weights
						<label class="form-check-label radioNo" for="q3-radio2">
						</label>
					</div>
					<div class="form-check text-start">
						<input type="radio" class="form-check-input" id="q3-radio3" name="q3-radio" value="option3">Walking
						<label class="form-check-label" for="q3-radio3">
						</label>
					</div>
					<div class="form-check text-start">
						<input type="radio" class="form-check-input" id="q3-radio4" name="q3-radio" value="option4">Jogging
						<label class="form-check-label" for="q3-radio4">
						</label>
					</div>
					<div class="form-check text-start">
						<input type="radio" class="form-check-input" id="q3-radio5" name="q3-radio" value="option5">Running
						<label class="form-check-label" for="q3-radio5">
						</label>
					</div>
					<div class="form-check text-start">
						<input type="radio" class="form-check-input" id="q3-radio6" name="q3-radio" value="option6">Swimming
						<label class="form-check-label" for="q3-radio6">
						</label>
					</div>
					<div class="form-<?php

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
			<div class="col-sm-12 bg-info text-white text-center p-3">
				Question Three
			</div>
		</div>

		<!-- ====== question-box bottom-row ====== -->
		<div class="row text-center">

			<!-- ====== question-col ====== -->
			<div class="col-md-6 bg-secondary text-white p-3, border-right">
				How important is physical activity to you?
			</div>

			<!-- ====== form-col ====== -->
			<div class="col-md-6 bg-secondary text-white p-3 text-center">

				<!-- ====== form start ====== -->
				<form action="question-3.php" class="text-center" method="post">
					<div class="form-check text-start">
						<input type="radio" class="form-check-input" id="q3-radio1" name="q3-radio" value="option1" checked>No additional physical activity
						<label class="form-check-label radioYes" for="q3-radio1">
						</label>
					</div>
					<div class="form-check text-start">
						<input type="radio" class="form-check-input" id="q3-radio2" name="q3-radio" value="option2">Lifting weights
						<label class="form-check-label radioNo" for="q3-radio2">
						</label>
					</div>
					<div class="form-check text-start">
						<input type="radio" class="form-check-input" id="q3-radio3" name="q3-radio" value="option3">Walking
						<label class="form-check-label" for="q3-radio3">
						</label>
					</div>
					<div class="form-check text-start">
						<input type="radio" class="form-check-input" id="q3-radio4" name="q3-radio" value="option4">Jogging
						<label class="form-check-label" for="q3-radio4">
						</label>
					</div>
					<div class="form-check text-start">
						<input type="radio" class="form-check-input" id="q3-radio5" name="q3-radio" value="option5">Running
						<label class="form-check-label" for="q3-radio5">
						</label>
					</div>
					<div class="form-check text-start">
						<input type="radio" class="form-check-input" id="q3-radio6" name="q3-radio" value="option6">Swimming
						<label class="form-check-label" for="q3-radio6">
						</label>
					</div>
					<div class="form-check text-start">
						<input type="radio" class="form-check-input" id="q3-radio7" name="q3-radio" value="option7">Dancing
						<label class="form-check-label" for="q3-radio7">
						</label>
					</div>
					<div class="form-check text-start">
						<input type="radio" class="form-check-input" id="q3-radio8" name="q3-radio" value="option8">Aerobics
						<label class="form-check-label" for="q3-radio8">
						</label>
					</div>
					<div class="form-check text-start">
						<input type="radio" class="form-check-input" id="q3-radio9" name="q3-radio" value="option9">Pilates
						<label class="form-check-label" for="q3-radio9">
						</label>
					</div>
					<div class="form-check text-start">
						<input type="radio" class="form-check-input" id="q3-radio10" name="q3-radio" value="option10">Pilates
						<label class="form-check-label" for="q3-radio10">
						</label>
					</div>
					<div class="input-group mb-3">
    					<div class="input-group-text">
      						<input type="radio" class="form-check-input" id="q3-radio11" name="q3-radio">
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
	?>

</body>check text-start">
						<input type="radio" class="form-check-inputPilates" id="q3-radio7" name="q3-radio" value="option7">Dancing
						<label class="form-check-label" for="q3-radio7">
						</label>
					</div>
					<div class="form-check text-start">
						<input type="radio" class="form-check-input" id="q3-radio8" name="q3-radio" value="option8">Aerobics
						<label class="form-check-label" for="q3-radio8">
						</label>
					</div>
					<div class="form-check text-start">
						<input type="radio" class="form-check-input" id="q3-radio9" name="q3-radio" value="option9">Pilates
						<label class="form-check-label" for="q3-radio9">
						</label>
					</div>
					<div class="form-check text-start">
						<input type="radio" class="form-check-input" id="q3-radio10" name="q3-radio" value="option10">Team Sports
						<label class="form-check-label" for="q3-radio10">
						</label>
					</div>
					<div class="input-group mb-3">
    					<div class="input-group-text">
      						<input type="radio" class="form-check-input" id="q3-radio11" name="q3-radio">
    					</div>
    					<input type="text" class="form-control" placeholder="other activity">
  					</div>

					<button type="submit" class="btn btn-primary mt-3 ">
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
	?>

</body>