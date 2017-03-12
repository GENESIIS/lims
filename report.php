<?php
session_start();
include ('connection.php');
//$admin = $_SESSION['adminname'];
$user = $_SESSION['username'];

$from=$to="";

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
    <title>Jaipur Foot workshop Report</title>
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
                <li><a href="report.php" class="active">Report</a></li>
                 <li><a href="records.php">Records</a></li>
<!--                <li><a href="">Dashboard</a></li>
                <li><a href="">Overview</a></li>
                <li><a href="login.html">Sign in form</a></li>-->
              </ul>
            </nav>
          </div>
        </div>
        <div class="templatemo-content-container">
          <div class="templatemo-content-widget white-bg">
            <h2 class="margin-bottom-10">Jaipur Foot workshop Report</h2>
            <p></p>
            <form  class="templatemo-login-form" method="post" enctype="multipart/form-data">
                
                <div class="row form-group">
                    <div class="col-lg-6 col-md-6 form-group">                  
                        <label for="inputLastName">Date </label>
                        <input type="text" class="form-control" placeholder="From" name = "from" id="datepicker" >                  
                    </div> 
                        <div class="col-lg-6 col-md-6 form-group">                  
                        <label for="inputLastName">Date </label>
                        <input type="text" class="form-control" placeholder="To" name = "to" id="datepicker1" >                  
                    </div> 
              </div>
                
                <div class="form-group text-right" id="save">
                  
                <button type="submit" class="templatemo-blue-button" name = "submit">Submit</button>
                <button type="reset" class="templatemo-white-button">Reset</button>
              </div>
                
            </form>
			
			<br><br>
			
			
			
			  <div class="row">
			  <div class="col-lg-12 col-md-12 form-group "> 
			
			 <table class="table table-striped table-bordered templatemo-user-table">
               
                <thead>
                  <tr>
                    <td> <label for="inputLastName">Statics Report Form </label></td>
                    <td><?php echo $from ?></td>
                    <td> <label for="inputLastName">to</label></td>
                    <td><?php echo $to ?></td>
                  
                  </tr>
             
                 
                                     
                </thead>
              </table> 
			  
			  </div>
			  </div>
			  
			 
            
           
			
			<h4 class="margin-bottom-10">Foot Department</h4>
			
			<div class="row">
			  <div class="col-lg-12 col-md-12 form-group "> 
			
			 <table class="table table-striped table-bordered templatemo-user-table">
               
                <tbody>
                  <tr>
                    <td> <label for="inputLastName"> No. Of Males Admitted  </label></td>
                    <td><?php 
            $sql1 = mysql_query("select count(regnum)as tot from memberfoot where date between '$from' and '$to' and sex = 'male'");
            $row1 = mysql_fetch_array($sql1);
            echo $row1['tot'];
            ?></td>
                   
                  
                  </tr>
				  
				    <tr>
                    <td> <label for="inputLastName"> No Of Females Admitted </label></td>
                    <td>  <?php 
            $sql2 = mysql_query("select count(regnum)as tot from memberfoot where date between '$from' and '$to' and sex = 'Female'");
            $row2 = mysql_fetch_array($sql2);
            echo $row2['tot'];
            ?></td>
                   
                  
                  </tr>
             
                   <tr>
                    <td> <label for="inputLastName">  Totally Admitted </label></td>
                    <td>  <?php 
            echo $row1['tot']+$row2['tot'] ;
            ?></td>
                   
                  
                  </tr>
				  
				   <tr>
                    <td> <label for="inputLastName">  A/K Prostheses </label></td>
                    <td>   <?php 
            $sql3 = mysql_query("SELECT COUNT(`regnum`) as ak FROM memberfoot WHERE date between '$from' and '$to' AND `aouk`='Above Knee'");
            $row3 = mysql_fetch_array($sql3);
            echo $row3['ak'];
            ?></td>
                   
                  
                  </tr>
				  
				   <tr>
                    <td> <label for="inputLastName"> B/K Prostheses </label></td>
                    <td>    <?php 
            $sql4 = mysql_query("SELECT COUNT(`regnum`) as bk FROM memberfoot WHERE date between '$from' and '$to' AND `aouk`='Below Knee'");
            $row4 = mysql_fetch_array($sql4);
            echo $row4['bk'];
            ?></td>
                   
                  
                  </tr>
				  
				   <tr>
                    <td> <label for="inputLastName"> B/K Both Legs </label></td>
                    <td>     <?php 
            $sql5 = mysql_query("SELECT COUNT(`regnum`) as bk FROM memberfoot WHERE date between '$from' and '$to' AND `aouk`='Below Knee' and whichleg = 'both'");
            $row5 = mysql_fetch_array($sql5);
            echo $row5['bk'];
            ?></td>
                   
                  
                  </tr>
				  
				    <tr>
                    <td> <label for="inputLastName"> A/K Both Legs </label></td>
                    <td>     <?php 
            $sql6 = mysql_query("SELECT COUNT(`regnum`) as bk FROM memberfoot WHERE date between '$from' and '$to' AND `aouk`='Above Knee' and whichleg = 'both'");
            $row6 = mysql_fetch_array($sql6);
            echo $row6['bk'];
            ?></td>
                   
                  
                  </tr>
				  
				   <tr>
                    <td> <label for="inputLastName"> Total Limbs </label></td>
                    <td>      <?php 
            echo $row5['bk'] + $row6['bk'];
            ?></td>
                   
                  
                  </tr>
                                     
                </tbody>
              </table> 
			  
			  </div>
			  </div>
			  <h4 class="margin-bottom-10">No. Fitted and Discharged</h4>
			  
			   <div class="row">
			  <div class="col-lg-12 col-md-12 form-group "> 
			
			 <table class="table table-striped table-bordered templatemo-user-table">
               
                <tbody>
                  <tr>
                    <td> <label for="inputLastName">A/K Limbs </label></td>
                    <td> <?php 
             
            //$sql7 = mysql_query("SELECT COUNT(f_id) as ak FROM foot WHERE type like 'Above Knee' 
                //and regnum IN (SELECT regnum FROM foot WHERE `condate` BETWEEN '$from' AND '$to' AND `confirm`='confirmed')");
             $sql7 = mysql_query("SELECT COUNT(f_id) as ak FROM foot WHERE `condate` BETWEEN '$from' AND '$to' AND type like '%A/K%' AND `confirm`='confirmed'");
            $row7 = mysql_fetch_array($sql7);
            echo $row7['ak'];
            ?></td>
                    
                  
                  </tr>
				  
				    <tr>
                    <td> <label for="inputLastName">B/K Limbs </label></td>
                    <td> <?php 
            $sql8 = mysql_query("SELECT COUNT(f_id) as ak FROM foot WHERE `condate` BETWEEN '$from' AND '$to' 
                AND type like '%B/K%' AND `confirm`='confirmed'");
            $row8 = mysql_fetch_array($sql8);
            echo $row8['ak'];
            ?></td>
                    
                  
                  </tr>
				  
				      <tr>
                    <td> <label for="inputLastName">Total Fitted</label></td>
                    <td>  <?php 
            echo $row7['ak'] + $row8['ak'];
            ?></td>
                    
                  
                  </tr>
             
                 
                                     
                </tbody>
              </table> 
			  
			  </div>
			  </div>
			  
			  
			   <h4 class="margin-bottom-10">According to LIMB Type</h4>
			   
			    <div class="row">
			  <div class="col-lg-12 col-md-12 form-group "> 
			
			 <table class="table table-striped table-bordered templatemo-user-table">
               
                <tbody>
				
				 <?php 
            //$sql9 = mysql_query("SELECT type,COUNT(f_id) from foot where  GROUP BY type");
             $sql9 = mysql_query("SELECT type,COUNT(f_id) from foot where `condate` BETWEEN '$from' AND '$to' GROUP BY type");
            
            
            while ($row9 = mysql_fetch_array($sql9)) {
				
				?>
				 <tr>


                   
                    <td><label for="inputLastName"><?php echo $row9['type']."  -  " ?></label></td>
                   
                    <td><?php echo $row9['COUNT(f_id)'] ?></td>
                  
                  </tr>
				
				
				
				<?php
                //echo $row9['type']."  -  ";
           // echo $row9['COUNT(f_id)'];
            }
            ?>
                  
             
                 
                                     
                </tbody>
              </table> 
			  
			  </div>
			  </div>
            
			<h4 class="margin-bottom-10">Reason wise Indications For Amputation</h4>
			   
			    <div class="row">
			  <div class="col-lg-12 col-md-12 form-group "> 
			
			 <table class="table table-striped table-bordered templatemo-user-table">
               
                <tbody>
				
				 <?php 
            //$sql9 = mysql_query("SELECT type,COUNT(f_id) from foot where  GROUP BY type");
             $sql10 = mysql_query("SELECT cause,COUNT(regnum) from memberfoot
                where regnum IN(select regnum FROM foot WHERE `condate` BETWEEN '$from' AND '$to' AND `confirm`='confirmed') GROUP BY cause");
            
            
           while ($row10 = mysql_fetch_array($sql10)) {
				
				?>
				 <tr>


                   
                    <td><label for="inputLastName"><?php echo $row10['cause']."  -  " ?></label></td>
                   
                    <td><?php echo $row10['COUNT(regnum)'] ?></td>
                  
                  </tr>
				
				
				
				<?php
                //echo $row9['type']."  -  ";
           // echo $row9['COUNT(f_id)'];
            }
            ?>
                  
             
                 
                                     
                </tbody>
              </table> 
			  
			  </div>
			  </div>
			  
			  
			  <h4 class="margin-bottom-10"> District Wise Indications For Amputation</h4>
			   
			    <div class="row">
			  <div class="col-lg-12 col-md-12 form-group "> 
			
			 <table class="table table-striped table-bordered templatemo-user-table">
               
                <tbody>
				
				 <?php 
            //$sql9 = mysql_query("SELECT type,COUNT(f_id) from foot where  GROUP BY type");
             $sql11 = mysql_query("SELECT district,COUNT(regnum) from memberfoot
                where regnum IN(select regnum FROM foot WHERE `condate` BETWEEN '$from' AND '$to' AND `confirm`='confirmed') GROUP BY district");
            
            
          while ($row11 = mysql_fetch_array($sql11)) {
				
				?>
				 <tr>


                   
                    <td><label for="inputLastName"><?php echo $row11['district'] ?></label></td>
                   
                    <td><?php echo $row11['COUNT(regnum)'] ?></td>
                  
                  </tr>
				
				
				
				<?php
                //echo $row9['type']."  -  ";
           // echo $row9['COUNT(f_id)'];
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