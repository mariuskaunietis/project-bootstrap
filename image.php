<?php
	$fname = $_FILES['file']['name'];	

	move_uploaded_file($_FILES['file']['tmp_name'], 'images/'.$fname);
	echo("<img src=images/$fname>")

?>