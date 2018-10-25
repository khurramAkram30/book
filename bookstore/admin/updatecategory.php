	<?php

	include 'conn.php';

				// $id='';
			// $name='';
			if($_GET["id"] != null){
				$id=$_GET["id"];
		$selectquery=mysqli_query($conn,"select * from category where id='".$id."'");
		while ($row=mysqli_fetch_array($selectquery)) {
			$name=$row[1];

		}

	}


		if(isset($_POST["btn_submit"])){
	include 'conn.php';

			$ids=$_POST["id"];
			$cat_name=$_POST["cat_name"];
		$query=mysqli_query($conn,"UPDATE category SET Name = '".$cat_name."' WHERE id = '".$ids."' ");
		
		echo $query;

			if($query){
				echo "<script>alert('updated')</script>";
				echo "<script>window.location.href='view_category.php'</script>";
					
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
							<form method="POST" class="form-horizontal"
							 action="updatecategory.php">
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Category Name</label>
									<div class="col-sm-8">
										<input type="hidden" name="id" value=<?php echo $id ?>>
										<input type="text" class="form-control1" id="focusedinput" name="cat_name" value=<?php
										echo $name;
										?>>
									</div>

										
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