<?php
include_once'checking.php';

include_once '../header.php';
include_once '../container_top.php';

include_once'../class/doct_cls.php';
include_once'../includes/class.mu.php';

$docinfo = new doctinfo();

//$obj = new MU($_FILES['doct_image'],'');

if(isset($_POST['submit'])){
   // var_dump($_POST);die;
    $docinfo->insert();
  //header('Location:admin/admin.php');

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
			<div class="step-dark-left">Doctor Information</div>
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
                        <input type="hidden" name="uid"/>
			<th valign="top">Doctor Name:</th>
			<td><input type="text" name="doct_name"autofocus="autofocus" placeholder="give your doctor name.."   class="inp-form-error" /></td>
			<td>


			</td>
		</tr>
		
                <tr>
			<th valign="top">Designation:</th>
			<td><input type="text" name="doct_designation" placeholder="give your Designation.." class="inp-form" /></td>
			<td></td>
		 </tr>
                 
                  <tr>
			<th valign="top">Gender:</th>
<!--			<td><input type="radio" name="doct_gender"  value="male" /> Male</td> 
                        <td><input type="radio" name="doct_gender"  value="female" /> Female </td>-->
			<td>
                            <select  name="doct_gender" class="styledselect_form_14" >
                         	<option value=""></option>

			<option value="male">Male</option>
			<option value="female">Female</option>
                            
                            		</select>

                            
                        </td>
		 </tr>

		
		<tr>
		<th  valign="top">Department:</th>
		<td>	
		<select  name="doct_department" class="styledselect_form_14">
            <option value=""></option>
			<option value="all">All</option>
			<option value="general surgery">General Surgery</option>
			<option value="internal medicine">Internal Medicine</option>
			<option value="internal critical care">Internal Medicine and Critical Care</option>
			<option value="urology">Urology</option>
                        <option value="orthopedics">Orthopedics</option>
			<option value="neurology">Neurology</option>
			<option value="neurosurgery">Neuro Surgery</option>
			<option value="pathology">Pathology and Laboratory Medicine</option>
                        <option value="chest">Chest</option>
			<option value="emergency">Emergency</option>
			<option value="ICU">ICU</option>
			<option value="obgyn">OBGYN</option>
			<option value="oncology">Oncology</option>


		</select>
		</td>
		<td></td>
		</tr>
                <tr>
		<th valign="top">Description:</th>
		<td><textarea name="doct_description" rows="" cols="" class="form-textarea"placeholder="About Doctor..."></textarea></td>
		<td></td>
	       </tr>
               
               <tr>
			<th valign="top">Address:</th>
                        <td><textarea name="doct_address" rows="" cols="" class="form-textarea"> </textarea> </td>
			<td></td>
		</tr>
                
                 <tr>
			<th valign="top">Contact No:</th>
                        <td><input type="text" name="doct_contact" class="inp-form" /></td>
			<td></td>
		</tr>
                
                  <tr>
			<th valign="top">Email:</th>
                        <td><input type="text" name="doct_email" class="inp-form" /></td>
			<td></td>
		</tr>
                
                 <tr>
			<th valign="top">Duty time:</th>
                        <td><input type="text" name="doct_duty_time" class="inp-form" /> </td>
			<td></td>
		</tr>

		<tr>
		<th valign="top"> Joining date:</th>
                
                		<td><input type="text" id="date-pick" name="doct_joinning_date"  class="inp-form" ></td>
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
			<td><input name ="salary"type="text" class="inp-form" /></td>
			<td></td>
		 </tr>

		<tr>
		<th  valign="top">Status:</th>
		<td>	
		<select  name="status" class="styledselect_form_14">
            <option value=""> </option>
			<option value="paid">Paid</option>
			<option value="not paid">Not Paid</option>
			

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

 //header('Location:admin/admin.php');
?>
