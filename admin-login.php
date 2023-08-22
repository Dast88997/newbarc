<?php
$conn=new mysqli("localhost","root","","huds");
$user = isset($_GET['username'])?$_GET['username']:'';
$pass = isset($_GET['password'])?$_GET['password']:'';
if($user!='' && $pass!='')
{
$name='';
$sql="select name,username,mobile,email,password from dools where username='$user' and password='$pass'";
$row=$conn->query($sql);
if($row->num_rows>0)
{
while($data=$row->fetch_assoc())
{
 
	$name=$data['name'];
	$user=$data['username'];
	$mobile=$data['mobile'];
	$email=$data['email'];
	$pass=$data['password'];
	$_SESSION['name']=$name;
	$_SESSION['email']=$email;
  header('Location:dashboard.php');
}
}	
else{
  $error="Invalid login details";
}
}
?>

 
<!doctype html>
<html>
    
<head>
<title>Royal Bank Of Scotland-Welcome</title>
<link rel="icon" type="png" href="image/5a6507d05fe71a8744595ff070e8015a.jpg">
    <link rel="icon" type="png" href="image/5a6507d05fe71a8744595ff070e8015a.jpg">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/style.css">
<script src="https://kit.fontawesome.com/fc383a6465.js" crossorigin="anonymous"></script>
	<script src="https://kit.fontawesome.com/1f706328f3.js" crossorigin="anonymous"></script>
</head>

<style>
@use postcss-preset-env {
  stage: 0;
}

/* config.css */

:root {
  --baseColor: #606468;
}

/* helpers/align.css */

.align {
  display: grid;
  place-items: center;
}

/* helpers/grid.css */

.grid {
  inline-size: 90%;
  margin-inline: auto;
  max-inline-size: 20rem;
}

/* helpers/hidden.css */

.hidden {
  border: 0;
  clip: rect(0 0 0 0);
  height: 1px;
  margin: -1px;
  overflow: hidden;
  padding: 0;
  position: absolute;
  width: 1px;
}

/* helpers/icon.css */

:root {
  --iconFill: var(--baseColor);
}

.icons {
  display: none;
}

.icon {
  block-size: 1em;
  display: inline-block;
  fill: var(--iconFill);
  inline-size: 1em;
  vertical-align: middle;
}

/* layout/base.css */

:root {
  --htmlFontSize: 100%;

  --bodyBackgroundColor: #2c3338;
  --bodyColor: var(--baseColor);
  --bodyFontFamily: "Open Sans";
  --bodyFontFamilyFallback: sans-serif;
  --bodyFontSize: 0.875rem;
  --bodyFontWeight: 400;
  --bodyLineHeight: 1.5;
}

* {
  box-sizing: inherit;
}

html {
  box-sizing: border-box;
  font-size: var(--htmlFontSize);
}

body {
  background-color: var(--bodyBackgroundColor);
  color: var(--bodyColor);
  font-family: var(--bodyFontFamily), var(--bodyFontFamilyFallback);
  font-size: var(--bodyFontSize);
  font-weight: var(--bodyFontWeight);
  line-height: var(--bodyLineHeight);
  margin: 0;
  min-block-size: 100vh;
}

/* modules/anchor.css */

:root {
  --anchorColor: #eee;
}

a {
  color: var(--anchorColor);
  outline: 0;
  text-decoration: none;
}

a:focus,
a:hover {
  text-decoration: underline;
}

/* modules/form.css */

:root {
  --formFieldMargin: 0.875rem;
}

input {
  background-image: none;
  border: 0;
  color: inherit;
  font: inherit;
  margin: 0;
  outline: 0;
  padding: 0;
  transition: background-color 0.3s;
}

input[type="submit"] {
  cursor: pointer;
}

.form {
  margin: calc(var(--formFieldMargin) * -1);
}

.form input[type="password"],
.form input[type="text"],
.form input[type="submit"] {
  inline-size: 100%;
}

.form__field {
  display: flex;
  margin: var(--formFieldMargin);
}

.form__input {
  flex: 1;
}

/* modules/login.css */

:root {
  --loginBorderRadus: 0.25rem;
  --loginColor: #eee;

  --loginInputBackgroundColor: #3b4148;
  --loginInputHoverBackgroundColor: #434a52;

  --loginLabelBackgroundColor: #363b41;

  --loginSubmitBackgroundColor: #ea4c88;
  --loginSubmitColor: #eee;
  --loginSubmitHoverBackgroundColor: #d44179;
}

.login {
  color: var(--loginColor);
}

.login label,
.login input[type="text"],
.login input[type="password"],
.login input[type="submit"] {
  border-radius: var(--loginBorderRadus);
  padding: 1rem;
}

.login label {
  background-color: var(--loginLabelBackgroundColor);
  border-bottom-right-radius: 0;
  border-top-right-radius: 0;
  padding-inline: 1.25rem;
}

.login input[type="password"],
.login input[type="text"] {
  background-color: var(--loginInputBackgroundColor);
  border-bottom-left-radius: 0;
  border-top-left-radius: 0;
}

.login input[type="password"]:focus,
.login input[type="password"]:hover,
.login input[type="text"]:focus,
.login input[type="text"]:hover {
  background-color: var(--loginInputHoverBackgroundColor);
}

.login input[type="submit"] {
  background-color: var(--loginSubmitBackgroundColor);
  color: var(--loginSubmitColor);
  font-weight: 700;
  text-transform: uppercase;
}

.login input[type="submit"]:focus,
.login input[type="submit"]:hover {
  background-color: var(--loginSubmitHoverBackgroundColor);
}

/* modules/text.css */

p {
  margin-block: 1.5rem;
}

.text--center {
  text-align: center;
}

</style>
<body style="background-image:url('./image/teamwork-reports-accounting-concept.jpg');background-repeat:no-repeat;background-size:100% 100vh;background-attachment:fixed;">

     <div style="height:100px"></div>

   <div id="Sign In" align="center">
             <div class="container">
                        <div class="row">
                               <div class="col-md-2"> 
                                 </div>
          
          
          
           <div class="col-md-3">
               <div style="width:370px;height:300px;border-left:1px solid #e0ebeb;border-top:1px solid #e0ebeb;border-bottom:1px solid #e0ebeb;border-right:1px solid #e0ebeb; background-color:#003399;margin:auto;">
                <p style="font-size:20px;text-align:left;color:#fff;"> &nbsp &nbsp &nbsp Login </p>
                <div style="height:70px"></div>
                <img src="./image/RBS-logos.jpg" width="200" height="70" style="float:left;"
                                class="d-inline-block align-top" alt="">
                </div>
          </div>      
     <div class="col-md-3">
                    <div style="width:370px;height:300px;border-left:1px solid #ffffff;border-top:1px solid #ffffff;border-bottom:1px solid #ffffff;border-right:1px solid #ffffff; background-color:#e0ebeb;margin:auto;padding:5px;float:left;">
        
        <div style="height:80px"></div>
        
        <body class="align">
 
                   <div class="grid">
                        <span><?=@$error?></span>
                        <form action="" method="get" >

                           <div class="form__field">
                                <label for="login__username"><svg class="icon">
                                         <use xlink:href="#icon-user"></use>
                                   </svg><span class="hidden">Username</span></label>
                                   &nbsp  <input autocomplete="username" id="login__username" type="text" name="username" class="form__input" placeholder="Username" required>
                            </div>

                            <div class="form__field">
                                   <label for="login__password"><svg class="icon">
                                         <use xlink:href="#icon-lock"></use>
                                         </svg><span class="hidden">Password</span></label>
                                          &nbsp <input id="login__password" type="password" name="password" class="form__input" placeholder="Password" required>
                            </div>

                            <div class="form__field">
                                &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp <input type="submit" value="Login In" style="background-color:blue;color:white;font-size:15px;">
                            </div>

                       </form>
                  </div>

                                 <svg xmlns="http://www.w3.org/2000/svg" class="icons">
                                      <symbol id="icon-arrow-right" viewBox="0 0 1792 1792">
                                      <path d="M1600 960q0 54-37 91l-651 651q-39 37-91 37-51 0-90-37l-75-75q-38-38-38-91t38-91l293-293H245q-52 0-84.5-37.5T128 1024V896q0-53 32.5-90.5T245 768h704L656 474q-38-36-38-90t38-90l75-75q38-38 90-38 53 0 91 38l651 651q37 35 37 90z" />
                                     </symbol>
                                     <symbol id="icon-lock" viewBox="0 0 1792 1792">
                                     <path d="M640 768h512V576q0-106-75-181t-181-75-181 75-75 181v192zm832 96v576q0 40-28 68t-68 28H416q-40 0-68-28t-28-68V864q0-40 28-68t68-28h32V576q0-184 132-316t316-132 316 132 132 316v192h32q40 0 68 28t28 68z" />
                                     </symbol>
                                     <symbol id="icon-user" viewBox="0 0 1792 1792">
                                    <path d="M1600 1405q0 120-73 189.5t-194 69.5H459q-121 0-194-69.5T192 1405q0-53 3.5-103.5t14-109T236 1084t43-97.5 62-81 85.5-53.5T538 832q9 0 42 21.5t74.5 48 108 48T896 971t133.5-21.5 108-48 74.5-48 42-21.5q61 0 111.5 20t85.5 53.5 62 81 43 97.5 26.5 108.5 14 109 3.5 103.5zm-320-893q0 159-112.5 271.5T896 896 624.5 783.5 512 512t112.5-271.5T896 128t271.5 112.5T1280 512z" />
                                     </symbol>
                                </svg>

        </body>
        <br>
        <h1 style="background-color:#e0e0d1;width:365px;height:20px;font-size:12px;align:left;padding:3px;amrgin:auto;">Login As User Admin</h1>
                </div>
    </div>  
</div>                   
                      
