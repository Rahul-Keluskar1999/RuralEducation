<?php 
require_once("_includes/connection.php");
$name=$_POST['name'];
$pwd=$_POST['pwd'];
$email=$_POST['email'];


$query="INSERT into user SET name='$name',password='$pwd',email='$email'";
$result=mysql_query($query);
if($result)
{
header("location:register.php?msg=You are succesfully registered to post and sale");
exit;

}
else
{
header("location:register.php?msg=Error occured please try again....!");
exit;
}

?>
