<?php
if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 

include ('connection.php');
 $admin = $_SESSION['level'];

$erlvl=$ernm= $uname="";

if (($admin=="admin")||($admin=="super")) {
    include 'adusercode.php';

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>LIMS Add User</title>
    <meta name="description" content="">
    <meta name="author" content="templatemo">
  
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,700' rel='stylesheet' type='text/css'>
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/templatemo-style.css" rel="stylesheet">
      <link href="css/error.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <style>
    .form-group.required .control-label:after { 
   content:"*";
   color:red;
}
    </style>
    
  </head>
  <body>
    <!-- Left column -->
    <div class="templatemo-flex-row">
      <div class="templatemo-sidebar">
        <?php  
 if ($admin=="super") {
            include 'smenue.php';
        }elseif ($admin=="admin") {
            include 'menu.php';
            }  else {
              include 'menuuser.php';  
            }


		?>
      </div>
      <!-- Main content -->
      <div class="templatemo-content col-1 light-gray-bg">
        <div class="templatemo-top-nav-container">
          <div class="row">
            <nav class="templatemo-top-nav col-lg-12 col-md-12">
              <ul class="text-uppercase">
                  <?php  
          if ($admin=="super") {
              ?>
         <li><a href="user.php">User</a></li>
        <?php          
          }  else {
          ?>
         <li><a href="user_admin.php">User</a></li>
              <?php    
          }
                  ?>
                  
                  
                <li><a href="add_user01.php"class="active" >Add User</a></li>
                <!--li><a href="">Dashboard</a></li>
                <li><a href="">Overview</a></li>
                <li><a href="login.html">Sign in form</a></li-->
              </ul>
            </nav>
          </div>
        </div>
        <div class="templatemo-content-container">
		
		
		
 <div class="templatemo-content-widget white-bg">
          <h2 class="margin-bottom-10">Add new User</h2>
          <h2 class="margin-bottom-10"></h2>
            <form  class="templatemo-login-form" name="adminuser" method="post">
			
			  <div class="row form-group required ">
                <div class="col-lg-6 col-md-6 form-group">                  
                    <label for="inputFirstName" class='control-label'>Frist Name</label>
                    <input type="text" class="form-control" placeholder="Frist Name" name="fname" value="<?php echo $fname  ?>" required="required">    
            <div class="error"><span></span><?php echo $erfnm ?></div>				   
                </div>
               <div class="col-lg-6 col-md-6 form-group required">                  
                    <label for="inputFirstName" class='control-label'>Last Name </label>
                    <input type="text" class="form-control" placeholder="Last Name" name="lname" value="<?php echo $lname  ?>" required="">    
<div class="error"><span></span><?php echo $erlnm  ?></div>		   
                </div>
				
              </div>
			
              <div class="row form-group">
                <div class="col-lg-6 col-md-6 form-group required">                  
                    <label for="inputFirstName" class='control-label'>User Name </label>
                    <input type="text" class="form-control" placeholder="User Name" name="username" value="<?php echo $uname  ?>" required="">    
                   <div class="error"><span></span><?php echo $erunm  ?></div>
                </div>
                  
                  <div class="col-lg-6 col-md-6 form-group required">                  
                    <label for="inputLastName" class='control-label'>User Level </label>
                  	<select class="form-control" name="lvl"><?php echo $erlvl  ?>
						<option value="<?php echo $level ?>" selected><?php echo $level ?></option>
                    <option  name="admin" value="admin">Admin</option>
                    <option  name="admin"  value="user">User</option>                     
                  </select>  
                        <div class="error"><span></span><?php echo $erlvl ?></div>
				  
                </div> 
			
               
				
              </div>
			  
			   <div class="row form-group ">
                               <div class="col-lg-6 col-md-6 form-group required">                  
                    <label for="inputLastName" class='control-label'>Password </label>
                    <input type="password" class="form-control" placeholder="Password" name="pas" value="<?php echo $password  ?>" required=""> 
                         <div class="error"><span></span><?php echo $pwer ?></div>
                </div> 
                <div class="col-lg-6 col-md-6 form-group required">                  
                    <label for="inputFirstName" class='control-label'>Confirm Password </label>
                    <input type="password" class="form-control" placeholder="ReEnter Password" name="rpw" required="">    
                   <div class="error"><span></span><?php echo $repwer ?></div>
                 <div class="text-right  form-group required"><label for="inputFirstName" class='control-label'>Required fields </label>
               
              </div> 
                </div>
                	
              </div>
		 

                <div class="form-group text-right">
                <button type="submit" name="register" class="templatemo-blue-button">Register</button>
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

}  else {
    ?>
<script language ="javascript">
    window.location = "login.php";
    </script>

<?php
}

?>
