<?php
session_start();
if(!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] == false)
{
	header("location: index.html");
}
?>


<!doctype html>
<html>
<head>
<title>MainPage</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href="maindesign.css" rel="stylesheet" type="text/css">
	

	
</head>


<body>

<!--header	-->
<nav class="navbar-fixed-top">
	<div id="head" >

			<img class="img-responsive" src="nsbm.png" alt="Chania" width="200" height="100"> 
<!--navbar-->
	
			
		<nav class="navbar navbar-inverse fixed-top">
         <div class="container-fluid">
           <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>                        
			   </button>
          </div>
          <div class="collapse navbar-collapse" id="myNavbar">
             <ul class="nav navbar-nav">
                <li class="active"><a href="#">Dashboard</a></li>
				 
			  </ul>
			  						<ul class="nav navbar-nav navbar-right">
<li><a href="logedOutCustomer.php">Log out</a>
										</li>

						</ul>
          </div>
       </div>
	 </nav>
  </div>
</nav>



        
	
	
	
<!--body-->
	
	
<!--fixed background-->
	<figure>
		<div class="fixed-wrap">
			<div id="fixed"></div>
		</div>
	</figure>
	
<!--topic-->
	 
		 <div class="row welcome text-center">
			 <div class="col-12">
				  <center><div  style="background-color:ivory;  opacity: 0.6">
		<h3 class="display-2" style="color:#252525; font-family:  Open Sans, 'Hoefler Text', 'Liberation Serif', Times, 'Times New Roman', 'serif'; font-size: 40px; opacity: 1.0; font-weight: bolder;">Select Location</h3>
		</div>
	</center>
			 </div>
			 
	  	 </div>
	
<!--end topic-->
	 
<!--Selection-->
		
	
	<div class="container-fluid " style="background-color: #E9E9E9">
		<br>
		<div class="row text-center padding">
			<div class="col-xs-12 col-sm-6 col-md-3 hovers">
				<div class="card">
				<a href="soc.php"><img class="cars-img-top image" src="soc.png" style="max-width: 200px; max-height: 200px"><div class="middle">
               		 <div class="text">Select Me</div>
					</a>
				</div>
				<h3>SOC</h3>
				
				</div>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-3 hovers">
				<div class="card">
				<a href="sob.php"><img class="cars-img-top image" src="sob.png" style="max-width: 200px; max-height: 200px"><div class="middle">
               		 <div class="text">Select Me</div>
					</a>
				</div>
				<h3>SOB</h3>
				
				</div>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-3 hovers">
				<div class="card">
				<a href="soe.php"><img class="cars-img-top image" src="soe.png" style="max-width: 200px; max-height: 200px"><div class="middle">
               		 <div class="text">Select Me</div>
					</a>
				</div>
				<h3>SOE</h3>
				
				</div>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-3 hovers">
				<div class="card">
				<a href="admin.php"><img class="cars-img-top image" src="admin.png" style="max-width: 200px; max-height: 200px"><div class="middle">
               		 <div class="text">Select Me</div>
					</a>
				</div>
				<h3>Admin</h3>
				
				</div>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-3 hovers">
				<div class="card">
				<a href="rec.php"><img class="cars-img-top image" src="rec.png" style="max-width: 200px; max-height: 200px"><div class="middle">
               		 <div class="text">Select Me</div>
					</a>
				</div>
				<h3>Recreatoinal</h3>
				</div>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-3 hovers">
				<div class="card">
				<a href="maintenance.php"><img class="cars-img-top image" src="maintenance.png" style="max-width: 200px; max-height: 200px"><div class="middle">
               		 <div class="text">Select Me</div>
					</a>
				</div>
				<h3>Maintenance</h3>
				</div>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-3 hovers">
				<div class="card">
				<a href="medical.php"><img class="cars-img-top image" src="medical2.png" style="max-width: 200px; max-height: 200px"><div class="middle">
               		 <div class="text">Select Me</div>
					</a>
				</div>
				<h3>Medical</h3>
				</div>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-3 hovers">
				<div class="card">
				<a href="lybrary.php"><img class="cars-img-top image" src="library.png" style="max-width: 200px; max-height: 200px"><div class="middle">
               		 <div class="text">Select Me</div>
					</a>
				</div>
				<h3>Library</h3>
				</div>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-3 hovers">
				<div class="card">
				<a href="audi.php"><img class="cars-img-top image" src="audi.png" style="max-width: 200px; max-height: 200px"><div class="middle">
               		 <div class="text">Select Me</div>
					</a>
				</div>
				<h3>Auditorium</h3>
				</div>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-3 hovers">
				<div class="card">
				<a href="print.php"><img class="cars-img-top image" src="print.png" style="max-width: 200px; max-height: 200px"><div class="middle">
               		 <div class="text">Select Me</div>
					</a>
				</div>
				<h3>Printing</h3>
				</div>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-3 hovers">
				<div class="card">
				<a href="store.php"><img class="cars-img-top image" src="store.png" style="max-width: 200px; max-height: 200px"><div class="middle">
               		 <div class="text">Select Me</div>
					</a>
				</div>
				<h3>Store</h3>
				</div>
			</div>
			
			
			
			
		
			
		</div>
		<hr class="my-4">
	
	
	</div>
	
	
		
<!--footer-->
  <footer class="page-footer font-small unique-color-dark pt-4 footer" style="background: rgba(0,0,0,1.00)">

       <hr >
    <!-- Copyright -->
       <div class="footer-copyright text-center py-3">NSBM GREEN UNIVERSITY
       </div>
	  <div class="footer-copyright text-center py-3"><a href="index1.php">admin</a>
       </div>
    <!-- Copyright -->
       <hr >
  </footer>	
		


	
</body>
</html>
