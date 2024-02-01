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
    <form action="http://localhost/Lena Bank/ECP3.php" style="margin-bottom: -10px; font-size: 20px;"  method="post">
            <table>
                <tr>
                    <td><label for="new">New Password:</label></td>
                    <td><input name="new" type="text"></td>
                </tr>
            </table>
            <button style="cursor: pointer;" type="submit">Submit</button> <button style="cursor: pointer;" type="reset">Reset</button>
        </form>
    <br><hr><div class="back"><a href="ECP.php">Back</a></div>
    </center>
    </div>
</body>
</html>
