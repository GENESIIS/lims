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
    
    

    
       
$date = date("Y.m.d");
        
        if (isset($_POST['print'])) {
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
    <!--link href="css/font-awesome.min.css" rel="stylesheet"-->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!--link href="css/templatemo-style.css" rel="stylesheet"-->

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
   


<style type="text/css" media="print">
     

.pagebreak { page-break-after: always; }
.noprint {display:none;}

    </style>






  </head>
  <body>
  
  
 
  
 
    <!-- Left column -->
    <div class="templatemo-flex-row">
      <!--div class="templatemo-sidebar noprint">
        //<?php  
//include 'menuuser.php';


		//?>
      </div-->
	
	
      <!-- Main content -->
      <div class="templatemo-content col-1 light-gray-bg ">
       
     
    
        <div class="templatemo-content-container">
          <div class="templatemo-content-widget white-bg">
           
			
			
          
            <div class="pagebreak"> 
			
			<h2 class="margin-bottom-10" align="center">
                            <p>Colombo Friend-In-Need Society</p>
                            <p>Jaipur Foot Workshop</p>
                            <p>Application Form</p>
                        </h2>
			
			 <div class="col-lg-12 ">
			
                             <br><br><br>
			  <table class="table table-striped table-bordered templatemo-user-table">
              
                <tbody>
                  <tr>
                   
                    <td><label for="inputFirstName">Admission Number</label></td>
                    <td colspan="2"> <?php
                      $sql = mysql_query("select * from $tbl where regnum =$sid order by $atr desc limit 1");
                      $row1 = mysql_fetch_array($sql);
                      if ($row1>0) {
                          echo $row1[$atr];
                      }  else {
                          echo "No Admissions";    
                      }
                      
                           $search = mysql_query("select * from $table where regnum = '$sid'");
        $rows = mysql_fetch_array($search);
                      
                      ?></td>
                    <td><label for="inputFirstName">Registration Number</label></td>
                    <td colspan="2"><?php echo $code." ".$sid." / ".$rows['month']." / ".$rows['year']  ?> </td>
                   
                  </tr>
				  
				   <tr>
                    <td><label for="inputFirstName">Num of Limbs issued</label></td>
                    <td colspan="2"><?php  
                      $sql1 = mysql_query("SELECT COUNT(regnum) as tot from $tbl where regnum =$sid");
                      $row = mysql_fetch_array($sql1);
                      echo $row['tot'];
                      ?></td>
                    <td><label for="inputFirstName">District</label></td>
                    <td colspan="2"><?php echo $rows['district'] ?> </td>
                   
                  </tr>
				  
				  <tr>
                    <td><label for="inputFirstName">Social Service No</label></td>
                    <td colspan="5"></td>
                    
                   
                  </tr>
                 
                 <tr>
                    <td><label for="inputFirstName">Name</label></td>
                 
					
					<td colspan="5"><?php echo $rows['title']. ". ". $rows['fname'] . " ". $rows['lname']  ?></td>
                    
                   
                  </tr>
				  
				  <tr>
                    <td><label for="inputFirstName">Address</label></td>
                    <td colspan="5"><?php echo $rows['address'] ?></td>
                   
                   
                  </tr>
                 
				 
				  <tr>
                    <td> <label for="inputFirstName">Age</label></td>
                    <td > <?php 
                      $yr = date("Y");
                      
                      $dyr = explode("-", $rows['dob']);
                      
                      echo ($yr-$dyr[0]) ?></td>
                    <td><label for="inputFirstName">Gender</label></td>
                    <td><?php echo $rows['sex'] ?></td>
					<td><label for="inputFirstName">Phone number</td>
                    <td><?php echo $rows['phone'] ?></td>
                   
                  </tr>
				  
				  <tr>
                    <td> <label for="inputFirstName">Date of Amputation</label></td>
                    <td colspan="2"><?php if($rows['surgerydate']!="0000-00-00"){echo $rows['surgerydate'];} ?></td>
                    <td><label for="inputFirstName">Cause Of Amputation</label></td>
                     <td colspan="2"><?php echo $rows['cause'] ?></td>
					
                   
                  </tr>
				  
				    <tr>
                    <td><label for="inputFirstName">About Limb</label></td>
                    <td colspan="4"> <?php echo  $rows[$detail]." - ". $rows[$mdetail]."(".$row1['type'].")"; ?></td>
                   
                   
                  </tr>
				  
				    <tr>
                    <td> <label for="inputFirstName">Amount paid by Amputee</label></td>
                    <td colspan="2"> <?php echo $row1['amputepay'] ?></td>
                    <td><label for="inputFirstName">Sponsored by</label></td>
                     <td colspan="2">  <?php echo $row1['spons'] ?></td>
					
                   
                  </tr>
				  
				   <tr>
                    <td> <label for="inputFirstName">Amount Paid By Sponsor</label></td>
                    <td colspan="2"><?php echo $row1['sponspaid'] ?></td>
                    <td><label for="inputFirstName">Admitted On Hospital</label></td>
                     <td colspan="2"> <?php if($row1['admiton']!="0000-00-00"){echo $row1['admiton'];} ?></td>
				
                   
                  </tr>
                  
				  
				   <tr>
                    <td> <label for="inputFirstName">Out Patient</label></td>
                    <td colspan="2"> <?php echo $row1['outpatient'] ?></td>
                    <td>  <label for="inputFirstName">Training Period</label></td>
                    <td colspan="2">  <?php echo $row1['trainin'] ?></td>
					
                   
                  </tr>
				  
				    <tr>
                    <td><label for="inputFirstName">Discharged On</label></td>
                      <td colspan="5"><?php if($row1['dischrg']!="0000-00-00"){echo $row1['dischrg'];} ?></td>
                    
                  </tr>
                  <tr rowspan="2">
                      <td> <label for="inputFirstName">Observation</label></td>
                    <td colspan="5"><?php echo $row1['observation'] ?> <br><br><br><br><br></td>
                    
                    
                  </tr>
                  
				  
				   <tr>
                    <td colspan="2" style="text-align:center"> <br><br><br><label for="inputFirstName" >Medical Officer</label></td>
                    <td colspan="2" style="text-align:center"><br><br><br><label for="inputFirstName">Production Manager</label></td>
                    <td colspan="2" style="text-align:center"><br><br><br><label for="inputFirstName">Project Manager</label></td>
                   
                   
                  </tr>
                
                                   
                </tbody>
              </table> 
			  </div>
			</div>
			
			
<!--			 <div class="pagebreak"> 
			 
			 <h2 class="margin-bottom-10">Job Record Sheet</h2>
			 
			  <div class="col-lg-12 ">-->
			  
			  
			                  <?php 
//if ($table=="memberfoot") {
//    ?>
			 
<!--			  <table class="table table-striped table-bordered templatemo-user-table">
			  
			  
			    <tbody>
                  <tr>
                    <td><label for="inputFirstName">Admission Number</label></td>
                    <td colspan="3">////<?php
////                      $sql = mysql_query("select $atr from $tbl where regnum =$sid order by $atr desc limit 1");
////                      $row1 = mysql_fetch_array($sql);
////                      if ($row1>0) {
////                          echo $row1[$atr];
////                      }  else {
////                          echo "No Admissions";    
////                      }
////                      
////                      ?></td>
                    <td><label for="inputFirstName">Registration Number</label></td>
                    <td colspan="3">////<?php// echo $code." ".$sid." / ".$rows['month']." / ".$rows['year']  ?></td>
                    
                  
                  </tr>
				  
				   <tr>
                    <td><label for="inputFirstName">Folio No</label></td>
                    <td colspan="3"></td>
                    <td><label for="inputFirstName">Job No</label></td>
                    <td colspan="3"></td>
                    
                  
                  </tr>
				  
				   <tr>
                             <td><label for="inputFirstName">Patient Name</label></td>
                             <td colspan="4">//////<?php // echo $rows['title']. ". ". $rows['fname'] . " ". $rows['lname']  ?></td>
                         </tr>
				  
				  </tbody>
			  </table>
			  -->
			  
<!--			      <table class="table table-striped table-bordered templatemo-user-table">
                <thead>
                 
              </table>  
			  -->
<!--			  //<?php
//			  
//}
//
//?>
			 
			 </div>
			 </div>
			 
			 
			 <div class="pagebreak"> 
			 
			   <div class="col-lg-12 ">
			   
			   //<?php
//                  if ($rows['aouk']=="Above Knee") {
//                      ?>
            <img src="images/above1.jpg" alt="first" style="width:700px;height:400px;">
            <img src="images/above2.jpg" alt="first" style="width:700px;height:500px;">
             
                      //<?php
//                  }  else {
//                      ?>
                       <img src="images/bel1.jpg" alt="first" style="width:800px;height:600px;">
                      
                  //<?php
//                       }
//   
//                
//           ?> -->
			 
                             <a href="javascript:window.print()" class="templatemo-blue-button noprint">Print</a>
                             <a href="pending.php" class="templatemo-blue-button noprint pull-right">   Back</a>
			  </div>
			   </div>
			  
			  </div>
			
			
		
                
            
            </div>
            
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

    