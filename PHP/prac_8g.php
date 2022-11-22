<?php
$file_tmp = $_FILES['file']['tmp_name'];
$file_name = $_FILES['file']['name'];
if (move_uploaded_file($file_tmp,"uploads/".$file_name))
{
echo "File uploaded successfully<br><br>";
echo "<img src='"."uploads/".$file_name."'height=200 width=400/>";
}
else echo "Could not upload file<br>";
?>
