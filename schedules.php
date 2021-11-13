// post ( requested date )   ,   session( id employee)
function employee_Schedule(){
    $con = mysqli_connect("localhost","root","","webcontest");
    $return_back_arr = null;
    $sql = "SELECT * FROM `employee_free` WHERE  `Emp_id` = '" . $_session['id_loggedin'] . " && `requested_date`=  . $_POST["Date_requested"] . "'" ; 
    $q = mysqli_query($con,$sql);  
    if ($q->num_rows > 0) {
    
        while($row = $q->fetch_assoc()) {
            $return_back_arr [$raw["time_slot"]] = $raw["location"];
        }
        return $return_back_arr;
    }
    return null;
} 

// post ( requested date )
function meetingroom_schedule(){
    $con = mysqli_connect("localhost","root","","webcontest");
    $return_back_room_string = "";
    $sql = "SELECT * FROM `meeting_room_reserved` WHERE `requested_date`= "  . $_POST["Date_requested"] . "'" ; 
    $q = mysqli_query($con,$sql);  
    if ($q->num_rows > 0) {
        $flag = 1;
        while($row = $q->fetch_assoc()) {
            if( $flag != 1 ){
                $flag = 0 ;
                $return_back_room_string .=  $row['room_id'] . "," . $row['time_slot'];
            }
            $return_back_room_string .= "|". $row['room_id'] . "," . $row['time_slot'];
        }
        return $return_back_room_string;
    }
    return "";
}



function meeting_schedule(){

}
    
// no data needed                                                                                                                                                                                                           
function pending_application (){
    $con = mysqli_connect("localhost","root","","webcontest");
    $return_pending_application = "";
    $sql = "SELECT * FROM `application` WHERE `approved`= 0 " ; 
    $q = mysqli_query($con,$sql);  
    if ($q->num_rows > 0) {
        $flag = 1;
        while($row = $q->fetch_assoc()) {
            if( $flag == 1 ){
                $flag = 0 ;
                $return_pending_application .=  $row['ID'] . "," . $row['Applyer_name'] . ","  . $row['email'] . ","  . $row['phone_no'] . ","  . $row['cv_link'] . "," . $row['location'] ;
            }
            $return_pending_application .= "|". $row['ID'] . "," . $row['Applyer_name'] . ","  . $row['email'] . ","  . $row['phone_no'] . ","  . $row['cv_link'] . "," . $row['location'] ;
        }
        return $return_back_room_string;
    }
    return "";
}