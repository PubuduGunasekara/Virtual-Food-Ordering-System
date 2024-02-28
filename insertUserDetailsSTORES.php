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
		$id_string = $values["user_id_string"];
	$name = $values["user_name"];
	$tel = $values["user_tel"];
		
		
	if($id_string == 'TEMP-'){
		$id ="TEMP-".$id;
	}
		else if($id_string == 'NEW-'){
		$id ="NEW-".$id;
	}
	else if($id_string==""){
		$id = $id;
	}
	
		
	

		
			$conn = mysqli_connect("localhost","food","nsbm","nsbmfood");
	if(mysqli_connect_errno()){
		echo "Failed to connect to the database.".mysqli_connect_error();
	}
	
	$sql = "INSERT INTO staff_member_STORE(nsbm_id,name,tel) VALUES ('$id','$name','$tel')";
	
	//echo "name ",$id;
	//return false;
	
	if(mysqli_query($conn,$sql)) //output success or failure messages
        { 
                 //echo '<script type="text/javascript">alert("SUCCESSFULLY INSERTED ONE RECORD");window.location.assign("EditSTORE.php");</script>';
        }else
       {
               echo '<script type="text/javascript">alert("error");window.location.assign("EditSTORE.php");</script>';
        }
	
	mysqli_close($conn);
	
   
}
	
	
	if(isset($_POST['userDelete'])){
		
	$values2 = $_POST['userDelete'];
		$name = $values2['user_delete'];
		
		
		$conn = mysqli_connect("localhost","food","nsbm","nsbmfood");
	if(mysqli_connect_errno()){
		echo "Failed to connect to the database.".mysqli_connect_error();
	}
	
	$sql = "DELETE FROM staff_member_STORE WHERE name = '$name'";
	
			$sql2 = "DELETE FROM checking WHERE epf = '$name'";
	
	
	if(mysqli_query($conn,$sql) && mysqli_query($conn,$sql2)) //output success or failure messages
        { 
                 echo '<script type="text/javascript">alert("SUCCESSFULLY DELETED ONE RECORD");window.location.assign("EditSTORE.php");</script>';
        }else
       {
               echo '<script type="text/javascript">alert("error");window.location.assign("EditSTORE.php");</script>';
        }
	
	mysqli_close($conn);
		
		
		
	}
	
	
if(isset($_POST['userUpdate'])){
	date_default_timezone_set('Asia/colombo');
    $date = date('Y-m-d');
	
		$conn = mysqli_connect("localhost","food","nsbm","nsbmfood");
	if(mysqli_connect_errno()){
		echo "Failed to connect to the database.".mysqli_connect_error();
	}
	
	$values2 = $_POST['userUpdate'];
	$epfname = $values2['user_update_name'];
	$location = $values2['user_update_location'];
		
	if($location == 'sob'){
		
	$sql1 = "select * from Staff_member_STORE where nsbm_id = '$epfname'";
	$check1 = mysqli_query($conn,$sql1);
	if($check1 -> num_rows > 0 ){
		$s_name = '';
		$epf = '';
		while($row = $check1 -> fetch_assoc()){
			$s_name = $row['name'];
			//$epf = $row['nsbm_id'];
			$tel = $row['tel'];
				//echo "<tr><td>".$s_name."</td><td>".$epfname."</td></tr>";
			}
			
		}
	
	$sql = "DELETE FROM staff_member_STORE WHERE nsbm_id = '$epfname'";
	$sql2 = "INSERT INTO staff_member_SOB(nsbm_id,name,tel,date) values('$epfname','$s_name','$tel','$date')";
	
	//echo "name ",$id;
	//return false;
	//$check = mysqli_query($conn,$sql)
	
	if( mysqli_query($conn,$sql2) && mysqli_query($conn,$sql) ) //output success or failure messages
        { 
               //echo "<tr><td>".$s_name."</td><td>".$epf."</td></tr>";
		echo '<script type="text/javascript">alert("SUCCESSFULLY UPDATED ONE RECORD");window.location.assign("EditSTORE.php");</script>';
        }else
       {
               echo '<script type="text/javascript">alert("error");window.location.assign("EditSTORE.php");</script>';
        }
	
		
		
	}	
	
	
	
	
	if($location == 'soc'){
		
	$sql1 = "select * from Staff_member_STORE where nsbm_id = '$epfname'";
	$check1 = mysqli_query($conn,$sql1);
	if($check1 -> num_rows > 0 ){
		$s_name = '';
		$epf = '';
		while($row = $check1 -> fetch_assoc()){
			$s_name = $row['name'];
			//$epf = $row['nsbm_id'];
			$tel = $row['tel'];
				//echo "<tr><td>".$s_name."</td><td>".$epfname."</td></tr>";
			}
			
		}
	
	$sql = "DELETE FROM staff_member_STORE WHERE nsbm_id = '$epfname'";
	$sql2 = "INSERT INTO staff_member_SOC(nsbm_id,name,tel,date) values('$epfname','$s_name','$tel','$date')";
	
	//echo "name ",$id;
	//return false;
	//$check = mysqli_query($conn,$sql)
	
	if( mysqli_query($conn,$sql2) && mysqli_query($conn,$sql) ) //output success or failure messages
        { 
               //echo "<tr><td>".$s_name."</td><td>".$epf."</td></tr>";
		echo '<script type="text/javascript">alert("SUCCESSFULLY UPDATED ONE RECORD");window.location.assign("EditSTORE.php");</script>';
        }else
       {
               echo '<script type="text/javascript">alert("error");window.location.assign("EditSTORE.php");</script>';
        }
	
		
		
	}	
	
	
	
	
	if($location == 'soe'){
		
	$sql1 = "select * from Staff_member_STORE where nsbm_id = '$epfname'";
	$check1 = mysqli_query($conn,$sql1);
	if($check1 -> num_rows > 0 ){
		$s_name = '';
		$epf = '';
		while($row = $check1 -> fetch_assoc()){
			$s_name = $row['name'];
			//$epf = $row['nsbm_id'];
			$tel = $row['tel'];
				//echo "<tr><td>".$s_name."</td><td>".$epfname."</td></tr>";
			}
			
		}
	
	$sql = "DELETE FROM staff_member_STORE WHERE nsbm_id = '$epfname'";
	$sql2 = "INSERT INTO staff_member_SOE(nsbm_id,name,tel,date) values('$epfname','$s_name','$tel','$date')";
	
	//echo "name ",$id;
	//return false;
	//$check = mysqli_query($conn,$sql)
	
	if( mysqli_query($conn,$sql2) && mysqli_query($conn,$sql) ) //output success or failure messages
        { 
               //echo "<tr><td>".$s_name."</td><td>".$epf."</td></tr>";
		echo '<script type="text/javascript">alert("SUCCESSFULLY UPDATED ONE RECORD");window.location.assign("EditSTORE.php");</script>';
        }else
       {
              echo '<script type="text/javascript">alert("error");window.location.assign("EditSTORE.php");</script>';
        }
	
		
		
	}	
	
	if($location == 'maintenence'){
		
	$sql1 = "select * from Staff_member_STORE where nsbm_id = '$epfname'";
	$check1 = mysqli_query($conn,$sql1);
	if($check1 -> num_rows > 0 ){
		$s_name = '';
		$epf = '';
		while($row = $check1 -> fetch_assoc()){
			$s_name = $row['name'];
			//$epf = $row['nsbm_id'];
			$tel = $row['tel'];
				//echo "<tr><td>".$s_name."</td><td>".$epfname."</td></tr>";
			}
			
		}
	
	$sql = "DELETE FROM staff_member_STORE WHERE nsbm_id = '$epfname'";
	$sql2 = "INSERT INTO staff_member_MAINTENANCE(nsbm_id,name,tel,date) values('$epfname','$s_name','$tel','$date')";
	
	//echo "name ",$id;
	//return false;
	//$check = mysqli_query($conn,$sql)
	
	if( mysqli_query($conn,$sql2) && mysqli_query($conn,$sql) ) //output success or failure messages
        { 
               //echo "<tr><td>".$s_name."</td><td>".$epf."</td></tr>";
		echo '<script type="text/javascript">alert("SUCCESSFULLY UPDATED ONE RECORD");window.location.assign("EditSTORE.php");</script>';
        }else
       {
              echo '<script type="text/javascript">alert("error");window.location.assign("EditSTORE.php");</script>';
        }
	
		
		
	}	
	
	if($location == 'admin'){
		
	$sql1 = "select * from Staff_member_STORE where nsbm_id = '$epfname'";
	$check1 = mysqli_query($conn,$sql1);
	if($check1 -> num_rows > 0 ){
		$s_name = '';
		$epf = '';
		while($row = $check1 -> fetch_assoc()){
			$s_name = $row['name'];
			//$epf = $row['nsbm_id'];
			$tel = $row['tel'];
				//echo "<tr><td>".$s_name."</td><td>".$epfname."</td></tr>";
			}
			
		}
	
	$sql = "DELETE FROM staff_member_STORE WHERE nsbm_id = '$epfname'";
	$sql2 = "INSERT INTO staff_member_ADMIN(nsbm_id,name,tel,date) values('$epfname','$s_name','$tel','$date')";
	
	//echo "name ",$id;
	//return false;
	//$check = mysqli_query($conn,$sql)
	
	if( mysqli_query($conn,$sql2) && mysqli_query($conn,$sql) ) //output success or failure messages
        { 
               //echo "<tr><td>".$s_name."</td><td>".$epf."</td></tr>";
		echo '<script type="text/javascript">alert("SUCCESSFULLY UPDATED ONE RECORD");window.location.assign("EditSTORE.php");</script>';
        }else
       {
               echo '<script type="text/javascript">alert("error");window.location.assign("EditSTORE.php");</script>';
        }
	
		
		
	}
	
		if($location == 'medical'){
		
	$sql1 = "select * from Staff_member_STORE where nsbm_id = '$epfname'";
	$check1 = mysqli_query($conn,$sql1);
	if($check1 -> num_rows > 0 ){
		$s_name = '';
		$epf = '';
		while($row = $check1 -> fetch_assoc()){
			$s_name = $row['name'];
			//$epf = $row['nsbm_id'];
			$tel = $row['tel'];
				//echo "<tr><td>".$s_name."</td><td>".$epfname."</td></tr>";
			}
			
		}
	
	$sql = "DELETE FROM staff_member_STORE WHERE nsbm_id = '$epfname'";
	$sql2 = "INSERT INTO staff_member_MEDI(nsbm_id,name,tel,date) values('$epfname','$s_name','$tel','$date')";
	
	//echo "name ",$id;
	//return false;
	//$check = mysqli_query($conn,$sql)
	
	if( mysqli_query($conn,$sql2) && mysqli_query($conn,$sql) ) //output success or failure messages
        { 
               //echo "<tr><td>".$s_name."</td><td>".$epf."</td></tr>";
		echo '<script type="text/javascript">alert("SUCCESSFULLY UPDATED ONE RECORD");window.location.assign("EditSTORE.php");</script>';
        }else
       {
               echo '<script type="text/javascript">alert("error");window.location.assign("EditSTORE.php");</script>';
        }
	
		
		
	}	
	
	
		if($location == 'library'){
		
	$sql1 = "select * from Staff_member_STORE where nsbm_id = '$epfname'";
	$check1 = mysqli_query($conn,$sql1);
	if($check1 -> num_rows > 0 ){
		$s_name = '';
		$epf = '';
		while($row = $check1 -> fetch_assoc()){
			$s_name = $row['name'];
			//$epf = $row['nsbm_id'];
			$tel = $row['tel'];
				//echo "<tr><td>".$s_name."</td><td>".$epfname."</td></tr>";
			}
			
		}
	
	$sql = "DELETE FROM staff_member_STORE WHERE nsbm_id = '$epfname'";
	$sql2 = "INSERT INTO staff_member_LIBRARY(nsbm_id,name,tel,date) values('$epfname','$s_name','$tel','$date')";
	
	//echo "name ",$id;
	//return false;
	//$check = mysqli_query($conn,$sql)
	
	if( mysqli_query($conn,$sql2) && mysqli_query($conn,$sql) ) //output success or failure messages
        { 
               //echo "<tr><td>".$s_name."</td><td>".$epf."</td></tr>";
		echo '<script type="text/javascript">alert("SUCCESSFULLY UPDATED ONE RECORD");window.location.assign("EditSTORE.php");</script>';
        }else
       {
               echo '<script type="text/javascript">alert("error");window.location.assign("EditSTORE.php");</script>';
        }
	
		
		
	}	
	
	
	
		if($location == 'audi'){
		
	$sql1 = "select * from Staff_member_STORE where nsbm_id = '$epfname'";
	$check1 = mysqli_query($conn,$sql1);
	if($check1 -> num_rows > 0 ){
		$s_name = '';
		$epf = '';
		while($row = $check1 -> fetch_assoc()){
			$s_name = $row['name'];
			//$epf = $row['nsbm_id'];
			$tel = $row['tel'];
				//echo "<tr><td>".$s_name."</td><td>".$epfname."</td></tr>";
			}
			
		}
	
	$sql = "DELETE FROM staff_member_STORE WHERE nsbm_id = '$epfname'";
	$sql2 = "INSERT INTO staff_member_AUDI(nsbm_id,name,tel,date) values('$epfname','$s_name','$tel','$date')";
	
	//echo "name ",$id;
	//return false;
	//$check = mysqli_query($conn,$sql)
	
	if( mysqli_query($conn,$sql2) && mysqli_query($conn,$sql) ) //output success or failure messages
        { 
               //echo "<tr><td>".$s_name."</td><td>".$epf."</td></tr>";
		echo '<script type="text/javascript">alert("SUCCESSFULLY UPDATED ONE RECORD");window.location.assign("EditSTORE.php");</script>';
        }else
       {
               echo '<script type="text/javascript">alert("error");window.location.assign("EditSTORE.php");</script>';
        }
	
		
		
	}	
	
	
	
	
		if($location == 'print'){
		
	$sql1 = "select * from Staff_member_STORE where nsbm_id = '$epfname'";
	$check1 = mysqli_query($conn,$sql1);
	if($check1 -> num_rows > 0 ){
		$s_name = '';
		$epf = '';
		while($row = $check1 -> fetch_assoc()){
			$s_name = $row['name'];
			//$epf = $row['nsbm_id'];
			$tel = $row['tel'];
				//echo "<tr><td>".$s_name."</td><td>".$epfname."</td></tr>";
			}
			
		}
	
	$sql = "DELETE FROM staff_member_STORE WHERE nsbm_id = '$epfname'";
	$sql2 = "INSERT INTO staff_member_PRINT(nsbm_id,name,tel,date) values('$epfname','$s_name','$tel','$date')";
	
	//echo "name ",$id;
	//return false;
	//$check = mysqli_query($conn,$sql)
	
	if( mysqli_query($conn,$sql2) && mysqli_query($conn,$sql) ) //output success or failure messages
        { 
               //echo "<tr><td>".$s_name."</td><td>".$epf."</td></tr>";
		echo '<script type="text/javascript">alert("SUCCESSFULLY UPDATED ONE RECORD");window.location.assign("EditSTORE.php");</script>';
        }else
       {
               echo '<script type="text/javascript">alert("error");window.location.assign("EditSTORE.php");</script>';
        }
	
		
		
	}	
	
	
	
	
		if($location == 'store'){
		
	$sql1 = "select * from Staff_member_STORE where nsbm_id = '$epfname'";
	$check1 = mysqli_query($conn,$sql1);
	if($check1 -> num_rows > 0 ){
		$s_name = '';
		$epf = '';
		while($row = $check1 -> fetch_assoc()){
			$s_name = $row['name'];
			//$epf = $row['nsbm_id'];
			$tel = $row['tel'];
				//echo "<tr><td>".$s_name."</td><td>".$epfname."</td></tr>";
			}
			
		}
	
	$sql = "DELETE FROM staff_member_STORE WHERE nsbm_id = '$epfname'";
	$sql2 = "INSERT INTO staff_member_STORE(nsbm_id,name,tel,date) values('$epfname','$s_name','$tel','$date')";
	
	//echo "name ",$id;
	//return false;
	//$check = mysqli_query($conn,$sql)
	
	if( mysqli_query($conn,$sql2) && mysqli_query($conn,$sql) ) //output success or failure messages
        { 
               //echo "<tr><td>".$s_name."</td><td>".$epf."</td></tr>";
		echo '<script type="text/javascript">alert("SUCCESSFULLY UPDATED ONE RECORD");window.location.assign("EditSTORE.php");</script>';
        }else
       {
               echo '<script type="text/javascript">alert("error");window.location.assign("EditSTORE.php");</script>';
        }
	
		
		
	}	
	
	
	
	
		if($location == 'rec'){
		
	$sql1 = "select * from Staff_member_STORE where nsbm_id = '$epfname'";
	$check1 = mysqli_query($conn,$sql1);
	if($check1 -> num_rows > 0 ){
		$s_name = '';
		$epf = '';
		while($row = $check1 -> fetch_assoc()){
			$s_name = $row['name'];
			//$epf = $row['nsbm_id'];
			$tel = $row['tel'];
				//echo "<tr><td>".$s_name."</td><td>".$epfname."</td></tr>";
			}
			
		}
	
	$sql = "DELETE FROM staff_member_STORE WHERE nsbm_id = '$epfname'";
	$sql2 = "INSERT INTO staff_member_REC(nsbm_id,name,tel,date) values('$epfname','$s_name','$tel','$date')";
	
	//echo "name ",$id;
	//return false;
	//$check = mysqli_query($conn,$sql)
	
	if( mysqli_query($conn,$sql2) && mysqli_query($conn,$sql) ) //output success or failure messages
        { 
               //echo "<tr><td>".$s_name."</td><td>".$epf."</td></tr>";
		echo '<script type="text/javascript">alert("SUCCESSFULLY UPDATED ONE RECORD");window.location.assign("EditSTORE.php");</script>';
        }else
       {
               echo '<script type="text/javascript">alert("error");window.location.assign("EditSTORE.php");</script>';
        }
	
		
		
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
		
		$update = "UPDATE staff_member_STORE SET name = '$name' where nsbm_id = '$id'";

		if(mysqli_query($conn,$update)) //output success or failure messages
        { 
                 echo '<script type="text/javascript">alert("SUCCESSFULLY UPDATED ONE RECORD");window.location.assign("EditSTORE.php");</script>';
        }else
       {
               echo '<script type="text/javascript">alert("error");window.location.assign("EditSTORE.php");</script>';
        }
	
	
	mysqli_close($conn);
	
   
}
	
	

	

	
	?>
	
	
	
</body>
</html>