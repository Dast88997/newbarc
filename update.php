
<html>
<head>
    <title>Barclays Bank - Update Bank Details</title>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
      <link rel="icon" type="png" href="image/rbs-logo.png"style="width:200px;height:200px;">
	  <link type="text/css" href="./css/bootstrap.min.css" rel="stylesheet">
        <link type="text/css" href="./css/dashboard.css" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link type="text/css" href="images/icons/css/font-awesome.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
        <link type="text/css" href="images/icons/css/font-awesome.css" rel="stylesheet">
        <link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600'
            rel='stylesheet'>
            <link href="bootstrap.min.css" rel="stylesheet"/>

</head>
<script>
$('.message a').click(function(){
   $('form').animate({height: "toggle", opacity: "toggle"}, "slow");
});
</script>
<style>
@import url(https://fonts.googleapis.com/css?family=Roboto:300);

.login-page {
  width: 360px;
  padding: 8% 0 0;
  margin: auto;
}
.form {
  position: relative;
  z-index: 1;
  background: #FFFFFF;
  max-width: 360px;
  margin: 0 auto 100px;
  padding: 45px;
  text-align: center;
  box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
}
.form input {
  font-family: "Roboto", sans-serif;
  outline: 0;
  background: #f2f2f2;
  width: 100%;
  border: 0;
  margin: 0 0 15px;
  padding: 15px;
  box-sizing: border-box;
  font-size: 14px;
}
.form button {
  font-family: "Roboto", sans-serif;
  text-transform: uppercase;
  outline: 0;
  background: #4CAF50;
  width: 100%;
  border: 0;
  padding: 15px;
  color: #FFFFFF;
  font-size: 14px;
  -webkit-transition: all 0.3 ease;
  transition: all 0.3 ease;
  cursor: pointer;
}
.form button:hover,.form button:active,.form button:focus {
  background: #43A047;
}
.form .message {
  margin: 15px 0 0;
  color: #b3b3b3;
  font-size: 12px;
}
.form .message a {
  color: #4CAF50;
  text-decoration: none;
}
.form .register-form {
  display: none;
}
.container {
  position: relative;
  z-index: 1;
  max-width: 300px;
  margin: 0 auto;
}
.container:before, .container:after {
  content: "";
  display: block;
  clear: both;
}
.container .info {
  margin: 50px auto;
  text-align: center;
}
.container .info h1 {
  margin: 0 0 15px;
  padding: 0;
  font-size: 36px;
  font-weight: 300;
  color: #1a1a1a;
}
.container .info span {
  color: #4d4d4d;
  font-size: 12px;
}
.container .info span a {
  color: #000000;
  text-decoration: none;
}
.container .info span .fa {
  color: #EF3B3A;
}
body {
  background: #76b852; /* fallback for old browsers */
  background: -webkit-linear-gradient(right, #76b852, #8DC26F);
  background: -moz-linear-gradient(right, #76b852, #8DC26F);
  background: -o-linear-gradient(right, #76b852, #8DC26F);
  background: linear-gradient(to left, #76b852, #8DC26F);
  font-family: "Roboto", sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;      
}
</style>

    
    <div class="section">
    <div id="Sign-In"align="center">
<?php
$conn=new mysqli("localhost","root","","glen");
if(isset($_GET['updatesubmit']))
{
$ID=$_GET['ID'];
$name=$_GET['name'];
$number=$_GET['number'];
$code=$_GET['code'];
$pan=$_GET['pan'];
$branch=$_GET['branch'];
$phone=$_GET['phone'];
$email=$_GET['email'];
$address=$_GET['address'];
$type=$_GET['type'];
$current=$_GET['current'];
$status=$_GET['status'];
$initial=$_GET['initial'];
$final=$_GET['final'];
$conver=$_GET['conver'];
$trans=$_GET['trans'];
$inco=$_GET['inco'];
$imfco=$_GET['imfco'];
$demur=$_GET['demur'];
$ust=$_GET['ust'];
$past=$_GET['past'];
$sql="update frean set name = '$name',number='$number',code='$code',pan='$pan',
branch='$branch',phone='$phone',email='$email',address='$address',type='$type',current='$current',status='$status',initial='$initial',final='$final',conver='$conver',trans='$trans',
inco='$inco',imfco='$imfco',demur='$demur',ust='$ust',past='$past' WHERE ID=$ID";

if($conn->query($sql))
{
	header('Location:details-account.php');
	
}
echo "Your Details Has Been Updated. Thank You.";
}

?>
</div>
</div>


        
<div style="height:50px"></div>



<div class="section">
<div id="Sign-In"align="center">


<?php
if(isset($_GET['update']))
{
	$ID=$_GET['update'];
$sql="select * from frean WHERE ID=$ID";
$row=$conn->query($sql);
if($row->num_rows>0)
{
	while($data=$row->fetch_assoc())
	{
		?>
		
		
		
		<div style='float:center;width:100%;'>
<div class="login-page">
       <p style=""> Hello Admin<br> Update Cleints Account Details Below</p>
  <div class="form">
  <form action="update.php">
      Transfer ID
      <input type="text" name="ID" value="<?php  echo $data['ID'];?>"><br>
      Full Names
      <input type="tex" name="name" value="<?php  echo $data['name'];?>" Required ><br>
      Account Number
      <input type="text" name="number" value="<?php  echo $data['number'];?>" Required><br>
      Swift Code
	   <input type="text" name="code" value="<?php  echo $data['code'];?>"><br>
       Pan / Iban Number
      <input type="text" name="pan" value="<?php  echo $data['pan'];?>"><br>
      Bank Branch
      <input type="text" name="branch" value="<?php  echo $data['branch'];?>"><br>
      Mobile Number
	   <input type="text" name="phone" value="<?php  echo $data['phone'];?>"><br>
      Customer Address
     <input type="text" name="address" value="<?php  echo $data['address'];?>"><br>
     Customer Email
      <input type="text" name="email" value="<?php  echo $data['email'];?>"><br>
      Type Of Account
      <input type="text" name="type" value="<?php  echo $data['type'];?>"><br>
      Currency
       <input type="text" name="current" value="<?php  echo $data['current'];?>"><br>
       Initial Amount
	   <input type="number" name="initial" value="<?php  echo $data['initial'];?>"><br>
     Total Amount
       <input type="number" name="final" value="<?php  echo $data['final'];?>"><br>
       User Name
       <input type="text" name="ust" value="<?php  echo $data['ust'];?>"><br>
       Password
	   <input type="text" name="past" value="<?php  echo $data['past'];?>"><br>
     Conversion Code
        <input type="text" name="conver" value="<?php  echo $data['conver'];?>"><br>
        Transfer Code
      <input type="text" name="trans" value="<?php  echo $data['trans'];?>"><br>
      Income Tax Code
      <input type="text" name="inco" value="<?php  echo $data['inco'];?>"><br>
      IMF Code
	   <input type="text" name="imfco" value="<?php  echo $data['imfco'];?>"><br>
     Demurrage Code
	   <input type="text" name="demur" value="<?php  echo $data['demur'];?>"><br>
     Account Status
      <input type="text" name="status" value="<?php  echo $data['status'];?>"><br>
      <button type="submit" name="updatesubmit">Update</button>
      </form>
	  </div>
</div>

		<?php
		
		
	}
}
	
}

?>

</div><br><br>

<div style="height:50px"></div>
<div id="Sign-In"align="center">
<a href="admin-login.php"><input type="submit" value="Log Out" name="updatesubmit">
</div>
</div>
</div>


</body>
</html>