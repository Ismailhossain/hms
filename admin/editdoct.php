
<?php

include_once '../header.php';
include_once '../container_top.php';
//
include_once'../class/doct_cls.php';

?>



<?php  


$doctid = $_GET['doct_id'];

$doct = new doctinfo();


//var_dump($doct);die;

if ($doct->editdoctor($doctid) ){


    $row=$doct->editdoctor($doctid);

    
};

if($doct->edit($doctid)){


    $doct->edit($doctid);
}

?>



<script type="text/javascript">
    function ValidateContactForm()
    {
        var doct_name = document.doct_form.doct_name;
        var doct_designation = document.doct_form.doct_designation;
        var doct_gender = document.doct_form.doct_gender;
        var doct_department = document.doct_form.doct_department;
        var doct_description = document.doct_form.doct_description;
        var doct_address = document.doct_form.doct_address;
        var doct_contact = document.doct_form.doct_contact;
        var doct_email = document.doct_form.doct_email;
        var doct_duty_time = document.doct_form.doct_duty_time;
        var doct_joinning_date = document.doct_form.doct_joinning_date;
        var status = document.doct_form.status;
        var doct_image = document.doct_form.doct_image;
        var salry=document.doct_form.salary;


        if (doct_name.value == "")
        {
            window.alert("Please enter your name.");
            doct_name.focus();
            return false;
        }
        if (doct_designation.value == "")
        {
            window.alert("Please enter your Designation.");
            doct_designation.focus();
            return false;
        }
        if (doct_gender.value == "")
        {
            window.alert("Please enter your gender.");
            doct_gender.focus();
            return false;
        }
        if (doct_department.value == "")
        {
            window.alert("Please enter your Department.");
            doct_department.focus();
            return false;
        }
        if (doct_description.value == "")
        {
            window.alert("Please enter your Description.");
            doct_description.focus();
            return false;
        }
        if (doct_address.value == "")
        {
            window.alert("Please enter your Address.");
            doct_address.focus();
            return false;
        }

        if (doct_contact.value == "")
        {
            window.alert("Please enter your contact.");
            doct_address.focus();
            return false;
        }



        if (doct_email.value == "")
        {
            window.alert("Please enter a valid e-mail address.");
            doct_email.focus();
            return false;
        }
        if (doct_email.value.indexOf("@", 0) < 0)
        {
            window.alert("Please enter a valid e-mail address.");
            doct_email.focus();
            return false;
        }
        if (doct_email.value.indexOf(".com", 0) < 0)
        {
            window.alert("Please enter a valid e-mail address.");
            doct_email.focus();
            return false;
        }
        if (doct_duty_time.value == "")
        {
            window.alert("Please enter your duty time.");
            doct_duty_time.focus();
            return false;
        }
        if (doct_joinning_date.value == "")
        {
            window.alert("Please enter your joinning date");
            doct_joinning_date.focus();
            return false;
        }
        if (salary.value == "")
        {
            window.alert("Please enter salary");
            salary.focus();
            return false;
        }
        if (status.selectedIndex < 1)
        {
            alert("Please select status.");
            status.focus();
            return false;
        }
        return true;
    }
</script>

<form action="" name="doct_form" method="post" onsubmit="return ValidateContactForm();" enctype="multipart/form-data">
<!--		  start step-holder -->
		<div id="step-holder">
			<div class="step-no"></div>
			<div class="step-dark-left">Doctor's Information</div>
			<div class="step-dark-right">&nbsp;
               <div style="color:green; height: 20px;width: 100px;margin-left:100px;">


                   <?php // echo"insert";?>

               </div>
            </div>
			

		</div>
<!--		  end step-holder -->
	
		<!-- start id-form -->
		<table border="0" cellpadding="0" cellspacing="0"  id="id-form">
                    
                    <tr>
                        <input type="hidden" name="doct_id"/>
			<th valign="top">Doctor Name:</th>
                        
	<td><input type="text"  class="inp-form-error" name="doct_name" id="doct_name" value="<?php echo $row['doct_name'] ?>"  /></td>
			
      
		</tr>
		
                <tr>
			<th valign="top">Designation:</th>
			<td><input type="text" name="doct_designation" value="<?php echo $row['doct_designation']?>" class="inp-form" /></td>
			<td></td>
		 </tr>
                 
                  <tr>
			<th valign="top">Gender:</th>
<!--			<td><input type="radio" name="doct_gender"  value="male" /> Male</td> 
                        <td><input type="radio" name="doct_gender"  value="female" /> Female </td>-->
			<td>
                            <select  name="doct_gender"  class="styledselect_form_14">
                         	<option value=""></option>

			<option value="male" <?php echo $row['doct_gender']=='male'? 'selected="selected"':'' ?>>Male</option>
			<option value="female" <?php echo $row['doct_gender']=='female'? 'selected="selected"':'' ?>>Female</option>
                            
                            		</select>

                            
                        </td>
		 </tr>

		
		<tr>
		<th  valign="top">Department:</th>
		<td>

		<select  name="doct_department" class="styledselect_form_14">
            <option value=""></option>
			<option value=""></option>
			<option value="general surgery"<?php echo $row['doct_department']=='general surgery'? 'selected="selected"':'' ?>>General Surgery</option>
			<option value="internal medicine"<?php echo $row['doct_department']=='internal medicine'? 'selected="selected"':'' ?>>Internal Medicine</option>
			<option value="internal critical care"<?php echo $row['doct_department']=='internal critical care'? 'selected="selected"':'' ?>>Internal Medicine and Critical Care</option>
			<option value="urology"<?php echo $row['doct_department']=='urology'? 'selected="selected"':'' ?>>Urology</option>
                        <option value="orthopedics"<?php echo $row['doct_department']=='orthopedics'? 'selected="selected"':'' ?>>Orthopedics</option>
			<option value="neurology"<?php echo $row['doct_department']=='neurology'? 'selected="selected"':'' ?>>Neurology</option>
			<option value="neurosurgery"<?php echo $row['doct_department']=='neurosurgery'? 'selected="selected"':'' ?>>Neuro Surgery</option>
			<option value="pathology"<?php echo $row['doct_department']=='pathology'? 'selected="selected"':'' ?>>Pathology and Laboratory Medicine</option>
                        <option value="chest"<?php echo $row['doct_department']=='chest'? 'selected="selected"':'' ?>>Chest</option>
			<option value="emergency"<?php echo $row['doct_department']=='emergency'? 'selected="selected"':'' ?>>Emergency</option>
			<option value="ICU"<?php echo $row['doct_department']=='ICU'? 'selected="selected"':'' ?>>ICU</option>
			<option value="obgyn"<?php echo $row['doct_department']=='obgyn'? 'selected="selected"':'' ?>>OBGYN</option>
			<option value="oncology"<?php echo $row['doct_department']=='oncology'? 'selected="selected"':'' ?>>Oncology</option>


		</select>
		</td>
		<td></td>
		</tr>
                <tr>
		<th valign="top">Description:</th>
		<td><textarea name="doct_description" rows="" cols="" class="form-textarea"><?php echo $row['doct_description']?></textarea></td>
		<td></td>
	       </tr>
               
               <tr>
			<th valign="top">Address:</th>
                        <td><textarea name="doct_address" rows="" cols="" class="form-textarea"> <?php echo $row['doct_address']?></textarea> </td>
			<td></td>
		</tr>
                
                 <tr>
			<th valign="top">Contact No:</th>
                        <td><input type="text" name="doct_contact" class="inp-form" value="<?php echo $row['doct_contact']?>" /></td>
			<td></td>
		</tr>
                
                  <tr>
			<th valign="top">Email:</th>
                        <td><input type="text" name="doct_email" class="inp-form" value="<?php echo $row['doct_email']?>" /></td>
			<td></td>
		</tr>
                
                 <tr>
			<th valign="top">Duty time:</th>
                        <td><input type="text" name="doct_duty_time" value="<?php echo $row['doct_duty_time']?>" class="inp-form" /> </td>
			<td></td>
		</tr>

		<tr>
		<th valign="top"> Joining date:</th>
                
                		<td><input type="text" id="date-pick" name="doct_joinning_date" value="<?php echo $row['doct_joinning_date']?>"  class="inp-form" ></td>
<!--
		<td class="noheight">
		
			<table border="0" cellpadding="0" cellspacing="0">
			<tr  valign="top">


                                
                
                
			</tr>
			</table>
		
		</td>-->
		<td></td>
	</tr>
	

		
		<tr>
			<th valign="top">Salary:</th>
			<td><input name ="salary"type="text" class="inp-form" value="<?php echo $row['salary']?>" /></td>
			<td></td>
		 </tr>

		<tr>
		<th  valign="top">Status:</th>
		<td>	
		<select  name="status" class="styledselect_form_1">
            <option value=""> </option>
			<option value="paid" <?php echo $row['status']=='paid'? 'selected="selected"':'' ?>>Paid</option>
			<option value="not paid" <?php echo $row['status']=='not paid'? 'selected="selected"':'' ?>>Not Paid</option>
			

		</select>
		</td>
		<td></td>
		</tr>




           
	<tr>
	<th>Image :</th>
	<td><input  name="doct_image" type="file" class="file_1" />

        </td>
	<td>
	<div class="bubble-left"></div>
	<div class="bubble-inner">JPEG, GIF 5MB max per image</div>
	<div class="bubble-right"></div>
	</td>
	</tr>

	<tr>
		<th>&nbsp;</th>
		<td valign="top">
			<input type="submit"  name="submit" class="form-submit" />
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
