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
<form action="">
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
$type = "Saving";
$a = 0;
$w = 0;
$d = 0;
$qr = false;
$m = new mysqli("localhost","root","","shivank");
// echo $m->connect_error ? die("<b><big><strong>Could Not Connect....".$m->connect_error."</strong></big></b>") :
// "<b><big><strong>Database Connected Successfully</strong></big></b> <br>";
$qr = true;
$qr = $m->query("Create Database if not exists shivank");
// var_dump($qr);
// echo "<b><big><strong>$cn</strong></big></b><br>";
// echo "<b><big><strong>$p</strong></big></b><br>";
// echo "<b><big><strong>$e</strong></big></b><br>";
// echo "<b><big><strong>$user</strong></big></b><br>";
// echo "<b><big><strong>$password</strong></big></b><br>";
// echo "<b><big><strong>$address</strong></big></b><br>";
// echo "<b><big><strong>$type</strong></big></b><br>";

// $qr = $m->query("Create Table if not exists LB(Account bigint not null auto_increment,primary key(Account),
// Name varchar(35),Number bigint(15),Email varchar(50),Address varchar(70),Username varchar(20),Password varchar(20),Amount int(20),
// Withdrawal bigint(20),Deposit bigint(20),Type varchar(10))");

// var_dump($qr);
$qr = $m->query("insert into lena(Name,Number,Email,Address,Username,Password,Amount,Withdrawal,Deposit,Type) 
                values('$cn','$p','$e','$address','$user','$password','0','0','0','$type')");
// var_dump($qr);
// echo "Username = $user and Password = $password<br>";
// echo "Username = ";echo $_REQUEST['username'];
// echo "Password = ";echo $_REQUEST['password'];
$qr = $m->query("select * from lena where Username = '{$_REQUEST['username']}' and Password = '{$_REQUEST['password']}'");
// var_dump($qr);
$n;
$data = $qr->fetch_assoc();
foreach($data as $k=>$v)
{
    if($k == 'Account')
    {
        $n = $v;
    }
    if($k == 'Username')
    {
        $user = $v;
    }
}
$m->close();
// echo $qr ? "<b><big><strong>Command Run Successfully</strong></big></b>" : "<b><big><strong>Command Failed</strong></big></b>";
// header("Location:SAform.html");

// echo $data;
echo "<hr>";
echo "<b><big><strong>Your Username is $user</strong></big></b><br>";
echo "<b><big><strong>Your Account Number is $n</strong></big></b><br>";
echo "<hr>";
?>
<div class="back"><a href="Bank(1).php">Back</a></div>
</form>
</center>
</div>
</body>
</html>