<?php 
include_once('./side_menu.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>

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
                        <div class="col-md-12" style="padding-top:30px;padding-bottom:30px;">
                            <form action="file.php" method="post" enctype="multipart/form-data">
                                <div id="Sign In" align="center">
                                    <h4 style="font-family: 'Asap Condensed', sans-serif;">Banking Information</h4>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-3">
                                        <label for="fullnames4" style="font-family: 'Asap Condensed', sans-serif;font-size:20px;">Full Names</label>
                                        <input type="text" name="name" class="form-control" id="inputEmail4"
                                            placeholder="Full Names" style="font-family: 'Asap Condensed', sans-serif;font-size:20px;">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="accountnumber4" style="font-family: 'Asap Condensed', sans-serif;font-size:20px;">Account Number</label>
                                        <input type="text" class="form-control" name="number" id="accountnumber4"
                                            placeholder="Account Number" style="font-family: 'Asap Condensed', sans-serif;font-size:20px;">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="inputPassword4" style="font-family: 'Asap Condensed', sans-serif;font-size:20px;">Swift Code</label>
                                        <input type="text" class="form-control" name="code" id="inputPassword4"
                                            placeholder="Swift Code" style="font-family: 'Asap Condensed', sans-serif;font-size:20px;">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="pannumber4" style="font-family: 'Asap Condensed', sans-serif;font-size:20px;">Pan / Iban Number</label>
                                        <input type="text" class="form-control" name="pan" id="inputPassword4"
                                            placeholder="Pan Number" style="font-family: 'Asap Condensed', sans-serif;font-size:20px;">
                                    </div>
                                </div><br>
                                <div id="Sign In" align="center">
                                    <h4 style="font-family: 'Asap Condensed', sans-serif;">Personal Information</h4>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="bankbranch" style="font-family: 'Asap Condensed', sans-serif;font-size:20px;">Bank Branch</label>
                                        <input type="text" class="form-control" id="bankbranch" name="branch"
                                            placeholder="Bank Branch" style="font-family: 'Asap Condensed', sans-serif;font-size:20px;">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="mobilenumber" style="font-family: 'Asap Condensed', sans-serif;font-size:20px;">Mobile Number</label>
                                        <input type="text" class="form-control" id="mobilenumber" name="phone"
                                            placeholder="Mobile Number" style="font-family: 'Asap Condensed', sans-serif;font-size:20px;">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="emailaddress" style="font-family: 'Asap Condensed', sans-serif;font-size:20px;">Email Address</label>
                                        <input type="text" class="form-control" id="emailaddress" name="email"
                                            placeholder="Email Address" style="font-family: 'Asap Condensed', sans-serif;font-size:20px;">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputAddress2" style="font-family: 'Asap Condensed', sans-serif;font-size:20px;">Address 2</label>
                                    <input type="text" class="form-control" id="inputAddress2" name="address"
                                        placeholder="Apartment, studio, or floor" style="font-family: 'Asap Condensed', sans-serif;font-size:20px;">
                                </div><br>
                                <div id="Sign In" align="center">
                                    <h4 style="font-family: 'Asap Condensed', sans-serif;">Transfer Information</h4>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-3">
                                        <label for="inputState" style="font-family: 'Asap Condensed', sans-serif;font-size:20px;">Type Of Account</label>
                                        <select id="inputState" class="form-control" name="type">
                                            <option selected style="font-family: 'Asap Condensed', sans-serif;font-size:20px;">Choose Below</option>
                                            <option selected style="font-family: 'Asap Condensed', sans-serif;font-size:20px;">Savings Account</option>
                                            <option style="font-family: 'Asap Condensed', sans-serif;font-size:20px;">Current Account</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="inputState" style="font-family: 'Asap Condensed', sans-serif;font-size:20px;">Currency</label>
                                        <select id="inputState" class="form-control" name="current" style="font-family: 'Asap Condensed', sans-serif;font-size:20px;">
                                            <option selected style="font-family: 'Asap Condensed', sans-serif;font-size:20px;">Choose Below</option>
                                            <option selected style="font-family: 'Asap Condensed', sans-serif;font-size:20px;">£</option>
                                            <option style="font-family: 'Asap Condensed', sans-serif;font-size:20px;">$</option>
                                            <option style="font-family: 'Asap Condensed', sans-serif;font-size:20px;">€</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="initialbalance4" style="font-family: 'Asap Condensed', sans-serif;font-size:20px;">Initial Balance</label>
                                        <input type="number" class="form-control" name="initial" id="initialbalance4"
                                            placeholder="Initial Balance" style="font-family: 'Asap Condensed', sans-serif;font-size:20px;">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="finalbalance4" style="font-family: 'Asap Condensed', sans-serif;font-size:20px;">Current Balance</label>
                                        <input type="number" class="form-control" name="final" id="finalbalance4"
                                            placeholder="Final Balance" style="font-family: 'Asap Condensed', sans-serif;font-size:20px;">
                                    </div>
                                </div><br>

                                <div class="form-row">
                                    <div class="form-group col-md-3">
                                        <label for="username4" style="font-family: 'Asap Condensed', sans-serif;font-size:20px;">Username</label>
                                        <input type="text" name="ust" class="form-control" id="username4"
                                            placeholder="Username" style="font-family: 'Asap Condensed', sans-serif;font-size:20px;">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="password4" style="font-family: 'Asap Condensed', sans-serif;font-size:20px;">Password</label>
                                        <input type="text" class="form-control" name="past" id="currency4"
                                            placeholder="Password" style="font-family: 'Asap Condensed', sans-serif;font-size:20px;">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="conversioncode4" style="font-family: 'Asap Condensed', sans-serif;font-size:20px;">Conversion Code</label>
                                        <input type="text" class="form-control" name="conver"
                                            id="conversioncode4" placeholder="Conversion Code" style="font-family: 'Asap Condensed', sans-serif;font-size:20px;">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="transfercode4" style="font-family: 'Asap Condensed', sans-serif;font-size:20px;">Transfer Code</label>
                                        <input type="text" class="form-control" name="trans" id="transfercode4"
                                            placeholder="Transfer Code" style="font-family: 'Asap Condensed', sans-serif;font-size:20px;">
                                    </div>
                                </div><br>
                                <div class="form-row">
                                    <div class="form-group col-md-3">
                                        <label for="incometax" style="font-family: 'Asap Condensed', sans-serif;font-size:20px;">Income Tax Code</label>
                                        <input type="text" class="form-control" id="incometax" name="inco"
                                            placeholder="Income Tax" style="font-family: 'Asap Condensed', sans-serif;font-size:20px;">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="imfcode" style="font-family: 'Asap Condensed', sans-serif;font-size:20px;">IMF Code</label>
                                        <input type="text" class="form-control" id="imfcode" name="imfco"
                                            placeholder="IMF Code" style="font-family: 'Asap Condensed', sans-serif;font-size:20px;">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="conversioncode4" style="font-family: 'Asap Condensed', sans-serif;font-size:20px;">Demurage Code</label>
                                        <input type="text" class="form-control" name="demur" id="demuragecode4"
                                            placeholder="Demurage Code" style="font-family: 'Asap Condensed', sans-serif;font-size:20px;">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="inputState" style="font-family: 'Asap Condensed', sans-serif;font-size:20px;">Status</label>
                                        <select id="inputState" class="form-control" name="status" style="font-family: 'Asap Condensed', sans-serif;font-size:20px;">
                                            <option selected style="font-family: 'Asap Condensed', sans-serif;font-size:20px;">Choose Below</option>
                                            <option selected style="font-family: 'Asap Condensed', sans-serif;font-size:20px;">Active</option>
                                            <option selected style="font-family: 'Asap Condensed', sans-serif;font-size:20px;">Inactive</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="passport" style="font-family: 'Asap Condensed', sans-serif;font-size:20px;">Passport Photo</label>
                                        <input type="file" name="picture" placeholder="Passport Photo">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="gridCheck">
                                        <label class="form-check-label" for="gridCheck" style="font-family: 'Asap Condensed', sans-serif;font-size:20px;">
                                            Check me out
                                        </label>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary" style="font-family: 'Asap Condensed', sans-serif;font-size:20px;">Submit Now</button>
                            </form>


                        </div>

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