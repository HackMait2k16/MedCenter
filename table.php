<?php
	require 'connect.php';
	
	$cat_id = $_GET['cat_id'];
	$query = mysql_query("SELECT * FROM `category` WHERE `id` = ".$cat_id);
	$cat_name = mysql_result($query,0,'name');
	$query = mysql_query("SELECT * FROM `doctors` WHERE `catid` = ".$cat_id);
	$n = mysql_num_rows($query);
	$doctors = array();
	$name = 'Dr. Sony Mishra';
	$addr = 'South Extension 1, Delhi';
	$qual = '14 years experience Smilekraft Multispeciality D';
	$phone = '9625874263';
	for($i = 0; $i < $n; $i++){
		$name = mysql_result($query,$i,'name');
		$addr = mysql_result($query,$i,'addr');
		$qual = mysql_result($query,$i,'qualification');
		$phone = mysql_result($query,$i,'phone');
		$doctors[$i] = array($name,$addr,$qual,$phone);
	}	
	for($i = $n; $i<4;$i++){
		$doctors[$i] = array($name,$addr,$qual,$phone);
		$name = 'Dr. Sourabh Nagpal';
		$addr = 'Vasant Vihar, Delhi';
		$qual = 'Matrix Dental And Skin Lounge and 2 more clinics ';
		$phone = '9523645236';
	}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
<title>MedCenter</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
<link rel="stylesheet" href="css/style.css" type="text/css"/>
<link href='http://fonts.googleapis.com/css?family=ABeeZee' rel='stylesheet' type='text/css'>
<link href="bootstrap.css" rel="stylesheet" type="text/css"/>
<link href="bootstrap-responsive.css" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
		<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.2/css/select2.min.css" rel="stylesheet" />

</head>

	<body style = "background-image: url('http://www.joburgchiropractor.co.za/images/background.jpg');background-size: 100% 100%;">
		<div class="container-fluid">
			<div class="row-fluid  col-xs-12">
				<h1><?php echo $cat_name; ?></h1>
			</div>
			
			<div class = "row">
				<div class="col-xs-6">
					<div class="span3 tiny col-xs-12">
						<div class="pricing-table-header-tiny">
							<h3><?php echo $doctors[0][0]; ?></h3>
						</div>
						<div class="pricing-table-features">
							<p><strong>Description </strong><?php echo $doctors[0][2]; ?></p>
							<p><strong>Location </strong><?php echo $doctors[0][1]; ?></p>
							<p><strong>Mobile </strong><?php echo $doctors[0][3]; ?></p>
						</div>
						<div class="pricing-table-signup-tiny">
							<p><a href="http://localhost:3000">Chat</a></p>
						</div>
					</div>
				</div>
				
				<div class="col-xs-6">
					<div class="span3 small col-xs-12">
						<div class="pricing-table-header-small">
							<h3><?php echo $doctors[1][0]; ?></h3>
						</div>
						<div class="pricing-table-features">
							<p><strong>Description </strong><?php echo $doctors[1][2]; ?></p>
							<p><strong>Location </strong><?php echo $doctors[1][1]; ?></p>
							<p><strong>Mobile </strong><?php echo $doctors[1][3]; ?></p>
						</div>
						<div class="pricing-table-signup-small">
							<p><a href="http://localhost:3000">Chat</a></p>
						</div>
					</div>
				</div>
			</div>
			<div class = "row">		
				<div class="col-xs-6">
					<div class="span3 medium col-xs-12">
						 <div class="pricing-table-header-medium">
							<h3><?php echo $doctors[2][0]; ?></h3>
						</div>
						<div class="pricing-table-features">
							<p><strong>Description </strong><?php echo $doctors[2][2]; ?></p>
							<p><strong>Location </strong><?php echo $doctors[2][1]; ?></p>
							<p><strong>Mobile </strong><?php echo $doctors[2][3]; ?></p>
						</div>
						<div class="pricing-table-signup-medium">
							<p><a href="http://localhost:3000">Chat</a></p>
						</div>
					</div>
				</div>
				
				<div class="col-xs-6">
					<div class="span3 pro col-xs-12">
						 <div class="pricing-table-header-pro">
							<h3><?php echo $doctors[3][0]; ?></h3>
						</div>
						<div class="pricing-table-features">
							<p><strong>Description </strong><?php echo $doctors[3][2]; ?></p>
							<p><strong>Location </strong><?php echo $doctors[3][1]; ?></p>
							<p><strong>Mobile </strong><?php echo $doctors[3][3]; ?></p>
						</div>
						<div class="pricing-table-signup-pro">
							<p><a href="http://localhost:3000">Chat</a></p>
						</div>
					</div>
				</div>	
			</div>
		</div>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
		<script src="//cdnjs.cloudflare.com/ajax/libs/jasny-bootstrap/3.1.3/js/jasny-bootstrap.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.2/js/select2.min.js"></script>
		
    </body>
</html>
