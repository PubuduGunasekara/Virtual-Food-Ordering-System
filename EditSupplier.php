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
<title>Edit supplier</title>
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
                           <li ><a href="Mainpage.php">Home</a></li>
                           <li ><a href="EditUser.php">Edit User</a></li>
                           <li class="active"><a href="EditSupplier.php">Edit Suplier</a></li>
						   <li><a href="priceChange.php">Change prices</a></li>
                       </ul>
					  
                       <ul class="nav navbar-nav navbar-right">
                           
                           <li><a href="logedOut.php"><span class="glyphicon glyphicon-log-out"></span>Logout</a></li>
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
				    <form name="view_supplier" method="post" action="viewSupplier.php" >
                   <fieldset class="col-md-12">
					  
					  <legend>View Suplier Details</legend>
				      <div class="form-group">
                          <label >Suplier Name:</label>
                              <select required title="Please Select one" class="form-control" id="exampleFormControlSelect1" name="view_supplier[view]">
								  <option value="">Select supplier</option>
								

   	 <?php
	
			$conn = mysqli_connect("localhost","food","nsbm","nsbmfood");
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
   
                      <button type="submit" class="btn btn-primary" style="float: right">view</button>
				
				   </fieldset>
					   </form>
				   
				   
				</div>
				<br><br>
				<div class="panel-body">
					<form name="insert_supplier" method="post" action="insertSupplierDetails.php" >
					
				    <fieldset class="col-md-12">  	
					   <legend>Insert New Suplier</legend>
						 <div class="form-group">
                           <label >Supplier ID:</label>
                           <input type="text" class="form-control" placeholder="Enter Suplier ID" pattern="[0-9]{3}" required title="Enter upto 4 numbers" name="insert_supplier[supplier_id]">
                       </div>
						
						
				       <div class="form-group">
                           <label >Name:</label>
                           <input type="text" class="form-control" placeholder="Enter Suplier Name" pattern="[a-zA-Z\-'\s]+" required title="Enter characters only" name="insert_supplier[supplier_name]">
                       </div>
						
				       <div class="form-group">
                           <label >Contact no:</label>
                           <input type="text" class="form-control" placeholder="Enter Suplier moblie number" pattern="[0-9]{10}" required title="Enter 10 Integers only" name="insert_supplier[supplier_tel]">
                       </div>
						
				       <div class="form-group">
                           <label >Address:</label>
                           <input type="text" class="form-control" placeholder="Enter Suplier Address"  required title="Enter characters only" name="insert_supplier[supplier_add]">
                       </div>
				 
   
                       <input type="reset" class="btn btn-primary" value="Cancel">
				       <input type="submit" class="btn btn-primary" style="float: right" value="Submit">
					
					</fieldset>
						
						</form>
						
						
						
				</div>
				<br><br>
				   
				<div class="panel-body">
					 <form name="delete_supplier" method="post" action="insertSupplierDetails.php" >
                    <fieldset class="col-md-12">    	
					    <legend>Delete Suplier</legend>
				        <div class="form-group">
                            <label >Suplier Name:</label>
							
                            <select required title="Please Select one" class="form-control" id="exampleFormControlSelect1" name="delete_supplier[delete]">
								
<option value="">Select Name(ID)</option> 
   	 <?php
	
			$conn = mysqli_connect("localhost","food","nsbm","nsbmfood");
	if(mysqli_connect_errno()){
		echo "Failed to connect to the database.".mysqli_connect_error();
	}
	
	
    $query = "select * from supplier GROUP BY s_name";
    $results = mysqli_query($conn,$query);

    while ($rows = mysqli_fetch_assoc($results)){ 
    ?>
    <option value="<?php echo $rows['s_name'];?>"><?php echo $rows['s_name']."(".$rows['supplier_id'].")";?></option>

    <?php
    } 
		
	
    ?>
</select>
						</div>
   
                        <input type="reset" class="btn btn-primary" value="Cancel">
				       <input type="submit" class="btn btn-danger" style="float: right" value="Delete" onClick="return confirm('Are you sure you want to delete this user?')">
					
					</fieldset>
					</form>
				</div>
				  
				  
				  
				  					  
					  <br><br>
					  
					   <div class="panel-body">
						  <!-- insert user-->
					<form name="userUpdate1" method="post" action="insertSupplierDetails.php">
							
                      <fieldset class="col-md-12">
						  
						  
					     <legend>Update Supplier</legend>
						 
							 
				         <div class="form-group">
						<label>SELECT NAME:</label>	 
						<select required title="Please Select one" class="form-control" id="exampleFormControlSelect1" name="userUpdate1[user_update_name]">
<option value="">Select Name(ID number)</option>  
   	 <?php
	
			$conn = mysqli_connect("localhost","food","nsbm","nsbmfood");
	if(mysqli_connect_errno()){
		echo "Failed to connect to the database.".mysqli_connect_error();
	}
	
	
    $query = "SELECT * FROM supplier";
    $results = mysqli_query($conn,$query);

    while ($rows = mysqli_fetch_assoc($results)){ 
    ?>
    <option value="<?php echo $rows['s_name'];?>"><?php echo "".$rows['s_name']."(".$rows['supplier_id'].")";?></option>

    <?php
    } 
		
	
    ?>
</select><br>
							 
						
						  
				         <div class="form-group">
                            <label >Name:</label>
                            <input type="text" class="form-control" placeholder="Enter  Name"  name="userUpdate1[user_name]" id="sname" pattern="[a-zA-Z\-'\s]+" required title="Enter characters only"  >
                         </div>
						  
                         
   
                         <button type="submit" class="btn btn-primary">Cancel</button>
				         <button type="submit" class="btn btn-warning" style="float: right" onClick="return confirm('Are you sure you want to update this user?')">Update</button>
							 
							 
					
				      </fieldset>
						
					</form>
				   </div>
					  
				  
				  
				  
				  
				  
				  
				<a href="Mainpage.php"><button type="button" class="btn btn-warning">Go Home</button></a><br>
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
</html>
