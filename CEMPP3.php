<?php
session_start();
// isset($_COOKIE['emp']) ? header("Location: Epage.php") : "";
isset($_SESSION['emp']) ?? header("Location: Elogin.php");
?>
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
            width: 25%;
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
            margin-top: 6px;
            margin-bottom: -15px;
            /* width: 100px; */
        }
        .back :hover
        {
            font-size: 22px;
            color: red;
        }
    </style>
</head> 
<body style="font-weight: bolder;">
    <center><img src="LSB-logo.png" alt="" height="100px"></center>
    <div class="from">
    <center>
        <?php
        $m = new mysqli("localhost","root","","shivank");
        $qr = true;
        $qr = $m->query("Create Database if not exists shivank");
        // echo "Username: ";echo $_SESSION['emp'];
        // echo "Password: ";echo $_REQUEST['password'];
        $qr = $m->query("update empl set Password = '{$_REQUEST['password']}' WHERE Username = '{$_SESSION['emp']}'");
        // var_dump($qr);
        echo "<b><big><strong>Done...<br>New Password is '{$_REQUEST['password']}'</strong></big></b>";
        $m->close();
        ?>
        <hr><div class="back"><a href="Epage.php">Back</a></div>
    </center>
    </div>
</body>
</html>