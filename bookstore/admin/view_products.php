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
$delete=mysqli_query($conn,"update products set status=0 where id='".$_GET["id"]."'");
if($delete){
	echo"<script>alert('deleted')</script>";
}
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
							  <th>Product Name</th> 
							  <th>Category Name</th>
							  <th>Sub Category Name</th>
							  <th>Product Code</th>
							  <th>Price</th>
							  <th>Image</th>
							  <th>Edit</th>
							  <th>Delete</th>
							</tr>
						  </thead>
						  <tbody>
								<?php
								include 'conn.php';
								$cat_num=1;
								$cat_id='';
								$sub_id='';
								$pro_id='';
								$query=mysqli_query($conn,"select * from products where status = 1");
								while ($row=mysqli_fetch_array($query)) {
									$pro_id=$row[0];
									$cat_id=$row[2];
								 	$sub_id=$row[3];
									$cat_name='';
									$sub_cat='';
									$catname=mysqli_query($conn,"select * from category where id='".$cat_id."'");
									while($cat=mysqli_fetch_array($catname)){
										$cat_name=$cat[1];
}	
									$subcategory=mysqli_query($conn,"select * from sub_category where id='".$sub_id."'");
									while($subcat=mysqli_fetch_array($subcategory)){
										$sub_cat=$subcat[2];
}	

									echo "
									
										<tr>
										<td>$cat_num</td>
										<td>$row[1]</td>
										<td>".$cat_name."</td>
										<td>".$sub_cat."</td>
										<td>".$row[4]."</td>
										<td>".$row[6]."</td>
										<td><img src='./images/".$row[7]."' alt='".$row[1]."' style='width:50px;    height: 24px;'></td>
										
										<td><a href='update_products.php?id=$pro_id'><button>Update</button></a></td>
										<td><a href='view_products.php?
										id=$pro_id'><button>Delete</button></a></td>
										</tr>

									";
									$cat_num=$cat_num+1;
								}
								?>

						  </tbody>
						</table>
						</div>
					</div>
			
					<!-- <div class="bs-example" data-example-id="form-validation-states"> -->
  	<!--footer section start-->
		<?php
		include("footer.php");
		?>
</body>
</html>

<style type="text/css">
	th{

	}
</style>