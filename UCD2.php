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
        .text
        {
            width: 300px; 
            height: 25px;
            text-align: center; 
            font-size: 15px; 
            font-weight: bold;
        }
    </style>
</head>
<body>
    <center><img src="LSB-logo.png" alt="" height="100px">
    <div class="form">
        <form action="http://localhost/Lena Bank/UCD3.php" method="post">
            <table>
                <tr>
                    <td style="text-align: center;"><select name="work" id="" class="text">
                        <option value="0"  class="text">Select Option</option>
                        <option value="Name"  class="text">Name</option>
                        <option value="Number"  class="text">Number</option>
                        <option value="Email" class="text">Email</option>
                        <option value="Address" class="text">Address</option>
                        <option value="Username" class="text">Username</option>
                        <option value="Password" class="text">Password</option>
                    </select></td>
                </tr>
                <tr>
                    <td>
                        <input type="text" name="data" class="text">
                    </td>
                </tr>
            </table>
            <br><button type="submit">Submit</button> <button type="reset">Reset</button>
        </form>
    <hr><div class="back"><a href="UCD.php">Back</a></div>
    </div>
</center>
</body>
</html>