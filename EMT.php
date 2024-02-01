<?php
session_start();
$_SESSION['emp'] ?? header("Location: Elogin.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lena State Bank</title>
    <style>
        .form
        {
            border: 15px solid #e7e7e7;
            padding: 20px;
            max-width: 720px;
            margin: 20px auto 0;
            width: 25%;
            font-weight: bolder;
        }
        .back
        {
            font-size: 20px;
            font-weight: bolder;
            text-align: center;
        }
        .back a
        {
            text-decoration: none;
            display: block;
            color: black;
            /* border: 2px solid black; */
            /* padding: 5px; */
            margin-top: -5px;
            margin-bottom: -10px;
            /* width: 100px; */
        }
        .back :hover
        {
            font-size: 22px;
            color: red;
        }
    </style>
</head>
<body>
<center><img src="LSB-logo.png" alt="" height="100px"></center>
    <div class="form">
    <center>
        <form action="" method="post" style="margin-bottom: -10px; font-size: 20px;" >
            <table>
                <tr>
                    <td><label for="from">From Account:</label></td>
                    <td><input name="from" type="text"></td>
                </tr>
                <tr>
                    <td><label for="to">To Account:</label></td>
                    <td><input name="to" type="text"></td>
                </tr>
            </table>
            <button style="cursor: pointer; margin-top: 10px; margin-bottom: -20px;" type="submit">Submit</button> <button style="cursor: pointer;" type="reset">Reset</button> <br>
            <hr><div class="back"><a href="Epage.php"><b><big><strong>Back</strong></big></b></a></div>
        </form>
    <?php
    if(isset($_REQUEST['from']))
    {
    $qr = 0;
    $m = new mysqli("localhost","root","","shivank");
    $qr = true;
    $qr = $m->query("Create Database if not exists shivank");
    $from = 0;
    $to = 0;
    $data = $m->query("select * from lena");
    while($d = $data->fetch_assoc())
    {
        foreach($d as $k=>$v)
        {
            if($v == $_REQUEST['from'])
            {
                $from = $v;
            }
            if($v == $_REQUEST['to'])
            {
                $to = $v;
            }
        }
    }
    if($from == 0)
    {
        echo "<br>From Account Number is Invalid";
    }
    else if($to == 0)
    {
        echo "<br>To Account Number is Invalid";
    }
    else
    {
        $_SESSION["from"] = $_REQUEST['from'];
        $_SESSION["to"] = $_REQUEST['to'];
        header("Location: EMT2.php");
    }
    $m->close();
    }
    ?>
    </center>
    </div>
</body>
</html>