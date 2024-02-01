<?php
session_start();
// isset($_COOKIE['emp']) ? header("Location: Epage.php") : "";
isset($_SESSION['emp']) ? header("Location: Epage.php") : "";
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
        <form action="" method="post" style="margin-bottom: -10px; font-size: 20px;" >
            <table>
                <tr>
                    <td><label for="username">Username:</label></td>
                    <td><input name="username" type="text"></td>
                </tr>
                <tr>
                    <td><label for="password">Password:</label></td>
                    <td><input name="password" type="text"></td>
                </tr>
            </table>
            <button style="cursor: pointer;" type="submit">Submit</button> <button style="cursor: pointer;" type="reset">Reset</button>
            <div class="back"><a style="margin-bottom: -10px; href="EFP.html">Forgot Password</a></div><div class="back">
                <hr><a style="margin-top: -10px;" href="Bank.php">Back</a></div>
        </form>
        <?php
    if(isset($_REQUEST['username']))
    {
    $qr = 0;
    $m = new mysqli("localhost","root","","shivank");
    $qr = true;
    $qr = $m->query("Create Database if not exists shivank");
    $vr = 0;
    $username = 0;
    $password = 0;
    // echo "Username = {$_REQUEST['username']}";
    $qr = $m->query("select * from empl where Username = '{$_REQUEST['username']}' and Password = '{$_REQUEST['password']}'");
    // var_dump($qr);
    $data = $qr->fetch_assoc();
    if (isset($data))   
    {
        // var_dump($data);
        $_SESSION['emp']=$data['Username'];
        header("Location: Epage.php");
    } 
    else 
    {
        echo "<br><b><big><strong>Authentication Failed</strong></big></b>";
    }
    $m->close();
    }
    ?>
    </center>
    </div>
</body>
</html>