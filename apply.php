<?php
session_start();
include ('connection.php');
$admin = $_SESSION['adminname'];
$user = $_SESSION['username'];

//echo $register = $_SESSION[$row['regnum']];
 $sid = $_SESSION['id'];
 include 'apply_code.php';



if (($user!="")) {
    include 'regcode.php';



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
</script>

  </head>
  <body>
    <!-- Left column -->
    <div class="templatemo-flex-row">
      <div class="templatemo-sidebar">
        <header class="templatemo-site-header">
          <div class="square"></div>
          <h1>Visual Admin</h1>
        </header>
        <div class="profile-photo-container">
          <img src="images/profile-photo.jpg" alt="Profile Photo" class="img-responsive">
          <div class="profile-photo-overlay"></div>
        </div>
        <!-- Search box -->
        <form class="templatemo-search-form" role="search">
          <div class="input-group">
              <button type="submit" class="fa fa-search"></button>
              <input type="text" class="form-control" placeholder="Search" name="srch-term" id="srch-term">
          </div>
        </form>
        <div class="mobile-menu-icon">
            <i class="fa fa-bars"></i>
          </div>
        <nav class="templatemo-left-nav">
          <ul>
            <li><a href="index.html"><i class="fa fa-home fa-fw"></i>Dashboard</a></li>
            <li><a href="data-visualization.html"><i class="fa fa-bar-chart fa-fw"></i>Charts</a></li>
            <li><a href="data-visualization.html"><i class="fa fa-database fa-fw"></i>Data Visualization</a></li>
            <li><a href="maps.html"><i class="fa fa-map-marker fa-fw"></i>Maps</a></li>
            <li><a href="manage-users.html"><i class="fa fa-users fa-fw"></i>Manage Users</a></li>
            <li><a href="#" class="active"><i class="fa fa-sliders fa-fw"></i>Preferences</a></li>
            <li><a href="login.html"><i class="fa fa-eject fa-fw"></i>Sign Out</a></li>
          </ul>
        </nav>
      </div>
      <!-- Main content -->
      <div class="templatemo-content col-1 light-gray-bg">
        <div class="templatemo-top-nav-container">
          <div class="row">
            <nav class="templatemo-top-nav col-lg-12 col-md-12">
              <ul class="text-uppercase">
                <li><a href="" class="active">Admin panel</a></li>
                <li><a href="">Dashboard</a></li>
                <li><a href="">Overview</a></li>
                <li><a href="login.html">Sign in form</a></li>
              </ul>
            </nav>
          </div>
        </div>
        <div class="templatemo-content-container">
          <div class="templatemo-content-widget white-bg">
            <h2 class="margin-bottom-10">Jaipur Foot workshop Apply form</h2>
            <p></p>
            <form  class="templatemo-login-form" method="post" enctype="multipart/form-data">
              <div class="row form-group">
                <div class="col-lg-4 col-md-4 form-group">                  
                    <label for="inputFirstName">Registration Number </label>
                    <input type="text" class="form-control" id="inputFirstName" disabled="" name = "rnumber" value="J F <?php echo $sid  ?>"> 
                   <label for="inputFirstName"> <?php echo $ernum  ?> </label>
                </div>
                <div class="col-lg-4 col-md-4 form-group">                  
                    <label for="inputLastName">Reg Date </label>
                    <input type="text" class="form-control"  disabled="" placeholder="<?php echo $rows['date'] ?>" name = "date" >                  
                </div> 
				<div class="col-lg-4 col-md-4 form-group">                  
                    <label for="inputLastName">District </label>
                    <!--input type="text" class="form-control" id="inputLastName" placeholder="district" name = "district" --> 
                    
<input type="text" class="form-control"  disabled="" placeholder="<?php echo $rows['district'] ?>" name = "district" > 
                    
                    
                </div>
              </div>
              <div class="row form-group">
			  <div class="col-lg-12  form-group">
                <div class="col-lg-2 col-md-2 form-group">                  
                    <label for="inputUsername">Title</label>
                    <input type="text" class="form-control"  disabled="" placeholder="<?php echo $rows['title'] ?>" name = "title" > 
		
                </div>
                              
                               
				
				<div class="col-lg-10 col-md-10 form-group">                  
                    <label for="inputUsername">Name</label>
                    <input type="text" class="form-control" id="inputUsername" disabled="" placeholder="<?php echo $rows['fname']." ".$rows['lname']  ?>" name = "fname" value="<?php echo $fname   ?>">   
                    
                </div>
		 
				</div>
              </div>
			  
			    <div class="row form-group">
                <div class="col-lg-12 form-group">                   
                    <label class="control-label" for="inputNote">Address</label>
                    <textarea class="form-control" id="inputNote" rows="3" name ="address" disabled=""><?php echo $rows['address'] ?></textarea>
                    
                </div>
              </div>
			  
			   <div class="row form-group">
                <div class="col-lg-4 col-md-4 form-group">                  
                    <label for="inputFirstName">Age </label>
                    <input type="text" class="form-control" id="inputFirstName" placeholder="<?php echo $rows['age'] ?> " name ="age"  disabled="" value="">  
                    
                </div>
                <div class="col-lg-4 col-md-4 form-group">                  
                    <label for="inputLastName">Gender </label>
                    <input type="text" class="form-control" id="inputFirstName" placeholder="<?php echo $rows['sex'] ?>" name = "gender " disabled="">      
                    
                </div> 
				<div class="col-lg-4 col-md-4 form-group">                  
                    <label for="inputLastName">Phone Number </label>
                    <input type="text" class="form-control" id="inputLastName" placeholder="<?php echo $rows['phone'] ?>" name = "number" disabled="">    
                    
                </div>
              </div>	  
			   <div class="row form-group">
                <div class="col-lg-4 col-md-4 form-group">                  
                    <label for="inputNewPassword">Date of Amputation </label>
                    <input type="text" class="form-control" id="datepicker" placeholder="<?php echo $rows['surgerydate'] ?>" disabled="" name = "adate" > 
                       
                </div>
                <div class="col-lg-4 col-md-4 form-group">                  
                    <label for="inputConfirmNewPassword">Cause Of Amputaion</label>
                    <textarea class="form-control" id="inputNote" rows="2" name = "case" disabled=""placeholder="<?php echo $rows['reason'] ?>"></textarea>
                </div> 
				
				  <div class="col-lg-4 col-md-4 form-group">                  
                    <label for="inputConfirmNewPassword">Num of Limbs issued</label>
                    <textarea class="form-control" id="inputNote" rows="2" name = "hos" placeholder=""><?php    ?></textarea>
                </div> 
              </div>
			  
			  
			   <div class="row form-group">
                <div class="col-lg-6 col-md-6 form-group">                  
                    <label for="inputCurrentPassword">Left or Right Leg</label>
                    <input type="text" class="form-control" id="datepicker" placeholder="<?php echo $rows['whichleg'] ?>" name = "leg" disabled="">                 
                </div>  

<div class="col-lg-6 col-md-6 form-group">                  
                    <label for="inputCurrentPassword">Below or Under Knee </label>
                    <input type="text" class="form-control" id="datepicker" placeholder="<?php echo $rows['bouk'] ?>" name = "knee" disabled="" >                 
                </div>				
              </div>
            
                   
                
                   
               
			
              <div class="form-group text-right">
                <button type="submit" class="templatemo-blue-button" name = "apply">Apply New Limb</button>
                <button type="reset" class="templatemo-white-button">Reset</button>
              </div>                           
            </form>
          </div>
          <footer class="text-right">
            <p>Copyright &copy; 2084 Company Name 
            | Designed by <a href="http://www.templatemo.com" target="_parent">templatemo</a></p>
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