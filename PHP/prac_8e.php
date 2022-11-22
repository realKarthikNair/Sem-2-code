<?php
$a=fopen("pfile01.txt","r+");

echo "<b>Original File Content</b><br>";
while (!feof($a)) {
    echo nl2br(fgets($a));
}
$text="\nGNU/Linux";
echo "<br><br>Adding more content to pfile01.txt<br>";
fwrite($a,"$text");
echo "<br>Appending Success!!!<br>";
echo "<br><b>New contents in file</b><br>";
fseek($a, 0);
while (!feof($a)) {
    echo nl2br(fgets($a));
}
fclose($a);
?>