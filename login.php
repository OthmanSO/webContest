<?php
session_start();
if(isset($_POST['password'])){
  $user = $_POST['user'];
  $password = $_POST['password']; 
  $con = mysqli_connect("localhost","root","","webcontest");
  $sql = "SELECT * FROM `employee` WHERE  `Emp_id` = '$user' && `password`='$password'"; 
  $q = mysqli_query($con,$sql); 
  $res = mysqli_fetch_assoc($q);
if(!empty($res)){
echo "ok"; 
  $_SESSION['id']=$res;  
//    echo "email or password wrong"; 
  $res["hr"]?$_session['hr']=1:$_session['hr']=2;
  echo $_session['hr'];
//   echo $_session['hr']; 
//  header("LOCATION:apply.php");
}else{
  echo "email or password wrong"; 
  //header("LOCATION:login.php");
}
  }
  
  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>@import "bourbon";

@import url(https://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,700);
@import url(https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css);
@import url(https://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css);

$shadow-color: #23203b;
$input-color: lighten(#AB9E95, 10%);
$input-border-color: #5E5165;
$button-background-color: #27AE60;

* {
  margin: 0;
  padding: 0;
}
html { 
  background: url(https://dl.dropboxusercontent.com/u/159328383/background.jpg) no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}
body{
    background-color: #7298b9;
    width: 100%;
    height: 100%;
}
body {
  /* background: transparent; */
}

body, input, button {
  font-family: 'Source Sans Pro', sans-serif;
}

@mixin normalize-input {
  display: block;
  width: auto;
  height: auto;
  border: none;
  outline: none;
  box-shadow: none;
  background: none;
  border-radius: 0px;
}

.login {
  padding: 15px;
  width: 400px;
  min-height: 400px;
  margin: 2% auto 0 auto;

  .heading {
    text-align: center;
    margin-top: 1%;

    h2 {
      font-size: 3em;
      font-weight: 300;
      color: rgba(255, 255, 255, 0.7);
      display: inline-block;
      padding-bottom: 5px;
      text-shadow: 1px 1px 3px $shadow-color;
    }
  }

  form {
    .input-group {
      border-bottom: 1px solid rgba(255, 255, 255, 0.1);
      border-top: 1px solid rgba(255, 255, 255, 0.1);

      &:last-of-type {
        border-top: none;
      }

      span {
        background: transparent;
        min-width: 53px;
        border: none;

        i {
          font-size: 1.5em;
          color: rgba(255, 255, 255, 0.2);
        }
      }
    }

    input.form-control {
      @include normalize-input;

      padding: 10px;
      font-size: 1.6em;
      width: 100%;
      background: transparent;
      color: $input-color;

      &:focus {
        border: none;
      }
    }

    button {
      margin-top: 20px;
      background: $button-background-color;
      border: none;
      font-size: 1.6em;
      font-weight: 300;
      padding: 5px 0;
      width: 100%;
      border-radius: 3px;
      color: lighten($button-background-color, 40%);
      border-bottom: 4px solid darken($button-background-color, 10%);

      &:hover {
        background: tint($button-background-color, 4%);
        -webkit-animation: hop 1s;
        animation: hop 1s;
      }
    }
  }
}

.float {
  display: inline-block;
  -webkit-transition-duration: 0.3s;
  transition-duration: 0.3s;
  -webkit-transition-property: transform;
  transition-property: transform;
  -webkit-transform: translateZ(0);
  transform: translateZ(0);
  box-shadow: 0 0 1px rgba(0, 0, 0, 0);
}

.float:hover, .float:focus, .float:active {
  -webkit-transform: translateY(-3px);
  transform: translateY(-3px);
}
.sec_login{
    width: 1000px;
    height: 1000px;
    background-color: red;
}
/* Large Devices, Wide Screens */

.div_img{
background-color: white;
width: 100%;
height: 50px;
margin: 0;
padding: 0 ;
z-index: 20;
opacity: 100%;


}
.div_img img{
    opacity: 100%;
    margin-left: 10px;
    margin-top: 8px;
}



/* Small Devices, Tablets */


</style>
</head>
<body>
<!-- <section class="sec_login"> -->
<div class="div_img"> <img src="img/logo.svg" alt=""></div> 

<div class="login">
  <div class="heading">
    <h2>Sign in</h2>
    <form action="login.php" method="post">

      <div class="input-group input-group-lg">
        <span class="input-group-addon"><i class="fa fa-user"></i></span>
        <input type="text" class="form-control" name="user" placeholder="Username">
          </div>

        <div class="input-group input-group-lg">
          <span class="input-group-addon"><i class="fa fa-lock"></i></span>
          <input type="password" name="password" class="form-control" placeholder="Password">
        </div>

        <button type="submit" class="float">Login</button>
       </form>
 		</div>
 </div>
 <!-- </section> -->
</body>
</html>