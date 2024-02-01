<?php
session_start();
$_SESSION['emp'] ?? header("Location: Elogin.php");
// $_SESSION['from'] ?? header("Location: MT.php");
// $_SESSION['account'] ?? header("Location: MT.php");
// $_COOKIE['from'] ?? header("Location: MT.php");
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
            width: 28%;
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
            margin-top: 10px;
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
                    <td><label for="account">Enter Account No. :</label></td>
                    <td><input name="account" type="text"></td>
                </tr>
            </table>
            <button style="cursor: pointer;" type="submit">Submit</button> <button style="cursor: pointer;" type="reset">Reset</button>
        </form><br>
        <hr><div class="back"><a href="Epage.php">Back</a></div>
    <?php
    if(isset($_REQUEST['account']))
    {
    $qr = 0;
    $m = new mysqli("localhost","root","","shivank");
    $qr = true;
    $qr = $m->query("Create Database if not exists shivank");
    $qr = $m->query("select * from lena where Account = '{$_REQUEST['account']}'");
    $data = $qr->fetch_assoc();
    if(isset($data))
    {
        $_SESSION["account"] = $_REQUEST['account'];
        header("Location: EAD2.php");
    }
    else
    {
        echo "<br><b><big><strong>Invalid Account Number</strong></big></b>";
    }
    $m->close();
    }
    ?>
    </center>
    </div>
</body>
</html>