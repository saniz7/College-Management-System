<html>
    <head>
        <title>Parents portal</title>
        <link rel="stylesheet" href="style.css">     
    </head>
    <body style="background-image: url(images/project.svg);
    background-size: 200%;">
    <?php include 'navbar.php';?>

         <?php

  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "register";

  // Create connection
  $conn = mysqli_connect($servername, $username, $password, $dbname);
  // Check connection
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }

  $sql = "SELECT id, name, marks FROM marks";
  $result = mysqli_query($conn, $sql);

  if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {

        echo "<table class='content-table'><table border='1'>

        <thead>
<tr>
<th>Id</th>
<th>Subject Name</th>
<th>Marks</th>
</tr></thead>";

 


  echo "<tr>";

  echo "<td>" . $row['id'] . "</td>";

  echo "<td>" . $row['name'] . "</td>";

  echo "<td>" . $row['marks'] . "</td>";

  echo "</tr>";


echo "</table>";

    }
  } else {
    echo "0 results";
  }

  mysqli_close($conn);
  ?>
      <?php include'footer.php';?>
</body>
