<?php
session_start();
include ('connection.php');
$admin = $_SESSION['adminname'];
$user = $_SESSION['username'];



    if (($user!="") || ($admin!="")) {
    
    
   $sid = $_SESSION['id'];
    $table = $_SESSION['table'];
    
    
     if ($table=="memberfoot") {
$name = "Limb";
$tbl = "foot";
$code = "J.F /";
$atr = "f_id";
}elseif ($table=="memberarm") {
        $name = "Arm";
        $code = "A.A /";
        $tbl = "arm";
        $atr = "arm_id";
    }elseif ($table=="memberother") {
        $name = "Other Appliance";
        $code = "O.A /";
        $tbl = "other";
        $atr = "oa_id";
    }
    
    
     $search = mysql_query("select * from $table as a INNER JOIN $tbl as b on a.regnum=b.regnum where b.regnum in
            (select regnum from $tbl order by $atr desc)");
        $rows = mysql_fetch_array($search);
    
       
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
   
<style type="text/css">


@media print
{
.noprint {display:none;}
}

@media screen
{

}

</style>






  </head>
  <body>
    <!-- Left column -->
    <div class="templatemo-flex-row">
      <div class="templatemo-sidebar noprint">
        <?php  
include 'menuuser.php';


		?>
      </div>
	
	
      <!-- Main content -->
      <div class="templatemo-content col-1 light-gray-bg ">
        <div class="templatemo-top-nav-container noprint">
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
                   <td class="col-lg-3 col-md-3">Admission Number</td>
                      <td class="col-lg-3 col-md-3"> <?php
                      $sql = mysql_query("select $atr from $tbl where regnum =$sid order by $atr desc limit 1");
                      $row1 = mysql_fetch_array($sql);
                      if ($row1>0) {
                          echo $row1[$atr];
                      }  else {
                          echo "No Admissions";    
                      }
                      
                      ?></td>      
                      <td class="col-lg-3 col-md-3">Registration Number</td>
                      <td class="col-lg-3 col-md-3"><?php echo $code." ".$sid." / ".$rows['month']." / ".$rows['year']  ?> </td>
                   	 </tr>
                         
                      
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
                    <tr class="col-lg-6 col-md-6">
                      
                      <td>District</td>
                      <td> <?php echo $rows['district'] ?></td>                    
                    </tr>  
                    <tr class="col-lg-12 col-md-12">
                  
                      <td>Name</td>
                      <td> <?php echo $rows['title']. ". ". $rows['fname'] . " ". $rows['lname']  ?></td>                    
                    </tr>   
					<tr>
                  
                      <td>Address</td>
                      <td> <?php echo $rows['address'] ?></td>                    
                    </tr> 	
					<tr>
                  
                      <td>Age</td>
                      <td><?php 
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
                      <td> <?php echo $rows['whichleg']." ".$rows['aouk'].$rows['whicharm']." ".$rows['aobelbow'].$rows['whichlego']." ".$rows['whicharmo']; ?></td>                    
                    </tr>
                    <tr>
                  
                      <td>Cause Of Amputation</td>
                      <td> <?php echo $rows['cause'] ?></td>                    
                    </tr>
					
					<tr>
                  
                      <td>Num of Limbs issued</td>
                      <td>  <?php  
                      $sql = mysql_query("SELECT COUNT(regnum) as tot from $tbl where regnum =$sid");
                      $row = mysql_fetch_array($sql);
                      echo $row['tot'];
                      ?></td>                    
                    </tr>
                    <tr>
                  
                      <td>Amount paid by Amputee</td>
                      <td> <?php echo $rows['amputepay'] ?></td>                    
                    </tr>
                                                <tr>
                                            <td>Sponsor</td>
                                            <td> </td>                    
                                          </tr>
                    
                    <tr>
                      <td>Amount Paid By Sponsor</td>
                      <td> <?php echo $rows['sponspaid'] ?></td>                    
                    </tr>
                    <tr>
                      <td>Admitted On Hospital</td>
                      <td> <?php echo $rows['sponspaid'] ?></td>                    
                    </tr>
                    <tr>
                      <td>Out Patient</td>
                      <td> <?php echo $rows['sponspaid'] ?></td>                    
                    </tr>
                    
                    <tr>
                      <td>Training Period</td>
                      <td> <?php echo $rows['sponspaid'] ?></td>                    
                    </tr>
                    <tr>
                      <td>Discharged On</td>
                      <td> <?php echo $rows['sponspaid'] ?></td>                    
                    </tr>
                    
                    <tr>
                      <td>Observation</td>
                      <td> <?php echo $rows['sponspaid'] ?></td>                    
                    </tr>
			<tr>
                      <td>Medical Officer</td>
                      <td> </td>                    
                    </tr>
                    <tr>
                      <td>Production Manager</td>
                      <td></td>                    
                    </tr>
                    <tr>
                      <td>Project Manager</td>
                      <td></td>                    
                    </tr>
                  </tbody>
                </table>
              </div>
		</div>	
			
			
<!--                </div>-->
            <!-- End of record   -->
            

<!--            end of form-->
            
                
          </div>
          <footer class="text-right noprint">
              <a href="javascript:window.print()">Print</a>
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

    