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
		
		
	
	
		
	
		
		
		
			$conn = mysqli_connect("localhost","root","","nsbmfood");
	if(mysqli_connect_errno()){
		echo "Failed to connect to the database.".mysqli_connect_error();
	}
	
	$sql = "INSERT INTO staff_member_Marketing(nsbm_id,name,tel) VALUES ('$id','$name','$tel')";
	
	//echo "name ",$id;
	//return false;
	
	if(mysqli_query($conn,$sql)) //output success or failure messages
        { 
                 echo '<script type="text/javascript">alert("SUCCESSFULLY INSERTED ONE RECORD");window.location.assign("EditMarketing.php");</script>';
        }else
       {
               echo '<script type="text/javascript">alert("error");window.location.assign("EditMarketing.php");</script>';
        }
	
	mysqli_close($conn);
	
	}
	
	
	if(isset($_POST['userDelete'])){
		
	$values2 = $_POST['userDelete'];
		$name = $values2['user_delete'];
		
		
		$conn = mysqli_connect("localhost","root","","nsbmfood");
	if(mysqli_connect_errno()){
		echo "Failed to connect to the database.".mysqli_connect_error();
	}
	
	$sql = "DELETE FROM staff_member_Marketing WHERE name = '$name'";
	
	//echo "name ",$id;
	//return false;
	
	if(mysqli_query($conn,$sql)) //output success or failure messages
        { 
                 echo '<script type="text/javascript">alert("SUCCESSFULLY DELETED ONE RECORD");window.location.assign("EditMarketing.php");</script>';
        }else
       {
               echo '<script type="text/javascript">alert("error");window.location.assign("EditMarketing.php");</script>';
        }
	
	mysqli_close($conn);
		
		
		
	}

	
	
	if(isset($_POST['userUpdate'])){
	date_default_timezone_set('Asia/colombo');
    $date = date('Y-m-d');
	
		$conn = mysqli_connect("localhost","root","","nsbmfood");
	if(mysqli_connect_errno()){
		echo "Failed to connect to the database.".mysqli_connect_error();
	}
	
	$values2 = $_POST['userUpdate'];
	$epfname = $values2['user_update_name'];
	$location = $values2['user_update_location'];
		
	if($location == 'sob'){
		
	$sql1 = "select * from Staff_member_MARKETING where nsbm_id = '$epfname'";
	$check1 = mysqli_query($conn,$sql1);
	if($check1 -> num_rows > 0 ){
		$s_name = '';
		$epf = '';
		while($row = $check1 -> fetch_assoc()){
			$s_name = $row['name'];
			//$epf = $row['nsbm_id'];
			$tel = $row['tel'];
				echo "<tr><td>".$s_name."</td><td>".$epfname."</td></tr>";
			}
			
		}
	
	$sql = "DELETE FROM staff_member_MARKETING WHERE nsbm_id = '$epfname'";
	$sql2 = "INSERT INTO staff_member_SOB(nsbm_id,name,tel,date) values('$epfname','$s_name','$tel','$date')";
	
	//echo "name ",$id;
	//return false;
	//$check = mysqli_query($conn,$sql)
	
	if( mysqli_query($conn,$sql2) && mysqli_query($conn,$sql) ) //output success or failure messages
        { 
               //echo "<tr><td>".$s_name."</td><td>".$epf."</td></tr>";
		echo '<script type="text/javascript">alert("SUCCESSFULLY UPDATED ONE RECORD");window.location.assign("EditSOC.php");</script>';
        }else
       {
               echo '<script type="text/javascript">alert("error");window.location.assign("EditSOC.php");</script>';
        }
	
		
		
	}	
	
	if($location == 'soe'){
		
	$sql1 = "select * from Staff_member_MARKETING where nsbm_id = '$epfname'";
	$check1 = mysqli_query($conn,$sql1);
	if($check1 -> num_rows > 0 ){
		$s_name = '';
		$epf = '';
		while($row = $check1 -> fetch_assoc()){
			$s_name = $row['name'];
			//$epf = $row['nsbm_id'];
			$tel = $row['tel'];
				echo "<tr><td>".$s_name."</td><td>".$epfname."</td></tr>";
			}
			
		}
	
	$sql = "DELETE FROM staff_member_MARKETING WHERE nsbm_id = '$epfname'";
	$sql2 = "INSERT INTO staff_member_SOE(nsbm_id,name,tel,date) values('$epfname','$s_name','$tel','$date')";
	
	//echo "name ",$id;
	//return false;
	//$check = mysqli_query($conn,$sql)
	
	if( mysqli_query($conn,$sql2) && mysqli_query($conn,$sql) ) //output success or failure messages
        { 
               //echo "<tr><td>".$s_name."</td><td>".$epf."</td></tr>";
		echo '<script type="text/javascript">alert("SUCCESSFULLY UPDATED ONE RECORD");window.location.assign("EditSOC.php");</script>';
        }else
       {
               echo '<script type="text/javascript">alert("error");window.location.assign("EditSOC.php");</script>';
        }
	
		
		
	}	
	
	if($location == 'maintenence'){
		
	$sql1 = "select * from Staff_member_MARKETING where nsbm_id = '$epfname'";
	$check1 = mysqli_query($conn,$sql1);
	if($check1 -> num_rows > 0 ){
		$s_name = '';
		$epf = '';
		while($row = $check1 -> fetch_assoc()){
			$s_name = $row['name'];
			//$epf = $row['nsbm_id'];
			$tel = $row['tel'];
				echo "<tr><td>".$s_name."</td><td>".$epfname."</td></tr>";
			}
			
		}
	
	$sql = "DELETE FROM staff_member_SOC MARKETING nsbm_id = '$epfname'";
	$sql2 = "INSERT INTO staff_member_MAINTENANCE(nsbm_id,name,tel,date) values('$epfname','$s_name','$tel','$date')";
	
	//echo "name ",$id;
	//return false;
	//$check = mysqli_query($conn,$sql)
	
	if( mysqli_query($conn,$sql2) && mysqli_query($conn,$sql) ) //output success or failure messages
        { 
               //echo "<tr><td>".$s_name."</td><td>".$epf."</td></tr>";
		echo '<script type="text/javascript">alert("SUCCESSFULLY UPDATED ONE RECORD");window.location.assign("EditSOC.php");</script>';
        }else
       {
              echo '<script type="text/javascript">alert("error");window.location.assign("EditSOC.php");</script>';
        }
	
		
		
	}	
	
	if($location == 'soc'){
		
	$sql1 = "select * from Staff_member_MARKETING where nsbm_id = '$epfname'";
	$check1 = mysqli_query($conn,$sql1);
	if($check1 -> num_rows > 0 ){
		$s_name = '';
		$epf = '';
		while($row = $check1 -> fetch_assoc()){
			$s_name = $row['name'];
			//$epf = $row['nsbm_id'];
			$tel = $row['tel'];
				echo "<tr><td>".$s_name."</td><td>".$epfname."</td></tr>";
			}
			
		}
	
	$sql = "DELETE FROM staff_member_MARKETING WHERE nsbm_id = '$epfname'";
	$sql2 = "INSERT INTO staff_member_SOC(nsbm_id,name,tel,date) values('$epfname','$s_name','$tel','$date')";
	
	//echo "name ",$id;
	//return false;
	//$check = mysqli_query($conn,$sql)
	
	if( mysqli_query($conn,$sql2) && mysqli_query($conn,$sql) ) //output success or failure messages
        { 
               //echo "<tr><td>".$s_name."</td><td>".$epf."</td></tr>";
		echo '<script type="text/javascript">alert("SUCCESSFULLY UPDATED ONE RECORD");window.location.assign("EditSOC.php");</script>';
        }else
       {
              echo '<script type="text/javascript">alert("error");window.location.assign("EditSOC.php");</script>';
        }
	
		
		
	}	
	
	
	
	
	mysqli_close($conn);
		
		
		
	}
	


	

	
	?>
	
	
	
</body>
</html>