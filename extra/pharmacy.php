    <?php

include_once '../header.php';

include_once '../container_top.php';
include_once'../class/pharmacy_cls.php';

?>

	<?php
$pharmacyinfo = new pharmacyinfo();
if(isset($_POST['submit'])){
   // var_dump($_POST);die;
    $pharmacyinfo->insert();

}
?>

<script type="text/javascript">
    function ValidateContactForm()
    {
        var patient_name = document.pharmacy_form.patient_name;
        var room_no = document.pharmacy_form.room_no;

        
         if (patient_name.value == "")
        {
            window.alert("Please enter your patient name.");
            patient_name.focus();
            return false;
        }
             if (room_no.value == "")
        {
            window.alert("Please enter your room no.");
            room_no.focus();
            return false;
        }
              
        return true;
    }
</script>

<form action="" name="pharmacy_form" method="post" onsubmit="return ValidateContactForm();" enctype="multipart/form-data">

		<!--  start step-holder -->
		<div id="step-holder">
			<div class="step-no"></div>
			<div class="step-dark-left">Online medicine order</div>
			<div class="step-dark-right">&nbsp;</div>
			
			

		</div>
		<!--  end step-holder -->
	
		<!-- start id-form -->
		<table border="0" cellpadding="0" cellspacing="0"  id="id-form">
                    
                    <tr>
			<th valign="top">Doctors Name:</th>
			<td><input type="text" class="inp-form" required="required" name="doct_name"/></td>
			
		</tr>
                  <tr>
			<th valign="top">Patient Name:</th>
			<td><input type="text" class="inp-form" name="patient_name"/></td>
			
		</tr>
	

		

		<tr>
			<th valign="top">Address:</th>
			<td><input type="text" class="inp-form"required="required" name="address" /></td>
			<td></td>
		</tr>
	 <tr>
			<th valign="top">Medicine name:</th>
                        <td><textarea name="medicine" rows="" cols=""required="required" class="form-textarea"> </textarea> </td>
			<td></td>
		</tr>

		<tr>
			<th valign="top">Contact No.:</th>
			<td><input type="text" class="inp-form"required="required" name="contact_no" /></td>
			<td></td>
		 </tr>
		<tr>
			<th valign="top">Email:</th>
			<td><input type="text" class="inp-form"required="required" name="email" /></td>
			<td></td>
		 </tr>

		<tr>
			<th valign="top">Room no:</th>
			<td><input type="text" class="inp-form" name="room_no" /></td>
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