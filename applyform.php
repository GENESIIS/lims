<?php
session_start();
include ('connection.php');
$admin = $_SESSION['level'];
$user = $_SESSION['username'];



    if (($user!="") || ($admin!="")) {
    
    
   $sid = $_SESSION['id'];
    $table = $_SESSION['table'];
    
     if ($table=="memberfoot") {
$name = "Limb";
$tbl = "foot";
$code = "J.F /";
$atr = "f_id";
$detail = "whichleg";
$mdetail = "aouk";
}elseif ($table=="memberarm") {
        $name = "Arm";
        $code = "A.A /";
        $tbl = "arm";
        $atr = "arm_id";
         $detail = "whicharm";
        $mdetail = "aobelbow";
    }elseif ($table=="memberother") {
        $name = "Other Appliance";
        $code = "O.A /";
        $tbl = "other";
        $atr = "oa_id";
         $detail = "whicharmo";
        $mdetail = "whichlego";
    }
    
    $sqls = mysql_query("select regnum,$atr from $tbl where regnum = '$sid' and confirm = ''");
    $rowc = mysql_fetch_array($sqls);
    if ($rowc>0) {
         ?>
<script language ="javascript">
    alert('Already Applied for a Limb');
    window.location = "search.php";
    </script>

<?php
    }
    
    
    

        $search = mysql_query("select * from $table where regnum='$sid'");
        $rows = mysql_fetch_array($search);
       
$date = date("Y.m.d");
        
        if (isset($_POST['apply'])) {
            include 'app_code.php';
        }
        
        



    
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Jaipur Foot workshop Registration form</title>
    <meta name="description" content="">
    <meta name="author" content="templatemo">
  
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,700' rel='stylesheet' type='text/css'>
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/templatemo-style.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.11/jquery-ui.min.js"></script>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  
  <script src="Jquery/jquery-1.6.2.min.js" type="text/javascript"></script>
 
<script src="Jquery/jquery-ui-1.8.16.custom.min.js" type="text/javascript"></script>
  

<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
<script type="text/javascript" src="http://code.jquery.com/jquery.min.js"></script>-->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.16/jquery-ui.min.js"></script>

<script>





jQuery(function() {
    jQuery( "#datepicker" ).datepicker({ dateFormat: 'yy-mm-dd'});
    
});
jQuery(function() {
    jQuery( "#datepicker1" ).datepicker({ dateFormat: 'yy-mm-dd'});
    
});



</script>
   
  </head>
  <body>
    <!-- Left column -->
    <div class="templatemo-flex-row">
      <div class="templatemo-sidebar">
        <?php  
include 'menuuser.php';


		?>
      </div>
	
	
      <!-- Main content -->
      <div class="templatemo-content col-1 light-gray-bg">
        <div class="templatemo-top-nav-container">
          <div class="row">
            <nav class="templatemo-top-nav col-lg-12 col-md-12">
              <ul class="text-uppercase">
                <li><a href="" class="active">Registration</a></li>
<!--                <li><a href="">Dashboard</a></li>
                <li><a href="">Overview</a></li>
                <li><a href="login.html">Sign in form</a></li>-->
              </ul>
            </nav>
          </div>
        </div>
        <div class="templatemo-content-container">
          <div class="templatemo-content-widget white-bg">
            <h2 class="margin-bottom-10">Application Form</h2>
            <p></p>
             
            
            <div class="row">
			
			<div class="col-lg-12 col-md-12 ">
			
			   <div class="table-responsive">
                <table class="table">
                  <tbody>
                    <tr>
                     
					   
					  
                      <td>Registration Number</td>
					  <?php
if ($table=="memberfoot") {
$name = "Limb";
$code = "J.F /";
}elseif ($table=="memberarm") {
        $name = "Arm";
        $code = "A.A /";
    }elseif ($table=="memberother") {
        $name = "Other Appliance";
        $code = "O.A /";
    }	
			  
			 ?>
					  
					 
                      <td><?php echo $code." ".$sid." / ".$rows['month']." / ".$rows['year']  ?>  </td> 

				  
                    </tr> 
                    <tr>
                      
                      <td>Reg Date </td>
                      <td><?php echo $rows['date'] ?></td>                    
                    </tr>  
                    <tr>
                      
                      <td>District</td>
                      <td> <?php echo $rows['district'] ?></td>                    
                    </tr>  
                    <tr>
                  
                      <td>Name</td>
                      <td> <?php echo $rows['title']. ". ". $rows['fname'] . " ". $rows['lname']  ?></td>                    
                    </tr>   
					<tr>
                  
                      <td>Address</td>
                      <td> <?php echo $rows['address'] ?></td>                    
                    </tr> 	
					<tr>
                  
                      <td>Age</td>
                      <td> <?php 
                      $yr = date("Y");
                      $dyr = explode("-", $rows['dob']);
                      echo $yr-$dyr[0] ?></td>                    
                    </tr> 
					<tr>
                  
                      <td>Gender</td>
                      <td> <?php echo $rows['sex'] ?></td>                    
                    </tr> 
					
					<tr>
                  
                      <td>Phone number</td>
                      <td> <?php echo $rows['phone'] ?></td>                    
                    </tr>
					
					<tr>
                  
                      <td>Date of Amputation</td>
                      <td> <?php echo $rows['surgerydate'] ?></td>                    
                    </tr>
					
					<tr>
                  
                      <td>About Limb</td>
                      <td> <?php echo  $rows[$detail]." - ". $rows[$mdetail]; ?></td>                    
                    </tr>
					
					<tr>
                  
                      <td>Num of Limbs issued</td>
                      <td> <?php  
                      $sql = mysql_query("SELECT COUNT(regnum) as tot from $tbl where regnum =$sid");
                      $row = mysql_fetch_array($sql);
                      echo $row['tot'];
                      ?></td>                     
                    </tr>
                    <tr>
                   <td>Last Admission Number</td>
                      <td> <?php
                      $sql = mysql_query("select $atr from $tbl where regnum ='$sid' order by $atr desc limit 1");
                      $row1 = mysql_fetch_array($sql);
                      if ($row1>0) {
                          echo $row1[$atr];
                      }  else {
                          echo "No Admissions";    
                      }
                      
                      ?></td>                    
                   	 </tr>
                    
                    
			<tr>
                  
                      <td><?php  echo $date  ?></td>
                      <td> </td>                    
                    </tr>		
                  </tbody>
                </table>
              </div>
			
			</div>
			
                </div>
            <!-- End of record   -->
            
<!--       start of apply form-->


            <form  class="templatemo-login-form" method="post" name="foot" enctype="multipart/form-data">
                    
                         <div class="row form-group">
			  <div class="col-lg-12  form-group">
                              
                              
                <div class="col-lg-4 col-md-4 form-group">                  
                    <label for="inputUsername">Admitted On Hostel</label>
                    <input type="text" class="form-control" id="datepicker" placeholder="Select" name = "admit" value="<?php   ?>">   
                    <label for="inputFirstName"> <?php    ?> </label>
                </div>
                              
                              
                <div class="col-lg-4 col-md-4 form-group">                  
                    <label for="inputUsername">Out Patient</label>
                    <select class="form-control" name = "out" value="<?php    ?>">
                        <option value="">--Select--</option>
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>  			
                  </select>  
                    <label for="inputFirstName"> <?php    ?> </label>
                </div>
                  
                              
                              <div class="col-lg-4 col-md-4 form-group">                  
                    <label for="inputUsername">Discharged On</label>
                    <input type="text" class="form-control" id="datepicker1" placeholder="Select" name = "discharge" value="<?php   ?>">   
                    <label for="inputFirstName"> <?php    ?> </label>
                </div>
				
		</div>
              </div>
                
                <div class="row form-group">
			 
                    <div class="col-lg-12  form-group">
                     
                        <div class="col-lg-6 col-md-6 form-group">                  
                    <label for="inputEmail">Training Period / Trained By</label>
                    <input type="text" class="form-control" id="inputEmail" placeholder="Training" name = "training" value="<?php  ?>"> 
                   </div>
                        
                    <div class="col-lg-6 col-md-6 form-group">                  
                    <label for="inputEmail">Amount Paid By Amputee</label>
                    <input type="text" class="form-control" id="inputEmail" placeholder="Amount By Amputee" name = "ampamnt" value="<?php   ?>"> 
                   </div> 
                           
                          </div>
                </div>
                
                <div class="row form-group">
			 
                    <div class="col-lg-12  form-group">
                     
                    <div class="col-lg-6 col-md-6 form-group">                  
                    <label for="inputEmail">Sponsored By</label>
                    <input type="text" class="form-control" id="inputEmail" placeholder="Sponser By" name = "spons" value="<?php //echo $lname   ?>"> 
                   </div> 
                        
                        
                         <div class="col-lg-6 col-md-6 form-group">                  
                    <label for="inputEmail">Sponsored Amount</label>
                    <input type="text" class="form-control" id="inputEmail" placeholder="Sponsord Amount" name = "sponsamnt" value="<?php //echo $lname   ?>"> 
                   </div>
                             
                          </div>
                </div>
                
                 
               <div class="form-group text-right">
                <button type="submit" class="templatemo-blue-button" name = "apply" >Apply <?php echo " ".$name ?></button>
                <button type="reset" class="templatemo-white-button">Reset</button>
              </div>
                
            </form>
 


<!--            end of form-->
            
                
          </div>
          <footer class="text-right">
            <p></p>
          </footer>
        </div>
      </div>
      
    </div>

    <!-- JS -->
    <!--script type="text/javascript" src="js/jquery-1.11.2.min.js"></script-->        <!-- jQuery -->
    <script type="text/javascript" src="js/bootstrap-filestyle.min.js"></script>  <!-- http://markusslima.github.io/bootstrap-filestyle/ -->
    <script type="text/javascript" src="js/templatemo-script.js"></script>        <!-- Templatemo Script -->
  </body>
</html>


<?php 

}  else {
    ?>
<script language ="javascript">
    window.location = "logout.php";
    </script>

<?php
}

?>

    
    <script>
        

 
    </script>
