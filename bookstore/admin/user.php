 <?php
include("header.php");
?>

<div class="panel-body1">
		<h1>USERS</h1>
					   <table class="table">
						 <thead>
							<tr>
							  <th>#</th>
							  <th>First Name</th>
							  <th>Last Name</th>
							  <th>Gender</th>
							  <th>Email</th>
							</tr>
						  </thead>
						  <tbody>
								<?php
								include 'conn.php';
								$cat_num=1;
								$id='';
								$query=mysqli_query($conn,"select * from users where status = 1");
								while ($row=mysqli_fetch_array($query)) {
									$id=$row[0];
									echo "
									
										<tr>
										<td>$cat_num</td>
										<td>".$row[1]."</td>
										<td>".$row[2]."</td>
										<td>".$row[3]."</td>
										<td>".$row[4]."</td>
										</tr>

									";
									$cat_num=$cat_num+1;
								}

								?>

						  </tbody>
						</table>
						</div>
			
					<!-- <div class="bs-example" data-example-id="form-validation-states"> -->
  	<!--footer section start-->
		<?php
		include("footer.php");
		?>
</body>
</html>