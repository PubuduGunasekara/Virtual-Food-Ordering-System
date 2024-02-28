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
<title>Monthly report date check</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="designAdmin.css" rel="stylesheet" type="text/css">
	
	
	
	
	
	

	
	
	
	
	
</head>


<body>
	
	<div class="container">
	  <div id="body">
<!--header	-->
	  
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
                   <li class="active"><a href="Mainpage.php">Home</a></li>
                   <li ><a href="EditUser.php">Edit User</a></li>
                   <li><a href="EditSupplier.php">Edit Suplier</a></li>
					<li><a href="priceChange.php">Change Prices</a></li>
                </ul>
				
                <ul class="nav navbar-nav navbar-right">
                  
                   <li><a href="logedOut.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
                </ul>
           </div>
         </div>
	  </nav>
  
<!--body-->
		  
		  <?php
	date_default_timezone_set('Asia/colombo');
    $date = date('Y-m-d');
	?>
	<br> 
           <div class="row">
               <div class="col-sm-1" ></div>
			   
               <div class="col-sm-10">
			      <div class="col-sm-12" style=" background: rgba(0,0,0,0.65)">
				    <br><br>
                    <div class="panel-body">
						  <!-- insert user-->
						
						
						<form name="userInsert" method="post" action="monthlyReport.php">
						
						      <fieldset class="col-md-12">
						  
						  
					     <legend>Select time period</legend>
						 
							 
				         <div class="form-group inline-block">							 
							 
                           <label >From</label>
							 <input type="date" name="startdate" min="2019-02-01" max="<?php echo $date; ?>" required> 
                         </div>
						  
				         <div class="form-group inline-block">
                            <label>To</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							 <input type="date" name="enddate" min="2019-02-01" max="<?php echo $date; ?>" required>
                         </div>
						  
                         
   
                         
				       <button type="submit" class="btn btn-primary" style="float: right;">Genarate Report</button
							 
							 
					
				      </fieldset>
						
						
						</form>
						
						
						
						
						
					
					
					
				   </div>
				   <br><br>
					  
					  <!-- delete user-->
				   
				   
		           
				   
                 <a href="Mainpage.php"><button type="button" class="btn btn-warning " >Go back</button></a><br><br>
				 </div>
			   </div>
		   </div>
		
		  <br>
		  <hr>
       
	   </div>
		
<!--footer-->
  <footer class="page-footer font-small unique-color-dark pt-4 footer" style="background: rgba(0,0,0,1.00)">

       <hr >
    <!-- Copyright -->
       <div class="footer-copyright text-center py-3">© 2019 Copyright:
       </div>
    <!-- Copyright -->
       <hr >
  </footer>
		
</div>

	
</body>
	
	
	
	<!--<script>
	
	  var user_id = document.getElementById('user_id');
	  //var input2 = document.getElementById('ConEmail');

 user_id.oninvalid= function(event)
	  {
		  event.target.setCustomValidity('Please enter letters only.');
		  }
		  
		  
	
	</script>-->
	
	
	
</html>
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	

