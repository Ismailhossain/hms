
 <?php
include_once'checking.php';

include_once '../header.php';

include_once '../container_top.php';


include_once'../class/patient_cls.php';



?>

<?php
$patientinfo = new patientinfo();
if(isset($_POST['submit'])){
   // var_dump($_POST);die;
    $patientinfo->insert();

}
?>





<script type="text/javascript">
    function ValidateContactForm()
    {
        var patient_name = document.patient_form.patient_name;
        var patient_gender = document.patient_form.patient_gender;
        var patient_address = document.patient_form.patient_address;
        var patient_contact = document.patient_form.patient_contact;
        var patient_admitted_date = document.patient_form.patient_admitted_date;
        var patient_room_catagory = document.patient_form.patient_room_catagory;
        var duty_doctor_name = document.patient_form.duty_doctor_name;
        var patient_email = document.patient_form.patient_email;
        var deposit = document.patient_form.deposit;
        var due = document.patient_form.due;
        var total_amount = document.patient_form.total_amount;
        var status = document.patient_form.status;


        if (patient_name.value == "")
        {
            window.alert("Please enter your name.");
            patient_name.focus();
            return false;
        }
        if (patient_gender.value == "")
        {
            window.alert("Please enter your gender.");
            patient_gender.focus();
            return false;
        }
        if (patient_address.value == "")
        {
            window.alert("Please enter your Address.");
            patient_address.focus();
            return false;
        }
        if (patient_contact.value == "")
        {
            window.alert("Please enter your contact.");
            patient_contact.focus();
            return false;
        }
        if (patient_admitted_date.value == "")
        {
            window.alert("Please enter your admitted date.");
            patient_admitted_date.focus();
            return false;
        }
        if (patient_room_catagory.value == "")
        {
            window.alert("Please enter your room catagory.");
            patient_room_catagory.focus();
            return false;
        }

        if (duty_doctor_name.value == "")
        {
            window.alert("Please enter your duty doctor name.");
            duty_doctor_name.focus();
            return false;
        }



        if (patient_email.value == "")
        {
            window.alert("Please enter a valid e-mail address.");
            patient_email.focus();
            return false;
        }
        if (patient_email.value.indexOf("@", 0) < 0)
        {
            window.alert("Please enter a valid e-mail address.");
            patient_email.focus();
            return false;
        }
        if (patient_email.value.indexOf(".com", 0) < 0)
        {
            window.alert("Please enter a valid e-mail address.");
            patient_email.focus();
            return false;
        }
        if (deposit.value == "")
        {
            window.alert("Please enter the amount of deposite money.");
            deposit.focus();
            return false;
        }
        if (due.value == "")
        {
            window.alert("Please enter the amount of due money.");
            due.focus();
            return false;
        }
        if (total_amount.value == "")
        {
            window.alert("Please enter total amount of money.");
            total_amount.focus();
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

<form action="" name="patient_form" method="post" onsubmit="return ValidateContactForm();" enctype="multipart/form-data">








		<!--  start step-holder -->
		<div id="step-holder">
			<div class="step-no"></div>
			<div class="step-dark-left">Patient's Information </div>
			<div class="step-dark-right">&nbsp;</div>
			
			

		</div>
		<!--  end step-holder -->
	
		<!-- start id-form -->
		<table border="0" cellpadding="0" cellspacing="0"  id="id-form">
                    
                    <tr>
			<th valign="top">Patient Name:</th>
			<td><input type="text" name="patient_name" autofocus="autofocus" class="inp-form-error" /></td>
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
                            <select  name="patient_gender" class="styledselect_form_14">
                         	
                        <option value=""></option>
			<option value="male">Male</option>
			<option value="female">Female</option>
                            
                            		</select>

                            
                        </td>
		 </tr>
                 
                      
               <tr>
			<th valign="top">Address:</th>
                        <td><textarea name="patient_address" rows="" cols="" class="form-textarea"> </textarea> </td>
			<td></td>
		</tr>
                
                 <tr>
			<th valign="top">Contact No:</th>
                        <td><input type="text" name="patient_contact" class="inp-form" /></td>
			<td></td>
		</tr>
                
                  <tr>
			<th valign="top">Email:</th>
                        <td><input type="text" name="patient_email" class="inp-form" /></td>
			<td></td>
		</tr>
                
<!--                 <tr>
			<th valign="top">Admitted date:</th>
                        <td><input type="text" name="patient_admitted_date" class="inp-form" /> </td>
			<td></td>
		</tr>-->

                
                	<tr>
		<th valign="top"> Admitted date:</th>
                
                		<td><input type="text" id="date-pick" name="patient_admitted_date"  class="inp-form" ></td>
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
		<th  valign="top">Room Category:</th>
		<td>	
		<select  name="patient_room_catagory" class="styledselect_form_14">
                    	<option value="">Select</option>
			<option value="ward">Ward - 2500 BDT </option>
			<option value="double bed room">Double BedRoom(per bed)-4000BDT </option>
			<option value="single standard">Single Standard - 6500 BDT </option>
			<option value="dingle deluxe">Single Deluxe - 8500 BDT </option>
			<option value="suite">Suite - 22000 BDT  </option>
                        <option value="icu">ICU - 9500 BDT </option>
			<option value="ccu">CCU - 9500 BDT </option>
			<option value="nicu_level 1">NICU - Level 1 - 6000 BDT </option>
			<option value="nicu_level 2">NICU - Level 2 - 8500 BDT </option>
                        <option value="ct_icu">CT ICU - 9500 BDT </option>
			<option value="ct_icu_step_down">CT ICU Step-down - 6000 BDT </option>
			<option value="picu">PICU - 8500 BDT </option>


		</select>
		</td>
		<td></td>
		</tr>
             
          


	

		
		<tr>
			<th valign="top">Duty Doctor:</th>
			<td><input name ="duty_doctor_name"type="text" class="inp-form" /></td>
			<td></td>
		 </tr>
                 
                 	<tr>
			<th valign="top">Deposit:</th>
			<td><input name ="deposit"type="text" class="inp-form" /></td>
			<td></td>
		 </tr>
                 
                 	<tr>
			<th valign="top">Due:</th>
			<td><input name ="due"type="text" class="inp-form" /></td>
			<td></td>
		 </tr>
                 
                 <tr>
			<th valign="top">Total Amount:</th>
			<td><input name ="total_amount"type="text" class="inp-form" /></td>
			<td></td>
		 </tr>

		<tr>
		<th  valign="top">Status:</th>
		<td>	
		<select  name="status" class="styledselect_form_14">
                    	<option value="">Select one</option>
			<option value="paid">Paid</option>
			<option value="not paid">Not Paid</option>
			

		</select>
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
</form>
                
    
<?php 

include_once '../container_bottom.php';


include_once '../footer.php';


?>