<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
  <meta charset="UTF-8">
  <title>Grading</title>
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

    form {
      margin: 20px;
      padding: 20px;
      border: 1px solid #ccc;
      border-radius: 10px;
      background-color: #ffffff;
      display: inline-block;
      text-align: left;
    }

    input[type="text"] {
      width: 100%;
      padding: 10px;
      font-size: 16px;
      margin: 5px 0;
      border: 1px solid #ccc;
      border-radius: 5px;
    }

    input[type="submit"], input[type="reset"] {
      width: 100px;
      height: 30px;
      background-color: #ff0066;
      color: #ffffff;
      border: none;
      border-radius: 5px;
      font-size: 16px;
      margin: 10px;
      cursor: pointer;
    }

    a {
      color: #000000;
      text-decoration: none;
    }

    .center {
      text-align: center;
    }
  </style>
</head>
<body>
  <h1>Grading program</h1>
  <form method="POST" action="Grading1.php">
    <input type="text" name="name" placeholder="Name"><br>
    <input type="text" name="sur" placeholder="Surname"><br>
    <input type="text" name="sub" placeholder="Subject"><br>
    <p>Please enter your points (full 20 points)</p>
    <input type="text" name="t1" placeholder="1st exam point (20)"><br>
    <input type="text" name="t2" placeholder="2nd exam point (20)"><br>
    <input type="text" name="t3" placeholder="3rd exam point (20)"><br>
    <input type="text" name="t4" placeholder="4th exam point (20)"><br>
    <input type="text" name="t5" placeholder="5th exam point (20)"><br>
    <input type="submit" value="Submit">
    <input type="reset" value="Reset">
  </form>

  <p><strong>By Nabphrapond Wongsansern</strong></p>
</body>
</html>
