<?php
$user1 = "Nancy";
$pwd1 = "12345678";
$user2 = "Dustin";
$pwd2 = "dustybuns";
$user3 = "Jane";
$pwd3 = "eleven";
$user4 = "Steve";
$pwd4 = "nance123";
setcookie($user1,$pwd1);
setcookie($user2,$pwd2);
setcookie($user3,$pwd3);
setcookie($user4,$pwd4);

if(isset ($_POST["save"]))
{
$flag=0;
foreach(array_keys($_COOKIE) as $user)
{
    if ($_POST["user"] == $user)
    {
        $flag=1;
        if ($_POST["pass"] == $_COOKIE[$user])
        {echo "Welcome ", $_POST["user"];}
        else echo "Wrong Password";
    }
}
if ($flag==0) echo "You are not an authenticated user";
}
?>