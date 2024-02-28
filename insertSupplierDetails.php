<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	
	<?php
	
	if(isset($_POST['insert_supplier'])){
		
	$values = $_POST['insert_supplier'];
	$name = $values["supplier_name"];
		$sup_ID = $values["supplier_id"];
	$tel = $values["supplier_tel"];
	$add = $values["supplier_add"];
		
		
		
			
			$conn = mysqli_connect( "localhost", "food", "nsbm", "nsbmfood" );
	if(mysqli_connect_errno()){
		echo "Failed to connect to the database.".mysqli_connect_error();
	}
		
		
		
				$select = "select * from supplier where supplier_id = '$sup_ID'";
		mysqli_query($conn,$select);
		$num = mysqli_affected_rows($conn);
		
		//echo '<script type="text/javascript">alert(" '.$id.' database.");</script>';
	
	$sql = "INSERT INTO supplier(supplier_id,s_name,s_add,s_mobile) VALUES ('$sup_ID','$name','$add','$tel')";
	
	//echo "name ",$id;
	//return false;
	if($num < 1){
		if(mysqli_query($conn,$sql)) //output success or failure messages
        { 
                 echo '<script type="text/javascript">alert("SUCCESSFULLY INSERTED ONE RECORD");window.location.assign("EditSupplier.php");</script>';
        }else
       {
               echo '<script type="text/javascript">alert("error");window.location.assign("EditSupplier.php");</script>';
        }
	}
		else{
			echo '<script type="text/javascript">alert("EPF number : '.$sup_ID.' is available inside the database.");window.location.assign("EditSupplier.php");</script>';
		}
		

	mysqli_close($conn);
		
		
	}
	
	
	
	if(isset($_POST['delete_supplier'])){
		
	$values2 = $_POST['delete_supplier'];
		$name = $values2['delete'];
		
		
		$conn = mysqli_connect( "localhost", "food", "nsbm", "nsbmfood" );
	if(mysqli_connect_errno()){
		echo "Failed to connect to the database.".mysqli_connect_error();
	}
	
	$sql = "DELETE FROM supplier WHERE s_name = '$name'";
	
	//echo "name ",$id;
	//return false;
	
	if(mysqli_query($conn,$sql)) //output success or failure messages
        { 
                 echo '<script type="text/javascript">alert("SUCCESSFULLY DELETED ONE RECORD");window.location.assign("EditSupplier.php");</script>';
        }else
       {
               echo '<script type="text/javascript">alert("error");window.location.assign("EditSupplier.php");</script>';
        }
	
	mysqli_close($conn);
		
		
		
	}
	
		
	
	if(isset($_POST['userUpdate1'])){
		
	$values = $_POST['userUpdate1'];
	//$id = $values["user_id"];
	$id = $values["user_update_name"];
	$name = $values["user_name"];
	
			$conn = mysqli_connect( "localhost", "food", "nsbm", "nsbmfood" );
	if(mysqli_connect_errno()){
		echo "Failed to connect to the database.".mysqli_connect_error();
	}
		
		$update = "UPDATE supplier SET s_name = '$name' where s_name = '$id'";

		if(mysqli_query($conn,$update)) //output success or failure messages
        { 
                 echo '<script type="text/javascript">alert("SUCCESSFULLY UPDATED ONE RECORD");window.location.assign("EditSupplier.php");</script>';
        }else
       {
               echo '<script type="text/javascript">alert("error");window.location.assign("EditSupplier.php");</script>';
        }
	
	
	mysqli_close($conn);
	
   
}
	
	
	
		
		
	
	
   

	

	

	
	?>
	
	
	
</body>
</html>