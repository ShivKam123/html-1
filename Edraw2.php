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
    <center>
        <?php
        $qr = true;
        $m = new mysqli("localhost","root","","shivank");
        $qr = true;
        $qr = $m->query("Create Database if not exists shivank");
        // var_dump($qr);
        // echo "Account Number: '{$_SESSION['account']}'";
        $qr = $m->query("select * from lena where Account = '{$_SESSION['account']}'");
        $data = $qr->fetch_assoc();
        // var_dump($data);
        $amount;
        $draw;
        foreach($data as $k => $v)
        {
            if($k == 'Amount')
            {
                $amount = $v;
            }
            if($k == 'Withdrawal')
            {
                $draw = $v;
            }
        }
        if($amount>=$_REQUEST['amount'])
        {
            $amount = $amount-$_REQUEST['amount'];
            $draw = $draw+$_REQUEST['amount'];
            $qr = $m->query("update lena set Amount = $amount , Withdrawal = $draw WHERE Account = '{$_SESSION['account']}'");
            $date = date("d/M/y");
            $time = date("h:m:s");
            $qr = $m->query("insert into tab1(Account,Withdrawal,Deposit,Time,Date) values('{$_SESSION['account']}','{$_REQUEST['amount']}','0','$time','$date')");
            echo "<b><big><strong>Amount has been Withdrawal: {$_REQUEST['amount']}</strong></big></b><br>";
            echo "<b><big><strong>Balance: $amount</strong></big></b>";
        }
        else
        {
            echo "<b><big><strong>Insufficient Balance</strong></big></b><br>";
            echo "<b><big><strong>Balance: $amount</strong></big></b>";
        }
        $m->close();
        ?>
    </center>
    <br><hr><div class="back"><a href="Edraw.php">Back</a></div>
    </div>
</body>
</html>