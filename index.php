
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
    <div class="parent">
        <section class="card_login">
            <div class="card_header">
                <h3 >Parents Portal</h3>
            </div>    
                <form action="login.php" method="POST" class="form">
                    Username/Email:
                    <input class="form_input"type="text" name="name" placeholder="Enter your Username/Email..." required>
                    Password:
                    <input class="form_input"type="password" name="password" placeholder="Enter your password..."required>
                    <input class="button"type="submit" value="Login">
                </form>
            <div class="card_footer">    
                Don't have an account?
                <a href="registration.php"><button id="redirect" value="Sign Up">Sign Up</button></a>
            </div>
        </section>
    </div>
</div>
   <?php include'footer.php';?>
    </body>
</html>