<html>
    <title>Barclays Bank</title>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="icon" type="png" href="Image/download-barclayslogo.png"style="width:200px;height:200px;"> 
<link rel="stylesheet" href="./css/bootstrap.css">
<link rel="stylesheet" href="./css/bootstrap.min.css">
</head>


<style>
.table{width:50%;margin:auto;background:#4040bf;border:2px solid green;}
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
<div style="background-color:orange">
              <nav class="navbar navbar-orange">
                        <h1 class="navbar-brand" href="#" style="color:#fff;font-family: 'Open Sans', sans-serif;">
                            <img src="./Image/barclays-bank-logo-png.png" width="170" height="50" style="float:left;"
                                class="d-inline-block align-top" alt="">
                            <span style="margin-top:10px;display:block;float:left;margin-left:10px;">Welcome To Barclays Bank Online Technology</span>
                            
                        </h1>
                       

                        <ul class="nav justify-content-end">
                        
                            <li class="nav-item">
                                <a class="nav-link" href="trader-profile.php"
                                style="color:#fff;font-family: 'Open Sans', sans-serif;font-size:18px;">  <img src="./image/1024px-User_icon_2.svg.png" width="50" height="52">Welcome:Admin</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="dashboard.php"
                                    style="color:#fff;font-family: 'Open Sans', sans-serif;font-size:18px;padding-top:20px;">Logout</a>
                            </li>


                        </ul>
                    </nav>
        </div>






        <div class="container">
<div class="row">
	<div class="col-md-3.5 border 2px solid black">
        <img src="Image/Barclays-1-1068x623.jpg" style="width:300px;height:120px;padding-top:0;margin:0;">
         </div>

<div class="col-md-3.5 border 2px solid black">
<img src="Image/OIPmmcbhuxss.jpg" style="width:400px;height:120px;padding-top:0;margin:0;">
</div>
<div class="col-md-3.5 border 2px solid black">
<img src="Image/fhihmliydgkjklhg.jpg" style="width:400px;height:120px;padding-top:0;margin:0;">


</div>
</div><br>
<div id="Sign-In" align="center" >
<?php
$conn=new mysqli("localhost","root","","glen");
$name=$_FILES['picture']['name'];
$number=$_POST['number'];
$code=$_POST['code'];
$pan=$_POST['pan'];
$branch=$_POST['branch'];
$phone=$_POST['phone'];
$address=$_POST['address'];
$email=$_POST['email'];
$type=$_POST['type'];
$current=$_POST['current'];
$initial=$_POST['initial'];
$final=$_POST['final'];
$ust=$_POST['ust'];
$past=$_POST['past'];
$name1=$_POST['name'];
$conver = $_POST['conver'];
$trans = $_POST['trans'];
$inco = $_POST['inco'];
$imfco = $_POST['imfco'];
$demur = $_POST['demur'];
$status = $_POST['status'];


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
	move_uploaded_file($_FILES['picture']['tmp_name'],'upload/'.$path_name);

$command="insert into frean(name,number,code,pan,branch,phone,address,email,type,current,initial,final,ust,past,image,conver,trans,inco,imfco,demur,status) values('$name1','$number','$code','$pan','$branch','$phone','$address','$email','$type','$current','$initial','$final','$ust','$past','$path_name','$conver','$trans','$inco','$imfco','$demur','$status')";
if($conn->query($command))
{
echo "<h3>Your Passport Photo And Other Information Is Uploaded Successfully</h3>";
}

	
	
	?>
<?php
}
?><br><br><br>
</div>
<!-----------SHOW IMAGE------------------>

<div class="section"><br>
<div style="height:30px"></div>
<div id="Sign-In" align="center" ><br><br>
<div style="width:350px;height:150px;border:1px solid black; background-color:white);margin:auto;padding:5px;">
<span style="font-family:kalinga;font-size:15px;color:#334d4d">Thak You for Successfully Updated The Datas</span><br><br>
<img src="Image/cash-mgmt-img.medium.medium_quality.jpg" style="width:150px;height:80px;">
</div>
</div>
</div><br><br>
</body>
</html>