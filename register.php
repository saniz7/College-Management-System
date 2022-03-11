
<html>
    <head>
        <title>Parents Portal</title>
        <link rel="stylesheet" href="style.css">
    <body>
    <nav class="navbar">
        <div class="navbar__container">
            <a href="https://www.ncit.edu.np" ><img src="ncitlogo.jpg" id="navbar__logo"></a>
            <ul class="navbar__menu">
              <li class="navbar__item">
                <a href="https://www.ncit.edu.np/about-us/" class="navbar__links" id="about-page">About</a>
              </li>
              <li class="navbar__item">
                <a href="https://www.ncit.edu.np/departments/it-engineering" class="navbar__links" id="about-page">Department</a>
              </li>
              <li class="navbar__item">
                <a href="https://www.ncit.edu.np/courses/be-it" class="navbar__links" id="about-page">Course</a>
              </li>
              <li class="navbar__item">
                <a href="https://www.ncit.edu.np/news" class="navbar__links" id="News"
                  >News</a>
                </li>
            </ul>
          </div>
          </nav> 

<?php
session_start();

$con=mysqli_connect("localhost","root","");
mysqli_select_db($con,"register");
$name=$_POST["name"];
$password=$_POST["password"];
$s="select * from usertable where name = '$name'";
$result=mysqli_query($con,$s);
$num = mysqli_num_rows($result);

if($num==1){
    ?>
            <div class="parent">
        <section class="card_login">
            <div class="card_header">
                <h3 >Username already taken</h3>
            </div>
            <div class="card_footer">
                Register new user
                <a href="registration.php"><button id="redirect" value="Login Here">Register Here</button></a>
            </div>
        </section>
    </div> 

<?php

}else{
    $reg="insert into usertable(name,password) values ('$name','$password')";
    mysqli_query($con,$reg);
    header('location:index.php');
}
?>

</div>
   <?php include'footer.php';?>
    </body>
</html>