<!-- <?php
# echo $_GET['logout'];
?> -->

<?php
session_start();
date_default_timezone_set("Asia/Calcutta");
print "<p align='right'>Session started at ". date("h:i:sa",time()). "</p><br>";
print "Thank you". $_SESSION['luser'];
$sessiontime=time()- $_SESSION['start'];
print "<br> Your session duration: ". $sessiontime." seconds";
session_destroy();
?>