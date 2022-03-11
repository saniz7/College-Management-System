<html>
    <head>
        <title>Parents portal</title>
        <link rel="stylesheet" href="style.css">     
    </head>
    <body style="background-image: url(images/assignment.svg);
    background-size: 50%;">
    <?php include 'navbar.php';?>
          <table class="content-table">
        <thead>
          <tr>
            <th>subjects</th>
            <th>Assignments</th>
            <th>Status</th>
            <th>Deadline</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td rowspan="2">Logic circuit</td>
            <td>Combinational logic design</td>
            <td>Not subbmited</td>
            <td>March 12</td>
          </tr>
          <tr>
            <td>Processor logic design</td>
            <td>submitted</td>
            <td>March 9</td>
          </tr>
          <tr>
            <td>Web Technology</td>
            <td>Build a funcitonal website</td>
            <td>subbmited</td>
            <td>March 7</td>
          </tr>
          <tr>
            <td rowspan="2">Engineering Mathematics II</td>
            <td>Vector space</td>
            <td>Subbmited</td>
            <td>March 15</td>
          </tr>
          <tr>
            <td>Matrix</td>
            <td> Not submitted</td>
            <td>March 25</td>
          </tr><tr>
            <td>Electronic Circuit and Instrumentation</td>
            <td>Distortion</td>
            <td>submitted</td>
            <td>March 9</td>
          </tr>
          <tr>
            <td rowspan="2">Data structure and Algorithem</td>
            <td>Graph Theory</td>
            <td>submitted</td>
            <td>March 8</td>
          </tr>
          <tr>
            <td>Stack and Queue</td>
            <td>Not subbmited</td>
            <td>March 12</td>
          </tr>
          <tr id="last_row">
            <td>Probability and Queuing Theory</td>
            <td>Markov chain</td>
            <td>Not submitted</td>
            <td>March 25</td>
          </tr>
        </tbody>
      </table>
      <?php include'footer.php';?>
</body>