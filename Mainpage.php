<?php
session_start();
if(!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] == false)
{
	header("location: index1.php");
}

?>
<!doctype html>
<html>
<head>
<title>Admin</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href="designAdmin.css" rel="stylesheet" type="text/css">
</head>


<body>
	
	<div class="container">
<!--header	-->
	
		
		<div id="body" >
        <div id="head"><img class="img-responsive" src="nsbm.png" alt="Chania" width="200" height="100"> </div>
			
<!--navbar-->
	
			
		<nav class="navbar navbar-inverse">
         <div class="container-fluid">
           <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>                        
              </button>
			   
             <a class="navbar-brand">Admin</a>
          </div>
          <div class="collapse navbar-collapse" id="myNavbar">
             <ul class="nav navbar-nav">
                <li class="active"><a href="Mainpage.php">Home</a></li>
                <li><a href="EditUser.php">Edit User</a></li>
                <li><a href="EditSupplier.php">Edit Suplier</a></li>
				 <li><a href="priceChange.php">Change prices</a></li>
             </ul>
             <ul class="nav navbar-nav navbar-right">
                 
                 <li><a href="logedOut.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
             </ul>
          </div>
       </div>
	 </nav>
  
<!--body-->
			
	<br> <br><br><br><br>
           <div style="height: 50vh">
			   
        <a href="checkout.php"><button type="button" class="btn btn-danger btn-block btn-lg active" style="color: black;"><b>Checkout Oder</b></button></a><br>
		<a href="dailyReport.php"><button type="button" class="btn btn-info btn-block ">Generate Daily Report</button></a><br>
		
		<a href="monthlyReportDateCheck.php"><button type="button" class="btn btn-info btn-block ">Generate Customize Report</button></a><br>
			<a href="staffLunchDateCheck.php"><button type="button" class="btn btn-info btn-block ">Generate Staff Lunch Order Report</button></a><br>
		<br>
		
				
    </div>
		
<!--footer-->
  <footer class="page-footer font-small unique-color-dark pt-4 footer" style="background: rgba(0,0,0,1.00)">

       <hr >
    <!-- Copyright -->
       <div class="footer-copyright text-center py-3">NSBM GREEN UNIVERSITY
       </div>
    <!-- Copyright -->
       <hr >
  </footer>	
		
</div>

	
</body>
</html>


