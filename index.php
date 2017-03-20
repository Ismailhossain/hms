
      <?php

include_once 'header.php';
//include_once 'container_top.php';

?>

<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title> Website on Hospital Management</title>

                <link rel="stylesheet" type="text/css" href="css/style.css" />

                        <style type="text/css">

   body {
            background: #f2f2f2 url(img/bg1.jpg) ;
                            }        
                            
                            
                            
                            
 #slider {
    width: 610px; /* important to be same as image width */
    height: 300px; /* important to be same as image height */
    position: relative; /* important */
	overflow: hidden; /* important */
}

#slider1 {
    width: 610px; /* important to be same as image width */
    height: 300px; /* important to be same as image height */
    position: relative; /* important */
	overflow: hidden; /* important */
}
#slider2 {
    width: 610px; /* important to be same as image width */
    height: 300px; /* important to be same as image height */
    position: relative; /* important */
	overflow: hidden; /* important */
}

#sliderContent, #slider1Content #slider2Content {
    width: 610px; /* important to be same as image width or wider */
    position: absolute;
	top: 0;
	margin-left: 0;
}
.sliderImage, .slider1Image .slider2Image {
    float: left;
    position: relative;
	display: none;
}
.sliderImage span {
    position: absolute;
	font: 10px/15px Arial, Helvetica, sans-serif;
    padding: 10px 13px;
    width: 600px;
    background-color: #000;
    filter: alpha(opacity=70);
    -moz-opacity: 0.7;
	-khtml-opacity: 0.7;
    opacity: 0.7;
    color: #fff;
    display: none;
}

.slider1Image span {
    position: absolute;
	font: 10px/15px Arial, Helvetica, sans-serif;
    padding: 10px 13px;
    width: 600px;
    background-color: #000;
    filter: alpha(opacity=70);
    -moz-opacity: 0.7;
	-khtml-opacity: 0.7;
    opacity: 0.7;
    color: #fff;
    display: none;
}
.slider2Image span {
    position: absolute;
	font: 10px/15px Arial, Helvetica, sans-serif;
    padding: 10px 13px;
    width: 600px;
    background-color: #000;
    filter: alpha(opacity=70);
    -moz-opacity: 0.7;
	-khtml-opacity: 0.7;
    opacity: 0.7;
    color: #fff;
    display: none;
}
.clear {
	clear: both;
}
.sliderImage span strong, .slider1Image span strong .slider2Image span strong{
    font-size: 14px;
}
.top {
	top: 0;
	left: 0;
}
.bottom {
	bottom: 0;
    left: 0;
}
.left {
	top: 0;
    left: 0;
	width: 110px !important;
	height: 280px;
}
.right {
	right: 0;
	bottom: 0;
	width: 90px !important;
	height: 290px;
}
ul { list-style-type: none;}


                      
                            
  </style>
  
  <!-- JavaScripts-->

  <script type="text/javascript" src="js/jquery/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="js/jquery/s3Slider.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('#slider').s3Slider({
            timeOut: 3000
        });
        $('#slider1').s3Slider({
            timeOut: 4000 
        });
          $('#slider2').s3Slider({
            timeOut: 5000 
        });
    });
</script>


  <!-- End of JavaScripts-->
  



<!--End of java script-->
  

    </head>
    <body>
  
        
               <div id="wrap">            

<div id="main">
              
              
          <div id="primary">
          
              
          <div class="post-item">
                     
<!--          <h2>Example 3</h2>
    <p>This is example how to use more than one slider at one page.</p>-->
    <div id="slider">
        <ul id="sliderContent">
            <li class="sliderImage">
                <a href=""><img src="images/jquery image gallary/first/1.jpg" alt="1" /></a>
                <span class="top"><strong> Text </strong><br />Wheel chair</span>
            </li>
            <li class="sliderImage">
                <a href=""><img src="images/jquery image gallary/first/2.jpg" alt="2" /></a>
                <span class="top"><strong>Text</strong><br />Bonding</span>
            </li>
            <li class="sliderImage">
                <img src="images/jquery image gallary/first/3.jpg" alt="3" />
                <span class="bottom"><strong>Text</strong><br />Success</span>
            </li>
            <li class="sliderImage">
                <img src="images/jquery image gallary/first/4.jpg" alt="4" />
                <span class="bottom"><strong>Text</strong><br />Equipment</span>
            </li>
            <li class="sliderImage">
                <img src="images/jquery image gallary/first/5.jpg" alt="5" />
                <span class="top"><strong>Text</strong><br />Equipment</span>
            </li>
             <li class="sliderImage">
                <img src="images/jquery image gallary/first/6.jpg" alt="5" />
                <span class="top"><strong>Text</strong><br />Check</span>
            </li>
           
            <div class="clear sliderImage"></div>
        </ul>
    </div>
    <!-- // slider -->

                  
             </div>            <!--end of post item-->
              
             
              <div class="post-item">
          
     
<video width="620" height="300" controls="controls">
  <source src="vedio/Interior Design in Pediatric Health Care Facilities.mp4" type="video/mp4" />
  Your browser does not support the video tag.
</video>

                  
             </div>            <!--end of post item-->
             
             
              <div class="post-item">
      <div id="slider1">
        <ul id="slider1Content">
            <li class="slider1Image">
                <a href=""><img src="images/jquery image gallary/third/1.jpg" alt="1" /></a>
                <span class="left"><strong>Text</strong><br />Emergency</span></li>
            <li class="slider1Image">
                <a href=""><img src="images/jquery image gallary/third/2.jpg" alt="2" /></a>
                <span class="right"><strong>Text</strong><br />Equipment</span></li>
            <li class="slider1Image">
                <img src="images/jquery image gallary/third/3.jpg" alt="3" />
                <span class="right"><strong>Text</strong><br />Ambulance</span></li>
            <li class="slider1Image">
                <img src="images/jquery image gallary/third/4.jpg" alt="4" />
                <span class="left"><strong>Text</strong><br />Center</span></li>
            <li class="slider1Image">
                <img src="images/jquery image gallary/third/5.jpg" alt="5" />
                <span class="right"><strong>Text</strong><br />center</span></li>
            <li class="slider1Image">
                <a href=""><img src="images/jquery image gallary/third/6.jpg" alt="6" /></a>
                <span class="right"><strong>Text</strong><br />Room</span></li>
            <li class="slider1Image">
                <img src="images/jquery image gallary/third/7.jpg" alt="7" />
                <span class="right"><strong>Text</strong><br />Room</span></li>
            <li class="slider1Image">
                <img src="images/jquery image gallary/third/8.jpg" alt="8" />
                <span class="left"><strong>Text</strong><br />Room</span></li>
            <li class="slider1Image">
                <img src="images/jquery image gallary/third/9.jpg" alt="9" />
                <span class="right"><strong>Text</strong><br />Room</span></li>
            <div class="clear slider1Image"></div>
        </ul>
    </div>
  <!-- // slider -->

                  
             </div>            <!--end of post item-->
             
             </div>            <!--end of primary-->
              
              
          <div id="secondary">
              
          <div class="secondaryBox">
              
              <h3> Projects</h3>
              <img class="featuredImage" src="img/project.jpg" alt="Tree photo" height="200px" width="300px" />
              <p> Picture of our projects </p>
              
              
          <div class="prevnext">
              
              <a href="#"><img src="img/right-arrow.png" alt="More" /></a> 
              <a href="#"><img src="img/left-arrow.png" alt="Less" /></a> 
              
          </div>            <!--end of prevnext-->    
              
          </div>            <!--end of secondarybox-->    
              
          
          <div class="secondaryBox"> 
          
                        <h3> Some useful links</h3>
                        
                        <ul>
                            <li> <a href="clinic&centres/clinic_centres.php"> Clinic & Centres </a> </li>
                            <li> <a href="patient_facilities/patient_facilities.php"> Patient facilites </a> </li>
                            <li> <a href="visitor_facilities/visitor_facilities.php"> Visitor facilities </a> </li>
                            <li> <a href="hospital_services/hospital_services.php"> Hospital & services </a> </li>
<!--                            <li> <a href="#"> Some post will go here </a> </li>
                            <li> <a href="#"> Some post will go here </a> </li>
                            <li> <a href="#"> Some post will go here </a> </li>-->

                        </ul>

            </div>            <!--end of secondarybox-->    
          
          
               <div class="secondaryBox"> 
          
                        <h3> Recent News & Events</h3>
                        
                     <marquee direction="up"
            ONMOUSEOVER="this.stop();"
            ONMOUSEOUT="this.start();">
         <P>Recent news and events will show here. Please keep an eye on this. </P>
</marquee>
            </div>            <!--end of secondarybox-->    
          
            <a href="http://www.twitter.com/nettuts"> 
            
                <img src="img/twitter-follow.png" alt="Follow us on twitter" />
            
            </a>
              
              
          </div>            <!--end of secondary-->
              
          </div>            <!--end of main-->
       
        
        
               </div>            <!--end of wrap-->

               
               
               
    </body>
</html>



 <?php
//include_once 'container_bottom.php';

include_once 'footer.php';
