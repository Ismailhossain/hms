 <?php

include_once '../header.php';

include_once '../container_top.php';

include_once'../class/employee_cls.php';
include_once'../includes/class.mu.php';


?>

<?php  


$employeeid = $_GET['employee_id'];

$employee = new employeeinfo();


//var_dump($doct);die;

if ($employee->editemployee($employeeid) ){


    $row=$employee->editemployee($employeeid);

    
};

if($employee->edit($employeeid)){


    $employee->edit($employeeid);
}

?>




<script type="text/javascript">
    function ValidateContactForm()
    {
        var employee_name = document.employee_form.employee_name;
        var employee_gender = document.employee_form.employee_gender;
        var employee_description = document.employee_form.employee_description;
        var employee_address = document.employee_form.employee_address;
        var employee_contact = document.employee_form.employee_contact;
        var employee_duty_time = document.employee_form.employee_duty_time;
        var duty_doctor_name = document.employee_form.duty_doctor_name;
        var patient_email = document.employee_form.patient_email;
        var deposit = document.employee_form.deposit;
        var due = document.employee_form.due;
        var total_amount = document.employee_form.total_amount;
        var status = document.employee_form.status;
        var employee_image=document.employee_form.employee_image;


        if (employee_name.value == "")
        {
            window.alert("Please enter your name.");
            employee_name.focus();
            return false;
        }
        if (employee_gender.value == "")
        {
            window.alert("Please enter your gender.");
            employee_gender.focus();
            return false;
        }
        if (employee_description.value == "")
        {
            window.alert("Please enter your description.");
            employee_description.focus();
            return false;
        }
        if (employee_address.value == "")
        {
            window.alert("Please enter your address.");
            employee_address.focus();
            return false;
        }
        if (employee_contact.value == "")
        {
            window.alert("Please enter your contact.");
            employee_contact.focus();
            return false;
        }
        if (employee_duty_time.value == "")
        {
            window.alert("Please enter your duty time.");
            employee_duty_time.focus();
            return false;
        }

        if (employee_joining_date.value == "")
        {
            window.alert("Please enter your joining date.");
            employee_joining_date.focus();
            return false;
        }



 
        if (salary.value == "")
        {
            window.alert("Please enter the salary.");
            salary.focus();
            return false;
        }
   
        if (status.selectedIndex < 1)
        {
            window.alert("Please select status.");
            status.focus();
            return false;
        }
        return true;
    }
</script>

<form action="" name="employee_form" method="post" onsubmit="return ValidateContactForm();" enctype="multipart/form-data">

	
		<!--  start step-holder -->
		<div id="step-holder">
			<div class="step-no"></div>
			<div class="step-dark-left">Employee's information </div>
			<div class="step-dark-right">&nbsp;</div>
			
			

		</div>
		<!--  end step-holder -->
	
		<!-- start id-form -->
		<table border="0" cellpadding="0" cellspacing="0"  id="id-form">
                    
                    <tr>
			<th valign="top">Employee Name:</th>
			<td><input type="text" name="employee_name" class="inp-form-error" value="<?php echo $row['employee_name'] ?>" /></td>
<!--			<td>
			<div class="error-left"></div>
			<div class="error-inner">This field is required.</div>
			</td>-->
		</tr>
		                 
                 <tr>
			<th valign="top">Gender:</th>
<!--			<td><input type="radio" name="patient_gender"  value="male" /> Male</td> 
                        <td><input type="radio" name="patient_gender"  value="female" /> Female </td>-->
			<td>
                            <select  name="employee_gender" class="styledselect_form_14">
                         	
                        <option value=""></option>
			<option value="male" <?php echo $row['employee_gender']=='male'? 'selected="selected"':'' ?>>Male</option>
			<option value="female" <?php echo $row['employee_gender']=='female'? 'selected="selected"':'' ?>>Female</option>
                            
                            		</select>

                            
                        </td>
		 </tr>

	
                <tr>
		<th valign="top">Description:</th>
		<td><textarea name="employee_description" rows="" cols="" class="form-textarea"><?php echo $row['employee_description'] ?></textarea></td>
		<td></td>
	       </tr>
               
               <tr>
			<th valign="top">Address:</th>
                        <td><textarea name="employee_address" rows="" cols="" class="form-textarea"><?php echo $row['employee_address'] ?> </textarea> </td>
			<td></td>
		</tr>
                
                 <tr>
			<th valign="top">Contact No:</th>
                        <td><input type="text" name="employee_contact" class="inp-form" value="<?php echo $row['employee_contact'] ?>" /></td>
			<td></td>
		</tr>
                
                              
                 <tr>
			<th valign="top">Duty time:</th>
                        <td><input type="text" name="employee_duty_time" class="inp-form" value="<?php echo $row['employee_duty_time'] ?>" /> </td>
			<td></td>
		</tr>
                
             

      	<tr>
		<th valign="top"> Joining Date:</th>
                
                		<td><input type="text" id="date-pick" name="employee_joining_date" value="<?php echo $row['employee_joining_date'] ?>"  class="inp-form" ></td>

		<td></td>
	</tr>

		
		<tr>
			<th valign="top">Salary:</th>
			<td><input name ="salary"type="text" class="inp-form" value="<?php echo $row['salary'] ?>"  /></td>
			<td></td>
		 </tr>

		<tr>
		<th  valign="top">Status:</th>
		<td>	
		<select  name="status" class="styledselect_form_1">
                        <option value=""></option>
			<option value="paid" <?php echo $row['status']=='paid'? 'selected="selected"':'' ?>>Paid</option>
			<option value="not paid" <?php echo $row['status']=='not paid'? 'selected="selected"':'' ?>>Not Paid</option>
			

		</select>
		</td>
		<td></td>
		</tr>


          
	<tr>
	<th>Image :</th>
	<td><input  name="employee_image" type="file" class="file_1" /></td>
	<td>
	<div class="bubble-left"></div>
	<div class="bubble-inner">JPEG, GIF 5MB max per image</div>
	<div class="bubble-right"></div>
	</td>
	</tr>

	<tr>
		<th>&nbsp;</th>
		<td valign="top">
			<input type="submit" value="" name="submit" class="form-submit" />
			<input type="reset" value="" class="form-reset"  />
		</td>
		<td></td>
	</tr>
	</table>

</form>
                
    
<?php 

include_once '../container_bottom.php';


include_once '../footer.php';


?>