<?php
$a=fopen("pfile01.txt","r");
while (!feof($a)) {
    echo nl2br(fgets($a));
}
?>