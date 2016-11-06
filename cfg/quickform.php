<?php error_reporting(0); ?>
<?php include 'database.php'; ?>


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
                <a class="dropdown-toggle" data-toggle="dropdown" href="dailyform.php">Quick Form
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
	    <div class="panel-heading" align="left">Post a Daily Form</div>
	     <div class="panel-body" align="left">
	      <form action = "quickformaction.php" method = "POST" enctype = "multipart/form-data">
	         <br> </br>
	           <div class="form-group">
	             <label>Full Name:  </label>
	             <input type="text" name="username">
	           </div>
		   <div class="form-group">
			  <label for="sel1">Visit type:</label>
			  <select name="person" class="form-control" id="sel1">
			    <option value=1>New</option>
			    <option value=2>Returning</option>
			  </select>
                   </div>
	   	<div class="form-group">
			  <label for="sel1">Gende:</label>
			  <select name="person" class="form-control" id="sel1">
			    <option value=1>Male</option>
			    <option value=2>Female</option>
			  </select>
                   </div>
		   <div class="form-group">
		   <div class="form-group">
			  <label for="sel1">Cancer Site:</label>
			  <select name="person" class="form-control" id="sel1">
			    <option value=1>Lung</option>
			    <option value=2>Breast</option>
			  </select>
                   </div>
		   <div class="form-group">
			  <label for="sel1">Journey type:</label>
			  <select name="person" class="form-control" id="sel1">
			    <option value=1>Curative Intent</option>
			    <option value=2>Pre-Diagnosis</option>
			  </select>
                   </div>
		   <div class="form-group">
			  <label for="sel1">Nature of Visit:</label>
			  <select name="person" class="form-control" id="sel1">
			    <option value=1>Booked</option>
			    <option value=2>Programme</option>
			  </select>
                   </div>
		   <div class="form-group">
			  <label for="sel1">Activity 1:</label>
			  <select name="person" class="form-control" id="sel1">
			    <option value=1>Nutrition</option>
			    <option value=2>Relaxation</option>
			  </select>
                   </div>
		   <div class="form-group">
			  <label for="sel1">Activity 2:</label>
			  <select name="person" class="form-control" id="sel1">
			    <option value=1>Nutrition</option>
			    <option value=2>Relaxation</option>
			  </select>
                   </div>
		   <div class="form-group">
			  <label for="sel1">Activity 3:</label>
			  <select name="person" class="form-control" id="sel1">
			    <option value=1>Nutrition</option>
			    <option value=2>Relaxation</option>
			  </select>
                   </div>
		   <div class="form-group">
			  <label for="sel1">Person:</label>
			  <select name="person" class="form-control" id="sel1">
			    <option value=1>PwC</option>
			    <option value=2>Carer</option>
			    <option value=3>Professional</option>
			    <option value=4>Arhitectural</option>
			    <option value=5>International</option>
			    <option value=6>Other Visitor</option>
			  </select>
		   <div class="form-group">
	         <input type="submit"/ class="btn btn-info" value="Submit" style="margin-top:10px;">
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
