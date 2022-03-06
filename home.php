<html>
    <head>
        <title>Parents portal</title>
        <link rel="stylesheet" href="style.css">     
    </head>
    <body>
      <?php include 'navbar.php';?>
          <div class="services" id="services">
                <!-- <h1>Warm welcome</h1> -->
                <div class="services__wrapper">
                  <div class="card" >
                    <!-- <img src="img.svg/result.svg" alt="result"> -->
                    <h2>RESULT</h2>
                    <div class="card__btn"><button><a href="result.php"class="button__link">View Result</a></button></div>
                  </div>
                  <div class="card">
                    <h2>ASSIGNMENTS</h2>
                    <div class="card__btn"><button><a href="assignment.php"class="button__link">View Assignments</a></button></div>
                  </div>
                  <div class="card">
                    <h2>COURSES</h2>
                    <div class="card__btn"><button><a href="https://www.ncit.edu.np/courses"class="button__link">View courses</a> </button></div>
                  </div>
                  <div class="card">
                    <h2>FEES</h2>
                    <div class="card__btn"><button><a href="fees.php"class="button__link">View Fees</a></button></div>
                  </div>
                </div>
              </div>
         <?php include 'footer.php'; ?> 
    </body>
    
</html>
