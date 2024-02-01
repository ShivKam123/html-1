<!-- <?php
session_start();
$_SESSION['emp'] ?? header("Location: Elogin.php");
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
    $qr = $m->query("update lena set Password = '{$_REQUEST['new']}' WHERE Account = '{$_SESSION['account']}'");
    // var_dump($qr);
    echo "<b><big><strong>Done...<br>New Password is '{$_REQUEST['new']}'</strong></big></b>";
    $m->close();
    ?>
    <br><hr><div class="back"><a href="ECP.php">Back</a></div>
    </center>
    </div>
</body>
</html>
