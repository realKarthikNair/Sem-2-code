<?php
 
# Write regular expressions including modifiers operators and metacharacters.

$string1="Sunflowers BLOOMING everywhere!!!";


# RegEx that uses the 'i' modifier, '$' operator and 

$pattern1="/ooming/i";

if (preg_match($pattern1,$string1))
{echo "<b>$pattern1</b> found in <b>$string1</b>";}
else{echo "<b>$pattern1</b> not found in <b>$string1</b>";}

/* RegEx that checks if there is a minimum of 8 chars, 
there is an underscore, and the string is alpha-numeric (a-z, A-Z, 0-9)*/

# using ^, $, [] - (range) , {n,},  operators
# \d (find a digit) metacharacter, 'i' modifier

$string2 = "Avantika_34";
$pattern2="/^[a-z\d_]{8,}$/i";

if (preg_match($pattern2,$string2))
{echo "<br><br><b>$pattern2</b> found in <b>$string2</b>";}
else{echo "<br><br><b>$pattern2</b> not found in <b>$string2</b>";}

# used . ^ + operators
$string3="Corrections are everywhere";
$pattern3="/(^.*(r+).*(are).*$)/i";
if (preg_match($pattern3,$string3))
{echo "<br><br><b>$pattern3</b> found in <b>$string3</b>";}
else{echo "<br><br><b>$pattern3</b> not found in <b>$string3</b>";}
?>
