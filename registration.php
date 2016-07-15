<?php
session_start();
include ('connection.php');
//$admin = $_SESSION['adminname'];
$user = $_SESSION['username'];


if (($user!="")) {
    $date = date("Y.m.d");
    include 'regcode.php';

    
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
  
   <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.16/jquery-ui.min.js"></script>

<script>
jQuery(function() {
    jQuery( "#datepicker" ).datepicker();
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
            <h2 class="margin-bottom-10">Jaipur Foot workshop Registration form</h2>
            <p></p>
            <form  class="templatemo-login-form" method="post" enctype="multipart/form-data">
              <div class="row form-group">
<!--                <div class="col-lg-4 col-md-4 form-group">                  
                    <label for="inputFirstName">Registration Number </label>
                    <input type="text" class="form-control" id="inputFirstName" disabled="" placeholder="Registration Number " name = "rnumber" value="<?php echo $rnumber   ?>"> 
                   <label for="inputFirstName"> <?php //echo $ernum  ?> </label>
                </div>-->
                <div class="col-lg-6 col-md-6 form-group">                  
                    <label for="inputLastName">Date </label>
                    <input type="text" class="form-control"  disabled="" placeholder="<?php echo date("Y.m.d") ?>" name = "date" >                  
                </div> 

<!--div class="col-lg-4 col-md-4 form-group">                  
                                
                </div--> 
				<div class="col-lg-6 col-md-6 form-group">                  
                    <label for="inputLastName">District </label>
                    <!--input type="text" class="form-control" id="inputLastName" placeholder="district" name = "district" --> 
                    
                     <select class="form-control" name = "district">
   <?php 
$sql = mysql_query("SELECT * FROM  district ORDER BY district ASC");
while ($row = mysql_fetch_array($sql)){
echo "<option value= ".$row['district'].">" . $row['district'] . "</option>";
}
?>				
                  </select> 
                    
                    <label for="inputFirstName"> <?php echo $erdis  ?> </label>
                    
                </div>

              </div>
              <div class="row form-group">
			  <div class="col-lg-12  form-group">
                <div class="col-lg-2 col-md-2 form-group">                  
                    <label for="inputUsername">Title</label>
                     <select class="form-control" name = "title" value="<?php echo $title   ?>">
                    <option value="Mr">Mr.</option>
                    <option value="Mrs">Mrs.</option>  
					<option value="Miss">Miss.</option>  
				<option value="Master">Master.</option> 
<option value="Rev.">Rev..</option> 				
                  </select>  
                    
                    <label for="inputFirstName"> <?php echo $ertil  ?> </label>
                </div>
                              
                               
				
				<div class="col-lg-4 col-md-4 form-group">                  
                    <label for="inputUsername">First Name</label>
                    <input type="text" class="form-control" id="inputUsername" placeholder="First Name" name = "fname" value="<?php echo $fname   ?>">   
                    <label for="inputFirstName"> <?php echo $erfnsme  ?> </label>
                </div>
				
				 
                <div class="col-lg-6 col-md-6 form-group">                  
                    <label for="inputEmail">Last Name</label>
                    <input type="text" class="form-control" id="inputEmail" placeholder="Last name" name = "lname" value="<?php echo $lname   ?>"> 
                  
                </div> 
				
				</div>
              </div>
			  
			    <div class="row form-group">
                <div class="col-lg-12 form-group">                   
                    <label class="control-label" for="inputNote">Address</label>
                    <textarea class="form-control" id="inputNote" rows="3" name = "address" placeholder="Address..."><?php echo $address   ?></textarea>
                    
                     <label for="inputFirstName"> <?php echo $erad  ?> </label>
                </div>
              </div>
			  
			   <div class="row form-group">
                <div class="col-lg-4 col-md-4 form-group">                  
                    <label for="inputFirstName">Age </label>
                    <input type="text" class="form-control" id="inputFirstName" placeholder="Age " name = "age" value="<?php echo $age   ?>">  
                    <label for="inputFirstName"> <?php echo $ersge ?> </label>
                </div>
                <div class="col-lg-4 col-md-4 form-group">                  
                    <label for="inputLastName">Gender </label>
                     <select class="form-control" name = "gender" value="<?php echo $gender   ?>">
					 <option value="" disabled selected>Select Gender </option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>  
									
                  </select>     
                    
                     <label for="inputFirstName"> <?php echo $ergen  ?> </label>
                </div> 
				<div class="col-lg-4 col-md-4 form-group">                  
                    <label for="inputLastName">Phone Number </label>
                    <input type="text" class="form-control" id="inputLastName" placeholder="Phone Number" name = "number" value="<?php echo $number   ?>">    
                    <label for="inputFirstName"> <?php echo $ernum ?> </label>
                </div>
              </div>
		
              <div class="row form-group">
                <div class="col-lg-6 col-md-6 form-group">                  
                    <label for="inputNewPassword">Education</label>
                     <textarea class="form-control" id="inputNote" rows="2" name = "edu" placeholder="Education..."><?php echo $edu   ?></textarea>
                </div>
                <div class="col-lg-6 col-md-6 form-group">                  
                    <label for="inputConfirmNewPassword">Family Members</label>
                    <textarea class="form-control" id="inputNote" rows="2" name = "fmemb" placeholder="Family Members..."><?php echo $fmemb   ?></textarea>
                </div> 
              </div>
			  
			    <div class="row form-group">
                <div class="col-lg-6 col-md-6 form-group">                  
                    <label for="inputNewPassword">Presnt Employment </label>
                     <textarea class="form-control" id="inputNote" rows="2" name = "emp" placeholder="Presnt Employment ..."><?php echo $emp   ?></textarea>
                </div>
                <div class="col-lg-6 col-md-6 form-group">                  
                    <label for="inputConfirmNewPassword">Prior Employment</label>
                    <textarea class="form-control" id="inputNote" rows="2" name = "pemp" placeholder="Prior Employment..."><?php echo $pemp   ?></textarea>
                </div> 
              </div>
			  
			   <div class="row form-group">
                <div class="col-lg-4 col-md-4 form-group">                  
                    <label for="inputNewPassword">Date of Amputation </label>
                       <input type="text" class="form-control" id="datepicker" placeholder="Date of Amputation" name = "adate" value="<?php echo $adate   ?>" > 
                       

                       
                       
                       
                       
                </div>
                <div class="col-lg-4 col-md-4 form-group">                  
                    <label for="inputConfirmNewPassword">Cause Of Amputaion</label>
                    <textarea class="form-control" id="inputNote" rows="2" name = "case" placeholder="Cause Of Amputaion..."><?php echo $case   ?></textarea>
                </div> 
				
				  <div class="col-lg-4 col-md-4 form-group">                  
                    <label for="inputConfirmNewPassword">Hospital</label>
                    <textarea class="form-control" id="inputNote" rows="2" name = "hos" placeholder="Hospital..."><?php echo $hos   ?></textarea>
                </div> 
              </div>
			  
			   <div class="row form-group">
			 
                <div class="col-lg-6 col-md-6 form-group"> 
			 
                 
                    <div class="margin-right-15 templatemo-inline-block">
                      <input type="radio" name="leg"  value="Left Leg" id="r1" <?php echo $left ?>>
                      <label for="r1" class="font-weight-400"><span></span>Left Leg</label>
                    </div>
                    <div class="margin-right-15 templatemo-inline-block">
                      <input type="radio" name="leg"  value="Right Leg"  id="r2" <?php echo $right ?>>
                      <label for="r2" class="font-weight-400"><span></span>Right Leg</label>
                    </div>
					
					 </div>
					
					<div class="col-lg-6 col-md-6 form-group"> 
					
					  <div class="margin-right-15 templatemo-inline-block">
                      <input type="radio" name="knee"  value="Below Knee" id="r4" <?php echo $below ?>>
                      <label for="r4" class="font-weight-400"><span></span>Below Knee</label>
                    </div>
                    <div class="margin-right-15 templatemo-inline-block">
                      <input type="radio" name="knee"  value="Under Knee" id="r5" <?php echo $under ?> >
                      <label for="r5" class="font-weight-400"><span></span>Under Knee</label>
                    </div>
                   
				
				   
                </div>
              </div>
			
              <div class="form-group text-right">
                <button type="submit" class="templatemo-blue-button" name = "save">Save</button>
                <button type="reset" class="templatemo-white-button">Reset</button>
              </div>                           
            </form>
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
    window.location = "login.php";
    </script>

<?php
}

?>