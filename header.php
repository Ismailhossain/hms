<?php include_once'includes/connection.php'; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

<title> Hospital Management</title>

<base href="http://hms.ismailhossain.me/">

    <link rel="stylesheet" href="css/screen.css" type="text/css" media="screen" title="default" />
    

<!--[if IE]>
<link rel="stylesheet" media="all" type="text/css" href="css/pro_dropline_ie.css" />
<![endif]-->

<!--  jquery core -->
<script src="js/jquery/jquery-1.4.1.min.js" type="text/javascript"></script>
 
<!--  checkbox styling script -->
<!--<script src="js/jquery/ui.core.js" type="text/javascript"></script>
<script src="js/jquery/ui.checkbox.js" type="text/javascript"></script>
<script src="js/jquery/jquery.bind.js" type="text/javascript"></script>
<script type="text/javascript">
$(function(){
	$('input').checkBox();
	$('#toggle-all').click(function(){
 	$('#toggle-all').toggleClass('toggle-checked');
	$('#mainform input[type=checkbox]').checkBox('toggle');
	return false;
	});
});
</script>  -->



<!--  styled select box script version 1 -->
<!--<script src="js/jquery/jquery.selectbox-0.5.js" type="text/javascript"></script>
<script type="text/javascript">
$(document).ready(function() {
	$('.styledselect').selectbox({ inputClass: "selectbox_styled" });
});
</script>-->
 



<!--  styled select box script version 2 --> 
<!--<script src="js/jquery/jquery.selectbox-0.5_style_2.js" type="text/javascript"></script>
<script type="text/javascript">
$(document).ready(function() {
	$('.styledselect_form_1').selectbox({ inputClass: "styledselect_form_1" });
	$('.styledselect_form_2').selectbox({ inputClass: "styledselect_form_2" });
});
</script>-->

<!--  styled select box script version 3 --> 
<!--<script src="js/jquery/jquery.selectbox-0.5_style_2.js" type="text/javascript"></script>
<script type="text/javascript">
$(document).ready(function() {
	$('.styledselect_pages').selectbox({ inputClass: "styledselect_pages" });
});
</script>-->

<!--  styled file upload script --> 
<script src="js/jquery/jquery.filestyle.js" type="text/javascript"></script>
<script type="text/javascript" charset="utf-8">
$(function() {
	$("input.file_1").filestyle({
	image: "images/forms/upload_file.gif",
	imageheight : 29,
	imagewidth : 78,
	width : 300
	});
});
</script>

<!-- Custom jquery scripts -->
<!--<script src="js/jquery/custom_jquery.js" type="text/javascript"></script>-->
 
<!-- Tooltips -->
<!--<script src="js/jquery/jquery.tooltip.js" type="text/javascript"></script>
<script src="js/jquery/jquery.dimensions.js" type="text/javascript"></script>
<script type="text/javascript">
$(function() {
	$('a.info-tooltip ').tooltip({
		track: true,
		delay: 0,
		fixPNG: true, 
		showURL: false,
		showBody: " - ",
		top: -35,
		left: 5
	});
});
</script> -->

<!--  date picker script -->
<link rel="stylesheet" href="css/datePicker.css" type="text/css" />
<script src="js/jquery/date.js" type="text/javascript"></script>
<script src="js/jquery/jquery.datePicker.js" type="text/javascript"></script>
<script type="text/javascript" charset="utf-8">
        $(function()
{

// initialise the "Select date" link
$('#date-pick')
	.datePicker(
		// associate the link with a date picker
		{
			createButton:false,
			startDate:'01/01/2005',
			endDate:'31/12/2020'
		}
	).bind(
		// when the link is clicked display the date picker
		'click',
		function()
		{
			updateSelects($(this).dpGetSelected()[0]);
			$(this).dpDisplay();
			return false;
		}
	).bind(
		// when a date is selected update the SELECTs
		'dateSelected',
		function(e, selectedDate, $td, state)
		{
			updateSelects(selectedDate);
		}
	).bind(
		'dpClosed',
		function(e, selected)
		{
			updateSelects(selected[0]);
		}
	);
	
var updateSelects = function (selectedDate)
{
	var selectedDate = new Date(selectedDate);
	$('#d option[value=' + selectedDate.getDate() + ']').attr('selected', 'selected');
	$('#m option[value=' + (selectedDate.getMonth()+1) + ']').attr('selected', 'selected');
	$('#y option[value=' + (selectedDate.getFullYear()) + ']').attr('selected', 'selected');
}
// listen for when the selects are changed and update the picker
$('#d, #m, #y')
	.bind(
		'change',
		function()
		{
			var d = new Date(
						$('#y').val(),
						$('#m').val()-1,
						$('#d').val()
					);
			$('#date-pick').dpSetSelected(d.asString());
		}
	);

// default the position of the selects to today
var today = new Date();
updateSelects(today.getTime());

// and update the datePicker to reflect it...
$('#d').trigger('change');
});
</script>

<!-- MUST BE THE LAST SCRIPT IN <HEAD></HEAD></HEAD> png fix -->
<script src="js/jquery/jquery.pngFix.pack.js" type="text/javascript"></script>
<script type="text/javascript">
$(document).ready(function(){
$(document).pngFix( );
});
</script>
</head>
<body>

<!-- Start: page-top-outer -->
<div id="page-top-outer">    

<!-- Start: page-top -->

<div id="page-top">
    


	<!-- start logo -->
	<div id="logo">
            
            
            
	<a href=""><img src="images/shared/logo.png" width="100" height="80"  /></a>
	</div>

	<!-- end logo -->
	
<!--	  start top-search 
	<div id="top-search">
		<table border="0" cellpadding="0" cellspacing="0">
		<tr>
		<td><input type="text" value="Search" onblur="if (this.value=='') { this.value='Search'; }" onfocus="if (this.value=='Search') { this.value=''; }" class="top-search-inp" /></td>
		<td>
		 
		<select  class="styledselect">
			<option value="">All</option>
			<option value="">Products</option>
			<option value="">Categories</option>
			<option value="">Clients</option>
			<option value="">News</option>
		</select> 
		 
		</td>
		<td>
		<input type="image" src="images/shared/top_search_btn.gif"  />
		</td>
		</tr>
		</table>
	</div>
 	  end top-search -->

 	<div class="clear"></div>

</div>
<!-- End: page-top -->

</div>
<!-- End: page-top-outer -->
	
<div class="clear">&nbsp;</div>
 
<!--  start nav-outer-repeat................................................................................................. START -->
<div class="nav-outer-repeat"> 
<!--  start nav-outer -->
<div class="nav-outer">



		<!--  start nav -->
		<div class="nav">

		<div class="table">

		<ul class="select" >
            <li>
                        
       <a href="index.php"><b>Home</b></a><!--<![endif]-->
		<div class="select_sub" width="5000px">
			<ul class="sub">
				<li ><a href="home/news_events.php">News & Events</a></li>
				<li><a href="home/career.php">Career</a></li>
                		<li><a href="home/about_us.php">About US</a></li>
				<li><a href="home/blood_donate.php">Blood Donate</a></li>

			</ul>
		</div>
		</li>
		</ul>
                    
                    
                     <div class="nav-divider">&nbsp;</div>
		
		<ul class="select"><li><a href="admin/login.php"><b>Adminstrator</b></a><!--<![endif]-->
	
		</li>
		</ul>
                    
		 <div class="nav-divider">&nbsp;</div>

                                	
               <ul class="select"><li><a href="physician_srch.php"><b> Our Physicians </b></a><!--<![endif]-->

		</li>
		</ul>
		
		<div class="nav-divider">&nbsp;</div>
		
		<ul class="select"><li><a href="patient_facilities/patient_facilities.php"><b>Patient Facilities</b></a><!--<![endif]-->
		<div class="select_sub">
			<ul class="sub">
				<li><a href="patient_facilities/pharmacy.php">Pharmacy</a></li>
				<li><a href="patient_facilities/cafetaria.php">Cafeteria</a></li>
				<li><a href="patient_facilities/meal provision.php">Meal Provision</a></li>
                                <li><a href="patient_facilities/roof_top_garden.php">Roof Top Garden</a></li>
				<li><a href="patient_facilities/room_catagory.php">Room Category</a></li>

			</ul>
		</div>
		</li>
		</ul>
                
                
                <div class="nav-divider">&nbsp;</div>
		
		<ul class="select"><li><a href="visitor_facilities/visitor_facilities.php"><b>Visitors facilities</b></a><!--<![endif]-->
		<div class="select_sub">
			<ul class="sub">
				<li><a href="visitor_facilities/visiting_hour.php">Visiting hour</a></li>
				<li><a href="visitor_facilities/car_parking.php">Car parking</a></li>
				<li><a href="visitor_facilities/instructions.php">Instruction for visitor</a></li>
				<li><a href="visitor_facilities/prayer_room.php">Prayer room</a></li>

			</ul>
		</div>
		</li>
		</ul>
		
		<div class="nav-divider">&nbsp;</div>
		
		<ul class="select"><li><a href="hospital_services/hospital_services.php"><b>Hospital & Its Services</b></a><!--<![endif]-->
		<div class="select_sub">
			<ul class="sub">
				<li><a href="hospital_services/visitor_facilities.php">Visitors Facilities</a></li>
				<li><a href="hospital_services/security_service.php">Security Service</a></li>
                                <li><a href="hospital_services/24hours_pharmacy.php">24 Hours Pharmacy</a></li>		
                                <li><a href="hospital_services/objection_room.php">Objection room</a></li>	
                                <li><a href="hospital_services/ambulance_services.php">Ambulance services </a> </li>	

			</ul>
		</div>
		</li>
		</ul>
		
		<div class="nav-divider">&nbsp;</div>
		
		<ul class="select"><li><a href="clinic&centres/clinic_centres.php"><b>Clinic & Centres</b></a><!--<![endif]-->
		<div class="select_sub">
			<ul class="sub">
				<li><a href="clinic&centres/heart_centre.php">Heart Centre</a></li>
				<li><a href="clinic&centres/intensive_care_centre.php">Intensive Care Centre</a></li>
				<li><a href="clinic&centres/safe_surgery.php">Safe surgery</a></li>
                                <li><a href="clinic&centres/pathology_labcentre.php">Pathology & Lab centre</a></li>
                                <li><a href="clinic&centres/liver_gastricCentre.php">Liver & Gastric Centre</a></li>
                                <li><a href="clinic&centres/orthopedics_traumacentre.php">Orthopedics & Trauma Centre</a></li>
                                <li><a href="clinic&centres/skin_lasercentre.php">Skin & Laser Centre</a></li>
                                <li><a href="clinic&centres/oncology_radiotherapycentre.php">Oncology & Radiotherapy centre</a></li>
			</ul>
		</div>
		</li>
		</ul>
                
         
                <div class="nav-divider">&nbsp;</div>

                                	
               <ul class="select"><li><a href="extra/online_appointment.php"><b> Online Appointment </b></a><!--<![endif]-->

		</li>
		</ul>
                 
            
                    
             <div class="nav-divider">&nbsp;</div>

                                	
               <ul class="select"><li><a href="extra/feedback.php"><b> Feedback </b></a><!--<![endif]-->

		</li>
		</ul>
                                        	
               <div class="nav-divider">&nbsp;</div>

                                	
               <ul class="select"><li><a href="extra/faq.php"><b> FAQ </b></a><!--<![endif]-->

		</li>
		</ul>
                                                	
             <div class="nav-divider">&nbsp;</div>

                                	
               <ul class="select"><li><a href="extra/contact_us.php"><b> Contact Us </b></a><!--<![endif]-->

		</li>
		</ul>
             
              <div class="nav-divider">&nbsp;</div>

                                	
               <ul class="select"><li><a href="extra/pharmacy.php"><b> Pharmacy Department </b></a><!--<![endif]-->

		</li>
		</ul>
		

		</div>
		<div class="clear"></div>
		</div>
		<!--  start nav -->

</div>
<div class="clear">


</div>
<!--  start nav-outer -->
</div>
<!--  start nav-outer-repeat................................................... END -->

