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
	include 'data-collector.php';
	?>


	<div class="p-5 header bg-info text-white text-center">
		<h1>FITANDWELL.CH</h1>
	</div>

	<nav class="navbar navbar-expand-sm navbar-dark bg-dark p-0 m-0">
		<div class="container-fluid">
			<a class="navbar-brand" href="#">
				<img src="img/fit-and-well-high-resolution-logo-white-on-transparent-background.png" alt="Logo" class="logo p-0 m-0">
			</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="mynavbar">
				<ul class="navbar-nav ms-auto">
					<li class="nav-item">
						<a class="nav-link" href="javascript:void(0)">Link</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="javascript:void(0)">Link</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="javascript:void(0)">Link</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	<div class="container mt-3 pt-5">
		<div class="row">
			<div class="col-sm-12 bg-info text-white text-center p-3">
				Question Two
			</div>
		</div>
		<div class="row">
			<div class="col-md-6 bg-secondary text-white p-3, border-right">
				Do you take nutritional supplements?
			</div>
			<div class="col-md-6 bg-secondary text-white p-3">
				<form action="/action_page.php">
					<div class="form-check justify-content-center">
					<input type="radio" class="form-check-input justify-content-center" id="radio1" name="optradio" value="option1" checked>Yes
					<label class="form-check-label" for="radio1"></label>
				</div>
				<div class="form-check">
					<input type="radio" class="form-check-input" id="radio2" name="optradio" value="option2">No
					<label class="form-check-label" for="radio2"></label>
				</div>
					<button type="submit" class="btn btn-primary mt-3">
							Submit
					</button>
				</form>        
			</div>
		</div>
	<nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-bottom">
		<div class="container-fluid text-white justify-content-left copyright">©fitnadwell.ch</div>
  	<div class="container-fluid justify-content-center">
		<a class="navbar-brand" href="#">
				<img src="img/fit-and-well-high-resolution-logo-white-on-transparent-background.png" alt="Logo" class="logo p-0 m-0">
			</a>
  	</div>
		<div class="container-fluid text-white float-end">ff
		</div>
	</nav>
</body>