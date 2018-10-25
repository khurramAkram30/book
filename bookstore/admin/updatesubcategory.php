	<?php

	include 'conn.php';

				// $id='';
			// $name='';
	$sub_catname='';
			if($_GET["id"] != null){
				$id=$_GET["id"];
		$selectquery=mysqli_query($conn,"select * from sub_category where id='".$id."'");
		$catname='';
		$cat_id='';
		while ($row=mysqli_fetch_array($selectquery)) {
			$cat_id=$row[1];

			$selectcategory=mysqli_query($conn,"select * from category where id='".$cat_id."' ");
			
			while($row1=mysqli_fetch_array($selectcategory)){
				 $catname=$row1[1];
			}


			$sub_catname=$row[2];

		}

	}


		if(isset($_POST["btn_submit"])){
	include 'conn.php';

			$ids=$_POST["id"];
			$cat_name=$_POST["cat_name"];
			$sub_cat=$_POST["subcat_name"];
		$query=mysqli_query($conn,"UPDATE sub_category SET cat_name = '".$cat_name."', sub_catname='".$sub_cat."' WHERE id = '".$ids."' ");
		
		echo $query;

			if($query){
				echo "<script>alert('updated')</script>";
				echo "<script>window.location.href='view_subcategory.php'</script>";
					
			}
			
			else{

				echo "<script>alert('error')</script>";

			}
		}

	?>


<?php include("header.php"); ?>

	<div id="page-wrapper">
				<div class="graphs">
					<h3 class="blank1">Update Category</h3>
						<div class="tab-content">
						<div class="tab-pane active" id="horizontal-form">
						<form method="post" class="form-horizontal"
							 action="updatesubcategory.php">
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Category Name</label>
									<div class="col-sm-8">
										<select class="form-control" name="cat_name" >
											<option value=<?php echo $cat_id; ?>>
												<?php echo $catname?></option>
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
										<input type="hidden" name="id" value=<?php echo $id; ?> >
										<input type="text" class="form-control1" 
										id="focusedinput" name="subcat_name" placeholder="Sub Category Name" value=<?php echo $sub_catname; ?>>
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