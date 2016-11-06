<?php include 'config.inc.php'; ?>
<?php 
	
	//Connect to my sql

	$con = mysqli_connect($database_host, $database_user, $database_pass, $group_dbnames);

	if(mysqli_connect_errno()) {

		die ('Failed to connect to Mysql:'.$mysqli_connect_errno());
	}


 ?>
