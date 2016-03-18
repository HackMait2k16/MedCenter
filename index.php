<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<title>Vision</title>
		<meta name="description" content="Blueprint: Split Layout" />
		<meta name="keywords" content="website template, layout, css3, transition, effect, split, dual, two sides, portfolio" />
		<meta name="author" content="Codrops" />
		<link rel="shortcut icon" href="../favicon.ico">
		<link rel="stylesheet" type="text/css" href="css/demo.css" />
		<link rel="stylesheet" type="text/css" href="css/component.css" />
		<link rel="stylesheet" type="text/css" href="css/font-awesome.css" />
		<link rel="stylesheet" type="text/css" href="css/starstyle.css" />
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
		<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.2/css/select2.min.css" rel="stylesheet" />
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />

		<script src="js/modernizr.custom.js"></script>
	</head>
	<body>
		<div class="container">
			<div id="splitlayout" class="splitlayout">
				<div class="intro">
					<div class="side side-left" style = "background-color: ">
						<header class="codropsheader clearfix">
							<span>Vision <span class="bp-icon bp-icon-about" data-content="It is a querry resolver that lets you resolve your querries either through chat or calling facility."></span></span>
							<h1>MedCenter</h1>
							</header>
						<div class="intro-content">
							<i class="fa fa-3x fa-heart"></i>
							<h1><span>Patient</span></h1>
						</div>
						<div class="overlay"></div>
					</div>
					<div class="side side-right" style = "background-color: ">
						<div class="intro-content">
							<i class="fa fa-3x fa-user-md"></i>
							<h1><span>Doctor</span></h1>
						</div>
						<div class="overlay"></div>
					</div>
				</div><!-- /intro -->
				<div class="page page-right">
					<div class="page-inner">
						<section class="container-fluid well">
							<h2>Welcome to MedCenter.</h2><br>
							<h2>Please Register</h2>
								<a href = "register.php"><button class = "btn btn-primary" href = "register.php">Register.</button></a>
							<center>
							<a href="http://localhost:8000"><i class="fa fa-5x fa-user-md"></i></a>
							</center>

							<br/>
						<p><h3 style="margin-left:318px"><b>Feedback</b></h3>

	




						
			<form id="ratingsForm">
	<div class="stars">
		<input type="radio" name="star" class="star-1" id="star-1" />
		<label class="star-1" for="star-1">1</label>
		<input type="radio" name="star" class="star-2" id="star-2" />
		<label class="star-2" for="star-2">2</label>
		<input type="radio" name="star" class="star-3" id="star-3" />
		<label class="star-3" for="star-3">3</label>
		<input type="radio" name="star" class="star-4" id="star-4" />
		<label class="star-4" for="star-4">4</label>
		<input type="radio" name="star" class="star-5" id="star-5" />
		<label class="star-5" for="star-5">5</label>
		<span></span>
	</div>
  </form>
  </p>
</section>
						
					</div><!-- /page-inner -->
				</div><!-- /page-right -->
				<div class="page page-left">
					<div class="page-inner">
						<section>
						<center>
							<h2>Welcome to MedCenter.</h2>
							<hr/>
							<?php include 'patient.php'; ?>

							</center>
						</section>
						
					</div><!-- /page-inner -->
				</div><!-- /page-left -->
				<h1><a href="#" class="back back-right" title="back to intro">&rarr;</a></h1>
				<a href="#" class="back back-left" title="back to intro">&larr;</a>
			</div><!-- /splitlayout -->
		</div><!-- /container -->



		<script src="js/classie.js"></script>
		<script src="js/reg.js"></script>
		<script src="js/cbpSplitLayout.js"></script>
		<script type="text/javascript">
		function func1(){
			window.location.assign("http://localhost:3000");

		}
		</script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
		<script src="//cdnjs.cloudflare.com/ajax/libs/jasny-bootstrap/3.1.3/js/jasny-bootstrap.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.2/js/select2.min.js"></script>
		
		<script type="text/javascript">
			$(".js-example-basic-multiple").select2();
		</script>
	</body>
</html>
