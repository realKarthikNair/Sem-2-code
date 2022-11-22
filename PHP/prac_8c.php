<?php
echo("Writing content to file pfile.txt...<br>");
$file=fopen("pfile.txt","w+");
$text="hello world\nApache PHP Server";
fwrite($file,$text);
fclose($file);
echo("Success!!<br>");

echo "<br>Reading File...<br>";
$fname="pfile.txt";
$file1=fopen($fname,'r');
$size=filesize($fname);
$filedata=fread($file1,$size);
echo nl2br("<b>File Content: </b>$filedata");
echo("<br><b>Number of Bytes: </b>$size");
echo("<br>");
echo "<b>Number of lines in file: </b>",count(file($fname));
fclose($file1);

echo("<br><br>Renaming pfile.txt to pfile01.txt ...<br>");
rename("pfile.txt","pfile01.txt");
echo("Success!!<br>");

echo "<br>Using file_get_contents to read the content of the file pfile01.txt";
$str=file_get_contents('pfile01.txt') or die(ERROR);
echo("<br><b>Returns: </b> $str");

echo "<br><br>Copying pfile01.txt to pfile2.txt<br>";
$out = copy("pfile01.txt","pfile2.txt");
if ($out==1)echo "Copy Success!!<br>";
else echo "Copy Failed!!";

?>