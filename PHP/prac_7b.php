<?php
$error_message=[];
if(isset($_POST["SUBMIT"]))
{
    if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL))
    {
        array_push($error_message, "Email not in valid format"."<br/>");
    }
    else if (!filter_var($_POST["mobile"], FILTER_VALIDATE_INT))
    {
        array_push($error_message, "Mobile can contain numbers only"."<br/>");
    }
    else {echo "All inputs are valid";}
}
if (count($error_message) > 0)
{
    foreach($error_message as $error) echo $error;
}
?>