<!-- <?php
session_start();
// setcookie("from",$_REQUEST['from'],time()-3600);
if(isset($_GET['signout']))
{
    // setcookie("user","",time()-3600);
    session_destroy();
    header("Location: MT.php");
}
$_SESSION['username'] ?? header("Location: Clogin.php");
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
            padding: 5px;
            margin-top: -10px;
            margin-bottom: -20px;
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
    $amount2;
    $deposit;
    $qr = true;
    $qr = $m->query("select * from lena where Account='{$_SESSION['to']}'");
    $data = $qr->fetch_assoc();
    foreach($data as $k=> $v)
    {
        if($k == 'Account')
        {
            echo "$k: ";
            echo "$v<br>";
        }
        if($k == 'Name')
        {
            echo "$k: ";
            echo "$v<br>";
        }
        if($k == 'Number')
        {
            echo "$k: ";
            echo "$v<br>";
        }
    }
    $m->close();
    ?>
        <form action="http://localhost/Lena Bank/MT3.php" method="post" style="margin-bottom: -10px; font-size: 20px;" >
            <table>
                <tr>
                    <td><label for="amount">Enter Amount:</label></td>
                    <td><input name="amount" type="text"></td>
                </tr>
            </table>
            <button style="cursor: pointer;" type="submit">Submit</button> <button style="cursor: pointer;" type="reset">Reset</button>
            <hr><div class="back" ><a href="MT.php">Back</a></div>
        </form>
    </center>
    </div>
</body>
</html>