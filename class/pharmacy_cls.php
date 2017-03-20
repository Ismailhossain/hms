<?php
include_once'../includes/connection.php';



class pharmacyinfo {

function insert(){

   
    $doctor_name=mysql_real_escape_string($_POST['doct_name']);
    $patient_name=mysql_real_escape_string($_POST['patient_name']);    
    $address=mysql_real_escape_string($_POST['address']);
        $medicine=mysql_real_escape_string($_POST['medicine']);

    $contact_no=mysql_real_escape_string($_POST['contact_no']);
    $email=mysql_real_escape_string($_POST['email']);
    $room=mysql_real_escape_string($_POST['room_no']);



    $qry=mysql_query("insert into pharmacy_info (doct_name,patient_name,address,medicine,contact_no,email,room_no) 
            values ('$doctor_name','$patient_name','$address','$medicine','$contact_no','$email','$room') ")


        or die(mysql_error());
    if($qry)
    {

        return 1;
    }
    else
        echo'fail';

}

}