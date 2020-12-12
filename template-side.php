<h3>Records</h3>
			<ul >
				<li><a id="linksup" href="#">Patients<span style="cursor:pointer; overflow: hidden;color: blue;font-weight: bolder;font-size: 24px;"> &plus; </span> </a> </li>
					<?php 
						/* See if there are any patients in the database  */
						$open = mysqli_connect("localhost","root","","hospital");
						if( $open )
						{
							// see if there are any patients
							$check = mysqli_query($open,"
								SELECT * FROM patients ORDER BY parentid DESC 
								");
							if( mysqli_num_rows($check) == 0 )
							{
								// there are no patients 
								// dont show drop-down 
								echo "
								<ul>
									<hr />
									<li><a href='patients.php'>View patients</a></li>
									<hr />
								</ul>
								";
							}
							else
							{
								// there are patients so give drop down 
								echo "<ul id='linksdown'>
									<hr />
									<li><a href='patients.php'>View patients</a></li>
									<hr />
								";
								while( $a = mysqli_fetch_array($check) )
								{
									$pid = $a['pid'];
									$name = $a['firstname'];

									// ui 
										echo "<li><a href='patients.php?id=$pid'> $pid &gt; $name </a></li>";
									// end ui 

								}
								echo "</ul>";

							}

						}
						else
						{
							// do nothing 
						}

					?>

				<br>
				<li>

					<a id="linksupb" href="#">Kins<span style="cursor:pointer; overflow: hidden;color: blue;font-weight: bolder;font-size: 24px;"> &plus; </span> </a>

					<?php 
						/* See if there are any patients in the database  */
						$open = mysqli_connect("localhost","root","","hospital");
						if( $open )
						{
							// see if there are any patients
							$check = mysqli_query($open,"
								SELECT * FROM nextkin ORDER BY nid DESC 
								");
							if( mysqli_num_rows($check) == 0 )
							{
								// there are no patients 
								// dont show drop-down 
								echo "
								<ul>
									<hr />
									<li><a href='Kins-records.php'>View kins</a></li>
									<hr />
								</ul>
								";
							}
							else
							{
								// there are patients so give drop down 
								echo "<ul id='linksdownb'>
									<hr />
									<li><a href='Kins-records.php'>View kins</a></li>
									<hr />
								";
								while( $a = mysqli_fetch_array($check) )
								{
									$nid = $a['nid'];
									$name = $a['firstname'];

									// ui 
										echo "<li><a href='Kins-records.php?id=$pid'> $nid &gt; $name </a></li>";
									// end ui 

								}
								echo "</ul>";

							}

						}
						else
						{
							// do nothing 
						}

					?>




				<br>
			</ul><hr>
			<h3>Forms</h3>
			<ul>
				<li><a href="forms.php">Patients</a></li><br>
				<li><a href="forms-kins.php">Kins</a></li><br>
			</ul>
				

			<hr>