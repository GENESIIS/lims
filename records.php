<?php
session_start();
include ('connection.php');
//$admin = $_SESSION['adminname'];
$user = $_SESSION['username'];


if (($user!="")) {
    $date = date("Y.m.d");
    
    if (isset($_POST['submit'])) {
        $from = $_POST['from'];
        $to = $_POST['to'];
        
        
        
        
    }

    
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Jaipur Foot workshop History Records</title>
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
  

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
<script type="text/javascript" src="http://code.jquery.com/jquery.min.js"></script>
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
                <li><a href="report.php" >Report</a></li>
                 <li><a href="record.php" class="active">Records</a></li>
<!--                <li><a href="">Dashboard</a></li>
                <li><a href="">Overview</a></li>
                <li><a href="login.html">Sign in form</a></li>-->
              </ul>
            </nav>
          </div>
        </div>
        <div class="templatemo-content-container">
          <div class="templatemo-content-widget white-bg">
            <h2 class="margin-bottom-10">Jaipur Foot workshop History Records</h2>
            <p></p>
            	<br><br>
			
			
			
		<div class="row">
			  <div class="col-lg-12 col-md-12 form-group "> 
			 <table class="table table-striped table-bordered templatemo-user-table">
                                    <thead>
                                      <tr>
                                        <td> <label for="inputLastName">Statics Report Form </label></td>

                                      </tr>

                                    </thead>
                                  </table> 
			  </div>
                </div>
			  
			 
            
           
			
			<h4 class="margin-bottom-10">Limbs Details</h4>
			
			<div class="row">
			  <div class="col-lg-12 col-md-12 form-group "> 
			
			 <table class="table table-striped table-bordered templatemo-user-table">
               
                <tbody>
                    <tr>
                        <th>Register Number</th>
                        <th>Admission Date</th>
                        <th>Confirm Date</th>
                    </tr>
                      <?php 
                      
            $sql1 = mysql_query("SELECT * FROM foot ORDER by `regnum` DESC");
           // $row1 = mysql_fetch_array($sql1);
            while ($row1 = mysql_fetch_array($sql1)) {
               
                ?>
                 <tr>
<!--                    <td> <label for="inputLastName"> No. Of Males Admitted  </label></td>-->
                    <td> <?php  echo "J/F ".$row1['regnum']  ?></td>
                    <td> <?php  echo $row1['date']  ?></td>
                  
                    <td> <?php  echo $row1['condate']  ?></td>
                  </tr>   
           <?php     
            }
            ?>
               
			               
                </tbody>
              </table> 
			  
			  </div>
			  </div>
			  
			<h4 class="margin-bottom-10">Register Details</h4>
			
			<div class="row">
			  <div class="col-lg-12 col-md-12 form-group "> 
			
			 <table class="table table-striped table-bordered templatemo-user-table">
               
                <tbody>
                     <tr>
                        <th>Register Number</th>
                        <th>Name</th>
                        <th>Cause</th>
                    </tr>
                  
                      <?php 
                      
            $sql1 = mysql_query("SELECT * FROM memberfoot ORDER by `regnum` DESC");
           // $row1 = mysql_fetch_array($sql1);
            while ($row1 = mysql_fetch_array($sql1)) {
               
                ?>
                 <tr>
<!--                    <td> <label for="inputLastName"> No. Of Males Admitted  </label></td>-->
                    <td> <?php  echo "J/F ".$row1['regnum']."/".$row1['month']."/".$row1['year']  ?></td>
                    <td> <?php  echo $row1['fname']." ".$row1['lname']  ?></td>
                    <td> <?php  echo $row1['cause']  ?></td>
                  </tr>   
           <?php     
            }
            ?>
               
			               
                </tbody>
              </table> 
			  
			  </div>
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

    
    <script>
        

 
    </script>
