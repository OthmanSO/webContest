<?php


if(isset($_POST['user_name'])){

    $username = $_POST['user_name']; 
    $user_email = $_POST['email'];
    $user_number = $_POST['user_number']; 
    $cv=$_POST['user_cv'];
    $location=$_POST['location'];

    
    $con = mysqli_connect("localhost","root","","webcontest");
    
    $sql="INSERT INTO `application`(`Applyer_name`, `email`, `phone_no`, `cv_link`,`location`) VALUES ('$username','$user_email','$user_number','$cv','$location')";
    mysqli_query($con,$sql); 
    
    $res = mysqli_affected_rows($con); 
    
    if ( $res== 1){
    echo "ok "; 
    header("LOCATION:apply.php");
    
    }else{
        echo "error"; 
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
    <link rel="stylesheet" href="css/style_application.css">
    <style>
body{
background-image: url("img/logg.jpeg");
    background-size: cover;
    position: relative;
    padding: 0;
    margin: 0;
}

    </style>
</head>
<body>
    <!-- <section >
    <form action="application.php" method="POST">
        <label for="">enter your name</label>
        <input type="text" name="user_name">
        <br>
        <label for="">enter phone number</label>
        <input type="text" name="user_number">
        <br>
        <label for="">enter your email</label>
        <input type="text" name="user_email">
        <br>
        <label for="">enter link of cv</label>
        <input type="text" name="user_cv">         <br>

        <label for="">Ramallah or Nablus?</label>
        <input type="text" name="location">
        <button>submit</button>
        </section>





    </form> -->
    <form action="application.php" method="POST">
    <div class="form">
      <div class="title">Welcome</div>
      <div class="subtitle">please enter your information</div>
      <div class="input-container ic1">
        <input id="firstname" name="user_name" class="input" type="text" placeholder="your name " />
        <div class="cut"></div>
      </div>
      <div class="input-container ic2">
        <input id="lastname" class="input" type="text" name="email" placeholder="your email " />
        <div class="cut"></div>
      </div>
      <div class="input-container ic2">
        <input id="email" class="input" name="user_number" type="text" placeholder="your phone number " />
         <div class="input-container ic2">
        <input id="email" pla class="input" type="text" name="location" placeholder="location:Rammallah or Nablus " />
        <div class="cut cut-short"></div>
        
      </div>
      <div class="input-container ic2">
        <input id="email" class="input" type="text" placeholder="your cv link " name="user_cv" />
         <div class="input-container ic2">
       
         <button type="text"  class="submit">submit</button>

      </div>
    
    </div>
    </form> 

</body>
</html>