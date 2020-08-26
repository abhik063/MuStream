<?php
include("includes/includedFiles.php");
?>

<div class="entityInfo">
	<div class="centerSection">
		<h1>Upload Song</h1>
		<form action="?" method="POST" enctype="multipart/form-data">
					<p></label><input type="file" name="file"></p>
					<p><input type="submit" value="Upload Music" name="upload"></p>
					<?php
					if(isset($_POST['upload']))
							{
								$file_name=$_FILES['file']['name'];
								$file_type=$_FILES['file']['type'];
								$file_size=$_FILES['file']['size'];
								$file_tem_loc=$_FILES['file']['tmp_name'];
								$file_store="assets/upload/".$file_name;
								if(move_uploaded_file($file_tem_loc, $file_store))
								{
									$message = "wrong answer";
									echo "<script type='text/javascript'>alert('$message');</script>";
								}

							
								
							}
?>
	</div>
</div>