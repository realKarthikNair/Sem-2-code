<?php
$file_tmp = $_FILES['file']['tmp_name'];
$file_name = $_FILES['file']['name'];

if (move_uploaded_file($file_tmp,"uploads/".$file_name))
echo "File uploaded successfully<br>";

else echo "Could not upload file<br>";


?>
