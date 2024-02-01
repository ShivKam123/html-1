<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet"
            href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script
            src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <script
            src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="shortcut icon" href="images.jpeg" type="image/x-icon">
        <title>Lena State Bank</title>
        <style>
        /*Social Media Icon*/
        .fa 
        {
            padding: 20px;
            font-size: 30px;
            width: 80px;
            text-align: center;
            text-decoration: none;
            margin: 5px 2px;
        }
        .icon a
        {
            text-decoration: none;
        }
        .fa:hover 
        {
            border: 2px solid black;
            color: white;
        }
        .fa-facebook 
        {
            background: #3B5998;
            color: white;
        }

        .fa-twitter 
        {
            background: #55ACEE;
            color: white;
        }

        .fa-google 
        {
            background: #dd4b39;
            color: white;
        }

        .fa-linkedin 
        {
            background: #007bb5;
            color: white;
        }

        .fa-youtube 
        {
            background: #bb0000;
            color: white;
        }

        .fa-instagram 
        {
            background: #125688;
            color: white;
        }
        .fa-whatsapp
        {
            background: rgb(28, 167, 28);
            color: white;
        }

        /*end*/
        body
        {
            margin: 0;
            background-color: whitesmoke;
        }
        *{
            box-sizing: border-box;
        }
        .first
        {
            overflow: hidden;
            background-color: white;
            font-weight: bolder;
            font-size: 20px;
            padding: 10px;
        }
        .first a 
        {
            color: black;
            text-align: center;
            /* padding: 14px 16px; */
            text-decoration: none;
            margin: 10px;
        }
        .first a:hover 
        {
            /* background-color: wheat; */
            /* font-size: 22px; */
            color: #f4511e;
        }
        .button 
        {
            border-radius: 15px;
            background-color: #f4511e;
            border: none;
            color: #FFFFFF;
            text-align: center;
            font-size: 20px;
            padding: 10px;
            width: 200px;
            /* transition: all 0.5s; */
            cursor: pointer;
            /* margin: 5px; */
        }
        .button span 
        {
            cursor: pointer;
            /* display: inline-block; */
            position: relative;
            transition: 0.5s;
        }
        .button span:after 
        {
            content: '\00bb';
            position: absolute;
            opacity: 0;
            top: 0;
            right: -20px;
            transition: 0.5s;
        }  
        .button:hover span 
        {
            padding-right: 25px;
        }
        .button:hover span:after 
        {
            opacity: 1;
            right: 0;
        }
        ._1
        { 
            margin: 0px;
            padding: 15px;
            /* background-color: white; */
            font-weight: bolder;
            font-size: 20px;
            /* border: 1px solid black; */
        }
        ._1 a
        {
            display: block;
            color: black;
            text-align: left;
            /* padding: 0px 10px; */
            text-decoration: none;
        }
        ._1 a:hover 
        {
            /* background-color: wheat; */
            /* font-size: 22px;
            padding: 8px 38px */
            color: #f4511e;
        }
        .second
        {
            margin-left: 15px;
            font-size: 20px;
            font-weight: bolder;
            text-align: left;
            display: block;
            position: relative;
            top: 5px;
        }
        .third
        {
            margin-right: 15px;
            font-size: 20px;
            font-weight: bolder;
            text-align: right;
            display: block;
            position: relative;
            top: -210px;
        }
        h5
        {
            font-weight: bolder;
        }
    </style>
    </head>
    <body>
        <div style="border: 2px solid black;">
            <img src="images.jpeg" alt height="100px">
            <h1
                style="text-align: center; font-size: 80px; font-weight: bolder; font-family: 'Courier New', Courier, monospace; margin-top: -85px; margin-bottom: 0;">
                Lena State Bank</h1>
        </div>
        <div style="border: 2px solid black; border-top: none;">
            <div class="first">
                <a href="#">Services</a>
                <a href="#">FAQ</a>
                <a href="#">Donations</a>
                <a href="#">LSB Collect</a>
                <a href="#">Electoral Bond</a>
                <a href="#">Videos</a>
                <!-- <a href="#">NPS</a> -->
                <a href="#">LSB Unipay</a>
                <a href="#">LSB Loans</a>
                <a href="Clogin.php">Customer Login</a>
                <a href="Elogin.php">Employee Login</a>
                <a href="EMP.php">New Employee</a>
            </div>
        </div>
        <div style="border: 2px solid black; border-top: none;">
            <p
                style="text-align: center; font-size: 15px; font-weight: bolder; margin-top: 2px; color: red;">If
                slowness is observed during Login Page Loading, please refresh
                the page for better experience. <br></p>
            <p style="text-align: center; font-size: 15px; font-weight: bolder;">LB
                never asks for confidential information such as PIN and OTP from
                customers. Any such call be made only by a fraudster.
                Please do not share personal information.
            </p>
        </div>
        <div class="container"> <!-- container-fluid -->
            <div class="row">
                <div class="col-sm-6">
                    <h3><center><b><big><strong>Saving Account</strong></big></b></center></h3>
                    <img src="company-transactions.png" alt height="150px"
                        style="margin-top: 20px;">
                    <a href="SAform.php"><button
                            style="position: relative; left: 180px; top: 15px;"
                            class="button"><span>New Account </span></button></a>
                    <div class="_1">
                        <ul>
                            <li><a href="WisSA.php">About Saving Account</a></li>
                            <li><a href="HDI.php">How Do I</a></li>
                            <li><a href="CS.php">Customer Care</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6">
                    <h3><center><center><b><big><strong></strong>Current Account</strong></big></b></center></h3>
                    <img src="company-transactions.png" alt height="150px"
                        style="margin-top: 20px;">
                    <a href="CAform.php"><button
                            style="position: relative; left: 180px; top: 15px;"
                            class="button"><span>New Account </span></button></a>
                    <div class="_1">
                        <ul>
                            <li><a href="WisCA.php">About Current Account</a></li>
                            <li><a href="HDI.php">How Do I</a></li>
                            <li><a href="CS.php">Customer Care</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div
            style="border: 2px solid black;  border-bottom: none; height: 120px;">
            <div class="second">
                Lobby Hours:<br>
                Mon - Thurs: 8:00am - 5:00pm <br>
                Fri: 8:00am - 3:30pm <br>
                Sat: Appointment Only <br>
            </div>
            <div><img src="LSB-logo.png" alt height="100px"
                    style="position: relative; left: 42.8%; top: -110px;"></div>
            <div class="third">
                Drive-Up Hours:<br>
                Mon - Thurs: 8:00am-5:00pm <br>
                Fri: 8:00am - 6:00pm <br>
                Sat: 8:00am - 12:00pm <br>
            </div>
        </div>
        <div style="border: 2px solid black;">
            <h5 style="margin-left: 10px;">© 2023 Lena State Bank. All rights
                reserved.</h5>
            <h5 style="margin-left: 10px;">Bank Website & Marketing by VGM
                Forbin</h5>
            <h5 style="float: right; margin-top: -50px; margin-right: 10px;">Privacy
                Policy • Terms of Use • Web Accessibility Guidelines • USA
                PATRIOT Act</h5>
        </div>
        <center>
        <div class="icon">
            <a href="#" class="fa fa-facebook"></a>
            <a href="#" class="fa fa-twitter"></a>
            <a href="#" class="fa fa-google"></a>
            <a href="#" class="fa fa-linkedin"></a>
            <a href="#" class="fa fa-youtube"></a>
            <a href="#" class="fa fa-instagram"></a>
            <a href="#" class="fa fa-whatsapp"></a>
        </div>
        </center>
    </body>
</html>