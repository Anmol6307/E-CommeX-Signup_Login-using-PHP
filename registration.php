<?php
session_start();
header('location:signup_login.php');
$connection=mysqli_connect('localhost','root','');
//$connection=mysqli_connect('localhost','root','write your password')

mysqli_select_db($connection,'signup_loginform');

$name=$_POST['user'];
$email=$_POST['emailid'];
$password=$_POST['password'];

$select="select * from register_table where email_id='$email'";
$result=mysqli_query($connection,$select);
$num=mysqli_num_rows($result);
if($num==1)
{
    echo" user already exists";
}
else
{
    $reg="insert into register_table(name,email_id,password) values('$name','$email','$password')";
    mysqli_query($connection,$reg);
}
?>