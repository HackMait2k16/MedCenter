<?php
	require 'connect.php';
?>
<html>
	<head>
		<title>MedCenter</title>
		</head>
	<body>
		<form action="<?=$_SERVER['PHP_SELF']?>" method="post" class = "form-horizontal">
			<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
					<select class="js-example-basic-multiple" multiple="multiple" name = "sym[]" id = "sym">
						<?php
							$query = "SELECT * FROM `symptoms` ";
							if($query_run = mysql_query($query)){
								$n = mysql_num_rows($query_run);
								for($i = 0; $i < $n; $i++){
									$name = mysql_result($query_run,$i,'name');
									$value = mysql_result($query_run,$i,'id');
									echo "<option style = 'font-color:#000000' value='".$value."'>".$name."</option>";
								}	
							}
						?>
					</select>
					<button type="submit" >Submit</button>
				</div>
			</div>
		</form>
		
	</body>
</html>

<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
	$sym = isset($_POST['sym']) ? $_POST['sym'] : null; // we also want to check if it's set else we'll get an notice
    if ($sym){
		$list = array(0);
		foreach ($_POST["sym"] as $sym_id){
			$cat_id = mysql_query("SELECT `catid` FROM `symptoms` WHERE `id` = ".$sym_id);
			$cat_id = mysql_result($cat_id,0,'catid');
			
			if(!isset($list[$cat_id]))
				$list[$cat_id] = 1;
			else
				$list[$cat_id] += 1;
		}
	}
	$max = 1;
	$cat_id = 1;
	foreach($list as $id => $l){
		if($l>$max)
			$max = $l;
			$cat_id = $id;
	}
	
	header("Location: table.php?cat_id=".$id);
}
?>
