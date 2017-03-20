
 <?php

include_once '../header.php';

include_once '../container_top.php';


include_once'../class/patient_cls.php';



?>

<?php  


$patientid = $_GET['patient_id'];

$patient = new patientinfo();


//var_dump($doct);die;

if ($patient->editpatient($patientid) ){


    $row=$patient->editpatient($patientid);

    
};

if($patient->edit($patientid)){


    $patient->edit($patientid);
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
			<td><input type="text" name="patient_name" class="inp-form-error" value="<?php echo $row['patient_name'] ?>"  /></td>
<!--			<td>
			<div class="error-left"></div>
			<div class="error-inner">This field is required.</div>
			</td>-->
		</tr>
		
            
                 
                    
                  <tr>
			<th valign="top">Gender:</th>

			<td>
                            <select  name="patient_gender" class="styledselect_form_14">
                         	
                        <option value=""></option>
			<option value="male" <?php echo $row['patient_gender']=='male'? 'selected="selected"':'' ?> >Male</option>
			<option value="female" <?php echo $row['patient_gender']=='female'? 'selected="selected"':'' ?> >Female</option>
                            
                            		</select>

                            
                        </td>
		 </tr>
                 
                      
               <tr>
			<th valign="top">Address:</th>
                        <td><textarea name="patient_address" rows="" cols="" class="form-textarea"  ><?php echo $row['patient_address'] ?> </textarea> </td>
			<td></td>
		</tr>
                
                 <tr>
			<th valign="top">Contact No:</th>
                        <td><input type="text" name="patient_contact" class="inp-form" value="<?php echo $row['patient_contact'] ?>" /></td>
			<td></td>
		</tr>
                
                  <tr>
			<th valign="top">Email:</th>
                        <td><input type="text" name="patient_email" class="inp-form" value="<?php echo $row['patient_email'] ?>" /></td>
			<td></td>
		</tr>
                


                
                	<tr>
		<th valign="top"> Admitted date:</th>
                
                		<td><input type="text" id="date-pick" name="patient_admitted_date"  class="inp-form" value="<?php echo $row['patient_admitted_date'] ?>" ></td>

		<td></td>
	</tr>
		
		<tr>
		<th  valign="top">Room Category:</th>
		<td>	
		<select  name="patient_room_catagory" class="styledselect_form_14">
                    	<option value="">Select</option>
			<option value="ward"<?php echo $row['patient_room_catagory']=='ward'? 'selected="selected"':'' ?> >Ward - 2500 BDT </option>
			<option value="double bed room" <?php echo $row['patient_room_catagory']=='double bed room'? 'selected="selected"':'' ?> >Double BedRoom(per bed)-4000BDT </option>
			<option value="single standard"<?php echo $row['patient_room_catagory']=='single standard'? 'selected="selected"':'' ?>  >Single Standard - 6500 BDT </option>
			<option value="dingle deluxe"<?php echo $row['patient_room_catagory']=='dingle deluxe'? 'selected="selected"':'' ?>  >Single Deluxe - 8500 BDT </option>
			<option value="suite" <?php echo $row['patient_room_catagory']=='suite'? 'selected="selected"':'' ?> >Suite - 22000 BDT  </option>
                        <option value="icu" <?php echo $row['patient_room_catagory']=='icu'? 'selected="selected"':'' ?> >ICU - 9500 BDT </option>
			<option value="ccu" <?php echo $row['patient_room_catagory']=='ccu'? 'selected="selected"':'' ?> >CCU - 9500 BDT </option>
			<option value="nicu_level 1" <?php echo $row['patient_room_catagory']=='nicu_level 1'? 'selected="selected"':'' ?> >NICU - Level 1 - 6000 BDT </option>
			<option value="nicu_level 2" <?php echo $row['patient_room_catagory']=='nicu_level 2'? 'selected="selected"':'' ?> >NICU - Level 2 - 8500 BDT </option>
                        <option value="ct_icu" <?php echo $row['patient_room_catagory']=='ct_icu'? 'selected="selected"':'' ?> >CT ICU - 9500 BDT </option>
			<option value="ct_icu_step_down" <?php echo $row['patient_room_catagory']=='ct_icu_step_down'? 'selected="selected"':'' ?> >CT ICU Step-down - 6000 BDT </option>
			<option value="picu" <?php echo $row['patient_room_catagory']=='picu'? 'selected="selected"':'' ?> >PICU - 8500 BDT </option>


		</select>
		</td>
		<td></td>
		</tr>
             
          


	

		
		<tr>
			<th valign="top">Duty Doctor:</th>
			<td><input name ="duty_doctor_name"type="text" class="inp-form" value="<?php echo $row['duty_doctor_name'] ?>" /></td>
			<td></td>
		 </tr>
                 
                 	<tr>
			<th valign="top">Deposit:</th>
			<td><input name ="deposit"type="text" class="inp-form" value="<?php echo $row['deposit'] ?>" /></td>
			<td></td>
		 </tr>
                 
                 	<tr>
			<th valign="top">Due:</th>
			<td><input name ="due"type="text" class="inp-form" value="<?php echo $row['due'] ?>" /></td>
			<td></td>
		 </tr>
                 
                 <tr>
			<th valign="top">Total Amount:</th>
			<td><input name ="total_amount"type="text" class="inp-form" value="<?php echo $row['total_amount'] ?>" /></td>
			<td></td>
		 </tr>

		<tr>
		<th  valign="top">Status:</th>
		<td>	
		<select  name="status" class="styledselect_form_14">
                    	<option value="">Select one</option>
			<option value="paid" <?php echo $row['status']=='paid'? 'selected="selected"':'' ?>>Paid</option>
			<option value="not paid" <?php echo $row['status']=='not paid'? 'selected="selected"':'' ?>>Not Paid</option>
			

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