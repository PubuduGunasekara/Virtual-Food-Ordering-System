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
		
		
				
			$select = "select * from checking where epf = '$id'";
		mysqli_query($conn,$select);
		$num = mysqli_affected_rows($conn);
		
		//echo '<script type="text/javascript">alert(" '.$id.' database.");</script>';
	
	$sql = "INSERT INTO staff_member_soc (nsbm_id,name,tel) VALUES ('$id','$name','$tel')";
	$sql0 = "INSERT INTO checking(epf) VALUES ('$id')";
	//echo "name ",$id;
	//return false;
	if($num < 1){
		if(mysqli_query($conn,$sql) && mysqli_query($conn,$sql0)) //output success or failure messages
        { 
                 echo '<script type="text/javascript">alert("SUCCESSFULLY INSERTED ONE RECORD");window.location.assign("EditSOC.php");</script>';
        }else
       {
               echo '<script type="text/javascript">alert("error inserting");window.location.assign("EditSOC.php");</script>';
        }
	}
		else{
			echo '<script type="text/javascript">alert("EPF number : '.$id.' is available inside the database.");window.location.assign("EditSOC.php");</script>';
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
	
	$sql = "DELETE FROM staff_member_soc WHERE nsbm_id = '$name'";
	
			$sql2 = "DELETE FROM checking WHERE epf = '$name'";
	
	
	if(mysqli_query($conn,$sql) && mysqli_query($conn,$sql2)) //output success or failure messages
        { 
                 echo '<script type="text/javascript">alert("SUCCESSFULLY DELETED ONE RECORD");window.location.assign("EditSOC.php");</script>';
        }else
       {
               echo '<script type="text/javascript">alert("error");window.location.assign("EditSOC.php");</script>';
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
		
	$sql1 = "select * from staff_member_soc where nsbm_id = '$epfname'";
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
	
	$sql = "DELETE FROM staff_member_soc WHERE nsbm_id = '$epfname'";
	$sql2 = "INSERT INTO staff_member_sob(nsbm_id,name,tel,date) values('$epfname','$s_name','$tel','$date')";
	
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
		
	$sql1 = "select * from staff_member_soc where nsbm_id = '$epfname'";
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
	
	$sql = "DELETE FROM staff_member_soc WHERE nsbm_id = '$epfname'";
	$sql2 = "INSERT INTO staff_member_soc (nsbm_id,name,tel,date) values('$epfname','$s_name','$tel','$date')";
	
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
		
	$sql1 = "select * from staff_member_soc where nsbm_id = '$epfname'";
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
	
	$sql = "DELETE FROM staff_member_soc WHERE nsbm_id = '$epfname'";
	$sql2 = "INSERT INTO staff_member_soe (nsbm_id,name,tel,date) values('$epfname','$s_name','$tel','$date')";
	
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
		
	$sql1 = "select * from staff_member_soc where nsbm_id = '$epfname'";
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
	
	$sql = "DELETE FROM staff_member_soc WHERE nsbm_id = '$epfname'";
	$sql2 = "INSERT INTO staff_member_maintenance(nsbm_id,name,tel,date) values('$epfname','$s_name','$tel','$date')";
	
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
	
	if($location == 'admin'){
		
	$sql1 = "select * from staff_member_soc where nsbm_id = '$epfname'";
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
	
	$sql = "DELETE FROM staff_member_soc WHERE nsbm_id = '$epfname'";
	$sql2 = "INSERT INTO staff_member_admin (nsbm_id,name,tel,date) values('$epfname','$s_name','$tel','$date')";
	
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
	
		if($location == 'medical'){
		
	$sql1 = "select * from staff_member_soc where nsbm_id = '$epfname'";
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
	
	$sql = "DELETE FROM staff_member_soc WHERE nsbm_id = '$epfname'";
	$sql2 = "INSERT INTO staff_member_medi (nsbm_id,name,tel,date) values('$epfname','$s_name','$tel','$date')";
	
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
	
	
		if($location == 'library'){
		
	$sql1 = "select * from staff_member_soc where nsbm_id = '$epfname'";
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
	
	$sql = "DELETE FROM staff_member_soc WHERE nsbm_id = '$epfname'";
	$sql2 = "INSERT INTO staff_member_library (nsbm_id,name,tel,date) values('$epfname','$s_name','$tel','$date')";
	
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
	
	
	
		if($location == 'audi'){
		
	$sql1 = "select * from staff_member_soc where nsbm_id = '$epfname'";
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
	
	$sql = "DELETE FROM staff_member_soc WHERE nsbm_id = '$epfname'";
	$sql2 = "INSERT INTO staff_member_audi (nsbm_id,name,tel,date) values('$epfname','$s_name','$tel','$date')";
	
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
	
	
	
	
		if($location == 'print'){
		
	$sql1 = "select * from staff_member_soc where nsbm_id = '$epfname'";
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
	
	$sql = "DELETE FROM staff_member_soc WHERE nsbm_id = '$epfname'";
	$sql2 = "INSERT INTO staff_member_print (nsbm_id,name,tel,date) values('$epfname','$s_name','$tel','$date')";
	
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
	
	
	
	
		if($location == 'store'){
		
	$sql1 = "select * from staff_member_soc where nsbm_id = '$epfname'";
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
	
	$sql = "DELETE FROM staff_member_soc WHERE nsbm_id = '$epfname'";
	$sql2 = "INSERT INTO staff_member_store (nsbm_id,name,tel,date) values('$epfname','$s_name','$tel','$date')";
	
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
	
	
	
	
		if($location == 'rec'){
		
	$sql1 = "select * from staff_member_soc where nsbm_id = '$epfname'";
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
	
	$sql = "DELETE FROM staff_member_soc WHERE nsbm_id = '$epfname'";
	$sql2 = "INSERT INTO staff_member_rec (nsbm_id,name,tel,date) values('$epfname','$s_name','$tel','$date')";
	
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
	
	
	
	
	if(isset($_POST['userUpdate1'])){
		
	$values = $_POST['userUpdate1'];
	//$id = $values["user_id"];
	$id = $values["user_update_name"];
	$name = $values["user_name"];
	
			$conn = mysqli_connect( "localhost", "food", "nsbm", "nsbmfood" );
	if(mysqli_connect_errno()){
		echo "Failed to connect to the database.".mysqli_connect_error();
	}
		
		$update = "UPDATE staff_member_soc SET name = '$name' where nsbm_id = '$id'";

		if(mysqli_query($conn,$update)) //output success or failure messages
        { 
                 echo '<script type="text/javascript">alert("SUCCESSFULLY UPDATED ONE RECORD");window.location.assign("EditSOC.php");</script>';
        }else
       {
               echo '<script type="text/javascript">alert("error");window.location.assign("EditSOC.php");</script>';
        }
	
	
	mysqli_close($conn);
	
   
}
	
	

	

	
	?>
	
	
	
</body>
</html>