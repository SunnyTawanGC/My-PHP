<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
    <meta charset="UTF-8">
    <title> ผลลัพธ์ </title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body BGCOLOR="#ffffff">
    <font size="9" color="#ff0080"><center>เครื่องคำนวณแยกเหรียญและธนบัตร</font></center>
    <br>
    <?php
    $money = $_POST['money'];
    ?>

<br><center>
<table border="1" bgcolor="#d6c0fe">
<tr>
    <td style="background-color: #ff0080; color: white; font-weight: bold; padding: 10px;">
        <?php
        $rem = $money / 1000;
        $rem = floor($rem);
        echo " 1) แบงก์ 1000 บาท $rem ใบ";
        $money = $money % 1000;
        ?>
    </td>
</tr>
<tr>
    <td style="background-color: #ff6cb6; color: white; font-weight: bold; padding: 10px;">
        <?php
        $rem = $money / 500;
        $rem = floor($rem);
        echo " 2) แบงก์ 500 บาท  $rem ใบ";
        $money = $money % 500;
        ?>
    </td>
</tr>
<tr>
    <td style="background-color: #ff0080; color: white; font-weight: bold; padding: 10px;">
        <?php
        $rem = $money / 100;
        $rem = floor($rem);
        echo " 3) แบงก์ 100 บาท  $rem ใบ";
        $money = $money % 100;
        ?>
    </td>
</tr>
<tr>
    <td style="background-color: #ff6cb6; color: white; font-weight: bold; padding: 10px;">
        <?php
        $rem = $money / 50;
        $rem = floor($rem);
        echo " 4) แบงก์ 50 บาท  $rem ใบ";
        $money = $money % 50;
        ?>
    </td>
</tr>
<tr>
    <td style="background-color: #ff0080; color: white; font-weight: bold; padding: 10px;">
        <?php
        $rem = $money / 20;
        $rem = floor($rem);
        echo " 5) แบงก์ 20 บาท $rem ใบ";
        $money = $money % 20;
        ?>
    </td>
</tr>
<tr>
    <td style="background-color: #ff6cb6; color: white; font-weight: bold; padding: 10px;">
        <?php
        $rem = $money / 10;
        $rem = floor($rem);
        echo " 6) เหรียญ 10 บาท $rem เหรียญ";
        $money = $money % 10;
        ?>
    </td>
</tr>
<tr>
    <td style="background-color: #ff0080; color: white; font-weight: bold; padding: 10px;">
        <?php
        $rem = $money / 5;
        $rem = floor($rem);
        echo " 7) เหรียญ 5 บาท    $rem เหรียญ";
        $money = $money % 5;
        ?>
    </td>
</tr>
<tr>
    <td style="background-color: #ff6cb6; color: white; font-weight: bold; padding: 10px;">
        <?php
        $rem = $money / 2;
        $rem = floor($rem);
        echo " 8) เหรียญ 2 บาท $rem เหรียญ";
        $money = $money % 2;
        ?>
    </td>
</tr>
<tr>
    <td style="background-color: #ff0080; color: white; font-weight: bold; padding: 10px;">
        <?php
        $rem = $money / 1;
        $rem = floor($rem);
        echo " 9) เหรียญ 1 บาท $rem เหรียญ";
        $money = $money % 1;
        ?>
    </td>
    
        </tr>
<style>
		input[type="submit"], input[type="reset"], .button {
    padding: 5px 20px;
    font-size: 16px;
    background-color: #ff0080;
    color: #ffffff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    text-transform: uppercase;
}

input[type="submit"]:hover, input[type="reset"]:hover, .button:hover {
    background-color: #ff6cb6;
}

.bank-note {
    background-color: #ff0080;
    color: white;
    font-weight: bold;
    padding: 10px;
}

p {
    font-size: 18px;
    color: #004080;
    text-transform: uppercase;
}

</style>

    </table>
    </center>
    <br><br><center>
    <center>
        <a href="เครื่องแยกเงิน1.php" class="button">Back</a>
        <a href="index.php" class="button">Home</a>
    </center>
    <br></br><font size="5" color="#ff64b1 "><center>By Nabphrapond Wongsansern</center></font>
</body>
</html>
