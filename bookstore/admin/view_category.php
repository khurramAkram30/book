<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
	<!-- //header-ends -->
<?php 
	include 'conn.php';
	if($_GET["id"] != null){
			
		$query=mysqli_query($conn,"update category set status=0 where id='".$_GET["id"]."'");
		if($query){
			echo "<script>alert('deleted')</script>";
		}		
		error_reporting(0);
		
	}

?>
    <?php
include("header.php");
?>

<div class="panel-body1">
					   <table class="table">
						 <thead>
							<tr>
							  <th>#</th>
							  <th>Category Name</th>
							  <th>Last Name</th>
							  <th>Username</th>
							</tr>
						  </thead>
						  <tbody>
								<?php
								include 'conn.php';
								$cat_num=1;
								$id='';
								$query=mysqli_query($conn,"select * from category where status = 1");
								while ($row=mysqli_fetch_array($query)) {
									$id=$row[0];
									echo "
									
										<tr>
										<td>$cat_num</td>
										<td>".$row[1]."</td>
										<td><a href='updatecategory.php?id=$id'><button>Update</button></a></td>
										<td><a href='view_category.php?id=$id'><button>Delete</button></a></td>
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