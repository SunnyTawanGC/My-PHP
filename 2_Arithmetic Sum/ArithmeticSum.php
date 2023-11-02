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
    form {
      margin: 20px;
    }
    input[type="text"] {
      padding: 5px;
      font-size: 16px;
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
      color: #0099ff;
      text-decoration: none;
      font-size: 20px;
    }
  </style>
 </head>
 <body>
  <h1>Arithmetic Sum Program</h1>
  <form method="POST" action="ArithmeticSum1.php">
    <label for="a" style="font-size: 20px; color: #3366ff;">จำนวนสุดท้ายของการบวก</label>
    <input type="text" name="a" placeholder="ใส่ตัวเลข" style="font-size: 20px;"><br><br>
    <input type="submit" value="OK">
    <input type="reset" value="Clean">
  </form>
  <a href="index.php">Home</a>
  <p style="font-size: 20px; color: #0099ff;">By Nabphrapond Wongsansern</p>
 </body>
</html>
