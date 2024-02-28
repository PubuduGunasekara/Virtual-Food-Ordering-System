<!doctype html>
<html>
<head>
<title>Admin</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href="design.css" rel="stylesheet" type="text/css">
</head>


<body>
	
	
	
	<?php

	
	
	$date = date("Y-m-d");
	
			
			$conn = mysqli_connect( "localhost", "food", "nsbm", "nsbmfood" );
	if(mysqli_connect_errno()){
		echo "Failed to connect to the database.".mysqli_connect_error();
	}
	
	$sql = "SELECT supplier from orders WHERE date = '$date'";
	
	//echo "name ",$id;
	//return false;
	$result = mysqli_query($conn,$sql); //output success or failure messages
       
	
	
	
	if($result -> num_rows > 0 ){
			
			while($row = $result -> fetch_assoc()){
			echo "<tr><td>".$row['supplier']." </td></tr>";
			}
		}
		else{
			echo "No result found.";
			}
	
	$n_rows = mysqli_affected_rows($conn);
	
	echo($n_rows);
	
	
	
		
		
	
	
	
	$sql2 = "SELECT member_name,food_item from orders WHERE date = '$date' AND food_item IS NOT NULL";
	$fullOrderList = mysqli_query($conn,$sql2);
	$fullOrderListNumber = mysqli_affected_rows($conn);
	if($fullOrderList -> num_rows > 0 ){
			
			while($row2 = $fullOrderList -> fetch_assoc()){
				echo "<tr><td>".$row2['member_name']."</td><td>".$row2['food_item']." </td></tr>";
			}
		}
		else{
			echo "No result found.";
			}
	
	
	//echo "",$fullOrderListNumber;
	
	
	
	
	
		
	
		
		
	
	
   

	
mysqli_close($conn);
	
?>
	
	
	
	



 
						  <div class=" table-responsive">
						  <table class="table table-striped" style="overflow-x: hidden;">
							  <thead>
						  	<tr>
							
							  <th>member name</th>&nbsp;&nbsp;&nbsp;&nbsp;
								<th>Food Item</th>&nbsp;&nbsp;&nbsp;&nbsp;
								
							  </tr>
						</thead>
							  <tbody>  

	
		$date = date("Y-m-d");
	
			
			$conn = mysqli_connect("localhost","root","","nsbmfood");
	if(mysqli_connect_errno()){
		echo "Failed to connect to the database.".mysqli_connect_error();
	}
	
	$sql2 = "SELECT member_name,food_item from orders WHERE date = '$date' AND food_item IS NOT NULL";
	$fullOrderList = mysqli_query($conn,$sql2);
	$fullOrderListNumber = mysqli_affected_rows($conn);
	if($fullOrderList -> num_rows > 0 ){
			
			while($row2 = $fullOrderList -> fetch_assoc()){
				echo "<tr><td>".$row2['member_name']."</td><td>".$row2['food_item']." </td></tr>";
			}
		}
		else{
			echo "No result found.";
			}
	
	?>
							</tbody>
							  </table>
	</div>
		
</body>
</html>