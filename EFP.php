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
            /* margin-top: -10px; */
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
//     "<b><big><strong>Database Connected Successfully</strong></big></b> <br>";

$qr = true;
$qr = $m->query("Create Database if not exists Shivank");
$qr = $m->query("select * from empl where username='{$_REQUEST['ui']}'");
$data = $qr->fetch_assoc();
foreach($data as $k=>$v)
{
    if($k == 'Account')
    {
        echo "<b><big><strong>Account Number: $v</strong></big></b><br>";
    }
    if($k == 'Username')
    {
        echo "<b><big><strong>Username: $v</strong></big></b><br>";

    }
    if($k == 'Password')
    {
        echo "<b><big><strong>Password: $v</strong></big></b><br>";
    }
}
$m->close();
// echo $qr ? "Command Run Successfully" : "Command Failed";
?>
    <div class="back"><a href="Elogin.php">Go Back</a></div>
    </center>
    </div>
</body>
</html>
