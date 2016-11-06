<?php error_reporting(0); ?>
<?php include 'database.php'; ?>
<?php

session_start();
$log = FALSE;
if($_SESSION['username'] != '')
  $log = TRUE;


$date = date("Y.m.d");


if($_SESSION['user_id'] != '')
{
	$dateQuery = "UPDATE user_name SET last_seen = '$date' WHERE user_id='".$_SESSION['user_id']."'";
	mysqli_query($con, $dateQuery);
}	

$_SESSION['user_id'] = '';

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Maggie's</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <style>
     /* Remove the navbar's default rounded borders and increase the bottom margin */ 
      .navbar {
        margin-bottom: 50px;
        border-radius: 0;
	  }
     
      /* Add a gray background color and some padding to the footer */
      footer {
      background-color: #f2f2f2;
        padding: 25px;
      }
    </style>
    <link rel="stylesheet" href="animsition/animsition.min.css" rel="stylesheet">
</head>
<body>  
  <body background="bkg.jpg">
  <div class="animsition">
    <div class="mainmenu">
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
          <div class="navbar-header">
            <a class="navbar-brand" href="index.php" class="animsition-link">Maggie's</a>
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

  </div>

</body>
</html>
