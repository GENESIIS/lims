<?php
session_start();
include ('connection.php');
$admin = $_SESSION['adminname'];

if ($admin!="") {
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
                  <li><a href="user.php">User</a></li>
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
          
            <form  class="templatemo-login-form" name="adminuser" method="post">
			
			  <div class="row form-group">
                <div class="col-lg-6 col-md-6 form-group">                  
                    <label for="inputFirstName">Frist Name </label>
                   <input type="text" class="form-control" placeholder="Frist Name" name="fname" value="<?php echo $uname  ?>">    
<label for="inputFirstName"><?php echo $ernm  ?> </label>				   
                </div>
               <div class="col-lg-6 col-md-6 form-group">                  
                    <label for="inputFirstName">Last Name </label>
                   <input type="text" class="form-control" placeholder="Last Name" name="lname" value="<?php echo $uname  ?>">    
<label for="inputFirstName"><?php echo $ernm  ?> </label>				   
                </div>
				
              </div>
			
              <div class="row form-group">
                <div class="col-lg-6 col-md-6 form-group">                  
                    <label for="inputFirstName">User Name </label>
                   <input type="text" class="form-control" placeholder="User Name" name="username" value="<?php echo $uname  ?>">    
<label for="inputFirstName"><?php echo $ernm  ?> </label>				   
                </div>
                  <div class="col-lg-6 col-md-6 form-group">                  
                    <label for="inputLastName">Select User Level </label>
                  	<select class="form-control" name="level"><?php echo $erlvl  ?>
						<option value="0" disabled selected>Select User Level </option>
                    <option  name="admin" value="admin">Admin</option>
                    <option  name="admin"  value="user">User</option>                     
                  </select>  

<label for="inputLastName"><?php echo $erlvl  ?> </label>				  
                </div> 
			
               
				
              </div>
			  
			   <div class="row form-group">
                               <div class="col-lg-6 col-md-6 form-group">                  
                    <label for="inputLastName">Password </label>
                  <input type="password" class="form-control" placeholder="Password" name="pasword"> 

<label for="inputFirstName"><?php echo $pwer  ?>  </label>                 
                </div> 
                <div class="col-lg-6 col-md-6 form-group">                  
                    <label for="inputFirstName">ReEnter Password </label>
                   <input type="password" class="form-control" placeholder="ReEnter Password" name="rpw">    
<label for="inputFirstName"><?php echo $repwer  ?>  </label>				   
                </div>
                	
              </div>
			  
			  
          
			  
			 
			  
			   
			  
              <!--div class="row form-group">
                <div class="col-lg-6 col-md-6 form-group">                  
                    <label for="inputCurrentPassword">Current Password</label>
                    <input type="password" class="form-control highlight" id="inputCurrentPassword" placeholder="*********************">                  
                </div>                
              </div-->
             
			  
			 
			  
			   
			  
			
			  
			  
			
			   
            
                     <!--div class="row form-group">
                   <div class="col-lg-6 col-md-6 form-group">                   
                    <div class="margin-right-15 templatemo-inline-block">
                      <input type="radio" name="knee"  value="Below Knee" id="r4">
                      <label for="r4" class="font-weight-400"><span></span>Below Knee</label>
                    </div>
                    <div class="margin-right-15 templatemo-inline-block">
                      <input type="radio" name="knee"  value="Under Knee" id="r5" checked>
                      <label for="r5" class="font-weight-400"><span></span>Under Knee</label>
                    </div>

                </div>
              </div-->
                   
                
                   
               
				
				   
			  
			  
			  
              <!--div class="row form-group">
                <div class="col-lg-12 has-success form-group">                  
                    <label class="control-label" for="inputWithSuccess">Input with success</label>
                    <input type="text" class="form-control" id="inputWithSuccess">
                </div>
              </div>
              <div class="row form-group">
                <div class="col-lg-12 has-warning form-group">                  
                    <label class="control-label" for="inputWithWarning">Input with warning</label>
                    <input type="text" class="form-control" id="inputWithWarning">
                </div>
              </div>
              <div class="row form-group">
                <div class="col-lg-12 has-error form-group">                  
                    <label class="control-label" for="inputWithError">Input with error</label>
                    <input type="text" class="form-control" id="inputWithError">
                </div>
              </div>
              <div class="row form-group">
                <div class="col-lg-12 form-group">                   
                    <label class="control-label" for="inputNote">Note</label>
                    <textarea class="form-control" id="inputNote" rows="3"></textarea>
                </div>
              </div>
              <div class="row form-group">
                <div class="col-lg-6 col-md-6 form-group"> 
                  <label class="control-label templatemo-block">Single Selection Control</label>                 
                  <select class="form-control">
                    <option value="html">HTML</option>
                    <option value="plain">Plain Text</option>                      
                  </select>
                </div>
                <div class="col-lg-6 col-md-6 form-group">                  
                    <div class="templatemo-block margin-bottom-5">
                      <input type="checkbox" name="emailOptions" id="c1" value="new" checked> 
                      <label for="c1" class="font-weight-400"><span></span>Email me when new member sign up.</label> 
                    </div>
                    <div class="templatemo-block margin-bottom-5">
                      <input type="checkbox" name="emailOptions" id="c2" value="weekly">
                      <label for="c2" class="font-weight-400"><span></span>Weekly summary email</label> 
                    </div>
                </div> 
              </div>
              <div class="row form-group">
                <div class="col-lg-6 col-md-6 form-group"> 
                  <label class="control-label templatemo-block">Multiple Selection Control</label>                 
                  <select multiple class="templatemo-multi-select form-control" style="overflow-y: scroll;">
                    <option value="">Charts</option>
                    <option value="">Graphs</option>
                    <option value="">Icons</option>
                    <option value="">Repsonsive</option>  
                    <option value="">HTML5</option>
                    <option value="">CSS3</option>
                    <option value="">jQuery</option>                    
                  </select>
                </div>
                <div class="col-lg-6 col-md-6 form-group">
                  <div>
                    <label class="control-label templatemo-block">Email Option</label> 
                    <div class="templatemo-block margin-bottom-5">
                      <input type="radio" name="emailOptions" id="r1" value="html" checked>
                      <label for="r1" class="font-weight-400"><span></span>HTML Format</label>
                    </div>
                    <div class="templatemo-block margin-bottom-5">
                      <input type="radio" name="emailOptions" id="r2" value="plain">
                      <label for="r2" class="font-weight-400"><span></span>Plain Text</label>
                    </div>
                    <div class="templatemo-block margin-bottom-5">
                      <input type="radio" name="emailOptions" id="r3" value="rich">
                      <label for="r3" class="font-weight-400"><span></span>Rich Text</label>
                    </div>                    
                  </div>                  
                </div> 
              </div>
              <div class="row form-group">
                <div class="col-lg-12 form-group">                   
                    <div class="margin-right-15 templatemo-inline-block">
                      <input type="checkbox" name="server" id="c3" value="" checked>
                      <label for="c3" class="font-weight-400"><span></span>Server Status</label>
                    </div>
                    <div class="margin-right-15 templatemo-inline-block">                      
                      <input type="checkbox" name="member" id="c4" value="">
                      <label for="c4" class="font-weight-400"><span></span>Member Status</label>
                    </div>
                    <div class="margin-right-15 templatemo-inline-block">
                      <input type="checkbox" name="expired" id="c5" value="">
                      <label for="c5" class="font-weight-400"><span></span>Expired Members</label>                      
                    </div>
                </div>
              </div>
              <div class="row form-group">
                <div class="col-lg-12 form-group">                   
                    <div class="margin-right-15 templatemo-inline-block">
                      <input type="radio" name="radio" id="r4" value="">
                      <label for="r4" class="font-weight-400"><span></span>Bootstrap</label>
                    </div>
                    <div class="margin-right-15 templatemo-inline-block">
                      <input type="radio" name="radio" id="r5" value="" checked>
                      <label for="r5" class="font-weight-400"><span></span>Foundation</label>
                    </div>
                    <div class="margin-right-15 templatemo-inline-block">
                      <input type="radio" name="radio" id="r6" value="">
                      <label for="r6" class="font-weight-400"><span></span>Skeleton</label>
                    </div>
                </div>
              </div>
              <div class="row form-group">
                <div class="col-lg-12">
                  <label class="control-label templatemo-block">File Input</label> 
                
                  <input type="file" name="fileToUpload" id="fileToUpload" class="filestyle" data-buttonName="btn-primary" data-buttonBefore="true" data-icon="false">
                  <p>Maximum upload size is 5 MB.</p>                  
                </div>
              </div>
              <div class="form-group text-right">
                <button type="submit" class="templatemo-blue-button">Update</button>
                <button type="reset" class="templatemo-white-button">Reset</button>
              </div-->      

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
