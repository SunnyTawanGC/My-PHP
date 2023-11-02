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

        table {
            background-color: #e1e1f0;
            border: 1px solid #004080;
            width: 300px;
            margin: 0 auto;
        }

        td {
            padding: 10px;
        }

        p {
            font-size: 18px;
            color: #590caf;
            text-transform: uppercase;
        }

        .link-container {
            font-size: 16px;
            text-transform: uppercase;
            margin-top: 20px;
        }

        .link-container a {
            display: inline-block;
            padding: 10px 20px;
            color: #004080;
            text-decoration: none;
            border: 1px solid #004080;
            border-radius: 5px;
            margin: 0 10px;
        }

        .link-container a:hover {
            background-color: #004080;
            color: #FFFFFF;
        }
    </style>
</head>
<body>
    <h1>Calculator</h1>
    <table>
        <tr>
            <?php
            $a = $_POST['a'];
            $b = $_POST['b'];
            $sum = $a + $b;
            echo "<td>1. Sum:  = $sum</td></tr>";
            $sum = $a - $b;
            echo "<tr><td>2. Difference:  = $sum</td></tr>";
            $sum = $a * $b;
            echo "<tr><td>3. Product:  = $sum</td></tr>";
            $sum = $a / $b;
            echo "<tr><td>4. Quotient:  = $sum</td></tr>";
            $sum = $a % $b;
            echo "<tr><td>5. Modulo:    = $sum</td></tr>";
            ?>
        </tr>
    </table>
    <p>By Nabphrapond Wongsansern </p>
    <div class="link-container">
        <a href="Calculator.php">Back</a>
        <a href="index.php">Home</a>
    </div>
</body>
</html>
