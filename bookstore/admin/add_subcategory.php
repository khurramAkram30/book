<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
	<!-- //header-ends -->

	<?php
	include 'conn.php';
		if(isset($_POST["btn_submit"])){
			$cat_name=$_POST["cat_name"];
			$subcat_name=$_POST["subcat_name"];
			$query=mysqli_query($conn,"INSERT INTO `sub_category` (`id`, `cat_name`, `sub_catname`, `status`) VALUES (NULL, '".$cat_name."', '".$subcat_name."', '1')");
			if($query){
				echo "<script>alert('inserted')</script>";
			}
			
			else{

				echo "<script>alert('error')</script>";

			}
		}

	?>


<?php include("header.php"); ?>

	<div id="page-wrapper">
				<div class="graphs">
					<h3 class="blank1">Add Sub Category</h3>
						<div class="tab-content">
						<div class="tab-pane active" id="horizontal-form">
							<form method="post" class="form-horizontal"
							 action="add_subcategory.php">
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Category Name</label>
									<div class="col-sm-8">
										<select class="form-control" name="cat_name" >
											<?php
											include "conn.php";
											$category=mysqli_query($conn,"select * from category");
											while ($row=mysqli_fetch_array($category)) {

												echo "
													<option value=$row[0]>$row[1]</option>

												";
											}
											?>

										</select>
									</div>

										
					
						</div>


								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Sub Category Name</label>
									<div class="col-sm-8">
										<input type="text" class="form-control1" id="focusedinput" name="subcat_name" placeholder="Sub Category Name">
									</div>

										
										
					
						</div>



								<div class="col-md-2"></div>
								

										<div class="col-md-2">
										<input type="submit"  name="btn_submit" class="btn" value="Add">
					</div>
						
					</form>

					</div>
					</div>
					</div>
					</div>
					<!-- <div class="bs-example" data-example-id="form-validation-states"> -->
  	<!--footer section start-->
		<?php
		include("footer.php");
		?>
</body>
</html>