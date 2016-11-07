<?php
 if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 

    
include ('connection.php');
$admin = $_SESSION['level'];
$user = $_SESSION['username'];
//echo $register = $_SESSION[$row['regnum']];
 $sid = $_SESSION['id'];
 $table = $_SESSION['table'];
 include 'apply_code.php';
 
if (($user!="") || ($admin!="")) {
   

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


    $(document).ready(function(){
        $('#next').click(function(){
            $('reg').hide();
        })
    })

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
			
			
			
			<br><br>
			
			
			
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
    $tbl = "foot";
$name = "Limb";
$code = "J.F /";
$col= "f_id";
$detail = "whichleg";
$mdetail = "aouk";
}elseif ($table=="memberarm") {
    $tbl = "arm";
        $name = "Arm";
        $code = "A.A /";
        $col= "arm_id";
        $detail = "whicharm";
        $mdetail = "aobelbow";
    }elseif ($table=="memberother") {
        $tbl = "other";
        $name = "Other Appliance";
        $code = "O.A /";
        $row= "oa_id";
        $detail = "whicharmo";
        $mdetail = "whichlego";
    }	
    
    
    function check()
    {
        $num = $_POST['colid'];
        
        if ($num =="") {
            echo "No admision num";
            echo "<script type='text/javascript'>alert('failed!')</script>";

        }
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
                  
                      <td>Cause Of Amputation</td>
                      <td> <?php echo $rows['cause'] ?></td>                    
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
                      $sql = mysql_query("select $col from $tbl where regnum ='$sid' and confirm='confirmed' order by $col desc limit 1");
                      $row1 = mysql_fetch_array($sql);
                      if ($row1>0) {
                          echo $row1[$col];
                      }  else {
                          echo "No Admissions";    
                      }
                      
                      ?></td>                    
                   	 </tr>
					
                  </tbody>
                </table>
              </div>
			
			</div>
			
			
			
					 
					 
                  
                </div>
				
			
			  
			<br><br><br>
			
			<div class="row">
			
			<div class="col-lg-4 col-md-4 form-group"> 
            <form  class="templatemo-login-form" method="post" enctype="multipart/form-data" action="applyform.php">
			
              <div class="form-group text-left">
                  <input type="hidden" name="uid" value="<?php  echo  $sid ?>">
                <button type="submit" class="templatemo-blue-button" name = "apply1">Apply New <?php echo " ".$name ?></button>
<!--                <button type="reset" class="templatemo-white-button">Reset</button>-->
              </div>                           
            </form>
			
			</div> 
			
			
                           <div class="col-lg-4 col-md-4 form-group"> 

						   <form  class="templatemo-login-form" method="post" enctype="multipart/form-data" action="repair.php">

                              <div class="form-group text-right">
                                  <input type="hidden" name="id" value="<?php  echo  $sid ?>">
                                  <input type="hidden" name="colid" value=" <?php echo $row1[$col]; ?>">
                                  <button type="submit" class="templatemo-blue-button" name = "repair" onclick="check()"> Repair <?php echo " ".$name ?></button>
                <!--                <button type="reset" class="templatemo-white-button">Reset</button>-->
                              </div>                           
                            </form>
							 </div>
							
            <form  class="templatemo-login-form" method="post" enctype="multipart/form-data" action="edit.php">
                 <button type="submit" class="templatemo-blue-button" name="edit" id="next" >Edit</button>
            </form>
			 </div>
			
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
