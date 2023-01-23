<?php
	/* initialisiere die Session. Auf der Index-Seite, welche die erste Frage und damit den Beginn der Umfrage anzeigt, sollen alle vorherigen Daten gelöscht werden.
	*/
	session_start();
	session_destroy();

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
		 include 'headerAndNav.php';
	?>

	<!-- ====== question-box ====== -->
	<div class="container mt-3 pt-5">

		<!-- ====== question-box top-row ====== -->
		<div class="row">
			<div class="col-sm-12 bg-info text-white text-center p-3 h5">
				Question One
			</div>
		</div>

		<!-- ====== question-box bottom-row ====== -->
		<div class="row text-center">

			<!-- ====== question-col ====== -->
			<div class="col-md-6 bg-secondary text-white p-3 border-right">
				How healthy are you physically? 
			</div>

			<!-- ====== form-col ====== -->
			<div class="col-md-6 bg-secondary text-white p-3">

				<!-- ====== form start ====== -->
				<form action="question-2.php" method="post">

					<label for="customRange" class="form-label">
						Please choose one of these 5 answers:
					</label>


					<input type="range" class="form-range" id="customRange" step="20" min="0" max="100" value="0" name="answer-1">

<div class="container p-0 m-0">
    <div class="row fontSizeRange p-0 m-0">
        <div class="col-2 text-left rangeStep1">
                Please Select
        </div>   
        <div class="col-2 text-left rangeStep2">
		        couch<br>potato
        </div>
        <div class="col-2 text-center rangeStep3">
                so-so
        </div>
        <div class="col-2 text-center rangeStep4">
                pretty good
        </div>
        <div class="col-2 text-center rangeStep5">
                aight'<br>I guess
        </div>
        <div class="col-2 text-right pr-0 mr-0 rangeStep6">
            You're a<br>machine!
        </div>
    </div>
	<div class="text-center" id="prompt" style="display:none;">Please move the slider</div>
<button type="submit" class="btn btn-primary mt-3" id="submitBtn" disabled>Next</button>

					
				</form>  
				<!-- ====== form end ====== -->

			</div>
		</div>
	</div>

	<?php
		include 'footer.php'
	?> 

<!-- ===== J.S form Validation ===== --->
    <script>
     document.getElementById("customRange").addEventListener("input", function() {
      if (this.value == 0) {
       document.getElementById("prompt").style.display = "block";
        document.getElementById("submitBtn").disabled = true;
       } 
	   else {
        document.getElementById("prompt").style.display = "none";
         document.getElementById("submitBtn").disabled = false;
              }
          });
</script>


	
</body>