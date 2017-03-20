   


<?php

include_once '../header.php';

include_once '../container_top.php';




include_once'../class/appointment_cls.php';


?>

<?php
$appointmentinfo = new appointmentinfo();
if(isset($_POST['submit'])){
   // var_dump($_POST);die;
    $appointmentinfo->insert();
//    $appointmentinfo->viewgenaratekey();


}
?>




 

<script type="text/javascript">
    function ValidateContactForm()
    {
        var patient_name = document.online_form.patient_name;
        var address = document.online_form.address;
        var doctor_name = document.online_form.doctor_name;
        var doct_department = document.online_form.doct_department;
        var contact_no = document.online_form.contact_no;
        var email = document.online_form.email;
       


        if (patient_name.value == "")
        {
            window.alert("Please enter your name.");
            patient_name.focus();
            return false;
        }
        if (address.value == "")
        {
            window.alert("Please enter your address.");
            address.focus();
            return false;
        }
        if (doctor_name.value == "")
        {
            window.alert("Please enter your doctor name.");
            doctor_name.focus();
            return false;
        }
        if (doct_department.value == "")
        {
            window.alert("Please enter your doctor department.");
            doct_department.focus();
            return false;
        }
        if (contact_no.value == "")
        {
            window.alert("Please enter your contact.");
            contact_no.focus();
            return false;
        }
   

        if (email.value == "")
        {
            window.alert("Please enter a valid e-mail address.");
            email.focus();
            return false;
        }
        if (email.value.indexOf("@", 0) < 0)
        {
            window.alert("Please enter a valid e-mail address.");
            email.focus();
            return false;
        }
        if (email.value.indexOf(".com", 0) < 0)
        {
            window.alert("Please enter a valid e-mail address.");
            email.focus();
            return false;
        }
    
        return true;
    }
</script>

<form action="" name="online_form" method="post" onsubmit="return ValidateContactForm();" enctype="multipart/form-data">

		<!--  start step-holder -->
		<div id="step-holder">
			<div class="step-no"></div>
			<div class="step-dark-left">Online Appointment</div>
			<div class="step-dark-right">&nbsp;</div>
			
			

		</div>
		<!--  end step-holder -->
	
		<!-- start id-form -->
		<table border="0" cellpadding="0" cellspacing="0"  id="id-form">
                    
                    <tr>
			<th valign="top">Patient Name:</th>
			<td><input type="text" name="patient_name" class="inp-form-error" /></td>
			
		</tr>
                
                
           <tr>
		
                <th valign="top">Address</th>
		<td><textarea name="address"rows="" cols="" class="form-textarea"></textarea></td>
		<td></td>
                
                 </tr>
                
                
		<tr>
			<th valign="top">Doctor name:</th>
			<td><input type="text" name="doctor_name" class="inp-form" /></td>
			<td></td>
		 </tr>


		
			<tr>
		<th  valign="top">Department:</th>
		<td>	
		<select  name="doct_department" class="styledselect_form_14">
			<option value="">select</option>
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
			<th valign="top">Contact No:</th>
			<td><input type="text" name="contact_no" class="inp-form" /></td>
			<td></td>
		 </tr>

		<tr>
			<th valign="top">Email:</th>
			<td><input type="text" name="email" class="inp-form" />
                 <input type="hidden" name="genarate"/>
            </td>
			<td></td>
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
                
    
	
    
<?php 

include_once '../container_bottom.php';


include_once '../footer.php';


?>