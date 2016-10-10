<?php
session_start();
include ('connection.php');
$admin = $_SESSION['adminname'];
$user = $_SESSION['username'];

if (($admin!="") || ($user!="")) {
    //include 'deluser.php';

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>LIMS Requests to be Confirmed</title>
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
                <li><a href="foot.php" class="active">To be Confirmed</a></li>
                <li><a href="pending.php">Pending Requests</a></li>
<!--                <li><a href="">Overview</a></li>
                <li><a href="login.html">Sign in form</a></li>-->
              </ul>
            </nav>
          </div>
        </div>
        <div class="templatemo-content-container">
		
		
		
					                    <div class="templatemo-content-widget no-padding">
            <div class="panel panel-default table-responsive">
              <table class="table table-striped table-bordered templatemo-user-table">
                <thead>
                  <tr>
                    <td><a href="" class="white-text templatemo-sort-by">Reg Num<span class="caret"></span></a></td>
                    <td><a href="" class="white-text templatemo-sort-by">Admission Number <span class="caret"></span></a></td>
                    <td><a href="" class="white-text templatemo-sort-by">Applied on <span class="caret"></span></a></td>
                    <td><a href="" class="white-text templatemo-sort-by">Requested By<span class="caret"></span></a></td>
                    <td>View</td>
                    
                  </tr>
                </thead>
                <tbody>
                    <?php   
                    
                                    if (isset($_POST['foot'])) {
                                        $tbl ="foot";
                                        $code = "J.F /";
                                        $num = "f_id";
                                        $_SESSION['regtbl'] = "memberfoot";
                                        $mtbl = "memberfoot";
                                        $_SESSION['tbl'] = "foot";
                                    }elseif (isset ($_POST['arm'])) {
                            $tbl = "arm";
                            $code = "A.A /";
                            $num = "arm_id";
                            $_SESSION['regtbl'] = "memberarm";
                            $mtbl = "memberarm";
                                        $_SESSION['tbl'] = "arm";
                        }  else {
                        $tbl = "other"; 
                        $code = "O.A /";
                        $num = "oa_id";
                        $_SESSION['regtbl'] = "memberother";
                        $mtbl = "memberother";
                                        $_SESSION['tbl'] = "other";
                        }
                    
                        
                       
                    //$rslt= mysql_query("select *  from $tbl where observation=''");
                        
                     $rslt= mysql_query("select * FROM $tbl WHERE confirm=''");
                 
                    while ($row = mysql_fetch_array($rslt)) {
                    ?>
                      <tr>
                          <td><?php echo $code." ".$row['regnum'] ?> </td>
                    <td><?php echo $row[$num] ?></td>
                    <td><?php echo $row['date'] ?></td>
                    <td><?php echo $row['crtby'].$row['crton']?></td>
              
                     <td>
                          <form name="edit" method="post" action="confirm.php">
                              <input type="hidden" name="hidid" value="<?php echo $row[$num] ?>">
                              <input type="hidden" name="hidcol" value="<?php echo $num ?>">
                         <button type="submit" name="confirm" class="templatemo-blue-button width-50">View</button>
                         </form>
                     </td>
                    
                
              
<!--                    <td>  <form name="delete" method="post">
                            <input type="hidden" name="hidid" value="<?php // echo $row[$num] ?>">
                            <button type="submit" name="delete" class="templatemo-blue-button width-50"  >Delete</button>
                    </form>
              </td>-->
                    
                  </tr>  
                        
                      <?php  
                      
                    }
                   
                    
                    ?>
                  
                                    
                </tbody>
              </table>    
            </div>                          
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
