
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title> Website on Hospital Management</title>


                        <style type="text/css">

/*   body {
            background: #f2f2f2 url(img/bg1.jpg) ;
                            }        */
                            
                            
                            
                            
 .appoint {
/*    width: 610px;  important to be same as image width 
    height: 300px;  important to be same as image height */
    position: relative; /* important */
	overflow: hidden; /* important */
        float:left;
        color:blueviolet;
        font-size: 14px;
        
}




                      
                            
  </style>










<?php



class appointmentinfo {
    
public function connection(){
    $db['host'] = 'localhost';
    $db['user'] = 'ismail_hms';
    $db['pass'] = '09876';
    $db['name'] = 'ismail_hms';
    mysql_connect($db['host'], $db['user'], $db['pass']);
    mysql_select_db($db['name']);
}
function insert(){
    $this->connection();

    $patient_name=mysql_real_escape_string($_POST['patient_name']);    
    $address=mysql_real_escape_string($_POST['address']);
    $doctor_name=mysql_real_escape_string($_POST['doctor_name']);
    $doct_department=mysql_real_escape_string($_POST['doct_department']);
    $contact_no=mysql_real_escape_string($_POST['contact_no']);
    $email=mysql_real_escape_string($_POST['email']);
    $genarate="$doct_department ".'000'.rand(1,1000);



    $qry=mysql_query("insert into online_appointment (patient_name,address,doctor_name,doct_department,contact_no,
   email,genarate_id) values ('$patient_name','$address','$doctor_name','$doct_department','$contact_no','$email','$genarate') ")

        or die(mysql_error());
        $id = mysql_insert_id();

    if($qry)
    {

         echo "<div class=\"appoint\" style=\"border solid 2px; float:right \"> &nbsp &nbsp<b> $genarate </br> </br> </br></div>&nbsp" .
                 "<div class=\"appoint\" style=\"border solid 2px; float:right \"><b>You have a serial key :</br> </br> </br></div> ";
    }
    else
        echo'fail';

}
//    public function viewgenaratekey($id){
//
//        $sql=mysql_query("select * from online_appointment where online_id=$id ") or die(mysql_error());
//
//
//        while($fs=mysql_fetch_array($sql)){
//           // var_dump($fs);die;
//            //echo $fs[7];
//
//        }
//    }

}


