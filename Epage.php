<?php
session_start();
if(isset($_GET['signout']))
{
    session_destroy();
    header("Location: Clogin.php");
}
$_SESSION['emp'] ?? header("Location: Elogin.php");
// $_COOKIE['emp'] ?? header("Location: Elogin.php");
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
        echo "<b><big><strong>Username: ";
        echo $_SESSION['emp']; 
        echo "</strong></big></b>";
        ?>
    </center>
    <div class="details">
        <a href="EMT.php">Money Transfer</a>
        <a href="ECB.php">Check Balance</a>
        <a href="EAD.php">Account Details</a>
        <a href="Edeposit.php">Deposit</a>
        <a href="Edraw.php">Withdrawal</a>
        <a href="EBA">Bank Accounts</a>
        <a href="ECP.php">Change Customer Password</a>
        <a href="UCD.php">Update Customer Details</a>
        <a href="ET.php">Transation History</a>
        <a href="CEMPP.php">Change Employee Password</a>
    </div>
    <br><hr><div class="back"><a href="?signout"><b><big><strong>Back</strong></big></b></a></div>
    </div>
</body>
</html>