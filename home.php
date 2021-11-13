<?php

if(isset($_POST['login'])){
    header("LOCATION:login.php");
}
if(isset($_POST['apply'])){
    header("LOCATION:apply.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- <section class="sec1" id="sec">
<div class="osama"></div> 
</section>
<button onclick="osama()">click</button>
    <script src="in.js"></script> -->
    

     <div class="div_img"> <img src="img/logo.svg" alt=""></div> 
     <div class="div_all"></div>
     <div class="div_button">
         <form action="home.php" method="post">
     <button name="login">sign in </button> <br>
     <button name="apply">apply now</button>
     </form>
    </div>


</body>
</html>