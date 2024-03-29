<?php
session_start();
include ('connection.php');
$user = $_SESSION['adminname'];

if ($user!="") {
    include 'adusercode.php';

?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">  
	    <title>LIMS User</title>
        <meta name="description" content="">
        <meta name="author" content="vebdesign">
      
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
	<body class="light-gray-bg">
		<div class="templatemo-content-widget templatemo-login-widget white-bg">
			<header class="text-center">
	          <div class="square"></div>
	          <h1>LIMS Add User</h1>
	        </header>
	        <form  class="templatemo-login-form" name="adminuser" method="post">
	        	<div class="form-group">
	        		<div class="input-group">
		        		<div class="input-group-addon"><i class="fa fa-user fa-fw"></i></div>	        		
		              	<input type="text" class="form-control" placeholder="User Name" name="username" value="<?php echo $uname  ?>">         
		          	</div>	<?php echo $ernm  ?>  
	        	</div>
	        	<div class="form-group">
	        		<div class="input-group">
		        		<div class="input-group-addon"><i class="fa fa-key fa-fw"></i></div>	        		
		              	<input type="password" class="form-control" placeholder="Password" name="pasword">         
		          	</div>	<?php echo $pwer  ?>  
	        	</div>	 
                        <div class="form-group">
	        		<div class="input-group">
		        		<div class="input-group-addon"><i class="fa fa-key fa-fw"></i></div>	        		
		              	<input type="password" class="form-control" placeholder="ReEnter Password" name="rpw">          
		          	</div>	<?php echo $repwer  ?> 
	        	</div>

				<div class="form-group">
	        		<div class="input-group">
		        		<div class="input-group-addon"><i class="fa fa-users fa-fw"></i></div>	        		
		              	<select class="form-control" name="level"><?php echo $erlvl  ?>
						<option value="0" disabled selected>Select User Level </option>
                    <option  name="admin" value="admin">Admin</option>
                    <option  name="admin"  value="user">User</option>                     
                  </select>       
		          	</div>	<?php echo $erlvl  ?>
	        	</div>					
	          	<div class="form-group">
				    <div class="checkbox squaredTwo">
				        <input type="checkbox" id="c1" name="cc" />
						<label for="c1"><span></span>Remember me</label>
				    </div>				    
				</div>
				<div class="form-group">
					<button type="submit" name="register" class="templatemo-blue-button width-100">Register</button>
				</div>
	        </form>
		</div>
		<!--div class="templatemo-content-widget templatemo-login-widget templatemo-register-widget white-bg">
			<p>Not a registered user yet? <strong><a href="#" class="blue-text">Sign up now!</a></strong></p>
		</div-->
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