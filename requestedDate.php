<?php 
#include('schedules.php');

if(isset($_SESSION['loggedin'])  and $_SESSION['loggedin'] === 0){
    header('Location: home.php');
}else{
    $loc = $_COOKIE['cur_page'];
    if($loc === 'emp'){
       employee_Schedule(); 
    }elseif($loc === 'mr'){
        meetingroom_schedule();
    }elseif($loc === 'meeting'){
        meeting_schedule();
    }
}
