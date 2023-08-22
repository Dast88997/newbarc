


<?php
function mynavbar()
{
    ?>
              <nav class="navbar navbar-light">
                        <h1 class="navbar-brand" href="#" style="color:#fff;font-family: 'Open Sans', sans-serif;">
                            <img src="./image/royalbank-logs.png" width="170" height="50" style="float:left;"
                                class="d-inline-block align-top" alt="">
                            <span style="margin-top:10px;display:block;float:left;margin-left:10px;font-size:18px;">Welcome To RBS Online Technology</span>
                            <span style="margin-top:10px;display:block;float:left;margin-left:80px;color:#046469;font-size:18px;">
                            <p style="color:#ffffff">Your IP address is: <? echo $_SERVER["REMOTE_ADDR"]; ?></p></span>
                        </h1>
                       

                        <ul class="nav justify-content-end">
<?php
include 'connection.php';



$email = $_SESSION['email'] ;
$name='';




$sql="select name,number,swift,pan,branch,mobile,address,address,email,account,currency,initial,final,status,image from frean where email='$email' ";

$row=$conn->query($sql);
if($row->num_rows>0)
{
   

while($data=$row->fetch_assoc())
{?>
	<?php 
	$name=$data['name'];
	$image=$data['image'];
	$number=$data['number'];
	$swift=$data['swift'];
	$pan=$data['pan'];
	$branch=$data['branch'];
  $email=$data['email'];
	$mobile=$data['mobile'];
	$address=$data['address'];
	$account=$data['account'];
	$currency=$data['currency'];
	$initial=$data['initial'];
	$final=$data['final'];
  $status=$data['status'];
	$_SESSION['email'] = $email;
	
	?>

                            <li class="nav-item">
                                <a class="nav-link" href=""
                                style="color:#fff;font-family: 'Open Sans', sans-serif;font-size:18px;">  <img src="./image/1024px-User_icon_2.svg.png" width="50" height="52">Hello: <?php echo $name;?></a>
                            </li>
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

                            <li class="nav-item">
                                <a class="nav-link" href="netbanking.php"
                                    style="color:#fff;font-family: 'Open Sans', sans-serif;font-size:18px;padding-top:20px;">Logout</a>
                            </li>


                        </ul>
                    </nav>

    <?php
}


function side_menu(){
    ?>
<ul class="list-group list-group-flush" style="background:#EBEAEA;">
  <li class="list-group-item"><a class="menu-list" href="account-information.php">Account Information</a></li>

 
</ul>

    <?php
}
?>
</div>
