<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
	<!-- //header-ends -->
<?php 
	include 'conn.php';
	if($_GET["id"] !== null){
		
		$query=mysqli_query($conn,"update sub_category set status=0 where id='".$_GET["id"]."'");
		if($query){
			echo "<script>alert('deleted')</script>";
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
							  <th>Category Name</th>
							  <th>Sub Category Name</th>
							  <th>Edit</th>
							  <th>Delete</th>
							</tr>
						  </thead>
						  <tbody>
								<?php
								include 'conn.php';
								$cat_num=1;
								$id='';
								$sub_id='';
								$query=mysqli_query($conn,"select * from sub_category where status = 1");
								while ($row=mysqli_fetch_array($query)) {
									$sub_id=$row[0];
									$id=$row[1];
									$cat_name='';

									$catname=mysqli_query($conn,"select * from category where id='".$id."'");
									while($cat=mysqli_fetch_array($catname)){
										$cat_name=$cat[1];
}	
									

									echo "
									
										<tr>
										<td>$cat_num</td>
										<td>".$cat_name."</td>
										<td>".$row[2]."</td>
										<td><a href='updatesubcategory.php?id=$sub_id'><button>Update</button></a></td>
										<td><a href='view_subcategory.php?id=$sub_id'><button>Delete</button></a></td>
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

<style type="text/css">
	th{

	}
</style>