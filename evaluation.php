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





/*$val4 = 
$_SESSION['answer1'];
$_SESSION['answer2'];
$_SESSION['answer3'];
$_SESSION['answer4'];
$_SESSION['answer5'];
$_SESSION['answer6'];
$_SESSION['answer7'];
$_SESSION['answer8'];
$_SESSION['answer9'];
$_SESSION['answer10'];
$_SESSION['answer11'];*/




		//	$q10 = $_SESSION['question-10'];
		//	$val10 = $q10['answer'];
		//	print_r($val10);

		$val1 = $_SESSION['question-1']['answer'] ?? 0;
		$val2 = $_SESSION['question-2']['answer'] ?? 0;
		$val3 = $_SESSION['question-3']['answer'] ?? 0;
		// $val41 = $_SESSION['question-4']['answer1'];
			
		/*
		if array_key_exists('answer2', $_SESSION['question-4']) {
			$val42 = $_SESSION['question-4']['answer2'];	
		} else {
			$val42 = 0; 
		}*/

		$val42 = $_SESSION['question-4']['answer2'] ?? 0;
		$val43 = $_SESSION['question-4']['answer3'] ?? 0; 
		$val44 = $_SESSION['question-4']['answer4'] ?? 0;
		$val45 = $_SESSION['question-4']['answer5'] ?? 0;
		$val46 = $_SESSION['question-4']['answer6'] ?? 0;
		$val47 = $_SESSION['question-4']['answer7'] ?? 0;
		$val48 = $_SESSION['question-4']['answer8'] ?? 0;
		$val49 = $_SESSION['question-4']['answer9'] ?? 0;
		$val410 = $_SESSION['question-4']['answer10'] ?? 0;
		$val411 = $_SESSION['question-4']['answer11'] ?? 0;

		$val5 = $_SESSION['question-5']['answer'] ?? 0; 
		$val6 = $_SESSION['question-6']['answer'] ?? 0;
		$val7 = $_SESSION['question-7']['answer'] ?? 0;
		$val8 = $_SESSION['question-8']['answer'] ?? 0;
		$val9 = $_SESSION['question-9']['answer'] ?? 0;
		$val10 = $_SESSION['question-10']['answer'] ?? 0;


		
		
		$sum = ($val1 + $val2 + $val3 + $val42 + $val43 + $val44 + $val45 + $val46 + $val47 + $val48 + $val49 + $val410 + $val411 + $val5 + ($val6*20) + ($val7*20) + ($val8*20) + ($val9*20) + ($val10*20));

		// print_r($sum);



			function generateResultText($sum) {
				
				$textUnhealthy = "Your physique requires some serious intervention! Come to our gym, we will put your a** into motion!";

				$textAverage = "Not bad... but a beach body would be better, wouldn't it? Come to our gym, we'll show you the quickest path there!";

				$textHealthy = "Congratulations! You're quite the stunner! Would you like to stay that way, even if the years go by? Come to our gym, we'll show you how to stay forever young!";

			
				
				if ($sum < 333) {

					echo $textUnhealthy; 
					
				}

				elseif ($sum < 666) {

					echo $textAverage;

				}

				else {

					echo $textHealthy;

				}
			}


		
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
				
				<?php

					generateResultText($sum);

				?>

			</div>
			
		</div>
	</div>	
	
	<!-- ===== footer include ===== --->
	<?php
		include 'footer.php';
		// prettyPrint($_SESSION);
	?>

</body>