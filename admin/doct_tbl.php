<!--  start table-content  -->


<?php
include_once'checking.php';

include_once '../header.php';

include_once '../container_top.php';

?>


<?php

include_once'../class/doct_cls.php';


?>

<?php
$docinfo = new doctinfo();
//$obj = new MU($_FILES['doct_image'],'');
//if(isset($_POST['submit'])){
   // var_dump($_POST);die;
    $docinfo->view();
?>



<?php

include_once '../container_bottom.php';


include_once '../footer.php';


?>

<script type="text/javascript">
    
 function confirmDelete()
{
  if (confirm('Do you want to delete ?'))
  {
      return true;
  }
  else
  {
      return false;
  }
}
</script>