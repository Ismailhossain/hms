<?php


class patientinfo {
    
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

    $joiningDate = mysql_real_escape_string($_POST['patient_admitted_date']);

    $date = explode("/", $joiningDate);



    $patient_name=mysql_real_escape_string($_POST['patient_name']);    
    $patient_gender=mysql_real_escape_string($_POST['patient_gender']);
    $patient_address=mysql_real_escape_string($_POST['patient_address']);
    $patient_contact=mysql_real_escape_string($_POST['patient_contact']);
    $patient_email=mysql_real_escape_string($_POST['patient_email']);
    $patient_admitted_date= $date[2]. '-' .$date[1] . '-' . $date[0];
    $patient_room_catagory=mysql_real_escape_string($_POST['patient_room_catagory']);
    $duty_doctor_name=mysql_real_escape_string($_POST['duty_doctor_name']);
    $deposit=mysql_real_escape_string($_POST['deposit']);
    $due=mysql_real_escape_string($_POST['due']);
    $total_amount=mysql_real_escape_string($_POST['total_amount']);
    $status=mysql_real_escape_string($_POST['status']);




    $qry=mysql_query("insert into patient_info (patient_name,patient_gender,patient_address,patient_contact,patient_email,
   patient_admitted_date,patient_room_catagory,duty_doctor_name,deposit,due,total_amount,status) values ('$patient_name','$patient_gender','$patient_address',
    '$patient_contact','$patient_email','$patient_admitted_date','$patient_room_catagory','$duty_doctor_name','$deposit','$due','$total_amount','$status') ")


        or die(mysql_error());
    if($qry)
    {

        return 1;
    }
    else
        echo'fail';

}



function view (){
        $this->connection();

    
    $query=mysql_query("select * from patient_info ");

echo "<table id= simple border='1' width='100%'>
<tr>
<th>Name</th>
<th>Gender</th>
<th>Address</th>
<th>Contact No</th>
<th>Email</th>
<th>Admitted date</th>
<th>Room catagory </th> 
<th>Duty doctor name</th>
<th>Depostie</th>
<th>Due</th>
<th>Total</th>
<th>Status</th>

<th colspan=2>Action  </th>


</tr>";



while($fs=mysql_fetch_array($query))
{


    echo "<tr class=alt colspan=2>";
    echo "<td  >" . $fs[1]. "</td>";
    echo "<td>" . $fs[2]. "</td>";
    echo "<td>" . $fs[3]. "</td>";
    echo "<td>" . $fs[4]. "</td>";
    echo "<td>" . $fs[5]. "</td>";
    echo "<td>" . $fs[6]. "</td>";
  
    echo "<td>" . $fs[7]. "</td>";
    echo "<td>" . $fs[8]. "</td>";
    echo "<td>" . $fs[9]. "</td>";
    echo "<td>" . $fs[10]. "</td>";
    echo "<td>" . $fs[11]. "</td>";
    echo "<td>" . $fs[12]. "</td>";

    echo"<td><a href='admin/patient_tbl.php ' > <img src=images/table/action_edit.gif />  </a> &nbsp;
        

    <a href='admin/patient_tbl.php'  > <img src=images/table/icon_close_green.gif /> </a>&nbsp; </td>";
    
//   
    
    echo "</tr>";
}
echo "</table>";
    
    
    
    
    
    
}



public function deletepatient($patientId){
    $this->connection();
    $sql = "DELETE FROM patient_info WHERE patient_id = $patientId";
    $query = mysql_query($sql);
    
    if ($query){
        return true;
    }

}


public function editpatient($patientid) {

    
    $this->connection();
    
     $sql = "SELECT * FROM patient_info WHERE patient_id = $patientid ";
    $result = mysql_query($sql);

    if (mysql_num_rows($result)>0) {
        $data = mysql_fetch_assoc($result);
        return $data;
    }
     return $result;
}


    public function edit($patientid)
    {
            $this->connection();


    @$patient_name=mysql_real_escape_string($_POST['patient_name']);    
     @$patient_gender=mysql_real_escape_string($_POST['patient_gender']);
     @$patient_address=mysql_real_escape_string($_POST['patient_address']);
     @$patient_contact=mysql_real_escape_string($_POST['patient_contact']);
     @$patient_email=mysql_real_escape_string($_POST['patient_email']);
     @$patient_room_catagory=mysql_real_escape_string($_POST['patient_room_catagory']);
    @$duty_doctor_name=mysql_real_escape_string($_POST['duty_doctor_name']);
     @$deposit=mysql_real_escape_string($_POST['deposit']);
     @$due=mysql_real_escape_string($_POST['due']);
     @$total_amount=mysql_real_escape_string($_POST['total_amount']);
     @$status=mysql_real_escape_string($_POST['status']);


    
    $sql = "UPDATE patient_info SET
   patient_name = '$patient_name',patient_gender = '$patient_gender',patient_address = '$patient_address',patient_contact = '$patient_contact',
   patient_email = '$patient_email',patient_room_catagory = '$patient_room_catagory',duty_doctor_name = '$duty_doctor_name',deposit = '$deposit',
   due = '$due',total_amount = '$total_amount', status = '$status' WHERE patient_id = '$patientid'";
    
     $result = mysql_query($sql);

    if (!$result) {
        echo $sql;


    }


    
    

    
    
    
}
    







}

