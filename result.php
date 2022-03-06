<html>
    <head>
        <title>Parents portal</title>
        <link rel="stylesheet" href="style.css">     
    </head>
    <body style="background-image: url(images/project.svg);
    background-size: 200%;">
         <?php include 'navbar.php';?>


          <?php
session_start();

$con=mysqli_connect("localhost","root","");
mysqli_select_db($con,"register");
$number=$_POST["number"];
$s="select * from grade where number = '$number'";
$result=mysqli_query($con,$s);
$num = mysqli_num_rows($result);

echo $num;

?>


        <table class="content-table">
        <thead>
          <tr>
            <th>Credit Hour</th>
            <th>Course code</th>
            <th>Course name</th>
            <th>Grade</th>
            <th>Remarks</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>3</td>
            <td>ELX 212</td>
            <td>Logic Circuit</td>
            <td>A-</td>
            <td>should work harder</td>
          </tr>
          <tr class="active-row">
            <td>3</td>
            <td>MTH 114</td>
            <td>Engineering Mathematics II</td>
            <td>B</td>
            <td>should work harder</td>
          </tr>
          <tr>
            <td>3</td>
            <td>ELX 213</td>
            <td>Electronic Circuit and Instrumentation</td>
            <td>A</td>
            <td>Good</td>
          </tr>
          <tr>
            <td>3</td>
            <td>CMP 225</td>
            <td>Data Structure and Algorithms</td>
            <td>A-</td>
            <td>should work harder</td>
          </tr>
          <tr>
            <td>3</td>
            <td>CMP 213</td>
            <td>Web Technology</td>
            <td>A</td>
            <td>Good,Dont stop learning</td>

          </tr>
          <tr>
            <td>2</td>
            <td>MTH 221</td>
            <td>Probability and Queuing Theory</td>
            <td>B</td>
            <td>should work harder</td>
          </tr>
        </tbody>
      </table>
      <?php include'footer.php';?>
</body>
