<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
    <meta charset="UTF-8">
    <title>Calculator</title>
    <style>
        body {
            background: linear-gradient(to bottom, #d3c1e6, #FFFFFF);
            text-align: center;
        }

        h1 {
            font-size: 50px;
            color: #004080;
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
            background-color: #004080;
            color: #FFFFFF;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-transform: uppercase;
        }

        input[type="submit"]:hover, input[type="reset"]:hover {
            background-color: #590caf;
        }

        p {
            font-size: 18px;
            color: #590caf;
            text-transform: uppercase;
        }
    </style>
</head>
<body>
    <h1>Calculator</h1>
    <form method="POST" action="Calculator1.php">
        <input type="text" name="a" placeholder="A"><br><br>
        <input type="text" name="b" placeholder="B"><br><br>
        <input type="submit" value="Calculate">
        <input type="reset" value="Clear">
    </form>
    <p>By Nabphrapond Wongsansern</p>
</body>
</html>
