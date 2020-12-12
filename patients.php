<!DOCTYPE html>
<html>
<head>
	<title> Patients data </title>
</head>
<body>
	<header>
		<img src="Hospital.png" style="float:left; overflow: hidden;">
		<h1>Savanna Hospital</h1>
		<ul class="headlinks">
			<li><a href="index.php">Home</a></li>
			<li><a href="forms.php">Registration</a></li>
			<li><a href="patients.php">Records</a></li>
			<li><a href="aboutus.php">About us</a></li>
			<li><a href="contacts.php">Contacts</a></li>
		</ul>
		<div class="search">
			<input type="text" name="" placeholder="Search" id="src">
		</div>
	</header><br>
	<div class="main">
		<div class="left">
			<?php require("template-side.php"); ?>
		</div>
		<div class="content">
			<h1>WELCOME TO SAVANNA HOSPITAL</h1>
			<h2>FORMS PAGE </h2>
			<P>Patients data</P>
			<br><br>

			<table>
				<thead style="background-color: #a3dab7;">
					<tr>
						<th>Patient ID</th>
						<th>First Name</th>
						<th>Last Name</th>
						<th>Age</th>
						<th>Gender</th>
						<th>County</th>
					</tr>
				</thead>
				<tbody>
					<?php 
						// fetch database contents 
						$db = mysqli_connect("localhost","root","","hospital");
						if( $db )
						{
							$sel = mysqli_query($db,"SELECT * FROM patients ORDER BY parentid DESC ");
							if( mysqli_num_rows($sel) == 0 )
							{
								echo "<h2>There are no patients in the database. Create some in the creation section.</h2>";
							}
							else
							{

								while( $a = mysqli_fetch_array($sel) )
								{
									$pid = $a['parentid'];
									$prid = $a['pid'];
									$firstname = $a['firstname'];
									$middlename = $a['middlename'];
									$surname = $a['surname'];
									$kdate = $a['dateofbirth'];
									$gender = $a['gender'];
									$county = $a['county'];
									$datefull = explode("/",$kdate);
									$getdate = end($datefull);
									$today = date("D/M/Y");
									$todayfull = explode("/", $today);
									$gettoday = end($todayfull);
									$age = $gettoday - $getdate;
									
									if( $pid % 2 == 0 )
										{
											//echo "Put #a3dab7 <hr />";
											?>
											<tr>
												<td style="background-color: #a3dab7;text-align: center;"><?php echo $prid; ?></td>
												<td style="background-color: #a3dab7;text-align: center;"><?php echo $firstname; ?></td>
												<td style="background-color: #a3dab7;text-align: center;"><?php echo $surname; ?></td>
												<td style="background-color: #a3dab7;text-align: center;"><?php echo $age; ?></td>
												<td style="background-color: #a3dab7;text-align: center;"><?php echo $gender; ?></td>
												<td style="background-color: #a3dab7;text-align: center;"><?php echo $county; ?></td>
											</tr>
											<?php
										}
										else
										{
											//echo "Put none <hr />";
											?>
											<tr>
												<td style="background-color: #FFF;text-align: center;"><?php echo $prid; ?></td>
												<td style="background-color: #FFF;text-align: center;"><?php echo $firstname; ?></td>
												<td style="background-color: #FFF;text-align: center;"><?php echo $surname; ?></td>
												<td style="background-color: #FFF;text-align: center;"><?php echo $age; ?></td>
												<td style="background-color: #FFF;text-align: center;"><?php echo $gender; ?></td>
												<td style="background-color: #FFF;text-align: center;"><?php echo $county; ?></td>
											</tr>
											<?php
										}
									

								}

							}
						}
						else{ echo "<h2>Connection to database not possible.</h2>"; }

					?>
				</tbody>
				<tfoot>
					
				</tfoot>
			</table>

			<br><br>

		</div>
	</div>
	<footer>
		<center>
			<h1>
				&copy; &amp; &trade;
			</h1>
			<h1>
				Sheila Akinyi Owiso
			</h1>
			<h1>
				P15/44296/2017
			</h1>
		</center>
	</footer>

	<link rel="stylesheet" type="text/css" media="screen and (min-width:551px) and (max-width:2000px)" href="styles.css">
	<script type="text/javascript" src="js.js"></script>
	<script type="text/javascript" src="functions.js"></script>
</body>
</html>