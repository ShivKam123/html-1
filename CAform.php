<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="images.jpeg" type="image/x-icon">
    <script src="jquery-3.6.0.min.js"></script>
    <title>Lena State Bank</title>
    <style>
        body
        {
            /* font-family: Arial; */
            font-size: 14px;
            color: black;
            font-weight: bolder
        }
        .from
        {
            border: 15px solid #e7e7e7;
            padding: 20px;
            max-width: 720px;
            margin: 20px auto 0;
            width: 100%;
            overflow: hidden;
        }
        *{
            box-sizing: border-box;
        }
        div
        {
            display: block;
        }
        .lab
        {
            margin-left: -200px; 
            font-size: 18px; 
            font-weight: bolder;
            padding: -1px -5px;
        }
        /* .labi
        {
            float: left;
            font-size: 16px;
            font-weight: bold;
            padding: 5px 10px;
            margin-right: 10px;
        }*/
        .inpu
        {
            margin-right: -200px; 
            width: 300px; 
            font-size: 15px; 
            font-weight: bolder;
            text-align: center;
        }
        .back
        {
            font-size: 20px;
            font-weight: bolder;
            text-align: center;
            margin-top: -5px;
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
    <center>
        <img src="LSB-logo.png" alt="" height="100px">
        <div class="from">
            <form action="http://localhost/Lena Bank/CA.php" name="fm" onsubmit="return valid();">
            <h2>Please Select the Branch where you want to open the account</h2>
            <hr>
            <h4 style="margin-bottom: -10px;"><center><b><big><strong>Current Account Form</strong></big></b></center></h4>
            <table>
                <tr>
                    <td><p class="lab" for="">Select State*</p></td>
                    <td><select class="inpu" name="State" id="state" class="form-control">
                    <option value="0" placeholder>Select State</option>
                    <?php include_once "db1.php";
                                $db=db();
                                $qr=$db->query("select * from state group by state");?>
                                <?php while ($res=$qr->fetch_assoc()) { ?>
                                <option style="font-size: 15px;" value="<?php echo $res['state'];?>"> <?php echo $res['state'];?> </option><?php } ?>
                                </select>
                        <?php $db->close(); ?></td> 
                </tr>
                <tr>
                    <td><p class="lab" for="">Select City*</p></td> 
                    <td><select class="inpu" name="City" id="city" class="form-control">
                        <option value="">
                        <script>
                        $(document).ready(function(){
                            loadcity();
                            $("#state").change(function(){
                                loadcity();
                            });
                        });
                        function loadcity()
                        {
                            var d=$("#state").val();
                            $("#city").load("city.php",{state:d});
                        }
                        </script>
                        </option>
                    </select></td>
                </tr>
                <tr>
                    <td><p class="lab" for="">Select Branch*</p></td>
                    <td><select class="inpu" name="Branch" id="branch" disabled="disabled">
                        <option value="1">NULL</option>
                    </select></td>
                </tr>
                <tr>
                    <td><p class="lab" for="">Customer Name*</p></td>
                    <td><input placeholder="Customer Name" name="cn" class="inpu" type="text"></td>
                </tr>
                <tr>
                    <td><p class="lab" for="">Customer Mobile No*</p></td>
                    <td><input placeholder="Customer Mobile No." name="cmn" class="inpu" type="text"></td>
                </tr>
                <tr>
                    <td><p class="lab" for="">Customer Email ID*</p></td>
                    <td><input placeholder="Customer Email ID" name="cei" class="inpu" type="email"></td>
                </tr>
                <tr>
                    <td><p class="lab" for="">Create Your Username*</p></td>                  
                    <td><input placeholder="Create Your Username" name="username" class="inpu" type="text"></td>
                </tr>
                <tr>
                    <td><p class="lab" for="">Create Your Password*</p></td>
                    <td><input placeholder="Create Your Password" name="password" class="inpu" type="text"></td>
                </tr>
                <tr>
                    <td><p class="lab" for="">Customer Address*</p></td>
                    <td><input placeholder="Customer Address" name="address" class="inpu" type="text"></td>
                </tr>
                </table>  
                <p class="labi" for=""><input name="tick1" type="checkbox">Please seed my Aadhaar/UID Number issued by UIDAI.I hereby give my consent to the Bank to use my Aadhaar details to authenticate me from UIDAI by using my biometrics for the purpose of Bank account.</p>
                <p class="labi" for=""><input name="tick2" type="checkbox" name="" id="">I declare that I am desirous of receiving entitled benefits or <br> subsidies of welfare schemes funded from the Consolidated Fund of India in my account directly.</p>
                <button type="submit">Submit</button> <button type="reset">Reset</button>           
            </form>
            <hr>
            <div class="back"><a href="Bank.php">Back</a></div>
        </div>
    </center>
    <script>
        function valid()
        {
            if(document.fm.State.value == "Null")
            {
                document.fm.State.focus();
                alert("Please Select State");
                return false;
            }
            if(document.fm.sc.value == "Null")
            {
                document.fm.sc.focus();
                alert("Please Select City");
                return false;
            }
            if(document.fm.sb.value == "Null")
            {
                document.fm.sb.focus();
                alert("Please Select Branch");
                return false;
            }
            if(document.fm.cn.value == "")
            {
                document.fm.cn.focus();
                alert("Please Enter Customer Name");
                return false;
            }
            if(document.fm.cmn.value == "")
            {
                document.fm.cmn.focus();
                alert("Please Enter Customer Mobile No.");
                return false;
            }
            if(document.fm.cei.value == "")
            {
                document.fm.cei.focus();
                alert("Please Enter Customer Email ID");
                return false;
            }
            if(document.fm.address.value == "")
            {
                document.fm.address.focus();
                alert("Please Enter Address");
                return false;
            }
            if(document.fm.username.value == "")
            {
                document.fm.username.focus();
                alert("Please Enter Username");
                return false;
            }
            if(document.fm.password.value == "")
            {
                document.fm.password.focus();
                alert("Please Enter Password");
                return false;
            }
            if(document.fm.tick1.checked!= true)
            {
                document.fm.tick1.focus();
                alert("Please Tick if you want to continue");
                return false;
            }
            if(document.fm.tick2.checked!= true)
            {
                document.fm.tick2.focus();
                alert("Please Tick if you want to continue");
                return false;
            }
        }
    </script>
    <script>
        $(document).ready(function () 
        {
            $("#city").prop("disabled",true).parent().hide();
            $("#branch").prop("disabled",true).parent().hide();

            $("#state").on("change", function() 
            {
                if($("#state").val() === "Null") 
                {
                    $("#city").prop("disabled",true).parent().hide();
                    $("#branch").prop("disabled",true).parent().hide();

                } 
                else 
                {
                    $("#city").prop("disabled",false).parent().show();
                    $("#branch").prop("disabled",false).parent().show();
                }
            });
        });
    </script>
</body>
</html>