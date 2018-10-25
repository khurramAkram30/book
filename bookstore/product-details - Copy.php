<?php
if(isset($_POST["btnsub"])){
	$total = count($_FILES['allimg']['name']);

// Loop through each file
	$files='';
	$a=0;
for( $i=0 ; $i < $total ; $i++ ) {

		 $files = $_FILES['allimg']['name'][0];
		$files1=$_FILES['allimg']['name'][1];
			echo $files;
				echo $files1; 
		// echo $files.$i;
		// $tmpFilePath = $_FILES['allimg']['tmp_name'][$i];
		

}
}
?>
<form method="POST" enctype="multipart/form-data">
<input type="file" name="allimg[]" multiple="true">
<input type="submit" name="btnsub">
</form>