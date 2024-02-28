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
<title>Daily report</title>
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
		
	
</style>
	
	
	
	
</head>


<body>
	
	
	
	<?php
	date_default_timezone_set('Asia/colombo');
    $date = date('Y-m-d');
	?>
	

	
	<div class="jumbotron page-header">
	<center><h2><b>NSBM Staff Lunch Ordering System</b></h2></center>
	<center><h4><b>System genarated daily report</b></h4></center>
	<center><label style="text-align: right">Date : <?php echo $date ?></label></center>
	</div>
	<hr></hr>
	<br>
	<?php
	
		date_default_timezone_set('Asia/colombo');
    $date = date('Y-m-d');
		
		
		$n_rows = 0;
		$n_rows1 = 0;
		$n_rows2 = 0;
		$n_rows3 = 0;
		$n_rows4 = 0;
		$n_rows5 = 0;
		$n_rows6 = 0;
		$n_rows7 = 0;
		$n_rows8 = 0;
		$n_rows9 = 0;
		$n_rows10 = 0;
		$n_rows11 = 0;
		$n_rows12 = 0;
		$n_rows13 = 0;
		$n_rows14 = 0;
	
			
			$conn = mysqli_connect( "localhost", "food", "nsbm", "nsbmfood" );
	if(mysqli_connect_errno()){
		echo "Failed to connect to the database.".mysqli_connect_error();
	}
	$sql = "SELECT food_item from orders WHERE date = '$date' AND food_item = 'red chicken' AND supplier IS NOT NULL";
	mysqli_query($conn,$sql);
	$n_rows = mysqli_affected_rows($conn);	
	
		
		$sql2 = "SELECT food_item from orders WHERE date = '$date' AND food_item = 'white chicken' AND supplier IS NOT NULL";
	mysqli_query($conn,$sql2);
	$n_rows2 = mysqli_affected_rows($conn);
		
		
		$sql3 = "SELECT food_item from orders WHERE date = '$date' AND food_item = 'red egg' AND supplier IS NOT NULL";	
	mysqli_query($conn,$sql3);
	$n_rows3 = mysqli_affected_rows($conn);
		
		
		$sql4 = "SELECT food_item from orders WHERE date = '$date' AND food_item = 'white egg' AND supplier IS NOT NULL";
	mysqli_query($conn,$sql4);
	$n_rows4 = mysqli_affected_rows($conn);
		
		
		$sql5 = "SELECT food_item from orders WHERE date = '$date' AND food_item = 'red omellete' AND supplier IS NOT NULL";
	mysqli_query($conn,$sql5);
	$n_rows5 = mysqli_affected_rows($conn);
		
		$sql6 = "SELECT food_item from orders WHERE date = '$date' AND food_item = 'white omellete' AND supplier IS NOT NULL";
	mysqli_query($conn,$sql6);
	$n_rows6 = mysqli_affected_rows($conn);
		
		$sql7 = "SELECT food_item from orders WHERE date = '$date' AND food_item = 'red fish' AND supplier IS NOT NULL";
	mysqli_query($conn,$sql7);
	$n_rows7 = mysqli_affected_rows($conn);
		
		$sql8 = "SELECT food_item from orders WHERE date = '$date' AND food_item = 'white fish' AND supplier IS NOT NULL";
	mysqli_query($conn,$sql8);
	$n_rows8 = mysqli_affected_rows($conn);
	
		
		$sql9 = "SELECT food_item from orders WHERE date = '$date' AND food_item = 'red vegi' AND supplier IS NOT NULL";
	mysqli_query($conn,$sql9);
	$n_rows9 = mysqli_affected_rows($conn);
		
		$sql10 = "SELECT food_item from orders WHERE date = '$date' AND food_item = 'white vegi' AND supplier IS NOT NULL";
	mysqli_query($conn,$sql10);
	$n_rows10 = mysqli_affected_rows($conn);
		
		
			$sql11 = "SELECT food_item from orders WHERE date = '$date' AND food_item = 'special_c' AND supplier IS NOT NULL";
	mysqli_query($conn,$sql11);
	$n_rows11 = mysqli_affected_rows($conn);
		
		
		$sql12 = "SELECT food_item from orders WHERE date = '$date' AND food_item = 'special_v' AND supplier IS NOT NULL";
	mysqli_query($conn,$sql12);
	$n_rows12 = mysqli_affected_rows($conn);
		
		
		$sql13 = "SELECT food_item from orders WHERE date = '$date' AND food_item = 'special_e' AND supplier IS NOT NULL";
	mysqli_query($conn,$sql13);
	$n_rows13 = mysqli_affected_rows($conn);
		
		$sql14 = "SELECT food_item from orders WHERE date = '$date' AND food_item = 'special_f' AND supplier IS NOT NULL";
	mysqli_query($conn,$sql14);
	$n_rows14 = mysqli_affected_rows($conn);
		
		
		
		mysqli_close($conn);
	?>
	
	
	
	<div id="main_topic" class="col-lg-12 col-md-12 col-sm-12" >Lunch order list</div><br>
		
						  <table>
							  
							  <thead>
								  
						  	<tr>
							
							  <th>Food Item</th>&nbsp;&nbsp;&nbsp;&nbsp;
								<th>Quantity</th>&nbsp;&nbsp;&nbsp;&nbsp;
								
							  </tr>
						</thead>
							  <tbody>  
<?php
	
	
	
	
	echo "<tr><td>Red chicken</td><td>".$n_rows." </td></tr>";
	echo "<tr><td>White chicken</td><td>".$n_rows2." </td></tr>";

	echo "<tr><td>Red egg</td><td>".$n_rows3." </td></tr>";	
		
	
	echo "<tr><td>White egg</td><td>".$n_rows4." </td></tr>";
		
		
	
	
	echo "<tr><td>Red omellete</td><td>".$n_rows5." </td></tr>";
		
		
	
	echo "<tr><td>White omellete</td><td>".$n_rows6." </td></tr>";
		
		
	echo "<tr><td>Red fish</td><td>".$n_rows7." </td></tr>";
		
		
			
	echo "<tr><td>White fish</td><td>".$n_rows8." </td></tr>";
		
		
			
	echo "<tr><td>Red vegi</td><td>".$n_rows9." </td></tr>";
		
		
	echo "<tr><td>White vegi</td><td>".$n_rows10." </td></tr>";
		
	
	echo "<tr><td>Special chicken</td><td>".$n_rows11." </td></tr>";
		
		
	echo "<tr><td>Special vegi</td><td>".$n_rows12." </td></tr>";
		
		
	echo "<tr><td>Special egg</td><td>".$n_rows13." </td></tr>";
		
		
	echo "<tr><td>Special fish</td><td>".$n_rows14." </td></tr>";
		

	
	?>
							</tbody>
							  </table>
			
			
			
			
			
	
	<br>
	
	
	
	<div id="main_topic" class="col-lg-12 col-md-12 col-sm-12" >Today's Supplier</div><br>
	<?php

	//$date = date("Y-m-d");
	date_default_timezone_set('Asia/colombo');
    $date = date('Y-m-d');
	
			
			$conn = mysqli_connect( "localhost", "food", "nsbm", "nsbmfood" );

	if(mysqli_connect_errno()){
		echo "Failed to connect to the database.".mysqli_connect_error();
	}
	
	$sql = "SELECT supplier from orders WHERE date = '$date' AND supplier IS NOT NULL  GROUP BY supplier ";
	
	//echo "name ",$id;
	//return false;
//$CHECKED = "";
	$result = mysqli_query($conn,$sql); //output success or failure messages
    //  while($row = $result -> fetch_assoc()){
				//$CHECKED= $row['supplier'];
		//	
		//	}
		 
	$s_name = '';
	//echo "",$date;
//if($CHECKED != 'NULL'){
	
	
	if($result -> num_rows > 1 ){
		$s_name = '';
		echo "<labe style='color:red;'l><h4>PLEASE SELECT TODAY'S SUPPLIER AND GENERATE DAILY REPORT AGAIN. THANK YOU.</h4></label>";
		//echo '<script type="text/javascript">alert("Please click OK to add a supplier.");window.location.assign("checkout.php");</script>';
			
		}
	else if($result -> num_rows == 1 ){
		while($row = $result -> fetch_assoc()){
				$s_name= $row['supplier'];
			echo "<b>Name : ",$row['supplier'];
				echo"</b>";
			}
		
	$cr = $n_rows + $n_rows2;
	$er = $n_rows3 + $n_rows4;
	$or = $n_rows5 + $n_rows6;
	$fr = $n_rows7 + $n_rows8;
	$vr = $n_rows9 + $n_rows10;
	$scr = $n_rows11;
	$svr = $n_rows12 ;
	$ser = $n_rows13 ;
	$sfr = $n_rows14 ;
	
	
	
	$conn = mysqli_connect( "localhost", "food", "nsbm", "nsbmfood" );
	if(mysqli_connect_errno()){
		echo "Failed to connect to the database.".mysqli_connect_error();
	}
	
		$sql_check = "SELECT * FROM total_items WHERE date = '$date'";
		mysqli_query($conn,$sql_check);
		$check = mysqli_affected_rows($conn);
		if($check == 0){
			$sql = "INSERT INTO total_items(date,supplier_name,cr,er,fr,vr,omr,special_c,special_f,special_v,special_e) VALUES('$date','$s_name','$cr','$er','$fr','$vr','$or','$scr','$sfr','$svr',$ser)";
			mysqli_query($conn,$sql);	
			
		}
		else{
			$sql = "UPDATE total_items SET date='$date', supplier_name='$s_name', cr = '$cr',er = '$er', fr = '$fr',vr = '$vr', omr = '$or',special_c = '$scr', special_f = '$sfr',special_v = '$svr', special_e = '$ser' WHERE date = '$date'";
			mysqli_query($conn,$sql);	
			
		}
		
		
	}
	else{
			$s_name = '';
			echo "<labe style='color:red;'l><h4>THERE IS NO ORDERS YET OR ORDERS STILL NOT CHECKED OUT.PLEASE CHECK CHECKOUT ORDER. </h4></label>";
			}
	
/*}
else{
	echo "<labe style='color:red;'l><h4>PLEASE SELECT TODAY'S SUPPLIER AND GENERATE DAILY REPORT AGAIN. THANK YOU.</h4></label>";
}*/
	
	
	
	mysqli_close($conn);


$n_rowsrc1 = 0;
		$n_rowswc1 = 0;
		$n_rowsrf1 = 0;
		$n_rowswf1 = 0;
		$n_rowsre1 = 0;
		$n_rowswe1 = 0;
		$n_rowsroml1 = 0;
		$n_rowswoml1 = 0;
		$n_rowsrv1 = 0;
		$n_rowswv1 = 0;
		$n_rowssc1 = 0;
		$n_rowssv1 = 0;
		$n_rowsse1 = 0;
		$n_rowssf1 = 0;

		$n_rowsrc2 = 0;
		$n_rowswc2 = 0;
		$n_rowsrf2 = 0;
		$n_rowswf2 = 0;
		$n_rowsre2 = 0;
		$n_rowswe2 = 0;
		$n_rowsroml2 = 0;
		$n_rowswoml2 = 0;
		$n_rowsrv2 = 0;
		$n_rowswv2 = 0;
		$n_rowssc2 = 0;
		$n_rowssv2 = 0;
		$n_rowsse2 = 0;
		$n_rowssf2 = 0;
	

	$n_rowsrc3 = 0;
		$n_rowswc3 = 0;
		$n_rowsrf3 = 0;
		$n_rowswf3 = 0;
		$n_rowsre3 = 0;
		$n_rowswe3 = 0;
		$n_rowsroml3 = 0;
		$n_rowswoml3 = 0;
		$n_rowsrv3 = 0;
		$n_rowswv3 = 0;
		$n_rowssc3 = 0;
		$n_rowssv3 = 0;
		$n_rowsse3 = 0;
		$n_rowssf3 = 0;

	

	$n_rowsrc4 = 0;
		$n_rowswc4 = 0;
		$n_rowsrf4 = 0;
		$n_rowswf4 = 0;
		$n_rowsre4 = 0;
		$n_rowswe4 = 0;
		$n_rowsroml4 = 0;
		$n_rowswoml4 = 0;
		$n_rowsrv4 = 0;
		$n_rowswv4 = 0;
		$n_rowssc4 = 0;
		$n_rowssv4 = 0;
		$n_rowsse4 = 0;
		$n_rowssf4 = 0;

	$n_rowsrc5 = 0;
		$n_rowswc5 = 0;
		$n_rowsrf5 = 0;
		$n_rowswf5 = 0;
		$n_rowsre5 = 0;
		$n_rowswe5 = 0;
		$n_rowsroml5 = 0;
		$n_rowswoml5 = 0;
		$n_rowsrv5 = 0;
		$n_rowswv5 = 0;
		$n_rowssc5 = 0;
		$n_rowssv5 = 0;
		$n_rowsse5 = 0;
		$n_rowssf5 = 0;

	$n_rowsrc6 = 0;
		$n_rowswc6 = 0;
		$n_rowsrf6 = 0;
		$n_rowswf6 = 0;
		$n_rowsre6 = 0;
		$n_rowswe6 = 0;
		$n_rowsroml6 = 0;
		$n_rowswoml6 = 0;
		$n_rowsrv6 = 0;
		$n_rowswv6 = 0;
		$n_rowssc6 = 0;
		$n_rowssv6 = 0;
		$n_rowsse6 = 0;
		$n_rowssf6 = 0;

	$n_rowsrc7 = 0;
		$n_rowswc7 = 0;
		$n_rowsrf7 = 0;
		$n_rowswf7 = 0;
		$n_rowsre7 = 0;
		$n_rowswe7 = 0;
		$n_rowsroml7 = 0;
		$n_rowswoml7 = 0;
		$n_rowsrv7 = 0;
		$n_rowswv7 = 0;
		$n_rowssc7 = 0;
		$n_rowssv7 = 0;
		$n_rowsse7 = 0;
		$n_rowssf7 = 0;

	$n_rowsrc8 = 0;
		$n_rowswc8 = 0;
		$n_rowsrf8 = 0;
		$n_rowswf8 = 0;
		$n_rowsre8 = 0;
		$n_rowswe8 = 0;
		$n_rowsroml8 = 0;
		$n_rowswoml8 = 0;
		$n_rowsrv8 = 0;
		$n_rowswv8 = 0;
		$n_rowssc8 = 0;
		$n_rowssv8 = 0;
		$n_rowsse8 = 0;
		$n_rowssf8 = 0;

	$n_rowsrc9 = 0;
		$n_rowswc9 = 0;
		$n_rowsrf9 = 0;
		$n_rowswf9 = 0;
		$n_rowsre9 = 0;
		$n_rowswe9 = 0;
		$n_rowsroml9 = 0;
		$n_rowswoml9 = 0;
		$n_rowsrv9 = 0;
		$n_rowswv9 = 0;
		$n_rowssc9 = 0;
		$n_rowssv9 = 0;
		$n_rowsse9 = 0;
		$n_rowssf9 = 0;

	$n_rowsrc10 = 0;
		$n_rowswc10 = 0;
		$n_rowsrf10 = 0;
		$n_rowswf10 = 0;
		$n_rowsre10 = 0;
		$n_rowswe10 = 0;
		$n_rowsroml10 = 0;
		$n_rowswoml10 = 0;
		$n_rowsrv10 = 0;
		$n_rowswv10 = 0;
		$n_rowssc10 = 0;
		$n_rowssv10 = 0;
		$n_rowsse10 = 0;
		$n_rowssf10 = 0;

	$n_rowsrc11 = 0;
		$n_rowswc11 = 0;
		$n_rowsrf11 = 0;
		$n_rowswf11 = 0;
		$n_rowsre11 = 0;
		$n_rowswe11 = 0;
		$n_rowsroml11 = 0;
		$n_rowswoml11 = 0;
		$n_rowsrv11 = 0;
		$n_rowswv11 = 0;
		$n_rowssc11 = 0;
		$n_rowssv11 = 0;
		$n_rowsse11 = 0;
		$n_rowssf11 = 0;


			$conn = mysqli_connect( "localhost", "food", "nsbm", "nsbmfood" );
	if(mysqli_connect_errno()){
		echo "Failed to connect to the database.".mysqli_connect_error();
	}
//soc


$sqlrc1 = "SELECT food_item from orders WHERE date = '$date' AND location = 'soc' AND food_item = 'red chicken' AND supplier IS NOT NULL";
	mysqli_query($conn,$sqlrc1);
	$n_rowsrc1 = mysqli_affected_rows($conn);	

$sqlwc1 = "SELECT food_item from orders WHERE date = '$date' AND location = 'soc' AND food_item = 'white chicken' AND supplier IS NOT NULL";
	mysqli_query($conn,$sqlwc1);
	$n_rowswc1 = mysqli_affected_rows($conn);

$sqlrf1 = "SELECT food_item from orders WHERE date = '$date' AND location = 'soc' AND food_item = 'red fish' AND supplier IS NOT NULL";
	mysqli_query($conn,$sqlrf1);
	$n_rowsrf1 = mysqli_affected_rows($conn);

$sqlwf1 = "SELECT food_item from orders WHERE date = '$date' AND location = 'soc' AND food_item = 'white fish' AND supplier IS NOT NULL";
	mysqli_query($conn,$sqlwf1);
	$n_rowswf1 = mysqli_affected_rows($conn);

$sqlre1 = "SELECT food_item from orders WHERE date = '$date' AND location = 'soc' AND food_item = 'red egg' AND supplier IS NOT NULL";
	mysqli_query($conn,$sqlre1);
	$n_rowsre1 = mysqli_affected_rows($conn);

$sqlwe1 = "SELECT food_item from orders WHERE date = '$date' AND location = 'soc' AND food_item = 'white egg' AND supplier IS NOT NULL";
	mysqli_query($conn,$sqlwe1);
	$n_rowswe1 = mysqli_affected_rows($conn);

$sqlroml1 = "SELECT food_item from orders WHERE date = '$date' AND location = 'soc' AND food_item = 'red omellete' AND supplier IS NOT NULL";
	mysqli_query($conn,$sqlroml1);
	$n_rowsroml1 = mysqli_affected_rows($conn);

$sqlwoml1 = "SELECT food_item from orders WHERE date = '$date' AND location = 'soc' AND food_item = 'white omellete' AND supplier IS NOT NULL";
	mysqli_query($conn,$sqlwoml1);
	$n_rowswoml1 = mysqli_affected_rows($conn);

$sqlrv1 = "SELECT food_item from orders WHERE date = '$date' AND location = 'soc' AND food_item = 'red vegi' AND supplier IS NOT NULL";
	mysqli_query($conn,$sqlrv1);
	$n_rowsrv1 = mysqli_affected_rows($conn);


$sqlwv1 = "SELECT food_item from orders WHERE date = '$date' AND location = 'soc' AND food_item = 'white vegi' AND supplier IS NOT NULL";
	mysqli_query($conn,$sqlwv1);
	$n_rowswv1 = mysqli_affected_rows($conn);


$sqlsc1 = "SELECT food_item from orders WHERE date = '$date' AND location = 'soc' AND food_item = 'special_c' AND supplier IS NOT NULL";
	mysqli_query($conn,$sqlsc1);
	$n_rowssc1 = mysqli_affected_rows($conn);

$sqlsv1 = "SELECT food_item from orders WHERE date = '$date' AND location = 'soc' AND food_item = 'special_v' AND supplier IS NOT NULL";
	mysqli_query($conn,$sqlsv1);
	$n_rowssv1 = mysqli_affected_rows($conn);

$sqlse1 = "SELECT food_item from orders WHERE date = '$date' AND location = 'soc' AND food_item = 'special_e' AND supplier IS NOT NULL";
	mysqli_query($conn,$sqlse1);
	$n_rowsse1 = mysqli_affected_rows($conn);

$sqlsf1 = "SELECT food_item from orders WHERE date = '$date' AND location = 'soc' AND food_item = 'special_f' AND supplier IS NOT NULL";
	mysqli_query($conn,$sqlsf1);
	$n_rowssf1 = mysqli_affected_rows($conn);





//sob


$sqlrc2 = "SELECT food_item from orders WHERE date = '$date' AND location = 'sob' AND food_item = 'red chicken' AND supplier IS NOT NULL";
	mysqli_query($conn,$sqlrc2);
	$n_rowsrc2 = mysqli_affected_rows($conn);	

$sqlwc2 = "SELECT food_item from orders WHERE date = '$date' AND location = 'sob' AND food_item = 'white chicken' AND supplier IS NOT NULL";
	mysqli_query($conn,$sqlwc2);
	$n_rowswc2 = mysqli_affected_rows($conn);

$sqlrf2 = "SELECT food_item from orders WHERE date = '$date' AND location = 'sob' AND food_item = 'red fish' AND supplier IS NOT NULL";
	mysqli_query($conn,$sqlrf2);
	$n_rowsrf2 = mysqli_affected_rows($conn);

$sqlwf2 = "SELECT food_item from orders WHERE date = '$date' AND location = 'sob' AND food_item = 'white fish' AND supplier IS NOT NULL";
	mysqli_query($conn,$sqlwf2);
	$n_rowswf2 = mysqli_affected_rows($conn);

$sqlre2 = "SELECT food_item from orders WHERE date = '$date' AND location = 'sob' AND food_item = 'red egg' AND supplier IS NOT NULL";
	mysqli_query($conn,$sqlre2);
	$n_rowsre2 = mysqli_affected_rows($conn);

$sqlwe2 = "SELECT food_item from orders WHERE date = '$date' AND location = 'sob' AND food_item = 'white egg' AND supplier IS NOT NULL";
	mysqli_query($conn,$sqlwe2);
	$n_rowswe2 = mysqli_affected_rows($conn);

$sqlroml2 = "SELECT food_item from orders WHERE date = '$date' AND location = 'sob' AND food_item = 'red omellete' AND supplier IS NOT NULL";
	mysqli_query($conn,$sqlroml2);
	$n_rowsroml2 = mysqli_affected_rows($conn);

$sqlwoml2 = "SELECT food_item from orders WHERE date = '$date' AND location = 'sob' AND food_item = 'white omellete' AND supplier IS NOT NULL";
	mysqli_query($conn,$sqlwoml2);
	$n_rowswoml2 = mysqli_affected_rows($conn);

$sqlrv2 = "SELECT food_item from orders WHERE date = '$date' AND location = 'sob' AND food_item = 'red vegi' AND supplier IS NOT NULL";
	mysqli_query($conn,$sqlrv2);
	$n_rowsrv2 = mysqli_affected_rows($conn);

$sqlwv2 = "SELECT food_item from orders WHERE date = '$date' AND location = 'sob' AND food_item = 'white vegi' AND supplier IS NOT NULL";
	mysqli_query($conn,$sqlwv2);
	$n_rowswv2 = mysqli_affected_rows($conn);


$sqlsc2 = "SELECT food_item from orders WHERE date = '$date' AND location = 'sob' AND food_item = 'special_c' AND supplier IS NOT NULL";
	mysqli_query($conn,$sqlsc2);
	$n_rowssc2 = mysqli_affected_rows($conn);

$sqlsv2 = "SELECT food_item from orders WHERE date = '$date' AND location = 'sob' AND food_item = 'special_v' AND supplier IS NOT NULL";
	mysqli_query($conn,$sqlsv2);
	$n_rowssv2 = mysqli_affected_rows($conn);

$sqlse2 = "SELECT food_item from orders WHERE date = '$date' AND location = 'sob' AND food_item = 'special_e' AND supplier IS NOT NULL";
	mysqli_query($conn,$sqlse2);
	$n_rowsse2 = mysqli_affected_rows($conn);

$sqlsf2 = "SELECT food_item from orders WHERE date = '$date' AND location = 'sob' AND food_item = 'special_f' AND supplier IS NOT NULL";
	mysqli_query($conn,$sqlsf2);
	$n_rowssf2 = mysqli_affected_rows($conn);





//soe

$sqlrc3 = "SELECT food_item from orders WHERE date = '$date' AND location = 'soe' AND food_item = 'red chicken' AND supplier IS NOT NULL";
	mysqli_query($conn,$sqlrc3);
	$n_rowsrc3 = mysqli_affected_rows($conn);	

$sqlwc3 = "SELECT food_item from orders WHERE date = '$date' AND location = 'soe' AND food_item = 'white chicken' AND supplier IS NOT NULL";
	mysqli_query($conn,$sqlwc3);
	$n_rowswc3 = mysqli_affected_rows($conn);

$sqlrf3 = "SELECT food_item from orders WHERE date = '$date' AND location = 'soe' AND food_item = 'red fish' AND supplier IS NOT NULL";
	mysqli_query($conn,$sqlrf3);
	$n_rowsrf3 = mysqli_affected_rows($conn);

$sqlwf3 = "SELECT food_item from orders WHERE date = '$date' AND location = 'soe' AND food_item = 'white fish' AND supplier IS NOT NULL";
	mysqli_query($conn,$sqlwf3);
	$n_rowswf3 = mysqli_affected_rows($conn);

$sqlre3 = "SELECT food_item from orders WHERE date = '$date' AND location = 'soe' AND food_item = 'red egg' AND supplier IS NOT NULL";
	mysqli_query($conn,$sqlre3);
	$n_rowsre3 = mysqli_affected_rows($conn);

$sqlwe3 = "SELECT food_item from orders WHERE date = '$date' AND location = 'soe' AND food_item = 'white egg' AND supplier IS NOT NULL";
	mysqli_query($conn,$sqlwe3);
	$n_rowswe3 = mysqli_affected_rows($conn);

$sqlroml3 = "SELECT food_item from orders WHERE date = '$date' AND location = 'soe' AND food_item = 'red omellete' AND supplier IS NOT NULL";
	mysqli_query($conn,$sqlroml3);
	$n_rowsroml3 = mysqli_affected_rows($conn);

$sqlwoml3 = "SELECT food_item from orders WHERE date = '$date' AND location = 'soe' AND food_item = 'white omellete' AND supplier IS NOT NULL";
	mysqli_query($conn,$sqlwoml3);
	$n_rowswoml3 = mysqli_affected_rows($conn);

$sqlrv3 = "SELECT food_item from orders WHERE date = '$date' AND location = 'soe' AND food_item = 'red vegi' AND supplier IS NOT NULL";
	mysqli_query($conn,$sqlrv3);
	$n_rowsrv3 = mysqli_affected_rows($conn);

$sqlwv3 = "SELECT food_item from orders WHERE date = '$date' AND location = 'soe' AND food_item = 'white vegi' AND supplier IS NOT NULL";
	mysqli_query($conn,$sqlwv3);
	$n_rowswv3 = mysqli_affected_rows($conn);

$sqlsc3 = "SELECT food_item from orders WHERE date = '$date' AND location = 'soe' AND food_item = 'special_c' AND supplier IS NOT NULL";
	mysqli_query($conn,$sqlsc3);
	$n_rowssc3 = mysqli_affected_rows($conn);

$sqlsv3 = "SELECT food_item from orders WHERE date = '$date' AND location = 'soe' AND food_item = 'special_v' AND supplier IS NOT NULL";
	mysqli_query($conn,$sqlsv3);
	$n_rowssv3 = mysqli_affected_rows($conn);

$sqlse3 = "SELECT food_item from orders WHERE date = '$date' AND location = 'soe' AND food_item = 'special_e' AND supplier IS NOT NULL";
	mysqli_query($conn,$sqlse3);
	$n_rowsse3 = mysqli_affected_rows($conn);

$sqlsf3 = "SELECT food_item from orders WHERE date = '$date' AND location = 'soe' AND food_item = 'special_f' AND supplier IS NOT NULL";
	mysqli_query($conn,$sqlsf3);
	$n_rowssf3 = mysqli_affected_rows($conn);




//admin



$sqlrc4 = "SELECT food_item from orders WHERE date = '$date' AND location = 'admin' AND food_item = 'red chicken' AND supplier IS NOT NULL";
	mysqli_query($conn,$sqlrc4);
	$n_rowsrc4 = mysqli_affected_rows($conn);	

$sqlwc4 = "SELECT food_item from orders WHERE date = '$date' AND location = 'admin' AND food_item = 'white chicken' AND supplier IS NOT NULL";
	mysqli_query($conn,$sqlwc4);
	$n_rowswc4 = mysqli_affected_rows($conn);

$sqlrf4 = "SELECT food_item from orders WHERE date = '$date' AND location = 'admin' AND food_item = 'red fish' AND supplier IS NOT NULL";
	mysqli_query($conn,$sqlrf4);
	$n_rowsrf4 = mysqli_affected_rows($conn);

$sqlwf4 = "SELECT food_item from orders WHERE date = '$date' AND location = 'admin' AND food_item = 'white fish' AND supplier IS NOT NULL";
	mysqli_query($conn,$sqlwf4);
	$n_rowswf4 = mysqli_affected_rows($conn);

$sqlre4 = "SELECT food_item from orders WHERE date = '$date' AND location = 'admin' AND food_item = 'red egg' AND supplier IS NOT NULL";
	mysqli_query($conn,$sqlre4);
	$n_rowsre4 = mysqli_affected_rows($conn);

$sqlwe4 = "SELECT food_item from orders WHERE date = '$date' AND location = 'admin' AND food_item = 'white egg' AND supplier IS NOT NULL";
	mysqli_query($conn,$sqlwe4);
	$n_rowswe4 = mysqli_affected_rows($conn);

$sqlroml4 = "SELECT food_item from orders WHERE date = '$date' AND location = 'admin' AND food_item = 'red omellete' AND supplier IS NOT NULL";
	mysqli_query($conn,$sqlroml4);
	$n_rowsroml4 = mysqli_affected_rows($conn);

$sqlwoml4 = "SELECT food_item from orders WHERE date = '$date' AND location = 'admin' AND food_item = 'white omellete' AND supplier IS NOT NULL";
	mysqli_query($conn,$sqlwoml4);
	$n_rowswoml4 = mysqli_affected_rows($conn);

$sqlrv4 = "SELECT food_item from orders WHERE date = '$date' AND location = 'admin' AND food_item = 'red vegi' AND supplier IS NOT NULL";
	mysqli_query($conn,$sqlrv4);
	$n_rowsrv4 = mysqli_affected_rows($conn);

$sqlwv4 = "SELECT food_item from orders WHERE date = '$date' AND location = 'admin' AND food_item = 'white vegi' AND supplier IS NOT NULL";
	mysqli_query($conn,$sqlwv4);
	$n_rowswv4 = mysqli_affected_rows($conn);

$sqlsc4 = "SELECT food_item from orders WHERE date = '$date' AND location = 'admin' AND food_item = 'special_c' AND supplier IS NOT NULL";
	mysqli_query($conn,$sqlsc4);
	$n_rowssc4 = mysqli_affected_rows($conn);

$sqlsv4 = "SELECT food_item from orders WHERE date = '$date' AND location = 'admin' AND food_item = 'special_v' AND supplier IS NOT NULL";
	mysqli_query($conn,$sqlsv4);
	$n_rowssv4 = mysqli_affected_rows($conn);

$sqlse4 = "SELECT food_item from orders WHERE date = '$date' AND location = 'admin' AND food_item = 'special_e' AND supplier IS NOT NULL";
	mysqli_query($conn,$sqlse4);
	$n_rowsse4 = mysqli_affected_rows($conn);

$sqlsf4 = "SELECT food_item from orders WHERE date = '$date' AND location = 'admin' AND food_item = 'special_f' AND supplier IS NOT NULL";
	mysqli_query($conn,$sqlsf4);
	$n_rowssf4 = mysqli_affected_rows($conn);



//rec


$sqlrc5 = "SELECT food_item from orders WHERE date = '$date' AND location = 'rec' AND food_item = 'red chicken' AND supplier IS NOT NULL";
	mysqli_query($conn,$sqlrc5);
	$n_rowsrc5 = mysqli_affected_rows($conn);	

$sqlwc5 = "SELECT food_item from orders WHERE date = '$date' AND location = 'rec' AND food_item = 'white chicken' AND supplier IS NOT NULL";
	mysqli_query($conn,$sqlwc5);
	$n_rowswc5 = mysqli_affected_rows($conn);

$sqlrf5 = "SELECT food_item from orders WHERE date = '$date' AND location = 'rec' AND food_item = 'red fish' AND supplier IS NOT NULL";
	mysqli_query($conn,$sqlrf5);
	$n_rowsrf5 = mysqli_affected_rows($conn);

$sqlwf5 = "SELECT food_item from orders WHERE date = '$date' AND location = 'rec' AND food_item = 'white fish' AND supplier IS NOT NULL";
	mysqli_query($conn,$sqlwf5);
	$n_rowswf5 = mysqli_affected_rows($conn);

$sqlre5 = "SELECT food_item from orders WHERE date = '$date' AND location = 'rec' AND food_item = 'red egg' AND supplier IS NOT NULL";
	mysqli_query($conn,$sqlre5);
	$n_rowsre5 = mysqli_affected_rows($conn);

$sqlwe5 = "SELECT food_item from orders WHERE date = '$date' AND location = 'rec' AND food_item = 'white egg' AND supplier IS NOT NULL";
	mysqli_query($conn,$sqlwe5);
	$n_rowswe5 = mysqli_affected_rows($conn);

$sqlroml5 = "SELECT food_item from orders WHERE date = '$date' AND location = 'rec' AND food_item = 'red omellete' AND supplier IS NOT NULL";
	mysqli_query($conn,$sqlroml5);
	$n_rowsroml5 = mysqli_affected_rows($conn);

$sqlwoml5 = "SELECT food_item from orders WHERE date = '$date' AND location = 'rec' AND food_item = 'white omellete' AND supplier IS NOT NULL";
	mysqli_query($conn,$sqlwoml5);
	$n_rowswoml5 = mysqli_affected_rows($conn);

$sqlrv5 = "SELECT food_item from orders WHERE date = '$date' AND location = 'rec' AND food_item = 'red vegi' AND supplier IS NOT NULL";
	mysqli_query($conn,$sqlrv5);
	$n_rowsrv5 = mysqli_affected_rows($conn);

$sqlwv5 = "SELECT food_item from orders WHERE date = '$date' AND location = 'rec' AND food_item = 'white vegi' AND supplier IS NOT NULL";
	mysqli_query($conn,$sqlwv5);
	$n_rowswv5 = mysqli_affected_rows($conn);

$sqlsc5 = "SELECT food_item from orders WHERE date = '$date' AND location = 'rec' AND food_item = 'special_c' AND supplier IS NOT NULL";
	mysqli_query($conn,$sqlsc5);
	$n_rowssc5 = mysqli_affected_rows($conn);

$sqlsv5 = "SELECT food_item from orders WHERE date = '$date' AND location = 'rec' AND food_item = 'special_v' AND supplier IS NOT NULL";
	mysqli_query($conn,$sqlsv5);
	$n_rowssv5 = mysqli_affected_rows($conn);

$sqlse5 = "SELECT food_item from orders WHERE date = '$date' AND location = 'rec' AND food_item = 'special_e' AND supplier IS NOT NULL";
	mysqli_query($conn,$sqlse5);
	$n_rowsse5 = mysqli_affected_rows($conn);

$sqlsf5 = "SELECT food_item from orders WHERE date = '$date' AND location = 'rec' AND food_item = 'special_f' AND supplier IS NOT NULL";
	mysqli_query($conn,$sqlsf5);
	$n_rowssf5 = mysqli_affected_rows($conn);






//maintenance

$sqlrc6 = "SELECT food_item from orders WHERE date = '$date' AND location = 'main' AND food_item = 'red chicken' AND supplier IS NOT NULL";
	mysqli_query($conn,$sqlrc6);
	$n_rowsrc6 = mysqli_affected_rows($conn);	

$sqlwc6 = "SELECT food_item from orders WHERE date = '$date' AND location = 'main' AND food_item = 'white chicken' AND supplier IS NOT NULL";
	mysqli_query($conn,$sqlwc6);
	$n_rowswc6 = mysqli_affected_rows($conn);

$sqlrf6 = "SELECT food_item from orders WHERE date = '$date' AND location = 'main' AND food_item = 'red fish' AND supplier IS NOT NULL";
	mysqli_query($conn,$sqlrf6);
	$n_rowsrf6 = mysqli_affected_rows($conn);

$sqlwf6 = "SELECT food_item from orders WHERE date = '$date' AND location = 'main' AND food_item = 'white fish' AND supplier IS NOT NULL";
	mysqli_query($conn,$sqlwf6);
	$n_rowswf6 = mysqli_affected_rows($conn);

$sqlre6 = "SELECT food_item from orders WHERE date = '$date' AND location = 'main' AND food_item = 'red egg' AND supplier IS NOT NULL";
	mysqli_query($conn,$sqlre6);
	$n_rowsre6 = mysqli_affected_rows($conn);

$sqlwe6 = "SELECT food_item from orders WHERE date = '$date' AND location = 'main' AND food_item = 'white egg' AND supplier IS NOT NULL";
	mysqli_query($conn,$sqlwe6);
	$n_rowswe6 = mysqli_affected_rows($conn);

$sqlroml6 = "SELECT food_item from orders WHERE date = '$date' AND location = 'main' AND food_item = 'red omellete' AND supplier IS NOT NULL";
	mysqli_query($conn,$sqlroml6);
	$n_rowsroml6 = mysqli_affected_rows($conn);

$sqlwoml6 = "SELECT food_item from orders WHERE date = '$date' AND location = 'main' AND food_item = 'white omellete' AND supplier IS NOT NULL";
	mysqli_query($conn,$sqlwoml6);
	$n_rowswoml6 = mysqli_affected_rows($conn);

$sqlrv6 = "SELECT food_item from orders WHERE date = '$date' AND location = 'main' AND food_item = 'red vegi' AND supplier IS NOT NULL";
	mysqli_query($conn,$sqlrv6);
	$n_rowsrv6 = mysqli_affected_rows($conn);

$sqlwv6 = "SELECT food_item from orders WHERE date = '$date' AND location = 'main' AND food_item = 'white vegi' AND supplier IS NOT NULL";
	mysqli_query($conn,$sqlwv6);
	$n_rowswv6 = mysqli_affected_rows($conn);

$sqlsc6 = "SELECT food_item from orders WHERE date = '$date' AND location = 'main' AND food_item = 'special_c' AND supplier IS NOT NULL";
	mysqli_query($conn,$sqlsc6);
	$n_rowssc6 = mysqli_affected_rows($conn);

$sqlsv6 = "SELECT food_item from orders WHERE date = '$date' AND location = 'main' AND food_item = 'special_v' AND supplier IS NOT NULL";
	mysqli_query($conn,$sqlsv6);
	$n_rowssv6 = mysqli_affected_rows($conn);

$sqlse6 = "SELECT food_item from orders WHERE date = '$date' AND location = 'main' AND food_item = 'special_e' AND supplier IS NOT NULL";
	mysqli_query($conn,$sqlse6);
	$n_rowsse6 = mysqli_affected_rows($conn);

$sqlsf6 = "SELECT food_item from orders WHERE date = '$date' AND location = 'main' AND food_item = 'special_f' AND supplier IS NOT NULL";
	mysqli_query($conn,$sqlsf6);
	$n_rowssf6 = mysqli_affected_rows($conn);




//medi


$sqlrc7 = "SELECT food_item from orders WHERE date = '$date' AND location = 'medi' AND food_item = 'red chicken' AND supplier IS NOT NULL";
	mysqli_query($conn,$sqlrc7);
	$n_rowsrc7 = mysqli_affected_rows($conn);	

$sqlwc7 = "SELECT food_item from orders WHERE date = '$date' AND location = 'medi' AND food_item = 'white chicken' AND supplier IS NOT NULL";
	mysqli_query($conn,$sqlwc7);
	$n_rowswc7 = mysqli_affected_rows($conn);

$sqlrf7 = "SELECT food_item from orders WHERE date = '$date' AND location = 'medi' AND food_item = 'red fish' AND supplier IS NOT NULL";
	mysqli_query($conn,$sqlrf7);
	$n_rowsrf7 = mysqli_affected_rows($conn);

$sqlwf7 = "SELECT food_item from orders WHERE date = '$date' AND location = 'medi' AND food_item = 'white fish' AND supplier IS NOT NULL";
	mysqli_query($conn,$sqlwf7);
	$n_rowswf7 = mysqli_affected_rows($conn);

$sqlre7 = "SELECT food_item from orders WHERE date = '$date' AND location = 'medi' AND food_item = 'red egg' AND supplier IS NOT NULL";
	mysqli_query($conn,$sqlre7);
	$n_rowsre7 = mysqli_affected_rows($conn);

$sqlwe7 = "SELECT food_item from orders WHERE date = '$date' AND location = 'medi' AND food_item = 'white egg' AND supplier IS NOT NULL";
	mysqli_query($conn,$sqlwe7);
	$n_rowswe7 = mysqli_affected_rows($conn);

$sqlroml7 = "SELECT food_item from orders WHERE date = '$date' AND location = 'medi' AND food_item = 'red omellete' AND supplier IS NOT NULL";
	mysqli_query($conn,$sqlroml7);
	$n_rowsroml7 = mysqli_affected_rows($conn);

$sqlwoml7 = "SELECT food_item from orders WHERE date = '$date' AND location = 'medi' AND food_item = 'white omellete' AND supplier IS NOT NULL";
	mysqli_query($conn,$sqlwoml7);
	$n_rowswoml7 = mysqli_affected_rows($conn);

$sqlrv7 = "SELECT food_item from orders WHERE date = '$date' AND location = 'medi' AND food_item = 'red vegi' AND supplier IS NOT NULL";
	mysqli_query($conn,$sqlrv7);
	$n_rowsrv7 = mysqli_affected_rows($conn);

$sqlwv7 = "SELECT food_item from orders WHERE date = '$date' AND location = 'medi' AND food_item = 'white vegi' AND supplier IS NOT NULL";
	mysqli_query($conn,$sqlwv7);
	$n_rowswv7 = mysqli_affected_rows($conn);

$sqlsc7 = "SELECT food_item from orders WHERE date = '$date' AND location = 'medi' AND food_item = 'special_c' AND supplier IS NOT NULL";
	mysqli_query($conn,$sqlsc7);
	$n_rowssc7 = mysqli_affected_rows($conn);

$sqlsv7 = "SELECT food_item from orders WHERE date = '$date' AND location = 'medi' AND food_item = 'special_v' AND supplier IS NOT NULL";
	mysqli_query($conn,$sqlsv7);
	$n_rowssv7 = mysqli_affected_rows($conn);

$sqlse7 = "SELECT food_item from orders WHERE date = '$date' AND location = 'medi' AND food_item = 'special_e' AND supplier IS NOT NULL";
	mysqli_query($conn,$sqlse7);
	$n_rowsse7 = mysqli_affected_rows($conn);

$sqlsf7 = "SELECT food_item from orders WHERE date = '$date' AND location = 'medi' AND food_item = 'special_f' AND supplier IS NOT NULL";
	mysqli_query($conn,$sqlsf7);
	$n_rowssf7 = mysqli_affected_rows($conn);



//libryry


$sqlrc8 = "SELECT food_item from orders WHERE date = '$date' AND location = 'l' AND food_item = 'red chicken' AND supplier IS NOT NULL";
	mysqli_query($conn,$sqlrc8);
	$n_rowsrc8 = mysqli_affected_rows($conn);	

$sqlwc8 = "SELECT food_item from orders WHERE date = '$date' AND location = 'l' AND food_item = 'white chicken' AND supplier IS NOT NULL";
	mysqli_query($conn,$sqlwc8);
	$n_rowswc8 = mysqli_affected_rows($conn);

$sqlrf8 = "SELECT food_item from orders WHERE date = '$date' AND location = 'l' AND food_item = 'red fish' AND supplier IS NOT NULL";
	mysqli_query($conn,$sqlrf8);
	$n_rowsrf8 = mysqli_affected_rows($conn);

$sqlwf8 = "SELECT food_item from orders WHERE date = '$date' AND location = 'l' AND food_item = 'white fish' AND supplier IS NOT NULL";
	mysqli_query($conn,$sqlwf8);
	$n_rowswf8 = mysqli_affected_rows($conn);

$sqlre8 = "SELECT food_item from orders WHERE date = '$date' AND location = 'l' AND food_item = 'red egg' AND supplier IS NOT NULL";
	mysqli_query($conn,$sqlre8);
	$n_rowsre8 = mysqli_affected_rows($conn);

$sqlwe8 = "SELECT food_item from orders WHERE date = '$date' AND location = 'l' AND food_item = 'white egg' AND supplier IS NOT NULL";
	mysqli_query($conn,$sqlwe8);
	$n_rowswe8 = mysqli_affected_rows($conn);

$sqlroml8 = "SELECT food_item from orders WHERE date = '$date' AND location = 'l' AND food_item = 'red omellete' AND supplier IS NOT NULL";
	mysqli_query($conn,$sqlroml8);
	$n_rowsroml8 = mysqli_affected_rows($conn);

$sqlwoml8 = "SELECT food_item from orders WHERE date = '$date' AND location = 'l' AND food_item = 'white omellete' AND supplier IS NOT NULL";
	mysqli_query($conn,$sqlwoml8);
	$n_rowswoml8 = mysqli_affected_rows($conn);

$sqlrv8 = "SELECT food_item from orders WHERE date = '$date' AND location = 'l' AND food_item = 'red vegi' AND supplier IS NOT NULL";
	mysqli_query($conn,$sqlrv8);
	$n_rowsrv8 = mysqli_affected_rows($conn);

$sqlwv8 = "SELECT food_item from orders WHERE date = '$date' AND location = 'l' AND food_item = 'white vegi' AND supplier IS NOT NULL";
	mysqli_query($conn,$sqlwv8);
	$n_rowswv8 = mysqli_affected_rows($conn);

$sqlsc8 = "SELECT food_item from orders WHERE date = '$date' AND location = 'l' AND food_item = 'special_c' AND supplier IS NOT NULL";
	mysqli_query($conn,$sqlsc8);
	$n_rowssc8 = mysqli_affected_rows($conn);

$sqlsv8 = "SELECT food_item from orders WHERE date = '$date' AND location = 'l' AND food_item = 'special_v' AND supplier IS NOT NULL";
	mysqli_query($conn,$sqlsv8);
	$n_rowssv8 = mysqli_affected_rows($conn);

$sqlse8 = "SELECT food_item from orders WHERE date = '$date' AND location = 'l' AND food_item = 'special_e' AND supplier IS NOT NULL";
	mysqli_query($conn,$sqlse8);
	$n_rowsse8 = mysqli_affected_rows($conn);

$sqlsf8 = "SELECT food_item from orders WHERE date = '$date' AND location = 'l' AND food_item = 'special_f' AND supplier IS NOT NULL";
	mysqli_query($conn,$sqlsf8);
	$n_rowssf8 = mysqli_affected_rows($conn);



//audi

$sqlrc9 = "SELECT food_item from orders WHERE date = '$date' AND location = 'a' AND food_item = 'red chicken' AND supplier IS NOT NULL";
	mysqli_query($conn,$sqlrc9);
	$n_rowsrc9 = mysqli_affected_rows($conn);	

$sqlwc9 = "SELECT food_item from orders WHERE date = '$date' AND location = 'a' AND food_item = 'white chicken' AND supplier IS NOT NULL";
	mysqli_query($conn,$sqlwc9);
	$n_rowswc9 = mysqli_affected_rows($conn);

$sqlrf9 = "SELECT food_item from orders WHERE date = '$date' AND location = 'a' AND food_item = 'red fish' AND supplier IS NOT NULL";
	mysqli_query($conn,$sqlrf9);
	$n_rowsrf9 = mysqli_affected_rows($conn);

$sqlwf9 = "SELECT food_item from orders WHERE date = '$date' AND location = 'a' AND food_item = 'white fish' AND supplier IS NOT NULL";
	mysqli_query($conn,$sqlwf9);
	$n_rowswf9 = mysqli_affected_rows($conn);

$sqlre9 = "SELECT food_item from orders WHERE date = '$date' AND location = 'a' AND food_item = 'red egg' AND supplier IS NOT NULL";
	mysqli_query($conn,$sqlre9);
	$n_rowsre9 = mysqli_affected_rows($conn);

$sqlwe9 = "SELECT food_item from orders WHERE date = '$date' AND location = 'a' AND food_item = 'white egg' AND supplier IS NOT NULL";
	mysqli_query($conn,$sqlwe9);
	$n_rowswe9 = mysqli_affected_rows($conn);

$sqlroml9 = "SELECT food_item from orders WHERE date = '$date' AND location = 'a' AND food_item = 'red omellete' AND supplier IS NOT NULL";
	mysqli_query($conn,$sqlroml9);
	$n_rowsroml9 = mysqli_affected_rows($conn);

$sqlwoml9 = "SELECT food_item from orders WHERE date = '$date' AND location = 'a' AND food_item = 'white omellete' AND supplier IS NOT NULL";
	mysqli_query($conn,$sqlwoml9);
	$n_rowswoml9 = mysqli_affected_rows($conn);

$sqlrv9 = "SELECT food_item from orders WHERE date = '$date' AND location = 'a' AND food_item = 'red vegi' AND supplier IS NOT NULL";
	mysqli_query($conn,$sqlrv9);
	$n_rowsrv9 = mysqli_affected_rows($conn);

$sqlwv9 = "SELECT food_item from orders WHERE date = '$date' AND location = 'a' AND food_item = 'white vegi' AND supplier IS NOT NULL";
	mysqli_query($conn,$sqlwv9);
	$n_rowswv9 = mysqli_affected_rows($conn);

$sqlsc9 = "SELECT food_item from orders WHERE date = '$date' AND location = 'a' AND food_item = 'special_c' AND supplier IS NOT NULL";
	mysqli_query($conn,$sqlsc9);
	$n_rowssc9 = mysqli_affected_rows($conn);

$sqlsv9 = "SELECT food_item from orders WHERE date = '$date' AND location = 'a' AND food_item = 'special_v' AND supplier IS NOT NULL";
	mysqli_query($conn,$sqlsv9);
	$n_rowssv9 = mysqli_affected_rows($conn);

$sqlse9 = "SELECT food_item from orders WHERE date = '$date' AND location = 'a' AND food_item = 'special_e' AND supplier IS NOT NULL";
	mysqli_query($conn,$sqlse9);
	$n_rowsse9 = mysqli_affected_rows($conn);

$sqlsf9 = "SELECT food_item from orders WHERE date = '$date' AND location = 'a' AND food_item = 'special_f' AND supplier IS NOT NULL";
	mysqli_query($conn,$sqlsf9);
	$n_rowssf9 = mysqli_affected_rows($conn);




//print

$sqlrc10 = "SELECT food_item from orders WHERE date = '$date' AND location = 'p' AND food_item = 'red chicken' AND supplier IS NOT NULL";
	mysqli_query($conn,$sqlrc10);
	$n_rowsrc10 = mysqli_affected_rows($conn);	

$sqlwc10 = "SELECT food_item from orders WHERE date = '$date' AND location = 'p' AND food_item = 'white chicken' AND supplier IS NOT NULL";
	mysqli_query($conn,$sqlwc10);
	$n_rowswc10 = mysqli_affected_rows($conn);

$sqlrf10 = "SELECT food_item from orders WHERE date = '$date' AND location = 'p' AND food_item = 'red fish' AND supplier IS NOT NULL";
	mysqli_query($conn,$sqlrf10);
	$n_rowsrf10 = mysqli_affected_rows($conn);

$sqlwf10 = "SELECT food_item from orders WHERE date = '$date' AND location = 'p' AND food_item = 'white fish' AND supplier IS NOT NULL";
	mysqli_query($conn,$sqlwf10);
	$n_rowswf10 = mysqli_affected_rows($conn);

$sqlre10 = "SELECT food_item from orders WHERE date = '$date' AND location = 'p' AND food_item = 'red egg' AND supplier IS NOT NULL";
	mysqli_query($conn,$sqlre10);
	$n_rowsre10 = mysqli_affected_rows($conn);

$sqlwe10 = "SELECT food_item from orders WHERE date = '$date' AND location = 'p' AND food_item = 'white egg' AND supplier IS NOT NULL";
	mysqli_query($conn,$sqlwe10);
	$n_rowswe10 = mysqli_affected_rows($conn);

$sqlroml10 = "SELECT food_item from orders WHERE date = '$date' AND location = 'p' AND food_item = 'red omellete' AND supplier IS NOT NULL";
	mysqli_query($conn,$sqlroml10);
	$n_rowsroml10 = mysqli_affected_rows($conn);

$sqlwoml10 = "SELECT food_item from orders WHERE date = '$date' AND location = 'p' AND food_item = 'white omellete' AND supplier IS NOT NULL";
	mysqli_query($conn,$sqlwoml10);
	$n_rowswoml10 = mysqli_affected_rows($conn);

$sqlrv10 = "SELECT food_item from orders WHERE date = '$date' AND location = 'p' AND food_item = 'red vegi' AND supplier IS NOT NULL";
	mysqli_query($conn,$sqlrv10);
	$n_rowsrv10 = mysqli_affected_rows($conn);

$sqlwv10 = "SELECT food_item from orders WHERE date = '$date' AND location = 'p' AND food_item = 'white vegi' AND supplier IS NOT NULL";
	mysqli_query($conn,$sqlwv10);
	$n_rowswv10 = mysqli_affected_rows($conn);

$sqlsc10 = "SELECT food_item from orders WHERE date = '$date' AND location = 'p' AND food_item = 'special_c' AND supplier IS NOT NULL";
	mysqli_query($conn,$sqlsc10);
	$n_rowssc10 = mysqli_affected_rows($conn);

$sqlsv10 = "SELECT food_item from orders WHERE date = '$date' AND location = 'p' AND food_item = 'special_v' AND supplier IS NOT NULL";
	mysqli_query($conn,$sqlsv10);
	$n_rowssv10 = mysqli_affected_rows($conn);

$sqlse10 = "SELECT food_item from orders WHERE date = '$date' AND location = 'p' AND food_item = 'special_e' AND supplier IS NOT NULL";
	mysqli_query($conn,$sqlse10);
	$n_rowsse10 = mysqli_affected_rows($conn);

$sqlsf10 = "SELECT food_item from orders WHERE date = '$date' AND location = 'p' AND food_item = 'special_f' AND supplier IS NOT NULL";
	mysqli_query($conn,$sqlsf10);
	$n_rowssf10 = mysqli_affected_rows($conn);




//store

$sqlrc11 = "SELECT food_item from orders WHERE date = '$date' AND location = 's' AND food_item = 'red chicken' AND supplier IS NOT NULL";
	mysqli_query($conn,$sqlrc11);
	$n_rowsrc11 = mysqli_affected_rows($conn);	

$sqlwc11 = "SELECT food_item from orders WHERE date = '$date' AND location = 's' AND food_item = 'white chicken' AND supplier IS NOT NULL";
	mysqli_query($conn,$sqlwc11);
	$n_rowswc11 = mysqli_affected_rows($conn);

$sqlrf11 = "SELECT food_item from orders WHERE date = '$date' AND location = 's' AND food_item = 'red fish' AND supplier IS NOT NULL";
	mysqli_query($conn,$sqlrf11);
	$n_rowsrf11 = mysqli_affected_rows($conn);

$sqlwf11 = "SELECT food_item from orders WHERE date = '$date' AND location = 'S' AND food_item = 'white fish' AND supplier IS NOT NULL";
	mysqli_query($conn,$sqlwf11);
	$n_rowswf11 = mysqli_affected_rows($conn);

$sqlre11 = "SELECT food_item from orders WHERE date = '$date' AND location = 's' AND food_item = 'red egg' AND supplier IS NOT NULL";
	mysqli_query($conn,$sqlre11);
	$n_rowsre11 = mysqli_affected_rows($conn);

$sqlwe11 = "SELECT food_item from orders WHERE date = '$date' AND location = 's' AND food_item = 'white egg' AND supplier IS NOT NULL";
	mysqli_query($conn,$sqlwe11);
	$n_rowswe11 = mysqli_affected_rows($conn);

$sqlroml11 = "SELECT food_item from orders WHERE date = '$date' AND location = 's' AND food_item = 'red omellete' AND supplier IS NOT NULL";
	mysqli_query($conn,$sqlroml11);
	$n_rowsroml11 = mysqli_affected_rows($conn);

$sqlwoml11 = "SELECT food_item from orders WHERE date = '$date' AND location = 's' AND food_item = 'white omellete' AND supplier IS NOT NULL";
	mysqli_query($conn,$sqlwoml11);
	$n_rowswoml11 = mysqli_affected_rows($conn);

$sqlrv11 = "SELECT food_item from orders WHERE date = '$date' AND location = 's' AND food_item = 'red vegi' AND supplier IS NOT NULL";
	mysqli_query($conn,$sqlrv11);
	$n_rowsrv11 = mysqli_affected_rows($conn);

$sqlwv11 = "SELECT food_item from orders WHERE date = '$date' AND location = 's' AND food_item = 'white vegi' AND supplier IS NOT NULL";
	mysqli_query($conn,$sqlwv11);
	$n_rowswv11 = mysqli_affected_rows($conn);

$sqlsc11 = "SELECT food_item from orders WHERE date = '$date' AND location = 's' AND food_item = 'special_c' AND supplier IS NOT NULL";
	mysqli_query($conn,$sqlsc11);
	$n_rowssc11 = mysqli_affected_rows($conn);

$sqlsv11 = "SELECT food_item from orders WHERE date = '$date' AND location = 's' AND food_item = 'special_v' AND supplier IS NOT NULL";
	mysqli_query($conn,$sqlsv11);
	$n_rowssv11 = mysqli_affected_rows($conn);

$sqlse11 = "SELECT food_item from orders WHERE date = '$date' AND location = 's' AND food_item = 'special_e' AND supplier IS NOT NULL";
	mysqli_query($conn,$sqlse11);
	$n_rowsse11 = mysqli_affected_rows($conn);

$sqlsf11 = "SELECT food_item from orders WHERE date = '$date' AND location = 's' AND food_item = 'special_f' AND supplier IS NOT NULL";
	mysqli_query($conn,$sqlsf11);
	$n_rowssf11 = mysqli_affected_rows($conn);
	





		
		
		

mysqli_close($conn);

	
	?>
<br><br>
<div id="main_topic" class="col-lg-12 col-md-12 col-sm-12" >Delevery Points</div><br>
	

						  <table>
							  
							  <thead>
								  
						  	<tr>
							<th>FOOD ITEM</th>&nbsp;&nbsp;&nbsp;&nbsp;
							  <th>SOC</th>&nbsp;&nbsp;&nbsp;&nbsp;
								<th>SOB</th>&nbsp;&nbsp;&nbsp;&nbsp;
								<th>SOE</th>&nbsp;&nbsp;&nbsp;&nbsp;
								<th>ADMIN</th>&nbsp;&nbsp;&nbsp;&nbsp;
								<th>RECREATIONAL</th>&nbsp;&nbsp;&nbsp;&nbsp;
								<th>MAINTENANCE</th>&nbsp;&nbsp;&nbsp;&nbsp;
								<th>MEDICAL</th>&nbsp;&nbsp;&nbsp;&nbsp;
								<th>LRBRARY</th>&nbsp;&nbsp;&nbsp;&nbsp;
								<th>AUDITORIUM</th>&nbsp;&nbsp;&nbsp;&nbsp;
								<th>PRINTING</th>&nbsp;&nbsp;&nbsp;&nbsp;
								<th>STORES</th>&nbsp;&nbsp;&nbsp;&nbsp;
								
								
								
							  </tr>
						</thead>
							  <tbody> 
								  
								  
								  <?php
	
	
	
	
	echo "<tr><td>RED CHICKEN</td><td>".$n_rowsrc1." </td><td>".$n_rowsrc2." </td><td>".$n_rowsrc3." </td><td>".$n_rowsrc4." </td><td>".$n_rowsrc5." </td><td>".$n_rowsrc6." </td><td>".$n_rowsrc7." </td><td>".$n_rowsrc8." </td><td>".$n_rowsrc9." </td><td>".$n_rowsrc10." </td><td>".$n_rowsrc11." </td></tr>";
								  
	echo "<tr><td>WHITE CHICKEN</td><td>".$n_rowswc1." </td><td>".$n_rowswc2." </td><td>".$n_rowswc3." </td><td>".$n_rowswc4." </td><td>".$n_rowswc5." </td><td>".$n_rowswc6." </td><td>".$n_rowswc7." </td><td>".$n_rowswc8." </td><td>".$n_rowswc9." </td><td>".$n_rowswc10." </td><td>".$n_rowswc11." </td></tr>";
								  
								  
								  
	echo "<tr><td>RED FISH</td><td>".$n_rowsrf1." </td><td>".$n_rowsrf2." </td><td>".$n_rowsrf3." </td><td>".$n_rowsrf4." </td><td>".$n_rowsrf5." </td><td>".$n_rowsrf6." </td><td>".$n_rowsrf7." </td><td>".$n_rowsrf8." </td><td>".$n_rowsrf9." </td><td>".$n_rowsrf10." </td><td>".$n_rowsrf11." </td></tr>";
								
	echo "<tr><td>WHITE FISH</td><td>".$n_rowswf1." </td><td>".$n_rowswf2." </td><td>".$n_rowswf3." </td><td>".$n_rowswf4." </td><td>".$n_rowswf5." </td><td>".$n_rowswf6." </td><td>".$n_rowswf7." </td><td>".$n_rowswf8." </td><td>".$n_rowswf9." </td><td>".$n_rowswf10." </td><td>".$n_rowswf11." </td></tr>";							  
	
								  
								  
	echo "<tr><td>RED EGG</td><td>".$n_rowsre1." </td><td>".$n_rowsre2." </td><td>".$n_rowsre3." </td><td>".$n_rowsre4." </td><td>".$n_rowsre5." </td><td>".$n_rowsre6." </td><td>".$n_rowsre7." </td><td>".$n_rowsre8." </td><td>".$n_rowsre9." </td><td>".$n_rowsre10." </td><td>".$n_rowsre11." </td></tr>";							  
	
	echo "<tr><td>WHITE EGG</td><td>".$n_rowswe1." </td><td>".$n_rowswe2." </td><td>".$n_rowswe3." </td><td>".$n_rowswe4." </td><td>".$n_rowswe5." </td><td>".$n_rowswe6." </td><td>".$n_rowswe7." </td><td>".$n_rowswe8." </td><td>".$n_rowswe9." </td><td>".$n_rowswe10." </td><td>".$n_rowswe11." </td></tr>";							  
								  
	echo "<tr><td>RED OMELLETE</td><td>".$n_rowsroml1." </td><td>".$n_rowsroml2." </td><td>".$n_rowsroml3." </td><td>".$n_rowsroml4." </td><td>".$n_rowsroml5." </td><td>".$n_rowsroml6." </td><td>".$n_rowsroml7." </td><td>".$n_rowsroml8." </td><td>".$n_rowsroml9." </td><td>".$n_rowsroml10." </td><td>".$n_rowsroml11." </td></tr>";
								  
								  
	echo "<tr><td>RED VEGI</td><td>".$n_rowsrv1." </td><td>".$n_rowsrv2." </td><td>".$n_rowsrv3." </td><td>".$n_rowsrv4." </td><td>".$n_rowsrv5." </td><td>".$n_rowsrv6." </td><td>".$n_rowsrv7." </td><td>".$n_rowsrv8." </td><td>".$n_rowsrv9." </td><td>".$n_rowsrv10." </td><td>".$n_rowsrv11." </td></tr>";
								  
								  
	echo "<tr><td>WHITE VEGI</td><td>".$n_rowswv1." </td><td>".$n_rowswv2." </td><td>".$n_rowswv3." </td><td>".$n_rowswv4." </td><td>".$n_rowswv5." </td><td>".$n_rowswv6." </td><td>".$n_rowswv7." </td><td>".$n_rowswv8." </td><td>".$n_rowswv9." </td><td>".$n_rowswv10." </td><td>".$n_rowswv11." </td></tr>";
								  
								  
	echo "<tr><td>SPECIAL CHICKEN</td><td>".$n_rowssc1." </td><td>".$n_rowssc2." </td><td>".$n_rowssc3." </td><td>".$n_rowssc4." </td><td>".$n_rowssc5." </td><td>".$n_rowssc6." </td><td>".$n_rowssc7." </td><td>".$n_rowssc8." </td><td>".$n_rowssc9." </td><td>".$n_rowssc10." </td><td>".$n_rowssc11." </td></tr>";
								  
	echo "<tr><td>SPECIAL VEGI</td><td>".$n_rowssv1." </td><td>".$n_rowssv2." </td><td>".$n_rowssv3." </td><td>".$n_rowssv4." </td><td>".$n_rowssv5." </td><td>".$n_rowssv6." </td><td>".$n_rowssv7." </td><td>".$n_rowssv8." </td><td>".$n_rowssv9." </td><td>".$n_rowssv10." </td><td>".$n_rowssv11." </td></tr>";
								  
	echo "<tr><td>SPECIAL EGG</td><td>".$n_rowsse1." </td><td>".$n_rowsse2." </td><td>".$n_rowsse3." </td><td>".$n_rowsse4." </td><td>".$n_rowsse5." </td><td>".$n_rowsse6." </td><td>".$n_rowsse7." </td><td>".$n_rowsse8." </td><td>".$n_rowsse9." </td><td>".$n_rowsse10." </td><td>".$n_rowsse11." </td></tr>";
								  
	echo "<tr><td>SPECIAL FISH</td><td>".$n_rowssf1." </td><td>".$n_rowssf2." </td><td>".$n_rowssf3." </td><td>".$n_rowssf4." </td><td>".$n_rowssf5." </td><td>".$n_rowssf6." </td><td>".$n_rowssf7." </td><td>".$n_rowssf8." </td><td>".$n_rowssf9." </td><td>".$n_rowssf10." </td><td>".$n_rowssf11." </td></tr>";
								  
				  
	

	
	?>
							</tbody>
							  </table>

</div>

	<br>
	<hr></hr>

	

</body>
</html>