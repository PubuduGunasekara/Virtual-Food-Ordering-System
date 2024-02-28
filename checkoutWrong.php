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
<title>Change supplier</title>
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
			   
             <a class="navbar-brand">Admin</a>
          </div>
          <div class="collapse navbar-collapse" id="myNavbar">
             
             <ul class="nav navbar-nav navbar-right">
                 
                 <li><a href="logedOut.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
             </ul>
          </div>
       </div>
	 </nav>
  
<!--body-->
	<br> 
           <div class="row">
               <div class="col-sm-1" ></div>
			   
               <div class="col-sm-10">
			      <div class="col-sm-12" style=" background: rgba(0,0,0,0.65)">
				    <br><br>
                
					  
					  
					  
					   <div class="panel-body">
					   
					  <form name="updateOrder" method="post" action="updateOrderWrong.php"> 
				    <fieldset class="col-md-12">  	
					   <legend>Change Today's Supplier</legend>
			           <div class="form-group">
                          
						   
						  
<select class="form-control" id="exampleFormControlSelect1" name="updateOrder[select_supplier]">

   	 <?php
	
			$conn = mysqli_connect( "localhost", "food", "nsbm", "nsbmfood" );
	if(mysqli_connect_errno()){
		echo "Failed to connect to the database.".mysqli_connect_error();
	}
	
	
    $query = "select * from supplier";
    $results = mysqli_query($conn,$query);

    while ($rows = mysqli_fetch_assoc($results)){ 
    ?>
    <option value="<?php echo $rows['s_name'];?>"><?php echo $rows['s_name'];?></option>

    <?php
    } 
		
	
    ?>
</select>
						   
						   
						   
						   
                       </div>
				 
   
                       <input type="reset" class="btn btn-primary" value="Cancel">
				       <input type="submit" class="btn btn-primary" style="float: right" value="Select" onClick="return confirm('You adding This supplier as today's suplier by clicking OK.)">
					
				    </fieldset>
					   </form>
						  
				   </div>
					  
					  
					  
					  
				 
				   
		           <a href="checkout.php"><button type="submit" class="btn btn-warning" >Go Back to Checkout</button></a>
				   <br><br>
                 
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
       <div class="footer-copyright text-center py-3">NSBM GREEN UNIVERSITY
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