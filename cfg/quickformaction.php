<?php error_reporting(0); ?>
<?php include 'database.php'; ?>
<?php

session_start();

   $person = $_POST['person'];
   $username = $_POST['username'];

  if($person === '1')
  {
    $person = "PwC";
  }

  if($person === '2')
  {
    $person = "Carer";
  }

  if($person === '3')
  {
    $person = "Professional";
  }

  if($person === '4')
  {
    $person = "Arhitectural";
  }

  if($person === '5')
  {
    $person = "International";
  }

  if($person === '6')
  {
    $person = "Other Visitor";
  }



      $query = "INSERT INTO daily_visitor (fullname, person) VALUES ('$username', '$person')";
      if(!mysqli_query($con, $query))
      {
      die ('Error: '.mysqli_error($con));
      }

	header("Location: quickform.php");
	die();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Maggies</title>
		<link href="style.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="js/slick/slick.css" rel="stylesheet">
    <link rel="stylesheet" href="js/slick/slick-theme.css" rel="stylesheet">
    <link rel="stylesheet" href="animsition/animsition.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

  </head>
  <body background="bkg.jpg">
      
		<!--
		<div class="row">
			<div class="col-md-8"><img src="logo.png" alt="Site logo" class="img-rounded" style="width:300px; height:120px;"></div>
		</div>
		-->

	<div class="animsition">
	    <nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container">
		  <div class="navbar-header">
		    <a class="navbar-brand" href="index.php" class="animsition-link">Maggie's<?php echo $person; ?>><></a>
		  </div>
		  <div id="navbar" class="collapse navbar-collapse">
		    <ul class="nav navbar-nav">
		      <li><a href="quickform.php" class="animsition-link">Quick Form</a></li>
		      <li class="dropdown">
		        <a class="dropdown-toggle" data-toggle="dropdown" href="dailyform.php">Daily Form
		       <span class="caret"></span></a>
		      </li>
		      <li><a href="dailylog.php" class="animsition-link">Daily Log</a></li>
		   </ul>
		  </div>
	       </div>
	      </nav>  
	    </div>


	      <div class="page-header">
	      </div>

	  <div align="center">
	     <div class="panel panel-primary" style="max-width: 350px;">
	       <div class="panel-heading" align="left">Login</div>
	       <div class="panel-body" align="left">
		 <form role="form" action ="log_in_process.php" method="post">
		   <div class="form-group">
		     <label>User name:</label>
		     <input class="form-control" id="email" name="userLogin">
		   </div>
		   <div class="form-group">
		     <label for="pwd">Password:</label>
		     <input type="password" class="form-control" id="pwd" name="userPasswordLogin">
		   </div>
		     <button type="submit" class="btn btn-default">Login</button>
		 </form>
	       </div>
	     </div>
	   </div>


        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
		<script src="script.js"></script>
	<script src="js/slick/slick.min.js" type="text/javascript"></script>
	<script src="animsition/animsition.min.js" type="text/javascript"></script>
	<script src="animsition/main.js" type="text/javascript"></script>

	</body>
</html>
