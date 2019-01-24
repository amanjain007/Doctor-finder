<?php

echo "hello ";
$con=mysqli_connect("localhost","root","","db");
if($con)
{
    echo "connected";
}
else
{
    echo " not connected";
}
$email=$_POST['email'];
$password=$_POST['password'];

$query="SELECT * FROM guest WHERE email='$email' AND password='$password'";
$run=mysqli_query($con,$query);
$row=mysqli_num_rows($run);
if($row==1)
{
    header('location:index1.php');
   
}
else
{
    header('location:login.php');
    
}
?>