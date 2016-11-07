<?php
session_start();
include ('connection.php');
$admin = $_SESSION['level'];
$user = $_SESSION['username'];


if (($admin!="") || ($user!="")) {
    
    $pendingf = mysql_query("select count(f_id) as total from foot where confirm=''");
    $row1 = mysql_fetch_assoc($pendingf);
     $num1 = $row1['total'];
    
     $pendingarm = mysql_query("select count(arm_id) as total from arm where confirm=''");
    $row2 = mysql_fetch_assoc($pendingarm);
     $num2 = $row2['total'];
      
     
      $pendingo = mysql_query("select count(oa_id) as total from other where confirm=''");
    $row3 = mysql_fetch_assoc($pendingo);
     $num3 = $row3['total'];
     
    
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">  
    <title>LIMS - Limb Requests</title>
    <meta name="description" content="">
    <meta name="author" content="templatemo">
    <!-- 
    Visual Admin Template
    http://www.templatemo.com/preview/templatemo_455_visual_admin
    -->
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

  </head>
  <body>  
    <!-- Left column -->
    <div class="templatemo-flex-row">
      <div class="templatemo-sidebar">
        <?php  

include 'menu.php';


		?>
      </div>
      <!-- Main content --> 
      <div class="templatemo-content col-1 light-gray-bg">
        <div class="templatemo-top-nav-container">
          <div class="row">
            <nav class="templatemo-top-nav col-lg-12 col-md-12">
              <ul class="text-uppercase">
                <!--li><a href="" class="active">Admin panel</a></li-->
                <li><a href="">Foot</a></li>
                <li><a href="">Arm</a></li>
                <li><a href="">Other </a></li>
              </ul>  
            </nav> 
          </div>
        </div>
        <div class="templatemo-content-container">
                   
          <!-- Second row ends -->
          <div class="templatemo-flex-row flex-content-row">
            <div class="templatemo-content-widget white-bg col-2">
             
             
                
               
                  <h2 class="media-heading text-uppercase blue-text">Limb Requests To be Confirmed</h2>
                     
             
                     
            </div>
            
           
          </div>
		  
		     <div class="templatemo-flex-row flex-content-row">
          <div class="templatemo-content-widget white-bg col-1 text-center templatemo-position-relative">
              <i class="fa fa-times"></i>
              <img src="images/clock-png-31.png" alt="Bicycle" class="img-circle img-thumbnail margin-bottom-30">
              <h2 class="text-uppercase blue-text margin-bottom-5"><?php echo $num1  ?></h2>
              <h3 class="text-uppercase margin-bottom-70">Pending Foot Requests</h3>
            
                <div class="view-img-btn-wrap">
                    <form name="foot" method="post" action="foot.php">
                        <button type="submit" name="foot" value="View" class=" templatemo-blue-button">View</button>
                    </form>
<!--                <a href="" class=" templatemo-blue-button">View</a>  -->
              </div>
               
                              
             
            </div>
            <div class="templatemo-content-widget white-bg col-1 text-center templatemo-position-relative">
              <i class="fa fa-times"></i>
             <img src="images/clock-png-31.png" alt="Bicycle" class="img-circle img-thumbnail margin-bottom-30">
              <h2 class="text-uppercase blue-text margin-bottom-5"><?php echo $num2  ?></h2>
              <h3 class="text-uppercase margin-bottom-70">Pending Arm Requests</h3>
            
                <div class="view-img-btn-wrap">
                <form name="foot" method="post" action="foot.php">
                        <button type="submit" name="arm" value="View" class=" templatemo-blue-button">View</button>
                    </form> 
              </div>
               
                              
             
            </div>
             <div class="templatemo-content-widget white-bg col-1 text-center templatemo-position-relative">
              <i class="fa fa-times"></i>
              <img src="images/clock-png-31.png" alt="Bicycle" class="img-circle img-thumbnail margin-bottom-30">
              <h2 class="text-uppercase blue-text margin-bottom-5"><?php echo $num3  ?></h2>
              <h3 class="text-uppercase margin-bottom-70">Pending Other Requests</h3>
            
                <div class="view-img-btn-wrap">
                <form name="foot" method="post" action="foot.php">
                        <button type="submit" name="other" value="View" class=" templatemo-blue-button">View</button>
                    </form>  
              </div>
               
                              
             
            </div>
          </div>
                    
          <footer class="text-right">
           
          </footer>         
        </div>
      </div>
    </div>
    
    <!-- JS -->
    <script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>      <!-- jQuery -->
    <script type="text/javascript" src="js/templatemo-script.js"></script>      <!-- Templatemo Script -->
    <script>
      $(document).ready(function(){
        // Content widget with background image
        var imageUrl = $('img.content-bg-img').attr('src');
        $('.templatemo-content-img-bg').css('background-image', 'url(' + imageUrl + ')');
        $('img.content-bg-img').hide();        
      });
    </script>
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
