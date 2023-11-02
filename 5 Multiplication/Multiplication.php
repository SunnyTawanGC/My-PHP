<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Multiplication</title>
  <style>
    body {
      background-color: #f0f0f0; 
      font-family: Arial, sans-serif;
    }
    .container {
      text-align: center;
      margin: 20px;
    }
    .title {
      font-size: 36px;
      color: #4286f4;
    }
    .author {
      font-size: 24px;
      color: #FFA500;
    }
    form {
      margin: 20px;
    }
    input[type="text"] {
      padding: 10px;
      border: 2px solid #FFA500; 
      border-radius: 5px;
      font-size: 18px;
    }
    input[type="submit"], input[type="reset"] {
      padding: 10px 20px;
      background-color: #4286f4; 
      color: white; 
      border: none;
      border-radius: 5px;
      font-size: 18px;
      margin-right: 10px;
      cursor: pointer;
    }
    a {
      text-decoration: none;
      color: #FFA500; 
      font-size: 18px;
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="title">Multiplication</div>
    <form method="POST" action="Multiplication1.php">
      ต้องการแม่สูตรคูณแม่ : <input type="text" name="a" placeholder="โปรดระบุตัวเลข"><br><br>
      <input type="submit" value="OK">
      <input type="reset" value="Clean">
    </form>
    <div class="author">By Nabphrapond Wongsansern</div>
  </div>
</body>
</html>
