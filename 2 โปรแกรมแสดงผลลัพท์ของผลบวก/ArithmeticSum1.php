<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Arithmetic Sum</title>
  <style>
    body {
      background-color: #ffccff;
      font-family: Arial, sans-serif;
      text-align: center;
    }
    h1 {
      color: #3366cc;
      font-size: 32px;
    }
    h2 {
      color: #0099ff;
      font-size: 24px;
    }
    p {
      font-size: 20px;
      color: #9900cc;
    }
    input[type="submit"], input[type="reset"] {
      background-color: #3366ff;
      color: white;
      padding: 10px 20px;
      font-size: 18px;
      border: none;
      cursor: pointer;
    }
    input[type="submit"]:hover, input[type="reset"]:hover {
      background-color: #0033cc;
    }
    a {
      color: #3366cc;
      text-decoration: none;
      font-size: 20px;
    }
  </style>
</head>
<body BGCOLOR="#ffccff">
  <font size="9" color="#3366cc"><center>Arithmetic Sum Program</font></center>
  <br>
  <br>
  
  <br><br>
  <?php
  $a = $_POST['a'];
  $sum = 0;
  for ($i = 1; $i <= $a; $i++) {
    $sum = $sum + $i;
  }
  echo "<h2>ผลรวมตั้งแต่ 1 ถึง $a คือ $sum</h2>";
  ?>
  <p><br><br><a href="ArithmeticSum.php">Back</a></p>
  <p><a href="index.php">Home</a></p>
  <p style="font-size: 20px; color: #0099ff;">By Nabphrapond Wongsansern</p>
</body>
</html>
