<?php
session_start();
// setcookie("user",$_REQUEST['user'],time()-3600);
if(isset($_GET['signout']))
{
    // setcookie("user","",time()-3600);
    session_destroy();
    header("Location: Clogin.php");
}
// $_SESSION['account'] ?? header("Location: Clogin.php");
$_SESSION['username'] ?? header("Location: Clogin.php");
// $_COOKIE['user'] ?? header("Location: Clogin.php");
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
            padding: 5px;
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
    <div class="details">
        <?php 
        echo "Account Number: ";
        echo $_SESSION['account'];
        echo "<br>Username: ";
        echo $_SESSION['username'];
        ?>
        <a href="MT.php">Money Transfer</a>
        <a href="CCB.php">Check Balance</a>
        <a href="CAD.php">Account Details</a>
       <a href="CCP.php">Change Password</a>
       <a href="CT.php">Transation History</a>
    </div>
    <div class="back"><a href="?signout">Back</a></div>
    </div>
    <?php

    ?>
</body>
</html>