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
				How important is physical activity to you?
			</div>

			<!-- ====== form-col ====== -->
			<div class="col-md-6 bg-secondary text-white p-3">

				<!-- ====== form start ====== -->
				<form action="question-4.php" method="post">
					<label for="customRange" class="form-label">
						Please choose 1 of these 5 answers:
					</label>
					<input type="range" class="form-range" id="customRange" step="25" name="answer">

					<input type="hidden" name="lastPageID" value="question-3">

						<div class="container p-0 m-0">
							<div class="row fontSizeRange p-0 m-0">
								<div class="col-2 text-left rangeStep1">
									don't care<br>a bit...
								</div>	
								<div class="col-3 text-left rangeStep2">
									it's<br>ok
								</div>
								<div class="col-2 text-center rangeStep3">
										I like it
								</div>
								<div class="col-3 text-center rangeStep4">
										I do it<br>regularly
								</div>
								<div class="col-2 text-right pr-0 mr-0 rangeStep5">
									I CANNOT<br>sit still!
								</div>
							</div>
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

</body>