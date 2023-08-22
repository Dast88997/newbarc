<?php
session_start();

?>

<?php 
include_once('./transfercode-details.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link type="text/css" href="./css/bootstrap.min.css" rel="stylesheet">
    <link type="text/css" href="./css/dashboard.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link type="text/css" href="images/icons/css/font-awesome.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Amaranth:ital@1&family=Asap+Condensed:ital@1&family=Barlow+Semi+Condensed:wght@300&family=Big+Shoulders+Display:wght@300&family=DM+Sans:ital,wght@1,500&family=Dosis:wght@300;500&family=EB+Garamond:ital@1&family=Economica&family=Fauna+One&family=Italianno&family=Niconne&family=Smooch+Sans&family=Thasadith:ital@1&family=Yanone+Kaffeesatz&display=swap"
        rel="stylesheet">


</head>

<body>
    <section class="sticky-top" style="margin:0;box-shadow: 0 1px 2px rgb(0 0 0 / 15%);background:#FFA943;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12" style="margin:0;">
                    <?=mynavbar()?>
                </div>
            </div>
        </div>
    </section>


    <section>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-1" style="padding:0;background:#EBEAEA;">
                    <?=side_menu()?>
                </div>




                <div class="col-md-11">
                    <div class="row">
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


                        <div class="col-md-12" style="padding-top:30px;padding-bottom:30px;">
                            <div class="card-columns">
                                <form action="account-loggs.php" method="get" onsubmit="return myFunction()">
                                    <div class="card bg-light">
                                        <div class="card-body text-center">
                                            <p class="card-text">Name: <?php echo $name;?> </p>
                                        </div>
                                    </div>
                                    <div class="card bg-light">
                                        <div class="card-body text-center">
                                            <p class="card-text">Account No.: <?php echo $number;?> </p>
                                        </div>
                                    </div>
                                    <div class="card bg-light">
                                        <div class="card-body text-center">
                                            <p class="card-text">Swift Code: <?php echo $swift;?> </p>
                                        </div>
                                    </div>
                                    <div class="card bg-light">
                                        <div class="card-body text-center">
                                            <p class="card-text"> Bank Branch: <?php echo $branch;?> </p>
                                        </div>
                                    </div>
                                    <div class="card bg-light">
                                        <div class="card-body text-center">
                                            <p class="card-text">Pan No.: <?php echo $pan;?> </p>
                                        </div>
                                    </div>
                                    <div class="card bg-light">
                                        <div class="card-body text-center">
                                            <p class="card-text"> Home Address: <?php echo $address;?> </p>
                                        </div>
                                    </div>
                                    <div class="card bg-light">
                                        <div class="card-body text-center">
                                            <p class="card-text">Mobile No.: <?php echo $mobile;?></p>
                                        </div>
                                    </div>
                                    <div class="card bg-light">
                                        <div class="card-body text-center">
                                            <p class="card-text">Email ID: <?php echo $email;?></p>
                                        </div>
                                    </div>
                                    <div class="card bg-light">
                                        <div class="card-body text-center">
                                            <p class="card-text">Type Of Account: <?php echo $account;?> </p>
                                        </div>
                                    </div>
                                    <div class="card bg-light">
                                        <div class="card-body text-center">
                                            <p class="card-text">Status: <?php echo $status;?> </p>
                                        </div>
                                    </div>
                                    <div class="card bg-light">
                                        <div class="card-body text-center">
                                            <p class="card-text">Currency (ABR): <?php echo $currency;?> </p>
                                        </div>
                                    </div>
                                    <div class="card bg-light">
                                        <div class="card-body text-center">
                                            <p class="card-text"> Initial Balance: <?php echo $initial;?> </p>
                                        </div>
                                    </div>
                                    <div class="card bg-light">
                                        <div class="card-body text-center">
                                            <p class="card-text"> Current Balance: <?php echo $final;?> </p>
                                        </div>
                                    </div>
                                    <div class="card bg-light">
                                        <div class="card-body text-center">
                                            <p class="card-text">
                                            <div id="Sign In" align="center">
                                                <img src="upload/<?php echo $image;?>" width="200" height="200"></img>
                                                </p>
                                            </div>
                                        </div>
                                    </div><br>

                                    <div id="Sign In" align="center">
                                        <div class="submit"><input name="submit" value="Proceed To Transfer"
                                                onclick='javascript:WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions("ctl00$ContentPlaceHolder1$SUBMIT", "", true, "chk", "", false, false))'
                                                id="ctl00_ContentPlaceHolder1=SUBMIT"
                                                class="btn btn-block bg-default btn-flat "
                                                style="width:230px; color:#fff;  margin-bottom:30px; background:#D4090C; "
                                                type="submit"></div>
                                    </div>
                                </form>


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
                                                    style="font-family:calibri;font-size:20px;">Incorrect Account Holder
                                                    or O.T.P Password.</span></p>
                                            <p style="color:#001f4d"><span
                                                    style="font-family:calibri;font-size:20px;">Contact your Account
                                                    Officer.</span></p>
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