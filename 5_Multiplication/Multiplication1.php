<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Multiplication</title>
  <style>
    body {
      background-color: #f0f0f0;
      font-family: Arial, sans-serif;
      text-align: center;
    }
    h1 {
      font-size: 36px;
      color: #4286f4; 
    }
    h2 {
      font-size: 24px;
      color: #FFA500; 
    }
    p {
      font-size: 18px;
    }
    a {
      text-decoration: none;
      color: #FFA500; 
      font-size: 18px; 
    }
  </style>
</head>
<body>
  <h1>Multiplication</h1>
  
  <?php
    $a = $_POST['a'];
    echo "<p>สูตรคูณแม่ $a</p>";
    for ($i = 1; $i <= 12; $i++) {
      echo "<p>$i x $a = " . $i * $a . "</p>";
    }
  ?>
  <br><a href="Multiplication.php">Back</a>
  <h2>By Nabphrapond Wongsansern</h2>
</body>
</html>
