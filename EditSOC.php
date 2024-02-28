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
<title>Edit soc</title>
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
                   <li class="active"><a href="EditSOC.php">Edit User</a></li>
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
               <div class="col-sm-1" ></div>
			   
               <div class="col-sm-10">
			      <div class="col-sm-12" style=" background: rgba(0,0,0,0.65)">
				    <br><br>
                    <div class="panel-body">
						  <!-- insert user-->
					<form name="userInsert" method="post" action="insertUserDetailsSOC.php">
							
                      <fieldset class="col-md-12">
						  
						  
					     <legend>Insert new user to SOC</legend>
						 
							 
				        	 
				         <div class="form-group">							 
							 
                           <label style='display:inline;'>EPF NUMBER:</label><br>
							 <select class="alert-info" name="userInsert[user_id_string]">
								 <option value="">Select this if needed</option>
								 <option value="TEMP-">TEMP</option>
								 <option value="NEW-">NEW</option>
							 
							 </select>
                           <input style='display:inline;' type="text" class="form-control" placeholder="Enter EPF" name="userInsert[user_id]" id="sid" pattern="[0-9]{1,3}" required title="Enter EPF no with 3 integers" >
							<!-- ([a-z]{3,4}+([-]+[0-9]{1,3}))-->
                         </div>
						  
				         <div class="form-group">
                            <label >Name:</label>
                            <input type="text" class="form-control" placeholder="Enter Name"  name="userInsert[user_name]" id="sname" pattern="[a-zA-Z\-'\s]+" required title="Enter characters only"  >
                         </div>
						  
                         <div class="form-group">
                            <label >Tel:</label>
                            <input type="text" class="form-control" placeholder="Enter mobile number" name="userInsert[user_tel]" id="stel" pattern="[0-9]{10}" required title="Enter mobile number with 10 integers"  >
                         </div>
   
                         <button type="submit" class="btn btn-primary">Cancel</button>
				         <button type="submit" class="btn btn-primary" style="float: right" >Insert</button>
							 
							 
					
				      </fieldset>
						
					</form>
				   </div>
				   <br><br>
					  

					  
					  <div class="panel-body">
					   
					  <form name="userDelete" method="post" action="insertUserDetailsSOC.php"> 
				    <fieldset class="col-md-12">  	
					   <legend>Delete user from SOC</legend>
			           <div class="form-group">
                           <!--<select class="form-control" id="exampleFormControlSelect1" name="userDelete[user_delete]" onChange="location = this.value;">
					   <option>Select department</option>
                       <option value="insertuserDetailsSOC.php">SOC</option>
                       <option value="insertuserDetailsSOB.php">SOB</option>
                       <option value="insertuserDetailsSOE.php">SOE</option>
                       <option value="insertuserDetailsMaintenence.php">MAINTENANCE</option>
                       <option value="insertuserDetailsMarketing.php">MARKETING</option>
                   </select>-->
						   
						  
<select required title="Please Select one" class="form-control" id="exampleFormControlSelect1" name="userDelete[user_delete]">
<option value="" >Select Name(EPF number)</option>  
   	 <?php
	
			$conn = mysqli_connect("localhost","food","nsbm","nsbmfood");
	if(mysqli_connect_errno()){
		echo "Failed to connect to the database.".mysqli_connect_error();
	}
	
	
    $query = "select * from staff_member_soc";
    $results = mysqli_query($conn,$query);

    while ($rows = mysqli_fetch_assoc($results)){ 
    ?>
   <option value="<?php echo $rows['nsbm_id'];?>"><?php echo "".$rows['name']."(".$rows['nsbm_id'].")";?></option>

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
					  
					  
					  
					  
					  
					  
					  <div class="panel-body">
					   
					  <form name="userUpdate" method="post" action="insertUserDetailsSOC.php"> 
				    <fieldset class="col-md-12">  	
					   <legend>Change location of user</legend>
			           <div class="form-group">
                           <!--<select class="form-control" id="exampleFormControlSelect1" name="userDelete[user_delete]" onChange="location = this.value;">
					   <option>Select department</option>
                       <option value="insertuserDetailsSOC.php">SOC</option>
                       <option value="insertuserDetailsSOB.php">SOB</option>
                       <option value="insertuserDetailsSOE.php">SOE</option>
                       <option value="insertuserDetailsMaintenence.php">MAINTENANCE</option>
                       <option value="insertuserDetailsMarketing.php">MARKETING</option>
                   </select>-->
						   
						  
<select required title="Please Select one" class="form-control" id="exampleFormControlSelect1" name="userUpdate[user_update_name]">
<option value="">Select Name(EPF number)</option>  
   	 <?php
	
			$conn = mysqli_connect("localhost","food","nsbm","nsbmfood");
	if(mysqli_connect_errno()){
		echo "Failed to connect to the database.".mysqli_connect_error();
	}
	
	
    $query = "select * from staff_member_soc";
    $results = mysqli_query($conn,$query);

    while ($rows = mysqli_fetch_assoc($results)){ 
    ?>
   <option value="<?php echo $rows['nsbm_id'];?>"><?php echo "".$rows['name']."(".$rows['nsbm_id'].")";?></option>

    <?php
    } 
		
	
    ?>
</select>
						   <br><br>
						   <select required title="Please Select one" class="form-control" id="exampleFormControlSelect1" name="userUpdate[user_update_location]">
						   
						   	<option>Select Location</option> 
							  
							   <option value="sob">SOB</option> 
							   <option value="soe">SOE</option> 
							    <option value="admin">ADMIN</option>
							   <option value="maintenence">MAINTENANCE</option> 
							   <option value="rec">RECREATIONAL</option> 
							    
							   <option value="medical">MEDICAL</option> 
							   <option value="library">LIBRARY</option> 
							   <option value="audi">AUDITORIUM</option> 
							   <option value="print">PRINTING</option>
							   <option value="store">STORE</option> 
						   
						   </select>
						   
						   
						   
						   
                       </div>
				 
   
                       <input type="reset" class="btn btn-primary" value="Cancel">
				       <input type="submit" class="btn btn-danger" style="float: right" value="Update" onClick="return confirm('Are you sure you want to update this user?')">
					
				    </fieldset>
					   </form>
						  
				   </div>
					  
					  
					  
					  
					 					  
					  <br><br>
					  
					   <div class="panel-body">
						  <!-- insert user-->
					<form name="userUpdate1" method="post" action="insertUserDetailsSOC.php">
							
                      <fieldset class="col-md-12">
						  
						  
					     <legend>Update user</legend>
						 
							 
				         <div class="form-group">
						<label>SELECT NAME:</label>	 
						<select required title="Please Select one" class="form-control" id="exampleFormControlSelect1" name="userUpdate1[user_update_name]">
<option value="">Select Name(EPF number)</option>  
   	 <?php
	
			$conn = mysqli_connect("localhost","food","nsbm","nsbmfood");
	if(mysqli_connect_errno()){
		echo "Failed to connect to the database.".mysqli_connect_error();
	}
	
	
    $query = "select * from staff_member_soc";
    $results = mysqli_query($conn,$query);

    while ($rows = mysqli_fetch_assoc($results)){ 
    ?>
    <option value="<?php echo $rows['nsbm_id'];?>"><?php echo "".$rows['name']."(".$rows['nsbm_id'].")";?></option>

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
					   
					  
					  
					  
					  
				   
		           <a href="EditUser.php"><button type="submit" class="btn btn-primary" >Go back</button></a>
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