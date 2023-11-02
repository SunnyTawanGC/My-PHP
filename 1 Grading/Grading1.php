<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
  <meta charset="UTF-8">
  <title>Grading Result</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #ffffcc;
      text-align: center;
      margin: 0;
    }

    h1 {
      font-size: 30px;
      color: #ff3300;
    }

    p {
      font-size: 16px;
      color: #000000;
    }

    table {
      margin: 20px auto;
      padding: 20px;
      border: 1px solid #ccc;
      border-radius: 10px;
      background-color: #ffffff;
      text-align: left;
      width: 80%;
    }

    td {
      padding: 10px;
    }

    a {
      color: #ff0066;
      text-decoration: none;
    }
  </style>
</head>
<body>
  <h1>Grading Result</h1>
  <table>
    <?php
    $name = $_POST['name'];
    $sur = $_POST['sur'];
    $subject = $_POST['sub'];
    $score1 = $_POST['t1'];
    $score2 = $_POST['t2'];
    $score3 = $_POST['t3'];
    $score4 = $_POST['t4'];
    $score5 = $_POST['t5'];
    $sum = $score1 + $score2 + $score3 + $score4 + $score5;

    echo "<tr><td><h2>GPA Subject: $subject</h2></td></tr>";
    echo "<tr><td><h2>$name $sur's Result</h2></td></tr>";
    echo "<tr><td>Total score: = $sum</td></tr>";

    if ($sum >= 80) {
      echo "<tr><td>GPA = 4.00</td></tr>";
      echo "<tr><td><h3>Congratulations!!</h3></td></tr>";
    } elseif ($sum >= 75) {
      echo "<tr><td>GPA = 3.50</td></tr>";
    } elseif ($sum >= 70) {
      echo "<tr><td>GPA = 3.00</td></tr>";
    } elseif ($sum >= 65) {
      echo "<tr><td>GPA = 2.50</td></tr>";
    } elseif ($sum >= 60) {
      echo "<tr><td>GPA = 2.00</td></tr>";
    } elseif ($sum >= 55) {
      echo "<tr><td>GPA = 1.50</td></tr>";
    } elseif ($sum >= 50) {
      echo "<tr><td>GPA = 1.00</td></tr>";
    } else {
      echo "<tr><td>GPA = 0.00</td></tr>";
      echo "<tr><td><h3>Don't give up!!</h3></td></tr>";
    }
    ?>
  </table>
  <p>
    <a href="Grading.php">Back</a>
    <br><br>
    <a href="index.php">Home</a>
  </p>
  <p><strong>By Nabphrapond Wongsansern</strong></p>
</body>
</html>
