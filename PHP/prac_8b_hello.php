<!-- <?php
// session_start();
// if (!isset($_GET["logout"]))
// {
//     $_SESSION['time']=time();
//     echo "Hello ".$_REQUEST["uname"];
//     echo '<form action="prac_8b_logout.php" method="get">
//     <input type="submit" value="'
//     .time()-$_SESSION['time']
//     .'" name="logout"></form> ';
// }
// session_destroy();
?> -->


<?php
session_start();
date_default_timezone_set("Asia/Calcutta");
$_SESSION['luser'] = $_POST['text1'];
 $_SESSION['start'] = time();
$tm=$_SESSION['start'];
print "<p align='right'>Session started at ". date("h:i:sa",$tm). "<br>";
print "<form action='prac_8b_logout.php' method='post'>";
print "<input type='submit' value='Logout'></p>"; 
print "</form>";
print "Hello".$_SESSION['luser'];
?>