


<?php
function mynavbar()
{
    ?>
              <nav class="navbar navbar-light">
                        <h1 class="navbar-brand" href="#" style="color:#fff;">
                            <img src="./Image/barclays-bank-logo-png.png" width="140" height="40" style="float:left;padding-top:10px;"
                                class="d-inline-block align-top" alt="">
                            <span style="margin-top:10px;display:block;float:left;margin-left:10px;font-family: 'Smooch Sans', sans-serif;font-size:25px;">Welcome To Barclays Bank Online Technology</span>
                            <span style="margin-top:10px;display:block;float:left;margin-left:80px;color:#046469;">
                            <p style="color:#ffffff;font-family: 'Smooch Sans', sans-serif;font-size:25px;">Your IP address is: <? echo $_SERVER["REMOTE_ADDR"]; ?></p></span>
                        </h1>
                       

                        <ul class="nav justify-content-end">
                        
                            <li class="nav-item">
                                <a class="nav-link" href=""
                                style="color:#fff;font-family: 'Smooch Sans', sans-serif;font-size:25px;">  <img src="Image/1024px-User_icon_2.svg.png" width="50" height="52">Hello: Admin</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="admin-login.php"
                                    style="color:#fff;font-family: 'Smooch Sans', sans-serif;font-size:25px;padding-top:15px;">Logout</a>
                            </li>


                        </ul>
                    </nav>

    <?php
}


function side_menu(){
    ?>
<ul class="list-group list-group-flush" style="background:#EBEAEA;">
  <li class="list-group-item"><a class="menu-list" href="dashboard.php">Create Login</a></li>
  <li class="list-group-item"><a  class="menu-list" href="details-account.php">Account Statement</a></li>
  <li class="list-group-item"><a  class="menu-list" href="conversion-history.php">First Transfer History</a></li>
  <li class="list-group-item"><a  class="menu-list" href="transfer-history.php">Conversion Code History</a></li>
  <li class="list-group-item"><a  class="menu-list" href="transfercode-history.php">Transfer Code History</a></li>
  <li class="list-group-item"><a  class="menu-list" href="taxcode-history.php">Income Tax Code History</a></li>
</ul>

    <?php
}
?>
</div>





