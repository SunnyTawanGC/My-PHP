<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" >
<html>
 <head>
<meta charset="UTF-8">
<title> แยกเหรียญและธนบัตร </title>
<style>
body {
    background-color: #ffffff;
    text-align: center;
    font-family: Roboto, sans-serif;
}

h1 {
    font-size: 50px;
    color: #ff0080;
    text-transform: uppercase;
}

form {
    text-align: center;
    margin: 50px;
}

input[type="text"] {
    padding: 5px;
    border: 1px solid #004080;
    border-radius: 5px;
    font-size: 16px;
}

input[type="submit"], input[type="reset"] {
    padding: 5px 20px;
    font-size: 16px;
    background-color: #ff0080;
    color: #ffffff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    text-transform: uppercase;
}

input[type="submit"]:hover, input[type="reset"]:hover {
    background-color: #ff6cb6;
}

p {
    font-size: 18px;
    color: #004080;
    text-transform: uppercase;
}
</style>
 </head>
 <body>
 <font size="9" color="#ff0080  "><center>เครื่องคำนวณแยกเหรียญและธนบัตร</font></center>
 <br>

<br><center><form method="POST" action="เครื่องแยกเงิน2.php">
			<input type="text"name="money" placeholder="จำนวนเงิน"><br><br>
			<input type = "submit" value="ok">
			<input type ="reset"value="clean">
		</form></center>

		<font size="5" color="#ff6cb6 "><center>By Nabphrapond Wongsansern</center></font>

 </body>
</html>
