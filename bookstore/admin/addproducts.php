<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
	<!-- //header-ends -->

	<?php
	include 'conn.php';
	$pro_code="pro";
	$Products_code='';
	$query=mysqli_query($conn,"SELECT MAX(ID) FROM products");
	while($row=mysqli_fetch_array($query)){

		$Product_code=$row[0];
		$Product_code+=1;
		$Products_code=$pro_code.$Product_code;
		
		// echo "<script>alert('".$Products_code."')</script>";

	}

	?>


	 <?php
	include 'conn.php';
		if(isset($_POST["btn_submit"])){
			$pro_name=$_POST["Product_name"];
			$cat_name=$_POST["cat_name"];
			$subcat_name=$_POST["subcat_name"];
			$pro_code=$_POST["pro_code"];
			$qty=$_POST["qty"];
			$price=$_POST["price"];

			$image=$_FILES["pro_image"]["name"];
			$tempo=$_FILES["pro_image"]["tmp_name"];
			move_uploaded_file($tempo, "images/".$image);

			$query=mysqli_query($conn,"INSERT INTO `products` VALUES (NULL,'".$pro_name."','".$cat_name."','".$subcat_name."','".$pro_code."','".$qty."','".$price."','".$image."','1')");
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
					<h3 class="blank1">Add Product</h3>
						<div class="tab-content">
						<div class="tab-pane active" id="horizontal-form">
							<form method="post" class="form-horizontal"
							 action="addproducts.php" enctype="multipart/form-data">

							 <div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Product Name</label>
									<div class="col-sm-8">
										<input type="text" class="form-control1" id="focusedinput" name="Product_name" placeholder="Product Name">
									</div>

										
										
					
						</div>



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
										<select class="form-control" name="subcat_name" >
											<?php
											include "conn.php";
											$category=mysqli_query($conn,"select * from sub_category");
											while ($row=mysqli_fetch_array($category)) {

												echo "
													<option value=$row[0]>$row[2]</option>

												";
											}
											?>

										</select>
									</div>

										
					
						</div>


								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Product Code</label>
									<div class="col-sm-8">
										<input type="text" class="form-control1" id="focusedinput" name="pro_code" readonly="true" value=<?php echo $Products_code; ?>>
									</div>

										
										
					
						</div>

	<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Quantity</label>
									<div class="col-sm-8">
										<input type="number" class="form-control1" id="focusedinput" name="qty" placeholder="Quantity">
									</div>

										
										
					
						</div>

						<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Price</label>
									<div class="col-sm-8">
										<input type="number" class="form-control1" id="focusedinput" name="price" placeholder="Price">
									</div>

										
										
					
						</div>

						<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Product Image</label>
									<div class="col-sm-8">
										<input type="file" class="form-control1" id="focusedinput" name="pro_image">
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