<?php
require_once '../class/doct_cls.php';

$doctId = $_GET['doct_id'];

$doct = new doctinfo();

//var_dump($doct);die;

if ($doct->deleteDoctor($doctId) ){
    //echo "Doct Info deleted sucessfully";
    
    header('Location:doct_tbl.php',refresh);
    
    
}


?>

<!--End of doctor-->



<?php
require_once '../class/patient_cls.php';

$patientId = $_GET['patient_id'];

$patient = new patientinfo();

//var_dump($doct);die;

if ($patient->deletepatient($patientId) ){
    //echo "Doct Info deleted sucessfully";
    
    header('Location:patient_tbl.php',refresh);
    
    
}


?>



<!--End of Patient-->



<?php
require_once '../class/employee_cls.php';

$employeeId = $_GET['employee_id'];

$employee = new employeeinfo();

//var_dump($doct);die;

if ($employee->deleteemployee($employeeId) ){
    //echo "Doct Info deleted sucessfully";
    
    header('Location:employee_tbl.php',refresh);
    
    
}


?>



<!--End of Employee-->



