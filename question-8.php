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
				Question Eight
			</div>
		</div>

		<!-- ====== question-box bottom-row ====== -->
		<div class="row text-center">

			<!-- ====== question-col ====== -->
			<div class="col-md-6 bg-secondary text-white p-3 border-right">
				On a typical day, how many of your meals or snacks contain vegetables?
			</div>

			<!-- ====== form-col ====== -->
			<div class="col-md-6 bg-secondary text-white p-3 text-center">

<script>

//JS Validation checking if form is filled with a 1-digit number

var formId = "form-8";
var inputId = "q8Num";
const regExOneDigit = /^[0-9]$/;

function valOneDigit() {
	let x = document.forms[formId][inputId].value;
	if (!x.match(regExOneDigit)) {
		alert("please provide a one digit number!");
		return false;
	}
}

</script>			


				<!-- ====== form start ====== -->
				<form action="question-9.php" onsubmit="return valOneDigit()" class="text-center" method="post" id="form-8">

					<div class="form-check text-start">

						<input type="text" class="form-check-input text-center" id="q8Num" name="answer" value="" checked>please enter a number
						<label class="form-check-label" for="q8Num">
						</label>
					</div>

					<input type="hidden" name="lastPageID" value="question-8">
					
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

</body>