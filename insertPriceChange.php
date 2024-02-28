<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	
	<?php
	
	if(isset($_POST['priceChange'])){
		
	$values = $_POST['priceChange'];
	$item = $values["item"];
	$price = $values["price"];

		
		
		
		$conn = mysqli_connect( "localhost", "food", "nsbm", "nsbmfood" );
	if(mysqli_connect_errno()){
		echo "Failed to connect to the database.".mysqli_connect_error();
	}
		$check = "SELECT * FROM prices";
		$count1 = mysqli_query($conn,$check);
		$num = mysqli_affected_rows($conn);
		if(mysqli_num_rows($count1) < 0){
			$sql = "INSERT INTO prices ($item) VALUES ('$price')";
	
	//echo "name ",$id;
	//return false;
	
		if(mysqli_query($conn,$sql)) //output success or failure messages
        { 
                 echo '<script type="text/javascript">alert("SUCCESSFULLY INSERTED ONE RECORD");window.location.assign("priceChange.php");</script>';
        }else
       {
              echo '<script type="text/javascript">alert("error");window.location.assign("priceChange.php");</script>';
        }
	}
		else{
			
			
			$sql = "UPDATE prices SET $item = '$price'";
	
	//echo "name ",$id;
	//return false;
	
		if(mysqli_query($conn,$sql)) //output success or failure messages
        { 
                 echo '<script type="text/javascript">alert("SUCCESSFULLY UPDATED");window.location.assign("priceChange.php");</script>';
        }else
       {
               echo '<script type="text/javascript">alert("error");window.location.assign("priceChange.php");</script>';
        }
			
			
		}
	

	
	mysqli_close($conn);
	
   
}
	
	
	
	if(isset($_POST['priceChangeStaff'])){
		
	$values2 = $_POST['priceChangeStaff'];
	
	$price = $values2["price1"];
	
	
	
	
		
	
		
		
		
			$conn = mysqli_connect( "localhost", "food", "nsbm", "nsbmfood" );
	if(mysqli_connect_errno()){
		echo "Failed to connect to the database.".mysqli_connect_error();
	}
		$check = "SELECT * FROM deductprice";
		$count = mysqli_query($conn,$check);
		$num = mysqli_affected_rows($conn);
		if(mysqli_num_rows($count) < 0){
			$sql = "INSERT INTO deductprice (price) VALUES ('$price')";
	
	//echo "name ",$id;
	//return false;
	
		if(mysqli_query($conn,$sql)) //output success or failure messages
        { 
                 echo '<script type="text/javascript">alert("SUCCESSFULLY INSERTED ONE RECORD");window.location.assign("priceChange.php");</script>';
        }else
       {
               echo '<script type="text/javascript">alert("INSERT error");window.location.assign("priceChange.php");</script>';
        }
	}
		else{
			
			
			$sql = "UPDATE deductprice SET price = '$price'";
	
	//echo "name ",$id;
	//return false;
	
		if(mysqli_query($conn,$sql)) //output success or failure messages
        { 
                echo '<script type="text/javascript">alert("SUCCESSFULLY UPDATED");window.location.assign("priceChange.php");</script>';
        }else
       {
              echo '<script type="text/javascript">alert("UPDATE error");window.location.assign("priceChange.php");</script>';
        }
			
			
		}
	

	
	mysqli_close($conn);
	
   
}
	
	
		
	

	
	?>
	
	
	
</body>
</html>