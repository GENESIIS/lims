<?php
session_start();
include ('connection.php');
$admin = $_SESSION['level'];
$user = $_SESSION['username'];
$limb = $ortho= "";

if (($admin!="") || ($user!="")) {
    $mtable = $_SESSION['regtbl'];
    $tbl = $_SESSION['tbl'];
    //$col = $_SESSION['col']; 
   //$reg = $_SESSION['reg'];
    
    
    if (isset($_POST['confirm'])) {
      $id = $_POST['hidid'];
      $col = $_POST['hidcol'];
        
        $sql2 = mysql_query("SELECT * FROM $mtable AS a INNER JOIN $tbl as b ON a.regnum = b.regnum 
            WHERE b.regnum IN (SELECT regnum FROM $tbl where $col = '$id')");
        $rows = mysql_fetch_array($sql2);
        while ($row = mysql_fetch_array($sql2)) {
             $row['regnum'];
            $row['fname'];
        }
       // $rows['regnum'];
        
    }elseif (isset ($_POST['discharge'])) {
        
        $date = date("Y.m.d");
     $sid = $_POST['uid'];
    $ncol = $_POST['col'];
   $table = $_SESSION['tbl'];

        $admit = $_POST['admit'];
        $out = $_POST['out'];
        $discharge = $_POST['discharge'];
       $training = $_POST['training'];
        $ampamnt = $_POST['ampamnt'];
        $spons = $_POST['spons'];
        $spamnt = $_POST['sponsamnt'];
        $obs = $_POST['obs'];
        
        if (isset($_POST['limb'])) {
            $limb = $_POST['limb'];
        }
        if (isset($_POST['ortho'])) {
            $ortho = $_POST['ortho'];
        }
        
        
        if (($tbl=="foot") && ($limb=="")) {
            $type = $limb;
            ?>

<script lang="javascript">
    alert('Please select the Limb Type');
</script>
            <?php
        }elseif (($tbl=="other") && ($ortho=="")) {
            $type = $ortho;
            ?>
<script lang="javascript">
    alert('Please select the Limb Type');
//     window.location ="confirm.php";
</script>
            <?php
        }  else {
          
            $sqllimb = mysql_query("UPDATE $table SET `admiton`='$admit',
            `outpatient`='$out',`dischrg`='$discharge',
            `trainin`='$training',`amputepay`='$ampamnt',`spons`='$spons',`sponspaid`='$spamnt',
            `observation`='$obs',type='$type',`confirm`='confirmed',`condate`='$date'
             WHERE $ncol = '$sid'");
        
        if ($sqllimb) {
           ?>
<script>
    alert('Data Have been saved Successfuly');
    window.location="pending.php";
</script>
           <?php
        }  else {
            ?>
<script>
    alert('Failed To Save');
</script>
           <?php   
        }
            
            
        }
         
        
        
    }
 
   

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Jaipur Foot workshop Apply form</title>
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
  
   <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.16/jquery-ui.min.js"></script>

<script>
jQuery(function() {
    jQuery( "#datepicker" ).datepicker();
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

if($admin=="admin" )
	
	{include 'menu.php';}
	
	elseif ($user != "" )
	{include 'menuuser.php';}  else {
    ?>
<script language ="javascript">
    window.location = "login.php";
    </script>

<?php
}

?>


		
      </div>
      <!-- Main content -->
      <div class="templatemo-content col-1 light-gray-bg" id="reg">
        <div class="templatemo-top-nav-container">
          <div class="row">
            <nav class="templatemo-top-nav col-lg-12 col-md-12">
              <ul class="text-uppercase">
                <li><a href="" class="active">Admin panel</a></li>
<!--                <li><a href="">Dashboard</a></li>
                <li><a href="">Overview</a></li>
                <li><a href="login.html">Sign in form</a></li>-->
              </ul>
            </nav>
          </div>
        </div>
        <div class="templatemo-content-container">
          <div class="templatemo-content-widget white-bg">
            <h2 class="margin-bottom-10">Jaipur Foot workshop Apply form</h2>
			
			
			
		
			
			
			
            <p></p>
			<div class="row">
			
			<div class="col-lg-12 col-md-12 ">
			
			   <div class="table-responsive">
                <table class="table">
                  <tbody>
                    <tr>
                     
					   
					  
                      <td>Registration Number</td>
					  <?php
if ($mtable=="memberfoot") {
$name = "Limb";
$code = "J.F /";
$detail = "whichleg";
$mdetail = "aouk";
}elseif ($mtable=="memberarm") {
        $name = "Arm";
        $code = "A.A /";
        $detail = "whicharm";
        $mdetail = "aobelbow";
    }elseif ($mtable=="memberother") {
        $name = "Other Appliance";
        $code = "O.A /";
        $detail = "whicharmo";
        $mdetail = "whichlego";
    }	
			  
			 ?>
					  
					 
                      <td><?php echo $code." ".$rows['regnum']." / ".$rows['month']." / ".$rows['year']  ?>  </td> 

				  
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
                  
                      <td>Cause Of Amputaion</td>
                      <td> <?php echo $rows['cause'] ?></td>                    
                    </tr>
                      <tr>
                   <td>About Limb</td>
                      <td> <?php echo $rows[$detail]." - ". $rows[$mdetail]; ?></td>                    
                   	 </tr>
					
					<tr>
                  
                      <td>Num of Limbs issued</td>
                      <<td> <?php  
                      $sql = mysql_query("SELECT COUNT(regnum) as tot from $tbl where regnum =$id");
                      $row = mysql_fetch_array($sql);
                      echo $row['tot'];
                      ?></td>                  
                    </tr>
                    
                    <tr>
                  
                      <td>Last Admission Number</td>
                     <td> <?php echo $id ?></td>                    
                    </tr>
					
                  </tbody>
                </table>
              </div>
			
			</div>
			
			
			
					 
					 
                  
                </div>
				
			
			  
		<!--       start of apply form-->

<br><br><br>
            <form  class="templatemo-login-form" method="post" name="foot" enctype="multipart/form-data">
                    
                         <div class="row form-group">
			  <div class="col-lg-12  form-group">
                              
                              
                <div class="col-lg-4 col-md-4 form-group">                  
                    <label for="inputUsername">Admitted On Hostel</label>
                    <input type="text" class="form-control" id="datepicker" placeholder="Select" name = "admit" value="<?php echo $rows['admiton'] ?>">   
                    <label for="inputFirstName"> <?php    ?> </label>
                </div>
                              
                              
                <div class="col-lg-4 col-md-4 form-group">                  
                    <label for="inputUsername">Out Patient</label>
                    <select class="form-control" name = "out" value="<?php echo $rows['outpatient'] ?>">
                        <option value="">--Select--</option>
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>  			
                  </select>  
                    <label for="inputFirstName"> <?php    ?> </label>
                </div>
                  
                              
                              <div class="col-lg-4 col-md-4 form-group">                  
                    <label for="inputUsername">Discharged On</label>
                    <input type="text" class="form-control" id="datepicker1" placeholder="Select" name = "discharge" value="<?php echo $rows['dischrg']   ?>">   
                    <label for="inputFirstName"> <?php    ?> </label>
                </div>
				
		</div>
              </div>
                
                <div class="row form-group">
			 
                    <div class="col-lg-12  form-group">
                     
                        <div class="col-lg-6 col-md-6 form-group">                  
                    <label for="inputEmail">Training Period / Trained By</label>
                    <input type="text" class="form-control" id="inputEmail" placeholder="Training" name = "training" value="<?php echo $rows['trainin']  ?>"> 
                   </div>
                        
                    <div class="col-lg-6 col-md-6 form-group">                  
                    <label for="inputEmail">Amount Paid By Amputee</label>
                    <input type="text" class="form-control" id="inputEmail" placeholder="Amount By Amputee" name = "ampamnt" value="<?php echo $rows['amputepay']   ?>"> 
                   </div> 
                           
                          </div>
                </div>
                
                <div class="row form-group">
			 
                    <div class="col-lg-12  form-group">
                     
                    <div class="col-lg-6 col-md-6 form-group">                  
                    <label for="inputEmail">Sponsored By</label>
                    <input type="text" class="form-control" id="inputEmail" placeholder="Sponser By" name = "spons" value="<?php echo $rows['spons']    ?>"> 
                   </div> 
                        
                        
                         <div class="col-lg-6 col-md-6 form-group">                  
                    <label for="inputEmail">Sponsored Amount</label>
                    <input type="text" class="form-control" id="inputEmail" placeholder="Sponsord Amount" name = "sponsamnt" value="<?php echo $rows['sponspaid']   ?>"> 
                   </div>
                             
                          </div>
                    
                    <div class="col-lg-12  form-group">
                     
                    <div class="col-lg-6 col-md-6 form-group">                  
                    <label for="inputEmail">Observation</label>
                    <textarea class="form-control" id="inputNote" rows="2" name = "obs" placeholder="Observation"><?php    ?></textarea>
                    
                   </div> 
                        
                        
                         <div class="col-lg-6 col-md-6 form-group">                  
                    <label for="inputEmail">Other Details</label>
                    <input type="text" class="form-control" id="inputEmail" placeholder="Other Details" name = "sponsamnt" value="<?php echo $rows['sponspaid']   ?>">
                   </div>
                             
                          </div>
                    <?php 
 if ($tbl=="foot") {
     ?>                
<div class="col-lg-12  form-group">
                                           <div class="col-lg-6 col-md-6 form-group">                  
                                    <label for="inputUsername">Limb Type</label>
                                    <select class="form-control" name = "limb" value="<?php  ?>" required="">
                                         <option value="">--Select--</option>
                                    <option value="B/K Plastic Limb">B/K Plastic Limb</option>
                                    <option value="B/K Aluminium Limb">B/K Aluminium Limb</option>
                                    <option value="B/K Leather Limb">B/K Leather Limb</option>
                                    <option value="B/K H.D.P Limb">B/K H.D.P Limb</option>
                                    <option value="A/K Plastic Limb">A/K Plastic Limb</option>
                                    <option value="A/K H.D.P Limb">A/K H.D.P Limb</option>
                                    <option value="A/K Aluminium Limb">A/K Aluminium Limb</option>
                                    
                                    
<!--                                                 <option value="Master">Master.</option> 
                <option value="Rev.">Rev..</option> 				-->
                                  </select>  

                                    <label for="inputFirstName">  </label>
                                </div> 
                                            </div>     
     <?php
}elseif ($tbl=="other") {
    ?>    
    <div class="col-lg-12  form-group">
                                           <div class="col-lg-6 col-md-6 form-group">                  
                                    <label for="inputUsername">Orthotics Type</label>
                                     <select class="form-control" name = "ortho" value="<?php  ?>">
                                         <option value="">--Select--</option>
                                    <option value="Long Leg Brace">Long Leg Brace</option>
                                    <option value="A.F.O">A.F.O</option>
                                    <option value="Below Knee Braces">Below Knee Braces</option>
<!--                                                 <option value="Master">Master.</option> 
                <option value="Rev.">Rev..</option> 				-->
                                  </select>  

                                    <label for="inputFirstName">  </label>
                                </div> 
                                            </div> 
                    
                    <?php 
    }
                    ?>
                    
                    
                    
                </div>
                <input type="hidden" name="col" value="<?php  echo  $col ?>">
                 <input type="hidden" name="uid" value="<?php  echo  $id ?>"> 
                
                
               <div class="form-group text-right">
                <button type="submit" class="templatemo-blue-button" name = "discharge" >Discharged</button>
                <button type="reset" class="templatemo-white-button">Reset</button>
              </div>
                
            </form>
 


<!--            end of form-->	
		
            <!--form  class="templatemo-login-form" method="post" enctype="multipart/form-data" action="edit.php">
                 <button type="submit" class="templatemo-blue-button" name="edit" id="next" >Edit</button>
            </form-->
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
