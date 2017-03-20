<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<!--        <title> Website on Hospital Management</title>-->


    </head>
    <body>
        
    <form action="" name="form">
        <?php

include_once 'header.php';
include_once 'container_top.php';
//include_once 'admin/doct_tbl.php';

?>
<div class="clear"> <input type="submit" id="searchbox" value="Search" style="float:right; margin: 20px  " >
<!--  <input type="text" name="searchbox" class="searchbox" placeholder="Doctor Search..." style="float:right; width:200px; margin: 20px 20px ">-->
  <select  name="searchbox" class="searchbox" placeholder="Doctor Search..." style="float:right; width:200px; margin: 20px 20px ">
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
  </div> 
<div id="search" style="margin:5px;padding:0px;">

<table  style=" margin-left:450px; width:500px;height:2px;font-size:12px; margin-top: 30px; text-align:left">
<?php



  $var = @$_GET['searchbox'] ;
  $trimmed = trim($var);

// rows to return
$limit=100;

// check for an empty string and display a message.
if ($trimmed == "")
  {
  echo "<p>Please enter a search for doctor...</p>";
  exit;
  }

// check for a search parameter
if (!isset($var))
  {
  echo "<p>We dont seem to have a search parameter!</p>";
  exit;
  }

include_once'includes/connection.php';

$query = "select * from doct_info where doct_department   like  \"$trimmed%\"
  order by doct_department";

 $numresults=mysql_query($query);
 $numrows=mysql_num_rows($numresults);

// If we have no results, offer a google search as an alternative

if ($numrows == 0)
  {
  echo "<h4>Results</h4>";
  echo "<p>Sorry, your search: &quot;<b style=\"color:red;\">" . $trimmed . "</b>&quot; returned zero results</p>";

  }

// next determine if s has been passed to script, if not use 0
  if (empty($s)) {
  $s=0;
  }

// get results
  $query .= " limit $s,$limit";
  $result = mysql_query($query) or die("Couldn't execute query");

// display what the person searched for

echo "<p>You searched for: &quot;<b style=\"color:green;\">" . $var . "</b>&quot;</p>";

// begin to show results set

$count = 1 + $s ;

// now you can display the results returned
  while ($row= mysql_fetch_array($result)) {
  $doct_name = $row["doct_name"]; 
      $designation=$row['doct_designation'];
      $department=$row['doct_department'];
      $duty_time=$row['doct_duty_time'];
      $doctphoto=$row['doct_image'];

  echo "</br><tr><td></br><b>Doctor name</b></td><td><b style='color:green;'>$doct_name</b></br></td><tr/>";
      echo "<tr><td></br>Doctor Designation</td><td>&nbsp;$designation</td><tr/>";
      echo "<tr><td></br>Doctor Dpartment</td><td>&nbsp;$department</td><tr/>";
      echo "<tr><td></br>Doctor Duty Time</td><td>&nbsp;$duty_time</td><tr/>";
      echo "<tr ><td></br>Doctor Photo</td><td><img src=\"admin/upload/$doctphoto\"  width=\"100px;\" height=\"100px;\"/></td><tr/>";
      echo "<tr><td></td><td></td><tr/>";
      echo "<tr><td></td><td></td><tr/>";
      echo "<tr><td></td><td></td><tr/>";
      echo "<tr><td></td><td></td><tr/>";
  $count++ ;
  }

$currPage = (($s/$limit) + 1);

//break before paging
//  echo "<br />";
//
//  // next we need to do the links to other results
//  if ($s>=1) { // bypass PREV link if s is 0
//  $prevs=($s-$limit);
//  print "&nbsp;<a href=\"$PHP_SELF?s=$prevs&q=$var\">&lt;&lt;
//  Prev 5</a>&nbsp&nbsp;";
//  }
//
//// calculate number of pages needing links
//  $pages=intval($numrows/$limit);
//
//// $pages now contains int of pages needed unless there is a remainder from division
//
//  if ($numrows%$limit) {
//  // has remainder so add one page
//  $pages++;
//  }
//
//// check to see if last page
//  if (!((($s+$limit)/$limit)==$pages) && $pages!=1) {
//
//  // not last page so give NEXT link
//  $news=$s+$limit;
//
//  echo @"&nbsp;<a href=\"$PHP_SELF?s=$news&q=$var\">Next 5 &gt;&gt;</a>";
//  }
//
//$a = $s + ($limit) ;
//  if ($a > $numrows) { $a = $numrows ; }
//  $b = $s + 1 ;
//  echo "<p>Showing results $b to $a of $numrows</p>";
//
?>
        </table>

</div>
        


        </form>
    </body>
</html>



 <?php
include_once 'container_bottom.php';

include_once 'footer.php';


?>