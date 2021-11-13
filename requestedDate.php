if(isset($_SESSION['loggedin'])  and $_SESSION['loggedin'] === 0){
    header('Location: home.php');
}else{
    
}