<?php


if(isset($_POST["add"]))
{
    echo $_POST['num1']+$_POST['num2'];
}
if(isset($_POST["subtract"]))
{
    echo $_POST['num1']-$_POST['num2'];
}
if(isset($_POST["multiply"]))
{
    echo $_POST['num1']*$_POST['num2'];
}
if(isset($_POST["divide"]))
{
    echo $_POST['num1']/$_POST['num2'];
}
if(isset($_POST["exp"]))
{
    echo $_POST['num1']**$_POST['num2'];
}
echo '</form>';
?>