<?php
session_start();
$con=mysqli_connect("localhost","root","");
mysqli_select_db($con,"register");
$name=$_POST["name"];
$password=$_POST["password"];
$s="select*from usertable where name='$name' && password='$password'";
$result=mysqli_query($con,$s);
$num=mysqli_num_rows($result);
$_SESSION["username"]=$_POST["name"];

if($num==1){
    $_SESSION['username']=$name;
    header('location:home.php');
}
else{
    header('location:invalidlogin.php');
}
?>