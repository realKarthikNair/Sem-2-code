<?php
$name=$_POST["name"];
$age=$_POST["age"];
$gender=$_REQUEST["gender"];
if ($gender=="Male"){$s="Mr. ";}
else {$s="Mrs. ";}
echo "Hello $s $name, you're $age years old!!!";
?>