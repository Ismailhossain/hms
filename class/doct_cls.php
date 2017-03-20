
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title> Website on Hospital Management</title>


                        <style type="text/css">

/*   body {
            background: #f2f2f2 url(img/bg1.jpg) ;
                            }        */
                            
                            
                            
                            
 .doct {
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


class doctinfo {
    
public function connection(){
    $db['host'] = 'localhost';
    $db['user'] = 'ismail_hms';
    $db['pass'] = '09876';
    $db['name'] = 'ismail_hms';
    mysql_connect($db['host'], $db['user'], $db['pass']);
    mysql_select_db($db['name']);
}

public function insert(){
    
    $this->connection();

    $joiningDate = mysql_real_escape_string($_POST['doct_joinning_date']);

    $date = explode("/", $joiningDate);


    $obj = new MU($_FILES['doct_image'],'');

    $fselected=$obj->get_value('file_selected');
    if($fselected>0)
    {
        $obj->allowed_extentions=array(".jpeg",".png",".jpg",".gif",".bmp");
        $obj->uploaddir=".".DIRECTORY_SEPARATOR."upload".DIRECTORY_SEPARATOR;
        $obj->upload_files();
        $up_error=$obj->mu_error();
        $doct_image=$obj->uploaded_files();

   }

    else{
        die("no file selected");
        $doct_image=" ";
    }
    
    
    
    $doct_name=mysql_real_escape_string($_POST['doct_name']);
    $doct_designation=mysql_real_escape_string($_POST['doct_designation']);
   $doct_gender=mysql_real_escape_string($_POST['doct_gender']);
    $doct_department=mysql_real_escape_string($_POST['doct_department']);
    $doct_description=mysql_real_escape_string($_POST['doct_description']);
    $doct_address=mysql_real_escape_string($_POST['doct_address']);
    $doct_contact=mysql_real_escape_string($_POST['doct_contact']);
    $doct_email=mysql_real_escape_string($_POST['doct_email']);
    $doct_duty_time=mysql_real_escape_string($_POST['doct_duty_time']);
   $doct_joinning_date= $date[2]. '-' .$date[1] . '-' . $date[0];
    $status=mysql_real_escape_string($_POST['status']);
    $salary=mysql_real_escape_string($_POST['salary']);



    $qry=mysql_query("insert into doct_info (doct_name,doct_designation,doct_gender,doct_department,doct_description,
   doct_address,doct_contact,doct_email,doct_duty_time,doct_joinning_date,status,doct_image,salary,doct_type) values ('$doct_name','$doct_designation','$doct_gender',
    '$doct_department','$doct_description','$doct_address','$doct_contact','$doct_email','$doct_duty_time','$doct_joinning_date','$status','$doct_image','$salary',1) ")

        or die(mysql_error());
    if($qry)
    {

     echo "<p class='doct'>You have successfully insert the information </br> </br> </p> </br> </br> </br>";
    }
    else
        echo'fail';

}


function view (){
    
    $this->connection();
    $query=mysql_query("select * from doct_info ");

echo "<table id= simple border='1' width='100%'>
<tr>
<th>Name</th>
<th>Designation</th>
<th>Gender</th>
<th>Department</th>
<th>Contact No</th>
<th>Email</th>
<th>Image </th> 
<th>Duty Time</th>
<th>Salary</th>
<th>Status</th>
<th>Joinning Date</th>
<th colspan=2>Action  </th>


</tr>";



while($fs=mysql_fetch_array($query))
{


    echo "<tr class=alt>";
    echo "<td >" .$fs[1]. "</td>";
    echo "<td>" . $fs[2]. "</td>";
    echo "<td>" . $fs[3]. "</td>";
    echo "<td>" . $fs[5]. "</td>";
    echo "<td>" . $fs[8]. "</td>";
    echo "<td>" . $fs[9]. "</td>";
    echo"<td height=100px width=100px>";
    
    ?>


     <img src="admin/upload/<?php echo $fs[10] ?>"  width="100px;" height="100px;"/>
    
    <?php
    echo '</td>';
   // echo "<td>" . $fs[10]. "</td>";
    echo "<td>" . $fs[11]. "</td>";
    echo "<td>" . $fs[13]. "</td>";
    echo "<td>" . $fs[14]. "</td>";
    echo "<td>" . $fs[12]. "</td>";
    echo"<td><a href='admin/doct_tbl.php' > <img src=images/table/action_edit.gif />  </a>&nbsp;

    <a href='admin/doct_tbl.php'   > <img src=images/table/icon_close_green.gif /> </a>&nbsp; </td>";
//
    echo "</tr>";
}
echo "</table>";
    
    
    
    
    
    
}




public function deleteDoctor($doctId){
    $this->connection();
    $sql = "DELETE FROM doct_info WHERE doct_id = $doctId";
    $query = mysql_query($sql);
    
    if ($query){
        return true;
    }

}











public function editdoctor($doctid) {

    
    $this->connection();
    
     $sql = "SELECT * FROM doct_info WHERE doct_id = $doctid ";
    $result = mysql_query($sql);

    if (mysql_num_rows($result)>0) {
        $data = mysql_fetch_assoc($result);
        return $data;
    }
     return $result;
}


    public function edit($doctid)
    {

    $this->connection();

    @$doct_name=mysql_real_escape_string($_POST['doct_name']);
    @$doct_designation=mysql_real_escape_string($_POST['doct_designation']);
    @$doct_gender=mysql_real_escape_string($_POST['doct_gender']);
    @$doct_department=mysql_real_escape_string($_POST['doct_department']);
    @$doct_description=mysql_real_escape_string($_POST['doct_description']);
    @$doct_address=mysql_real_escape_string($_POST['doct_address']);
    @$doct_contact=mysql_real_escape_string($_POST['doct_contact']);
   @$doct_email=mysql_real_escape_string($_POST['doct_email']);
    @$doct_duty_time=mysql_real_escape_string($_POST['doct_duty_time']);
    @$status=mysql_real_escape_string($_POST['status']);
    @$salary=mysql_real_escape_string($_POST['salary']);

    
    $sql = "UPDATE doct_info SET
   doct_name = '$doct_name',doct_designation = '$doct_designation',doct_gender = '$doct_gender',doct_department = '$doct_department',
   doct_description = '$doct_description',doct_address = '$doct_address',doct_email = '$doct_email',doct_duty_time = '$doct_duty_time',
   status = '$status',salary = '$salary', doct_contact = '$doct_contact' WHERE doct_id = '$doctid'";
    
     $result = mysql_query($sql);

    if (!$result) {
        echo $sql;


    }


    
    

    
    
    
}
    
    







}


