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
<title>Edit user</title>
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
	 <div id="body">
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
			 
            <a class="navbar-brand" href="#">Admin</a>
        </div>
		   
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
               <li ><a href="Mainpage.php">Home</a></li>
               <li class="active"><a href="EditUser.php">Edit User</a></li>
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
	<br> 
          <div class="row">
             <div class="col-sm-2" ></div>
			   
             <div class="col-sm-8">
			   <div class="col-sm-12" style="height: 400px;  background: rgba(0,0,0,0.65);">
				   
				   <br> <br><br>
				   <h3 style="color: aqua">Select the Location</h3>
				   
				   <select class="form-control" id="exampleFormControlSelect1" name="department_select" onChange="location = this.value;">
					   <option>Select location</option>
                       <option value="EditSOC.php">SOC</option>
							   <option value="EditSOB.php">SOB</option> 
							   <option value="EditSOE.php">SOE</option> 
							    <option value="EditADMIN.php">ADMIN</option>
							   <option value="EditMaintenence.php">MAINTENENCE</option> 
							   <option value="EditREC.php">RECREATIONAL</option> 
							    
							   <option value="EditMEDICAL.php">MEDICAL</option> 
							   <option value="EditLIBRARY.php">LIBRARY</option> 
							   <option value="EditAUDI.php">AUDITORIUM</option> 
							   <option value="EditPRINT.php">PRINTING</option>
					   <option value="EditSTORE.php">STORES</option>
							   
                   </select>
		           <br> <br><br><br><br><br> <br><br>
		           <a href="Mainpage.php"><button type="button" class="btn btn-warning">Go Home</button></a>
				  
		
		      </div>
		  </div>
			  
          <div class="col-sm-2" ></div>
        </div>
		
		
		
		
		
		<br>
		<hr>
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
