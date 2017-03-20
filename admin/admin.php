       


 <?php
include_once'checking.php';
include_once '../header.php';
include_once '../container_top.php';
//include_once 'admin/doct_tbl.php';
//include_once 'checklogin.php';

?>

<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
        
        
        <style type="text/css">
            
            #wrap {
                            width: 1000px;
                            margin: auto;
                            background-image: url('./images/shared/1.jpg');
                            height: 500px;
                            }
                    
                    
                    #main {
                            clear: both;
                            overflow: hidden;
                            }
                    
                    
                    #main #primary {
                                    float: left;
                                    width: 300px;

                                    }

                    #main #secondary {
                                    float: right;
                                    width: 200px;
                                    }

                                    
                    #main #primary .post-item {
/*                                            background: #ededed;*/
                                   height: 150px;
                                    width: 350px;
                                margin-top: 0px;
/*                                            border: 1px solid white;*/
                                            padding-right: 220px;
                                            padding-left: 200px;
                                            padding-top: 50px;
                                             padding-bottom: 80px;
                                            font-family: sans-serif;
                                            font-size: 16px;
                                            text-align: center;
                                            }
                    .secondaryBox {
/*                                            background: #ededed;*/
/*                                            border: 1px solid white;*/

                                            padding: 8% 8%;
                                            font-family: sans-serif;
                                            font-size: 16px;
                                            }

    

</style>
        
        
                
        
    </head>
    <body>     

<div id="wrap" class="table-content">
    
    
          <div id="main">
              
                        <div id="primary">

			<ul  class="post-item">
				<a href="admin/doct_info.php" target="_blank">Insert Doctors Information</a></br>  </br> </br>
				<a href="admin/patient_info.php" target="_blank">Insert Patients Information</a></br>  </br> </br>
				<a href="admin/employee_info.php" target="_blank">Insert Employee's Information</a></br>  </br> </br>
<!--                                <a href="admin/account_info.php">Account Information</a></br>  </br> </br> -->
                                <a href="admin/search.php">Customization</a></li>


			</ul>
                            
                                     
                        
                        
                        
                        </div>            <!--end of primary-->

                                         
                      <div id="secondary">
                                       <div class="secondaryBox"> 

                         
               <a href="admin/logout.php" ><img src=./images/shared/nav/nav_logout.gif  width=100px /></a>

                       
                   
                                  </div>            <!--end of secondarybox-->    

                      
                      </div>            <!--end of secondary-->

                                         
          </div>            <!--end of main-->
    
    
    
    
    
    
    
</div>              <!--End of wrap-->






        
        
    </body>
</html>


        
 <?php
include_once '../container_bottom.php';

include_once '../footer.php';


?>