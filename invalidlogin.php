<html>
<head>
        <title>Parents portal</title>
        <link rel="stylesheet" href="style.css">     
    </head>
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
    <div class="parent">
        <section class="card_login">
            <div class="card_header">
                <h3 >Invalid credentials.</h3>
            </div>
            <div class="card_footer">
                Invalid Login. Login again.
                <a href="index.php"><button id="redirect" value="Login Here">Login Here</button></a>
            </div>
        </section>
    </div>    
    <?php include'footer.php';?>
</body>
</html>