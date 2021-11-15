<?php
if(isset($_POST['login'])){
    header("LOCATION:login.php");
}
if(isset($_POST['apply'])){
    header("LOCATION:application.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/stylehome.css">
</head>
<body>
   
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



