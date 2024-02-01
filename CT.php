<?php
session_start();
$_SESSION['username'] ?? header("Location: Clogin.php");
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
            width: 30%;
            font-weight: bolder;
        }
        .details
        {
            font-size: 20px;
            font-weight: bolder;
            text-align: center;
        }
        .details a
        {
            text-decoration: none;
            display: block;
            color: black;
            border: 2px solid black;
            padding: 5px;
            margin: 3px;
            border-radius: 10px;
        }
        .details a:hover
        {
            background-color: black;
            color: white;
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
    <?php
    $qr = false;
    $m = new mysqli("localhost","root","","shivank");
    // echo $m->connect_error ? die("<b><big><strong>Could Not Connect....".$m->connect_error."</strong></big></b>") :
    // "<b><big><strong>Database Connected Successfully</strong></big></b> <br>";
    $qr = true;
    $qr = $m->query("Create Database if not exists Shivank");
    $qr = $m->query("select * from tab1 where Account = '{$_SESSION['account']}'");
    $i = 1;
    while($data = $qr->fetch_assoc())
    {
        echo "($i)";
        foreach($data as $k=>$v)
        {
            if($v!=0 && $k!='Account')
            {
                echo "<b><big><strong> $k: </strong></big></b>";
                echo "<b><big><strong>$v </strong></big></b>";
            }
        }
        echo "<br><hr>";
        $i++;
    }
    $m->close();
    ?>
    <div class="back"><a href="Cpage.php">Back</a></div>
    </div>
    <?php

    ?>
</body>
</html>
