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
            /* padding: 5px; */
            margin-top: 5px;
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
        <?php
        echo "<b><big><strong>Username: {$_SESSION['emp']}</strong></big></b>"
        ?>
        <form action="http://localhost/Lena Bank/CEMPP3.php" method="post" style="margin-bottom: -10px; font-size: 20px;" >
            <table>
                <tr>
                    <td><label for="password">New Password:</label></td>
                    <td><input name="password" type="text"></td>
                </tr>
            </table>
            <button style="cursor: pointer;" type="submit">Submit</button> <button style="cursor: pointer;" type="reset">Reset</button>
            <hr><div class="back"><a href="CEMPP.php">Back</a></div>
        </form>
    </center>
    </div>
</body>
</html>