<!DOCTYPE html>
<html>
<head>
	<title> Kins data </title>
</head>
<body>
	<header>
		<img src="Hospital.png" style="float:left; overflow: hidden;">
		<h1>Savanna Hospital</h1>
		<ul class="headlinks">
			<li><a href="index.php">Home</a></li>
			<li><a href="forms.php">Registration</a></li>
			<li><a href="patients.php">Records</a></li>
			<li><a href="#" title="Partner with us">About us</a></li>
			<li><a href="#" title="Partner with us">Contacts</a></li>
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
			<P>Kins data</P>
			<br><br>

			<table>
				<thead style="background-color: #a3dab7;">
					<tr>
						<th>Patient ID</th>
						<th>Patient.FirstName</th>
						<th>Patient.LastName</th>
						<th>Nextkin.FirstName</th>
						<th>Nextkin.LastName</th>
						<th>Relationship</th>
					</tr>
				</thead>
				<tbody>
					<?php 
						// fetch database contents 
						$db = mysqli_connect("localhost","root","","hospital");
						if( $db )
						{
							$sel = mysqli_query($db,"SELECT patients.parentid, patients.firstname, patients.surname, nextkin.firstname AS fn2, nextkin.surname AS sn2, nextkin.relationship FROM patients, nextkin WHERE patients.pid = nextkin.parentid ORDER BY patients.parentid DESC   ");
							if( mysqli_num_rows($sel) == 0 )
							{
								echo "<h2>There are no next of kins in the database. Create some in the creation section.</h2>";
							}
							else
							{
								$i = 0;
								while( $a = mysqli_fetch_array($sel) )
								{
									$pid = $a['parentid'];
									$fn1 = $a['firstname'];
									$sn1 = $a['surname'];
									$fn2 = $a['fn2'];
									$sn2 = $a['sn2'];
									$rel = $a['relationship'];
									$i++;

									if( $i % 2 == 0 )
										{
											//echo "Put #a3dab7 <hr />";
											?>
											<tr>
												<td style="background-color: #a3dab7;text-align: center;"><?php echo $pid; ?></td>
												<td style="background-color: #a3dab7;text-align: center;"><?php echo $fn1; ?></td>
												<td style="background-color: #a3dab7;text-align: center;"><?php echo $sn1; ?></td>
												<td style="background-color: #a3dab7;text-align: center;"><?php echo $fn2; ?></td>
												<td style="background-color: #a3dab7;text-align: center;"><?php echo $sn2; ?></td>
												<td style="background-color: #a3dab7;text-align: center;"><?php echo $rel; ?></td>
											</tr>
											<?php
										}
										else
										{
											//echo "Put none <hr />";
											?>
											<tr>
												<td style="background-color: #FFF;text-align: center;"><?php echo $pid; ?></td>
												<td style="background-color: #FFF;text-align: center;"><?php echo $fn1; ?></td>
												<td style="background-color: #FFF;text-align: center;"><?php echo $sn1; ?></td>
												<td style="background-color: #FFF;text-align: center;"><?php echo $fn2; ?></td>
												<td style="background-color: #FFF;text-align: center;"><?php echo $sn2; ?></td>
												<td style="background-color: #FFF;text-align: center;"><?php echo $rel; ?></td>
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