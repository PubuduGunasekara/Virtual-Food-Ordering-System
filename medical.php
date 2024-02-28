<?php
session_start();
if(!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] == false)
{
	header("location: index.html");
}
?>


<!doctype html>
<html>
<head>
	<title>MEDICAL</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link href="maindesign.css" rel="stylesheet" type="text/css">
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
	<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
	<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
	<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>

	

	<style>
		/* HIDE RADIO */
		
		.hiddenradio [type=radio] {
			position: absolute;
			opacity: 0;
			width: 0;
			height: 0;
		}
		/* IMAGE STYLES */
		
		.hiddenradio [type=radio]+ img {
			cursor: pointer;
		}
		/* CHECKED STYLES */
		
		.hiddenradio [type=radio]:checked+ img {
			outline: 3px solid #00ff00;
		}
		
		.ch [type=checkbox]:checked+ label {
			outline: 3px solid #00ff00;
		}
	</style>
</head>


<body background="Recipes.jpg">

	<!--header	-->
	<nav class="navbar-fixed-top">
		<div id="head">

			<img class="img-responsive" src="nsbm.png" alt="Chania" width="200" height="100">
			<!--navbar-->


			<nav class="navbar navbar-inverse fixed-top">
				<div class="container-fluid">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>                        
			   </button>
					
						
					</div>
					<div class="collapse navbar-collapse" id="myNavbar">
					<ul class="nav navbar-nav">
							<li ><a href="soc.php">SOC</a>
								<li ><a href="sob.php">SOB</a>
									<li ><a href="soe.php">SOE</a>
										<li ><a href="admin.php">ADMIN</a>
										<li ><a href="rec.php">RECREATIONAL</a>
											<li ><a href="maintenance.php">MAINTENANCE</a>
											<li class="active"><a href="medical.php">MEDICAL</a>
												<li  ><a href="lybrary.php">LIBRARY</a>
													<li ><a href="audi.php">AUDITORIUM</a>
														<li ><a href="print.php">PRINTING</a>
															<li ><a href="store.php">STORE</a>
							</li>


						</ul>
						<ul class="nav navbar-nav navbar-right">

							
							<li style="color: red;"><a href="medicalSpecial.php">Special Menu</a>
							</li>
							<li><a href="index2.php">Home</a>
							</li>
							<li><a href="logedOutCustomer.php">Log out</a></li>

						</ul>
					</div>
				</div>
			</nav>
		</div>
	</nav>




	<div style="height: 200px"></div>


	<!--body-->
	<center><div  style="background-color:ivory;  opacity: 0.6">
		<h3 class="display-2" style="color: #570808; font-family:  Open Sans, 'Hoefler Text', 'Liberation Serif', Times, 'Times New Roman', 'serif'; font-size: 40px; opacity: 1.0; font-weight: bolder;">Select Food Item(s)</h3>
		</div>
	</center>
	<div class="container-fluid">

		<div class="row jumbotron" style="height: auto; background-color:#E9E9E9">








			<form name="socUserSelect" method="post" action="medicalnamelistTemp.php">


				<table border="1" class="table-hover table-condensed" id="details" >
					<thead>
						<tr>
							<th>Member name(EPF number)</th>
							<th>Food item</th>
						</tr>
					</thead>
					<tbody>
						<?php



						date_default_timezone_set( 'Asia/colombo' );
						$date = date( 'Y-m-d', strtotime( "+1 days" ) );
						date_default_timezone_set( 'Asia/colombo' );
						$date2 = date( 'Y-m-d' );
						$conn = mysqli_connect( "localhost", "food", "nsbm", "nsbmfood" );
						if ( mysqli_connect_errno() ) {
							echo "Failed to connect to the database." . mysqli_connect_error();
						}

						$radioBtn = 0;





						$query = "SELECT * FROM staff_member_medi WHERE date != '$date' ORDER BY nsbm_id";
						$results = mysqli_query( $conn, $query );

						while ( $rows = mysqli_fetch_assoc( $results ) ) {

							$checkbox = "check" . $radioBtn;
							$radio = "radio" . $radioBtn;
							$span = "span".$radioBtn;
							?>
						<div class="ch">

							<tr>
								
						
								<td><label id=""><input type="checkbox"   onClick ="checkBox('<?php echo $radio; ?>','<?php echo $checkbox;?>')" name="<?php echo $checkbox;?>" id="<?php echo $checkbox;?>"  value="<?php echo $rows['nsbm_id'];?>">&nbsp;&nbsp; <?php echo "".$rows['name']."(".$rows['nsbm_id'].")";?></label><br>
									<span></span>
								</td>
								<td>
						</div>
						<div class="hiddenradio">
							
							<div style="color:#6F0404">

								<label><input type="radio" name="<?php echo $radio;?>" id="<?php echo $radio;?>" onClick="checkRadio('<?php echo $checkbox; ?>')" value="red chicken">&nbsp;&nbsp;<img src="chicken.png" style="width: 50px; height: 30px"><BR>RED CHICKEN </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

								<label><input type="radio" name="<?php echo $radio;?>" id="<?php echo $radio;?>" onClick="checkRadio('<?php echo $checkbox; ?>')" value="red omellete">&nbsp;&nbsp;<img src="omlet.png" style="width: 50px; height: 30px"><BR>RED OMELLETE</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

								<label><input type="radio" name="<?php echo $radio;?>" id="<?php echo $radio;?>" onClick="checkRadio('<?php echo $checkbox; ?>')" value="red egg">&nbsp;&nbsp;<img src="egg.png" style="width: 50px; height: 30px"><BR>RED EGG 
	    						</label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

								<label><input type="radio" name="<?php echo $radio;?>" id="<?php echo $radio;?>" onClick="checkRadio('<?php echo $checkbox; ?>')" value="red fish">&nbsp;&nbsp;<img src="Fish.png" style="width: 50px; height: 30px"><BR>RED FISH </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

								<label><input type="radio" name="<?php echo $radio;?>" id="<?php echo $radio;?>" onClick="checkRadio('<?php echo $checkbox; ?>')" value="red vegi">&nbsp;&nbsp;<img src="vegi.png" style="width: 50px; height: 30px"><BR>RED VEGI </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							</div>
							<br>

							<div style="color:grey">

								<label><input type="radio" name="<?php echo $radio;?>" id="<?php echo $radio;?>" onClick="checkRadio('<?php echo $checkbox; ?>')" value="white chicken">&nbsp;&nbsp;<img src="chicken.png" style="width: 50px; height: 30px"><BR>WHITE CHICKEN </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

								<label><input type="radio" name="<?php echo $radio;?>" id="<?php echo $radio;?>" onClick="checkRadio('<?php echo $checkbox; ?>')" value="white omellete">&nbsp;&nbsp;<img src="omlet.png" style="width: 50px; height: 30px"><BR>WHITE OMELETTE </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

								<label><input type="radio" name="<?php echo $radio;?>" id="<?php echo $radio;?>" onClick="checkRadio('<?php echo $checkbox; ?>')" value="white egg">&nbsp;&nbsp;<img src="egg.png" style="width: 50px; height: 30px"><BR>WHITE EGG </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

								<label><input type="radio" name="<?php echo $radio;?>" id="<?php echo $radio;?>" onClick="checkRadio('<?php echo $checkbox; ?>')" value="white fish">&nbsp;&nbsp;<img src="Fish.png" style="width: 50px; height: 30px"><BR>WHITE FISH</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

								<label><input type="radio" name="<?php echo $radio;?>" id="<?php echo $radio;?>" onClick="checkRadio('<?php echo $checkbox; ?>')" value="white vegi">&nbsp;&nbsp;<img src="vegi.png" style="width: 50px; height: 30px"><BR>WHITE VEGI</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								<span id="<?php echo $radioBtn;?>"></span>

							</div>

						</div>


						</td>
						</tr>






						<?php
						$radioBtn++;

						}


						?>
					</tbody>
				</table>




				<input type="submit" name="submit" style="float: right" value="Submit"onClick="return confirm('Are you sure to continue with this list? (click cancel to re check)')">

		</div>
		</form>


	</div>
	</div>

	<!--footer-->
	<footer class="page-footer font-small unique-color-dark pt-4 footer" style="background: rgba(0,0,0,1.00)">

		<hr>
		<!-- Copyright -->
		<div class="footer-copyright text-center py-3">NSBM GREEN UNIVERSITY
		</div>
		<!-- Copyright -->
		<hr>
	</footer>


	<script>
	
		
		function checkRadio( checkboxName ) {
			document.getElementById( checkboxName ).checked = true;
		}
		
		
		
function checkBox(radioName,checkboxName ){
	
	
    var radio = document.socUserSelect[radioName]
    for(var x=0;x<radio.length;x++) {
        document.socUserSelect[radioName][x].checked = false
    }
	
	
}

		


		$( document ).ready( function () {
			$( '#details' ).DataTable();
		} );
	</script>




</body>
</html>