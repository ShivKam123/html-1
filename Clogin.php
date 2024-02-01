<?php
session_start();
// isset($_COOKIE['user']) ? header("Location: Cpage.php") : "";
// isset($_SESSION['account']) ? header("Location: Cpage.php") : "";
isset($_SESSION['username']) ? header("Location: Cpage.php") : "";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lena State Bank </title>
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
<body style="font-weight: bolder;">
    <center><img src="LSB-logo.png" alt="" height="100px"></center>
    <div class="from">
    <center>
        <form action="" style="margin-bottom: -10px; font-size: 20px;"  method="post">
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
        </form>
        <div class="back"><a href="CFP.html">Forgot Password</a><hr><a style="margin-top:-10px" href="Bank.php">Back</a></div>
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
    // echo "select * from lena where username='{$_REQUEST['username']}'";
    $data = $m->query("select * from lena where username='{$_REQUEST['username']}' and password='{$_REQUEST['password']}' ");
    $d = $data->fetch_assoc();
    if (isset($d))   
    {
        // echo $d['Account'];
        // var_dump($d);
        $_SESSION['account']=$d['Account'];
        $_SESSION['username']=$d['Username'];
        header("Location: Cpage.php");
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