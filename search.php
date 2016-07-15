<?php
session_start();
include ('connection.php');
$admin = $_SESSION['adminname'];
$user = $_SESSION['username'];



    
    if (isset($_POST['search'])) {
        include 'searchcode.php';
       
    }
    
    



?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>LIMS - Search</title>
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

if($admin!="" )
	
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


		?>
      </div>
      <!-- Main content -->
      <div class="templatemo-content col-1 light-gray-bg">
        <div class="templatemo-top-nav-container">
          <div class="row">
            <nav class="templatemo-top-nav col-lg-12 col-md-12">
              <ul class="text-uppercase">
                <li><a href="" class="active">Search</a></li>
<!--                <li><a href="">Dashboard</a></li>
                <li><a href="">Overview</a></li>-->
<!--                <li><a href="login.html">Sign in form</a></li>-->
              </ul>
            </nav>
          </div>
        </div>
        <div class="templatemo-content-container">
          <div class="templatemo-content-widget white-bg">
            <h2 class="margin-bottom-10">Search</h2>
<!--            <p>Here goes another form and form controls.</p>-->
            
            <form class="templatemo-login-form" method="post">
              <div class="row form-group">
                <div class="col-lg-4 col-md-4 form-group">                  
                    <label for="inputFirstName">Reg number JF</label>
                    <input type="text" class="form-control" name="num" id="inputFirstName" placeholder="Reg Num" value="<?php echo $num ?> "> <?php echo $ernum ?>                 
                </div>
                
              </div>
              
              <div class="form-group text-right">
                  <button type="submit" name="search" class="templatemo-blue-button">Search</button>
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
    <script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>        <!-- jQuery -->
    <script type="text/javascript" src="js/bootstrap-filestyle.min.js"></script>  <!-- http://markusslima.github.io/bootstrap-filestyle/ -->
    <script type="text/javascript" src="js/templatemo-script.js"></script>        <!-- Templatemo Script -->
  </body>
</html>


<?php 

