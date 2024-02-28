<?php 
include 'monthlyReportTemp.php';
	?>


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
<title>Monthly report</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href="designAdmin.css" rel="stylesheet" type="text/css">
	
		<style>
	table {
  border-collapse: collapse;
	width: 100%;	 
}
		

table, th, td {
  border: 0.1px solid black;
	 padding: 5px;
	
}
		th {
  height: 50px;
}
			
			#tbl{
				width: 50%;
			}
		
	
</style>
	
</head>


<body>
	
	

	<?php
	date_default_timezone_set('Asia/colombo');
    $date = date('Y-m-d');
	?>
	
	<div class="jumbotron page-header">
	<center><h1><b>NSBM Staff Food Ordering System</b></h1></center>
	<center><h3><b>System genarated report</b></h3></center>
	<label>From : <?php echo $startDate ?></label><label style="display:inline; float: right;">To : <?php echo $endDate ?></label>
	</div>
	
	<hr></hr>
	<br>
	<div id="main_topic" class="col-lg-12 col-md-12 col-sm-12" >Order count</div><br>
	
		
						  <table>
							  <thead>
						  	<tr>
							<th>#</th>&nbsp;
							  <th>Date</th>&nbsp;
								<th>Supplier Name</th>&nbsp;&nbsp;&nbsp;&nbsp;
								<th>VR</th>&nbsp;&nbsp;&nbsp;&nbsp;
								<th>OR</th>&nbsp;&nbsp;&nbsp;&nbsp;
								<th>ER</th>&nbsp;&nbsp;&nbsp;&nbsp;
								<th>FR</th>&nbsp;&nbsp;&nbsp;&nbsp;
								<th>CR</th>&nbsp;&nbsp;&nbsp;&nbsp;
								<th>Special C</th>&nbsp;
								<th>Spacial F</th>&nbsp;
								<th>Special E</th>&nbsp;
								<th>Special V</th>&nbsp;
								<th>Total</th>&nbsp;
								
							  </tr>
						</thead>
							  <tbody>  
<?php
	$count = 1;
	date_default_timezone_set('Asia/colombo');
    $date = date('Y-m-d');
	
			
	$conn = mysqli_connect("localhost","food","nsbm","nsbmfood");
	if(mysqli_connect_errno()){
		echo "Failed to connect to the database.".mysqli_connect_error();
	}
	
	$sql = "SELECT * from total_items WHERE date BETWEEN '$startDate' AND '$endDate' ORDER BY date";
	$fullOrderList = mysqli_query($conn,$sql);
	//$fullOrderListNumber = mysqli_affected_rows($conn);
	if($fullOrderList -> num_rows > 0 ){
			
			while($row2 = $fullOrderList -> fetch_assoc()){
				
				$tot = $row2['vr']+$row2['omr']+$row2['er']+$row2['fr']+$row2['cr']+$row2['special_c']+$row2['special_f']+$row2['special_e']+$row2['special_v'];
				
				echo "<tr><td>".$count."</td><td>".$row2['date']."</td><td>".$row2['supplier_name']." </td><td>".$row2['vr']." </td><td>".$row2['omr']." </td><td>".$row2['er']." </td><td>".$row2['fr']." </td><td>".$row2['cr']." </td><td>".$row2['special_c']." </td><td>".$row2['special_f']." </td><td>".$row2['special_e']." </td><td>".$row2['special_v']." </td><td>".$tot." </td></tr>";
				
				$count++;
			}
		}
		else{
			echo "No result found.";
			}
		$tot_rows = mysqli_affected_rows($conn);
								  
								  	
mysqli_close($conn);
	
	?>
							</tbody>
							  </table>
	</div>
	
	
	<br>
	

	<div id="main_topic" class="col-lg-12 col-md-12 col-sm-12" >monthly Expenses</div><br>
	
	
	<!-- food checking -->
<?php

$conn = mysqli_connect("localhost","food","nsbm","nsbmfood");
	if(mysqli_connect_errno()){
		echo "Failed to connect to the database.".mysqli_connect_error();
	}
$sql1 = "select * from prices";
$price= mysqli_query($conn,$sql1);
if($price -> num_rows > 0 ){
			
			while($row2 = $price -> fetch_assoc()){
				$vr = $row2['vegi'];
				$or = $row2['omlet'];
				$er = $row2['egg'];
				$fr = $row2['fish'];
				$cr = $row2['chicken'];
				$svr = $row2['s_vegi'];
				$sfr = $row2['s_fish'];
				$ser = $row2['s_egg'];
				$scr = $row2['s_chicken'];
				
		
			}
}


mysqli_close($conn);
?>


						  <table >
							  <thead>
						  	<tr>
							<th>#</th>&nbsp;
							  <th>Date</th>&nbsp;
								<th>Supplier Name</th>&nbsp;&nbsp;&nbsp;&nbsp;
								<th>VR</th>&nbsp;&nbsp;&nbsp;&nbsp;
								<th>OR</th>&nbsp;&nbsp;&nbsp;&nbsp;
								<th>ER</th>&nbsp;&nbsp;&nbsp;&nbsp;
								<th>FR</th>&nbsp;&nbsp;&nbsp;&nbsp;
								<th>CR</th>&nbsp;&nbsp;&nbsp;&nbsp;
								<th>Special C</th>&nbsp;
								<th>Spacial F</th>&nbsp;
								<th>Special E</th>&nbsp;
								<th>Special V</th>&nbsp;
								<th>Total</th>&nbsp;
								
							  </tr>
						</thead>
							  <tbody>


	
	<?php
$count = 1;
$conn = mysqli_connect("localhost","food","nsbm","nsbmfood");
	if(mysqli_connect_errno()){
		echo "Failed to connect to the database.".mysqli_connect_error();
	}

	$sql = "SELECT * from total_items WHERE date BETWEEN '$startDate' AND '$endDate' ORDER BY date";
	$fullOrderList = mysqli_query($conn,$sql);
	//$fullOrderListNumber = mysqli_affected_rows($conn);
	if($fullOrderList -> num_rows > 0 ){
			
			while($row2 = $fullOrderList -> fetch_assoc()){
				
				$vrc = $row2['vr']*$vr;
				$vrc1 = number_format((float)$vrc,2);
				$omrc = $row2['omr']*$or;
				$omrc1 = number_format((float)$omrc,2);
				$erc = $row2['er']*$er;
				$erc1 = number_format((float)$erc,2);
				$frc = $row2['fr']*$fr;
				$frc1 = number_format((float)$frc,2);
				$crc = $row2['cr']*$cr;
				$crc1 = number_format((float)$crc,2);
				$scrc = $row2['special_c']*$svr;
				$scrc1 = number_format((float)$scrc,2);
				$sfrc = $row2['special_f']*$sfr;
				$sfrc1 = number_format((float)$sfrc,2);
				$serc = $row2['special_e']*$ser;
				$serc1 = number_format((float)$serc,2);
				$svrc = $row2['special_v']*$svr;
				$svrc1 = number_format((float)$svrc,2);
				
				
				
			
				$tot = $vrc+$omrc+$erc+$frc+$crc+$scrc+$sfrc+$serc+$svrc;
				$tot1= number_format((float)$tot,2);
				
				
				echo "<tr><td>".$count."</td><td>".$row2['date']."</td><td>".$row2['supplier_name']." </td><td>".$vrc1." </td><td>".$omrc1." </td><td>".$erc1." </td><td>".$frc1." </td><td>".$crc = $crc1." </td><td>".$scrc1." </td><td>".$sfrc1." </td><td>".$serc1." </td><td>".$svrc1." </td><td>".$tot1." </td></tr>";
				$count++;
			}
		}
		else{
echo "No result found.";
			}
		$tot_rows = mysqli_affected_rows($conn);
								  
								  	
mysqli_close($conn);





	?>
								  
							  </tbody>
	</table>
	<br>
	
</div>
		
	
	



<div id="main_topic" class="col-lg-12 col-md-12 col-sm-12" >Total food count</div><br>
	
	
						  <table >
							  <thead>
						  	<tr>
							
							  <th>Supplier Name</th>&nbsp;
								
								
								<th>Total lunch orders</th>&nbsp;
								
							  </tr>
						</thead>
							  <tbody>  
<?php
								  
	
	

											  
							 
	date_default_timezone_set('Asia/colombo');
    $date = date('Y-m-d');
	
			
	$conn = mysqli_connect("localhost","food","nsbm","nsbmfood");
	if(mysqli_connect_errno()){
		echo "Failed to connect to the database.".mysqli_connect_error();
	}
	
	$sql = "SELECT * from total_items WHERE date BETWEEN '$startDate' AND '$endDate' ORDER BY supplier_name ASC";
	$fullOrderList = mysqli_query($conn,$sql);
	//$fullOrderListNumber = mysqli_affected_rows($conn);
	$sql2 = "SELECT supplier_name from total_items WHERE date BETWEEN '$startDate' AND '$endDate' ORDER BY supplier_name ASC LIMIT 1 ";
	$check=mysqli_query($conn,$sql2);						  
	while($row2 = $check -> fetch_assoc()){
		$supplier = $row2['supplier_name'];
	}
								  
								  
	if($fullOrderList -> num_rows > 0 ){
		
		$sum = 0;
			
			while($row2 = $fullOrderList -> fetch_assoc()){
				
				
				if($supplier == $row2['supplier_name'] ){
				$tot = $row2['vr']+$row2['omr']+$row2['er']+$row2['fr']+$row2['cr']+$row2['special_c']+$row2['special_f']+$row2['special_e']+$row2['special_v'];
					$sum = $sum + $tot;
				//echo "<tr><td>".$row2['supplier_name']."</td><td>".$row2['date']." </td><td>".$tot." </td></tr>";
					
					
				}
				else{
				echo "<tr style='color:black;weight:bold;'><td ><p>$supplier </p> </td><td >$sum</td></tr>";
					//echo "<tr><td>".$row2['supplier_name']."</td><td>".$row2['date']." </td><td>".$tot." </td></tr>";
					$supplier = $row2['supplier_name'];
					$sum = 0;
					$tot = $row2['vr']+$row2['omr']+$row2['er']+$row2['fr']+$row2['cr']+$row2['special_c']+$row2['special_f']+$row2['special_e']+$row2['special_v'];
					$sum = $sum + $tot;
					
					
					
				}
				
			
			}
		
			echo "<tr style='color:black;weight:bold;'><td ><p> $supplier </p> </td><td>$sum</td></tr>";
		
		
		}
		else{
			echo "No result found.";
			}
		
								  
								  	
mysqli_close($conn);
	
								  
								  
								  
	
	?>
							</tbody>
							  </table>
			<br>
			<?php
			
				$conn = mysqli_connect("localhost","food","nsbm","nsbmfood");
	if(mysqli_connect_errno()){
		echo "Failed to connect to the database.".mysqli_connect_error();
	}
	$sum = 0.00;
	$sql = "SELECT * from total_items WHERE date BETWEEN '$startDate' AND '$endDate'";
	$fullOrderList = mysqli_query($conn,$sql);
	//$fullOrderListNumber = mysqli_affected_rows($conn);
	if($fullOrderList -> num_rows > 0 ){
			
			while($row2 = $fullOrderList -> fetch_assoc()){
				
				$tot = $row2['vr']+$row2['omr']+$row2['er']+$row2['fr']+$row2['cr']+$row2['special_c']+$row2['special_f']+$row2['special_e']+$row2['special_v'];
				
				$sum += $tot;
				
				
			}
		}
		else{
			echo "No result found.";
			}
		
								  
								  	
mysqli_close($conn);
			
			

			
				echo "<h5><b><p align=center style='color:black;'>TOTAL NUMBER OF FOOD ORDERS FOR STAFF : $sum</p></b></h5>";
			?>
	</div>
	
	
	
	<br>








<div id="main_topic" class="col-lg-12 col-md-12 col-sm-12" >Total expenses</div><br>
	
		
						  <table >
							  <thead>
						  	<tr>
							
							  <th>Supplier Name</th>&nbsp;
								
								
								<th>Total amount to be settled</th>&nbsp;
								
							  </tr>
						</thead>
							  <tbody>  
<?php
								  
	
	
	date_default_timezone_set('Asia/colombo');
    $date = date('Y-m-d');
	
			
	$conn = mysqli_connect("localhost","food","nsbm","nsbmfood");
	if(mysqli_connect_errno()){
		echo "Failed to connect to the database.".mysqli_connect_error();
	}
	
	$sql = "SELECT * from total_items WHERE date BETWEEN '$startDate' AND '$endDate' ORDER BY supplier_name ASC";
	$fullOrderList = mysqli_query($conn,$sql);
	//$fullOrderListNumber = mysqli_affected_rows($conn);
	$sql2 = "SELECT supplier_name from total_items WHERE date BETWEEN '$startDate' AND '$endDate' ORDER BY supplier_name ASC LIMIT 1 ";
	$check=mysqli_query($conn,$sql2);						  
	while($row2 = $check -> fetch_assoc()){
		$supplier = $row2['supplier_name'];
	}
								  
								  
	if($fullOrderList -> num_rows > 0 ){
		
		$sum = 0;
		$sum1 = 0;
			
			while($row2 = $fullOrderList -> fetch_assoc()){
				
				
				if($supplier == $row2['supplier_name'] ){
					
				$vrc = $row2['vr']*$vr*1.00;
				$omrc = $row2['omr']*$or*1.00;
				$erc = $row2['er']*$er*1.00;
				$frc = $row2['fr']*$fr*1.00;
				$crc = $row2['cr']*$cr*1.00;
				$scrc = $row2['special_c']*$svr*1.00;
				$sfrc = $row2['special_f']*$sfr*1.00;
				$serc = $row2['special_e']*$ser*1.00;
				$svrc = $row2['special_v']*$scr*1.00;
				
				
				
				
				$tot = $vrc+$omrc+$erc+$frc+$crc+$scrc+$sfrc+$serc+$svrc;
				$tot1= number_format((float)$tot,2);
				$sum = $sum + $tot;
				$sum1= number_format((float)$sum,2);
				
				//echo "<tr><td>".$row2['supplier_name']."</td><td>".$row2['date']." </td><td>".$tot1." </td></tr>";
					
					
				}
				else{
				echo "<tr style='color:black;weight:bold;'><td><p > $supplier </p> </td><td >$sum1</td></tr>";
					//echo "<tr><td>".$row2['supplier_name']."</td><td>".$row2['date']." </td><td>".$tot1." </td></tr>";
					$sum = 0;
					$supplier = $row2['supplier_name'];
					$vrc = $row2['vr']*$vr*1.00;
				$omrc = $row2['omr']*$or*1.00;
				$erc = $row2['er']*$er*1.00;
				$frc = $row2['fr']*$fr*1.00;
				$crc = $row2['cr']*$cr*1.00;
				$scrc = $row2['special_c']*$svr*1.00;
				$sfrc = $row2['special_f']*$sfr*1.00;
				$serc = $row2['special_e']*$ser*1.00;
				$svrc = $row2['special_v']*$scr*1.00;
				
				
				
				
				$tot = $vrc+$omrc+$erc+$frc+$crc+$scrc+$sfrc+$serc+$svrc;
				$tot1= number_format((float)$tot,2);
				$sum = $sum + $tot;
				$sum1= number_format((float)$sum,2);
					
					
					
				}
				
			
			}
		
			echo "<tr style='color:black;weight:bold;'><td><p > $supplier </p> </td><td >$sum1</td></tr>";
		
		
		}
		else{
			echo "No result found.";
			}
		
								  
								  	
mysqli_close($conn);
	
	?>
							</tbody>
							  </table>
			
			<br>
			<?php
			
	$conn = mysqli_connect("localhost","food","nsbm","nsbmfood");
	if(mysqli_connect_errno()){
		echo "Failed to connect to the database.".mysqli_connect_error();
	}
			$sum1 = 0;
			$sum = 0;
	
	$sql = "SELECT * from total_items WHERE date BETWEEN '$startDate' AND '$endDate' ORDER BY date";
	$fullOrderList = mysqli_query($conn,$sql);
	//$fullOrderListNumber = mysqli_affected_rows($conn);
	if($fullOrderList -> num_rows > 0 ){
			
			while($row2 = $fullOrderList -> fetch_assoc()){
				
				$vrc = $row2['vr']*$vr*1.00;
				$omrc = $row2['omr']*$or*1.00;
				$erc = $row2['er']*$er*1.00;
				$frc = $row2['fr']*$fr*1.00;
				$crc = $row2['cr']*$cr*1.00;
				$scrc = $row2['special_c']*$svr*1.00;
				$sfrc = $row2['special_f']*$sfr*1.00;
				$serc = $row2['special_e']*$ser*1.00;
				$svrc = $row2['special_v']*$scr*1.00;
				
				
				
				
				$tot = $vrc+$omrc+$erc+$frc+$crc+$scrc+$sfrc+$serc+$svrc;
				
				$sum = $sum + $tot;
				$sum1= number_format((float)$sum,2);
				
				
			}
		}
		else{
			echo "No result found.";
			}
		
								  
								  	
mysqli_close($conn);
			
			
				echo "<h5 bgcolor='#A9A9A9'><b><p align=center style='color:black;'>TOTAL FOOD EXPENSES ORDERS FOR STAFF : $sum1</p></b></h5>";
			?>
	</div>
	
	
	<div id="main_topic" class="col-lg-12 col-md-12 col-sm-12" >food rates</div><br>

						  <table id="tbl">
							  <thead>
						  	<tr>
							
							  <th>Item name</th>&nbsp;
								
								
								<th>rate</th>&nbsp;
								
							  </tr>
						</thead>
							  <tbody>
								  <?php
								  
								  
								  
								  $conn = mysqli_connect("localhost","food","nsbm","nsbmfood");
	if(mysqli_connect_errno()){
		echo "Failed to connect to the database.".mysqli_connect_error();
	}
$sql1 = "select * from prices";
$price= mysqli_query($conn,$sql1);
if($price -> num_rows > 0 ){
			
			while($row2 = $price -> fetch_assoc()){
				$vr = $row2['vegi'];
				$or = $row2['omlet'];
				$er = $row2['egg'];
				$fr = $row2['fish'];
				$cr = $row2['chicken'];
				$svr = $row2['s_vegi'];
				$sfr = $row2['s_fish'];
				$ser = $row2['s_egg'];
				$scr = $row2['s_chicken'];
				
				$sum1= number_format((float)$vr,2);
				$sum2= number_format((float)$or,2);
				$sum3= number_format((float)$er,2);
				$sum4= number_format((float)$fr,2);
				$sum5= number_format((float)$cr,2);
				$sum6= number_format((float)$svr,2);
				$sum7= number_format((float)$sfr,2);
				$sum8= number_format((float)$ser,2);
				$sum9= number_format((float)$scr,2);
			
				
				
		
			}
}


mysqli_close($conn);
								  
								  
								  echo "<tr><td><p > vegi </p> </td><td >$sum1</td></tr>";
								  echo "<tr><td><p > omlet </p> </td><td >$sum2</td></tr>";
								  echo "<tr><td><p > egg </p> </td><td >$sum3</td></tr>";
								  echo "<tr><td><p > fish </p> </td><td >$sum4</td></tr>";
								  echo "<tr><td><p > chicken </p> </td><td >$sum5</td></tr>";
								  echo "<tr><td><p > special vegi </p> </td><td >$sum6</td></tr>";
								  echo "<tr><td><p > special fish </p> </td><td >$sum7</td></tr>";
								  echo "<tr><td><p > special egg </p> </td><td >$sum8</td></tr>";
								  echo "<tr><td><p > special chicken </p> </td><td >$sum9</td></tr>";
								  ?>
								  
								  </tbody>
							  </table>
								
	
	<hr></hr>
	
	
	
		
</body>
</html>