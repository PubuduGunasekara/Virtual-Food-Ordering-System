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
<title>Checkout</title>
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
             <ul class="nav navbar-nav">
                <li class="active"><a href="Mainpage.php">Home</a></li>
                <li><a href="EditUser.php">Edit User</a></li>
                <li ><a href="EditSupplier.php">Edit Suplier</a></li>
				  <li><a href="priceChange.php">Change Prices</a></li>
             </ul>
             <ul class="nav navbar-nav navbar-right">
                 
                 <li><a href="logedOut.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
             </ul>
          </div>
       </div>
	 </nav>
  
<!--body-->
	<br> 
           <div class="row" style="height: 700px;">
               <div class="col-sm-1" ></div>
			   
               <div class="col-sm-10">
			      <div class="col-sm-12" style=" background: rgba(0,0,0,0.65)">
				    <br><br>
                    <div class="panel-body" style="overflow-x: hidden; height: 400px">
						  <!-- insert user-->
					
							
                      <fieldset class="col-md-12">
						<legend>To be checkout</legend>
						  
						   <div class=" table-responsive">
						  <table class="table table-striped" >
							  <thead>
						  	<tr>
							<th>EPF</th>&nbsp;&nbsp;&nbsp;&nbsp;
							  <th>Member name</th>&nbsp;&nbsp;&nbsp;&nbsp;
								<th>Food Item</th>&nbsp;&nbsp;&nbsp;&nbsp;
								<th>Date</th>&nbsp;&nbsp;&nbsp;&nbsp;
								
							  </tr>
						</thead>
							  <tbody>
						  
						  
						  <?php
						  date_default_timezone_set('Asia/colombo');
						  $date = date("Y-m-d");
								//  echo "",$date;
						  //$date = new DateTime(null, new DateTimezone('Asia/Colombo'));
								 //$nz_date= date('Y:m:d', strtotime($date));
								  
						 // $nz_time = new DateTime(null, new DateTimezone('Asia/Colombo'));
						  //echo $nz_date->format('Y-m-d');
						  //echo $nz_time->format('H:i:s');
						  
						  
						  
						$conn = mysqli_connect( "localhost", "food", "nsbm", "nsbmfood" );
	if(mysqli_connect_errno()){
		echo "Failed to connect to the database.".mysqli_connect_error();
	}
	
	$sql = "SELECT * FROM orders WHERE supplier IS NULL AND food_item IS NOT NULL AND date = '$date' GROUP BY epf";
	
	//echo "name ",$id;
	//return false;
	
	$result = mysqli_query($conn,$sql);
		
		if($result -> num_rows > 0 ){
			
			while($row = $result -> fetch_assoc()){
				echo "<tr><td>".$row['epf']."</td><td>".$row['member_name']."</td><td>".$row['food_item']."</td><td>".$row['date']."</td></tr>";
			}
		}
		else{
			echo "No result found.";
			}
       
	
	mysqli_close($conn);
		
		
	
						?> 
								  
								  	 </tbody>
						  </table>	 
					</div>
					    
				      </fieldset>
						
					
				   </div>
					  <br>
					  
					  
					   <div class="panel-body">
					   
					  <form name="updateOrder" method="post" action="updateOrder.php"> 
				    <fieldset class="col-md-12">  	
					   <legend>Select Today's Supplier</legend>
			           <div class="form-group">
                           <!--<select class="form-control" id="exampleFormControlSelect1" name="userDelete[user_delete]" onChange="location = this.value;">
					   <option>Select department</option>
                       <option value="insertuserDetailsSOC.php">SOC</option>
                       <option value="insertuserDetailsSOB.php">SOB</option>
                       <option value="insertuserDetailsSOE.php">SOE</option>
                       <option value="insertuserDetailsMaintenence.php">MAINTENANCE</option>
                       <option value="insertuserDetailsMarketing.php">MARKETING</option>
                   </select>-->
						   
						  
<select required class="form-control" id="exampleFormControlSelect1" name="updateOrder[select_supplier]">
<option value="">Select supplier(supplier id)</option>
   	 <?php
	
			$conn = mysqli_connect("localhost","food","nsbm","nsbmfood");
	if(mysqli_connect_errno()){
		echo "Failed to connect to the database.".mysqli_connect_error();
	}
	
	
    $query = "select * from supplier";
    $results = mysqli_query($conn,$query);

    while ($rows = mysqli_fetch_assoc($results)){ 
    ?>
    <option value="<?php echo $rows['s_name'];?>"><?php echo "".$rows['s_name']."(".$rows['supplier_id'].")";?></option>

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
					  
					  
					  
					  
				 
				   
		           <a href="Mainpage.php"><button type="submit" class="btn btn-primary" >Go back</button></a>
					  
					  
					  <br>
					  
					  
					  
						   
				   <br>
                 <p style="color: aliceblue;" align="right">If you wants to change the supplier for today. Click <a href="checkoutWrong.php">Here</a></p>
					  <br>
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