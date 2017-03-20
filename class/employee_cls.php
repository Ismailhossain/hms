<?php

class employeeinfo {
    
    
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


    $joiningDate = mysql_real_escape_string($_POST['employee_joining_date']);

    $date = explode("/", $joiningDate);


    $obj = new MU($_FILES['employee_image'],'');
    $fselected=$obj->get_value('file_selected');
    if($fselected>0)
    {
        $obj->allowed_extentions=array(".jpeg",".png",".jpg",".gif",".bmp");
        $obj->uploaddir=".".DIRECTORY_SEPARATOR."upload".DIRECTORY_SEPARATOR;
        $obj->upload_files();
        $up_error=$obj->mu_error();
        $employee_image=$obj->uploaded_files();
    }

    else{
        die("no file selected");
        $employee_image=" ";
    }

    $employee_name=mysql_real_escape_string($_POST['employee_name']);    
    $employee_gender=mysql_real_escape_string($_POST['employee_gender']);
    $employee_description=mysql_real_escape_string($_POST['employee_description']);
    $employee_address=mysql_real_escape_string($_POST['employee_address']);
    $employee_contact=mysql_real_escape_string($_POST['employee_contact']);
    $employee_duty_time=mysql_real_escape_string($_POST['employee_duty_time']);
    $employee_joining_date= $date[2]. '-' .$date[1] . '-' . $date[0];
    $salary=mysql_real_escape_string($_POST['salary']);
    $status=mysql_real_escape_string($_POST['status']);




    $qry=mysql_query("insert into employee_info (employee_name,employee_gender,employee_description,employee_address,employee_contact,
   employee_duty_time,employee_joining_date,salary,status,employee_image,employee_type) values ('$employee_name','$employee_gender','$employee_description',
    '$employee_address','$employee_contact','$employee_duty_time','$employee_joining_date','$salary','$status','$employee_image',2) ")


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

    
    
    $query=mysql_query("select * from employee_info ");

echo "<table id= simple border='1' width='100%'>
<tr>
<th>Name</th>
<th>Gender</th>
<th>Image </th> 
<th>Address</th>
<th>Contact No</th>
<th>Duty Time</th>
<th>Joining date</th>
<th>Salary</thphp>
<th>Status</th>
<th colspan=2>Action  </th>


</tr>";



while($fs=mysql_fetch_array($query))
{


    echo "<tr class=alt>";
    echo "<td >" . $fs[1]. "</td>";
    echo "<td>" . $fs[2]. "</td>";
    echo"<td height=100px width=100px>";
    
    ?>


     <img src="<?php echo base_url; ?>/admin/upload/<?php echo $fs[11] ?>"  width="100px;" height="100px;"/>
    
    <?php
    echo "<td>" . $fs[4]. "</td>";
    echo "<td>" . $fs[5]. "</td>";
    echo "<td>" . $fs[6]. "</td>";
    echo "<td>" . $fs[7]. "</td>";  
    echo "<td>" . $fs[9]. "</td>";
    echo "<td>" . $fs[10]. "</td>";
   
    echo"<td height=100px width=150px><a href='admin/employee_tbl.php' > <img src=images/table/action_edit.gif />  </a> &nbsp;
    <a href='admin/employee_tbl.php'  > <img src=images/table/icon_close_green.gif /> </a>&nbsp; </td>";
//
    echo "</tr>";
}
echo "</table>";
    
    
    
    
    
    
}


public function deleteemployee($employeeId){
    $this->connection();
    $sql = "DELETE FROM employee_info WHERE employee_id = $employeeId";
    $query = mysql_query($sql);
    
    if ($query){
        return true;
    }

}




public function editemployee($employeeid) {

        $this->connection();

    
     $sql = "SELECT * FROM employee_info WHERE employee_id = $employeeid ";
    $result = mysql_query($sql);

    if (mysql_num_rows($result)>0) {
        $data = mysql_fetch_assoc($result);
        return $data;
    }
     return $result;
}


    public function edit($employeeid)
    {


 
    @$employee_name=mysql_real_escape_string($_POST['employee_name']);    
    @$employee_gender=mysql_real_escape_string($_POST['employee_gender']);
    @$employee_description=mysql_real_escape_string($_POST['employee_description']);
    @$employee_address=mysql_real_escape_string($_POST['employee_address']);
    @$employee_contact=mysql_real_escape_string($_POST['employee_contact']);
    @$employee_duty_time=mysql_real_escape_string($_POST['employee_duty_time']);
    @$salary=mysql_real_escape_string($_POST['salary']);
    @$status=mysql_real_escape_string($_POST['status']);

    
    $sql = "UPDATE employee_info SET
   employee_name = '$employee_name',employee_gender = '$employee_gender',employee_description = '$employee_description',
    employee_address = '$employee_address',   employee_contact = '$employee_contact',employee_duty_time = '$employee_duty_time',
    salary = '$salary',status = '$status'    WHERE employee_id = '$employeeid'";
    
     $result = mysql_query($sql);

    if (!$result) {
        echo $sql;


    }


    
    

    
    
    
}
    









}