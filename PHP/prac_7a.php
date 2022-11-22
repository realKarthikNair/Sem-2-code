<?php
session_start();
if(isset ( $_SESSION['counter'] ) )
{
    $_SESSION['counter'] += 1;
}
else
{
    $_SESSION['counter'] = 1;
}
$counter_msg= "This is your visit number :".$_SESSION['counter'];
?>
<html>
<body> 
    <?php echo ( $counter_msg ); ?>
</body> 
</html>