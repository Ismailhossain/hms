<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title> Website on Hospital Management</title>


                        <style type="text/css">

/*   body {
            background: #f2f2f2 url(img/bg1.jpg) ;
                            }        */
                            
                            
                            
                            
 .feedback {
/*    width: 610px;  important to be same as image width 
    height: 300px;  important to be same as image height */
    position: relative; /* important */
	overflow: hidden; /* important */
        float:left;
        color: blue;
        font-size: 14px;
        
}




                      
                            
  </style>




<?php
include_once'../includes/connection.php';



class feedbackinfo {

function insert(){

   

    $patient_name=mysql_real_escape_string($_POST['patient_name']);    
    $patient_gender=mysql_real_escape_string($_POST['patient_gender']);
    $your_name	=mysql_real_escape_string($_POST['your_name']);
    $relation=mysql_real_escape_string($_POST['relation']);
    $address=mysql_real_escape_string($_POST['address']);
    $country=mysql_real_escape_string($_POST['country']);
    $doctor_name=mysql_real_escape_string($_POST['doctor_name']);
    $contact_no=mysql_real_escape_string($_POST['contact_no']);
    $email=mysql_real_escape_string($_POST['email']);
    $suggestion	=mysql_real_escape_string($_POST['suggestion']);




    $qry=mysql_query("insert into feedback_info (patient_name,patient_gender,your_name,relation,address,
   country,doctor_name,contact_no,email,suggestion) values ('$patient_name','$patient_gender','$your_name',
    '$relation','$address','$country','$doctor_name','$contact_no','$email','$suggestion') ")


        or die(mysql_error());
    if($qry)
    {

        echo "<p class='feedback'>You have successfully gave your feedback</br> </br> </br> </p> </br> </br> </br>" ;
    }
    else
        echo'fail';

}

}