<html>
	<title>Maintenance selected list</title>
	<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href="design.css" rel="stylesheet" type="text/css">
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
		
		
		<style>
			.grid{
	display: grid;
	/*grid-template-columns: 100% 0%;*/
	height: auto;
	width:100%;
	margin:0;
				
		
	/*margin-right: 300px;*/	
	box-shadow: 2px 2px 8px #111;
	
		
}
		
		</style>
		
		
		
		</head>
	<body>
		
		
			<div class="jumbotron page-header">
	<center><h2><b>NSBM Staff Lunch Ordering System</b></h2></center>
	<center><h4><b>You have Ordered following food items</b></h4></center>
	
	</div>
	<hr></hr>
		



	
	
	

   <div class="col-lg-12 col-md-12 col-sm-12">
	   <form method="post" name="socForm">
		   
		   <div class='grid '>
<table class='table table-striped' style='overflow-x: hidden;overflow-y: hidden;'>

<thead>
<tr>
	<th>EPF number</th>
<th>Member Name</th>
<th>Food Item</th>
</tr
</thead>
<tbody>
	
	
<?php

	
		date_default_timezone_set('Asia/colombo');
        $date = date('Y-m-d');


	date_default_timezone_set('Asia/colombo');
        $dateTommorow = date('Y-m-d',strtotime("+1 days"));
	
	$conn = mysqli_connect("localhost","food","nsbm","nsbmfood");
	if(mysqli_connect_errno()){
		echo "Failed to connect to the database.".mysqli_connect_error();
	}
	
	$sql = "select * from staff_member_maintenance";
		
	mysqli_query($conn,$sql);
	$size = mysqli_affected_rows($conn);
	//$radioBtn = 0;
	



	$i = 0;
	$name = "";
	$food = "";
  
		
	while($i != $size)
	 {
		 
		 
		
	//echo "".$i."".$size;
	$checkbox = "check".$i;
	$radio = "radio".$i;
	
		
	 		
		 
		  if(isset($_POST['submit']) && isset($_POST[$checkbox]) && isset($_POST[$radio])){
			  
		$epf = $_POST[$checkbox];
		$food =$_POST[$radio];
			  
			  $getname = "select name from staff_member_maintenance where nsbm_id = '$epf'";
			  
			  $result = mysqli_query($conn,$getname);
		
		if($result -> num_rows > 0 ){
			
			while($row = $result -> fetch_assoc()){
				$name = $row['name'];
			}
		}
		
			  
			  echo "<tr><td>$epf</td><td>$name</td><td>$food</td></tr>";
			  $sql = "INSERT INTO orders(epf,member_name,food_item,date,location) VALUES ('$epf','$name','$food','$date','main')";
				$insert = mysqli_query($conn,$sql);
			$sql2 = "UPDATE staff_member_maintenance SET date = '$dateTommorow' where nsbm_id = '$epf'";
			$update = mysqli_query($conn,$sql2);

		 }
		else{
			//echo "<tr><td colspan='3'><h1 style = 'color:red;'>Please select your order correctly!</h1></td></tr>";
		}
			  
			 
			  
		
		 
		
	 
		 $i++;
	 
		 
	 }
	
	
	
	
	mysqli_close($conn);





?>
	   
</tbody></table></div>	  
			   <br>
			   <a href="maintenanceSpecial.php"><input type="button" class="btn btn-success" style="float: right" value="Close"></a>
		   </form>
		</div>
	</div>
</body>	


</html>





<?php

/*$values = false;
if(isset($_POST['socForm'])){
		
	$values = $_POST['submit1'];
	if($values == true){
		header('location: soc.php');
	}

   
} 

	/*function check(){
		
	echo "hvsdvshvshv";
		
		date_default_timezone_set('Asia/colombo');
        $date = date('Y-m-d');


	date_default_timezone_set('Asia/colombo');
        $dateTommorow = date('Y-m-d',strtotime("+1 days"));
	
	$conn = mysqli_connect("localhost","root","","nsbmfood");
	if(mysqli_connect_errno()){
		echo "Failed to connect to the database.".mysqli_connect_error();
	}
	
	$sql = "select * from staff_member_SOC";
		
	mysqli_query($conn,$sql);
	$size = mysqli_affected_rows($conn);
		
		//echo "",$size;
		$i = 0;
	$name = "";
	$food = "";
	
	 while($i != $size)
	 {
		 
		 
		
	//echo "".$i."".$size;
	$checkbox = "check".$i;
	$radio = "radio".$i;
		
	 		
		 
		  //if(isset($_POST[$checkbox]) && isset($_POST[$radio])){
		$name= $_POST[$checkbox];
		$food =$_POST[$radio];
			  
			  //echo "<tr><td> 2 $name</td><td>2 $food</td></tr>";
			  echo "".$name."".$food;

	/*$sql = "INSERT INTO orders(member_name,food_item,date) VALUES ('$name','$food','$date')";
	$insert = mysqli_query($conn,$sql);
	$sql2 = "UPDATE staff_member_SOC SET date = '$dateTommorow' where name = '$name'";
	$update = mysqli_query($conn,$sql2);*/

  
		 //}
		
	 
	/*	 $i++;
	 
		 
	 }
	
	mysqli_close($conn);
		
	}


	*/


?>
	   

		  
		  	  