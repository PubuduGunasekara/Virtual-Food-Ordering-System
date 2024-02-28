<!doctype html>
<html>
<head>
<title>MealCode</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href="design.css" rel="stylesheet" type="text/css">
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
                <li class="active"><a href="#">Meal Code</a></li>
				 <li><a href="#">Contact</a></li>
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
			<div id="fixed">
			</div>
 </div>
</figure>
<div class="carousel-caption">
	<center><div>
		<h3 class="display-2" style="color: #422828; font-family:  Open Sans, 'Hoefler Text', 'Liberation Serif', Times, 'Times New Roman', 'serif'; font-size: 40px; opacity: 1.0; font-weight: bolder;">Enter Meal Code to Verify</h3>
		</div>
	</center>
				
	<form method="post" action="loginCustomer.php">
	           <input required type="text" name="password" placeholder="Enter meal Code to Identify." style="color: rgba(0,0,0,1.00)">
	     <input type="submit" name="Next" value="Enter Code"  id="nextbtn">
		</form>	
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
		


	
</body>
</html>
