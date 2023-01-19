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
	<?php 


		

		/*function($question) {

			$sum = $val10

		}*/

		$val = 0;

		$val1 = $_SESSION['question-1']['answer'];
		$val2 = $_SESSION['question-2']['answer'];
		$val3 = $_SESSION['question-3']['answer'];
		$val4 = $_SESSION['question-4']['answer'];
		$val5 = $_SESSION['question-5']['answer'];
		$val6 = $_SESSION['question-6']['answer'];
		$val7 = $_SESSION['question-7']['answer'];
		$val8 = $_SESSION['question-8']['answer'];
		$val9 = $_SESSION['question-9']['answer'];
		$val10 = $_SESSION['question-10']['answer'];


	
		
		$sum = $val1 + $val2 + $val3 + $val4 + $val5 + $val6 + $val7 + $val8 + $val9 + $val10;

		print_r($sum);


		
		//$q10 = $_SESSION['question-10'];
		//$val10 = $q10['answer'];
		//print_r($val10);
	
		//$_SESSION["answer-1"];
		//print_r($answer1);

	?>

	<!-- ===== Top header and Navbar include ===== --->
	<?php
		 include 'headerAndNav.php';
	?>

	<!-- ===== Question-box ===== --->
	<div class="container mt-3 pt-5">

		<!-- ====== question-box top-row ====== -->
		<div class="row">
			<div class="col-sm-12 bg-info text-white text-center p-3 h5">
				Evaluation
			</div>
		</div>

	
			<!-- ====== question-box bottom-row ====== -->
		<div class="row text-center">

			<!-- ====== evaluation text ====== -->
			<div class="col-md-12 bg-secondary text-white p-3 border-right">
				blabla
			</div>
			
		</div>
	</div>	
	
	<!-- ===== footer include ===== --->
	<?php
		include 'footer.php';
		prettyPrint($_SESSION);
	?>

</body>