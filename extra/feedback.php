<?php

include_once '../header.php';

include_once '../container_top.php';

include_once'../class/feedback_cls.php';


?>

<?php
$feedbackinfo = new feedbackinfo();
if(isset($_POST['submit'])){
   // var_dump($_POST);die;
    $feedbackinfo->insert();

}
?>

<script type="text/javascript">
    function ValidateContactForm()
    {
        var patient_name = document.feedback_form.patient_name;
        var patient_gender = document.feedback_form.patient_gender;
        var your_name = document.feedback_form.your_name;
        var relation = document.feedback_form.relation;
        var address = document.feedback_form.address;
        var country = document.feedback_form.country;
        var doctor_name = document.feedback_form.doctor_name;
        var contact_no = document.feedback_form.contact_no;
        var email = document.feedback_form.email;
        var suggestion = document.feedback_form.suggestion;
      


        if (patient_name.value == "")
        {
            window.alert("Please enter your patient name.");
            patient_name.focus();
            return false;
        }
        if (patient_gender.value == "")
        {
            window.alert("Please enter the patient gender.");
            patient_gender.focus();
            return false;
        }
        if (your_name.value == "")
        {
            window.alert("Please enter your name.");
            your_name.focus();
            return false;
        }
        if (relation.value == "")
        {
            window.alert("Please enter your relation.");
            relation.focus();
            return false;
        }
        if (address.value == "")
        {
            window.alert("Please enter your address.");
            address.focus();
            return false;
        }
        
          if (country.value == "")
        {
            window.alert("Please enter your country name.");
            country.focus();
            return false;
        }
        
        if (doctor_name.value == "")
        {
            window.alert("Please enter doctor name.");
            doctor_name.focus();
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
        if (suggestion.value == "")
        {
            window.alert("Please enter your suggestion.");
            suggestion.focus();
            return false;
        }
      
      
        return true;
    }
</script>

<form action="" name="feedback_form" method="post" onsubmit="return ValidateContactForm();" enctype="multipart/form-data">

		<!--  start step-holder -->
		<div id="step-holder">
			<div class="step-no"></div>
			<div class="step-dark-left">Feedback </div>
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
			<th valign="top">Gender:</th>

			<td>
                            <select  name="patient_gender" class="styledselect_form_14">
                         	
                        <option value=""></option>
			<option value="male">Male</option>
			<option value="female">Female</option>
                            
                            		</select>

                            
                        </td>
		 </tr>
                 
		<tr>
			<th valign="top">Your name:</th>
			<td><input type="text" name="your_name" class="inp-form" /></td>
			<td></td>
		 </tr>
                 
                 <tr>
			<th valign="top">Relation To Patient:</th>
			<td><input type="text" name="relation" class="inp-form" /></td>
			<td></td>
		 </tr>

		
	

	 <tr>
		
                <th valign="top">Address</th>
		<td><textarea name="address"rows="" cols="" class="form-textarea"></textarea></td>
		<td></td>
                
                 </tr>
		
                
                <tr>
                    <th valign="top">Country:</th>
                 <td>	
                    <select name="country"  class="styledselect_form_14">
			<option value=""></option>
			<option value="bangladesh">Bangladesh</option>
			<option value="australia">Australia</option>
			<option value="united states">United states</option>
			<option value="united kingdom">United kingdom</option>
                        <option value="dubai">Dubai</option>
			<option value="germany">Germany</option>
			<option value="spain">Spain</option>
			<option value="canada">Canada</option>

                    </select>
		</td>
		<td></td>
		</tr>
                
                <tr>
			<th valign="top">Your Doctor Name:</th>
			<td><input type="text" name="doctor_name" class="inp-form" /></td>
			<td></td>
		 </tr>
                
	

		<tr>
			<th valign="top">Contact No:</th>
			<td><input type="text" name="contact_no" class="inp-form" /></td>
			<td></td>
		 </tr>
		<tr>
			<th valign="top">Email:</th>
			<td><input type="text" name="email" class="inp-form" /></td>
			<td></td>
		 </tr>
                
                 <tr>
		
                <th valign="top">Please give us your suggestion for further improvement:</th>
		<td><textarea name="suggestion" rows="" cols="" class="form-textarea"></textarea></td>
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