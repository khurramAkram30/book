<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
	<!-- //header-ends -->

	<?php
	include 'conn.php';
		if($_GET["id"]){
			$p_id=$_GET["id"];
		$pro_name='';
		$catname='';
		$categoryid='';
		$subcategoryid='';
		$subcatname='';
		// $procode='';
		$qty='';
		$price='';
		$pro_code='';
		$pro_image='';
		$products=mysqli_query($conn,"select * from products where id='".$_GET["id"]."'");
		while($row=mysqli_fetch_array($products)){
			$pro_name=$row[1];
			$pro_code=$row[4];
			$qty=$row[5];
			$price=$row[6];
			$pro_image=$row[7];
			$catid=$row[2];
			$subcatid=$row[3];

			$category=mysqli_query($conn,"select * from category where id='".$catid."'");
			while ($row1=mysqli_fetch_array($category)) {
				$categoryid=$row1[0];
				$catname=$row1[1];
			}
			$subcategory=mysqli_query($conn,"select * from sub_category where id='".$subcatid."' ");
			while($row3=mysqli_fetch_array($subcategory)){
				$subcategoryid=$row3[0];
				$subcatname=$row3[2];

			}

		}
		
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
			$pro_id=$_POST["pro_id"];

			$image=$_FILES["pro_image"]["name"];
			$tempo=$_FILES["pro_image"]["tmp_name"];
			move_uploaded_file($tempo, "images/".$image);

			$query=mysqli_query($conn,"UPDATE `products` SET `product_name` = '".$pro_name."', `category` = '".$cat_name."', `sub_category` =
			 '".$subcat_name."', `qty` = '".$qty."', `price` = '".$price."', `picture` = '".$image."', `status` = '1' WHERE `products`.`id` = '".$pro_id."'");
			if($query){
				echo "<script>alert('updated')</script>";
				echo "<script>window.location.href='view_products.php'</script>";
			}
			
			else{

				echo "<script>alert('error')</script>";

			}
		}

	?>

 
<?php include("header.php"); ?>

	<div id="page-wrapper">
				<div class="graphs">
					<h3 class="blank1">Update Product</h3>
						<div class="tab-content">
						<div class="tab-pane active" id="horizontal-form">
							<form method="post" class="form-horizontal"
							 action="update_products.php" enctype="multipart/form-data">

							 <div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Product Name</label>
									<div class="col-sm-8">
										<input type="text" class="form-control1" id="focusedinput" name="Product_name" value=<?php echo $pro_name; ?>>
									</div>

									<input type="hidden" name="pro_id" value=<?php echo $p_id; ?> >	
										
					
						</div>



								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Category Name</label>
									<div class="col-sm-8">
										<select class="form-control" name="cat_name" >
											<option value=<?php echo $categoryid; ?> ><?php echo $catname; ?></option>
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
											<option value=<?php echo $subcategoryid; ?> ><?php echo $subcatname; ?></option>
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
										<input type="text" class="form-control1" id="focusedinput" name="pro_code" readonly="true" value=<?php echo $pro_code; ?>>
									</div>

										
										
					
						</div>

	<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Quantity</label>
									<div class="col-sm-8">
										<input type="number" class="form-control1" id="focusedinput" name="qty" value=<?php echo $qty; ?>>
									</div>

										
										
					
						</div>

						<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Price</label>
									<div class="col-sm-8">
										<input type="number" class="form-control1" id="focusedinput" name="price" value=<?php  echo $price; ?> >
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
										<input type="submit"  name="btn_submit" class="btn" value="Update">
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