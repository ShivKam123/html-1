<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lena State Bank</title>
    <style>
        .from
        {
            border: 15px solid #e7e7e7;
            padding: 20px;
            max-width: 720px;
            margin: 20px auto 0;
            width: 100%;
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
            padding: 5px;
            /* margin-top: -10px; */
            margin-bottom: -20px;
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
<div class="from">
<center>
<?php
$cn = $_REQUEST['cn'];
// $s = $_REQUEST['sc'];
// $c = $_REQUEST['sc'];
// $b = $_REQUEST['sb'];
$p = $_REQUEST['cmn'];
$e = $_REQUEST['cei'];
$user = $_REQUEST['username']; 
$password = $_REQUEST['password']; 
$address = $_REQUEST['address'];
$m = new mysqli("localhost","root","","shivank");
// echo $m->connect_error ? die("<b><big><strong>Could Not Connect....".$m->connect_error."</strong></big></b>") :
// "<b><big><strong>Database Connected Successfully</strong></big></b> <br>";
$qr = true;
$qr = $m->query("Create Database if not exists shivank");
$qr = $m->query("insert into empl(Name,Number,Email,Address,Username,Password) 
                values('$cn','$p','$e','$address','$user','$password')");
var_dump($qr);
$m->close();
// echo $qr ? "<b><big><strong>Command Run Successfully</strong></big></b>" : "<b><big><strong>Command Failed</strong></big></b>";
// header("Location:SAform.html");

// echo $data;
echo "<hr>";
echo "<b><big><strong>Your Username is $user</strong></big></b><br>";
echo "<b><big><strong>Your Password is $password</strong></big></b><br>";
echo "<hr>";
?>
<div class="back"><a href="Bank(1).php">Back</a></div>
</center>
</div>
</body>
</html>