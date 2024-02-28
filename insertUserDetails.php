<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	
	<?php
	
	if(isset($_POST['userInsert'])){
		
	$values = $_POST['userInsert'];
	$id = $values["user_id"];
	$name = $values["user_name"];
	$tel = $values["user_tel"];
		
		
	}
	
		
	
		
		
		
			$conn = mysqli_connect( "localhost", "food", "nsbm", "nsbmfood" );
	if(mysqli_connect_errno()){
		echo "Failed to connect to the database.".mysqli_connect_error();
	}
	
	$sql = "INSERT INTO staff_member_soc (nsbm_id,name,tel) VALUES ('$id','$name','$tel')";
	
	//echo "name ",$id;
	//return false;
	
	if(mysqli_query($conn,$sql)) //output success or failure messages
        { 
                 echo '<script type="text/javascript">alert("Thanks for your interest. Your Resume has been sent to HR@prominData.com");window.location.assign("EditUserP2.html");</script>';
        }else
       {
               echo '<script type="text/javascript">alert("error");window.location.assign("EditUserP2.html");</script>';
        }
	
	mysqli_close($conn);
	
   

	

	

	
	?>
	
	
	
</body>
</html>