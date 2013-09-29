<?php if(!isset($_FILES['file'])):?>

	<html><body>
		<form action="index.php" method="post" enctype="multipart/form-data">
			Select Image: <input type="file" name="file" ><br>
			<input type="submit">
		</form>
	</body></html>

<?php else:?>

	<?php
		$fname = $_FILES['file']['name'];	

		move_uploaded_file($_FILES['file']['tmp_name'], 'images/'.$fname);
		echo("<img src=images/$fname>")

	?>

<?php endif ?>