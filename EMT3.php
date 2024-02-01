<!-- <?php
session_start();
$_SESSION['emp'] ?? header("Location: Clogin.php");
// $_SESSION['from'] ?? header("Location: MT.php");
// $_SESSION['account'] ?? header("Location: MT.php");
// $_COOKIE['from'] ?? header("Location: MT.php");
?> -->
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
    $qr = false;
    $m = new mysqli("localhost","root","","shivank");
    // echo $m->connect_error ? die("<b><big><strong>Could Not Connect....".$m->connect_error."</strong></big></b>") : 
    //                             "<b><big><strong>Database Connected Successfully</strong></big></b>";
    $qr = true;
    $draw=0;
    $amount=0;
    $account=0;
    $qr = $m->query("select * from lena where Account='{$_SESSION['from']}'");
    $data = $qr->fetch_assoc();
    foreach($data as $k=> $v)
    {
        if($k == 'Account')
        {
            $account = $v;
            // echo "$k: ";
            // echo "$v<br>";
        }
        if($k == 'Amount')
        {
            $amount = $v;
            // echo "$k: ";
            // echo "$v<br>";
        }
        if($k == 'Withdrawal')
        {
            $draw = $v;
            // echo "$k: ";
            // echo "$v<br>";
        } 
    }
    $amount2=0;
    $deposit=0;
    $account2=0;
    $qr = $m->query("select * from lena where Account='{$_SESSION['to']}'");
    $data = $qr->fetch_assoc();
    foreach($data as $k=> $v)
    {
        if($k == 'Account')
        {
            $account2 = $v;
            // echo "$k: ";
            // echo "$v<br>";
        }
        if($k == 'Amount')
        {
            $amount2 = $v;
            // echo "$k: ";
            // echo "$v<br>";
        }
        if($k == 'Deposit')
        {
            $deposit = $v;
            // echo "$k: ";
            // echo "$v<br>";
        }
    }
    if($amount>=$_REQUEST['amount'])
    {
        $amount = $amount - $_REQUEST['amount'];
        $draw = $draw + $_REQUEST['amount'];
        $amount2 = $amount2 + $_REQUEST['amount'];
        $deposit = $deposit + $_REQUEST['amount'];
        // echo "<br>From Amount is $amount and Withdrawal is $draw";
        // echo "<br>To Amount is $amount2 and Deposit is $deposit<br>";
        echo "<br><b><big><strong>'{$_REQUEST['amount']}' is debited from your account</strong></big></b><br>";
        // echo $_SESSION['account'];
        // echo "<br>";
        // echo $_SESSION['to'];
        $qr = $m->query("update lena set Amount = $amount , Withdrawal = $draw WHERE Account = '{$_SESSION['from']}'");
        // var_dump($qr);
        $qr = $m->query("update lena set Amount = $amount2 , Deposit = $deposit WHERE Account = '{$_SESSION['to']}'");
        // var_dump($qr);
        $date = date("d/M/y");
        $time = date("h:m:s");
        $qr = $m->query("insert into tab1(Account,Withdrawal,Deposit,Time,Date) values('{$_SESSION['from']}','$draw','0','$time','$date')");
        $qr = $m->query("insert into tab1(Account,Withdrawal,Deposit,Time,Date) values('{$_SESSION['to']}','0','$deposit','$time','$date')");
    }
    else
    {
        echo "Unsufficient Balance: $amount";
    } 
    $m->close();
    ?>
    <hr><div class="back" ><a href="EMT.php"><b><big><strong>Back</strong></big></b></a></div>
    </center>
    </div>
</body>
</html>
