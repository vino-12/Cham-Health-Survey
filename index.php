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

    <!--<div class="container mt-3">
        <h2>Three Unequal Columns</h2>
        <p>To create unequal columns, you have to use numbers. The following example will create a 25%/50%/25% split:</p>
        <div class="row">
            <div class="col-md-3 bg-success">.col-3</div>
            <div class="col-md-6 bg-warning">.col-6</div>
            <div class="col-md-3 bg-success">.col-3</div>
        </div>
    </div>--> 
<div class="p-5 header text-white text-center">
  <h1>FITANDWELL.CH</h1>
</div>

<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="javascript:void(0)">Logo</a>
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
				<div class="col-sm-12 text-bg-info p-3">
								Question One
				</div>
		</div>
		<div class="row">
				<div class="col-md-6 bg-secondary text-white p-3, border-right">
					<p class="align-middle"> 
						<span class="align-middle">
						How healthy are you physically? 
					</span>
					</p>	
				</div>
				<div class="col-md-6 bg-secondary text-white p-3">
						<form action="/action_page.php">
								<label for="customRange" class="form-label">
										coose a value from 1 to 5
								</label>
										<input type="range" class="form-range" id="customRange" step="25" name="points">
												<div class="container p-0 m-0">
														<div class="row fontSizeRange p-0 m-0">
																<div class="col-2 text-left rangeSteps">
																		unhealthy
																</div>	
																<div class="col-3 text-left">
																		so-so-no-so
																</div>
																<div class="col-2 text-center">
																		average Joe
																</div>
																<div class="col-3 text-center">
																		doin' aight'
																</div>
																<div class="col-2 text-right pr-0 mr-0">
																		machine!
																</div>
														</div>
												</div>
												<button type="submit" class="btn btn-primary mt-3">
														Submit
												</button>
						</form>        
				</div>
		</div>
	<nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-bottom">
  	<div class="container-fluid">
    	<a class="navbar-brand" href="#">Fixed bottom</a>
  	</div>
	</nav>
</body>