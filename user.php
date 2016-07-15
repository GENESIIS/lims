<?php
session_start();
include ('connection.php');
$admin = $_SESSION['adminname'];

if ($admin!="") {
    include 'deluser.php';

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>LIMS User</title>
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
                <li><a href="user.php" class="active">User</a></li>
                <li><a href="add_user01.php">Add User</a></li>
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
                    <td><a href="" class="white-text templatemo-sort-by"># <span class="caret"></span></a></td>
                    <td><a href="" class="white-text templatemo-sort-by">User Name <span class="caret"></span></a></td>
                    <td><a href="" class="white-text templatemo-sort-by">User Level <span class="caret"></span></a></td>
                    <td><a href="" class="white-text templatemo-sort-by">Created <span class="caret"></span></a></td>
                    <td>Edit</td>
                    <td>Delete</td>
                  </tr>
                </thead>
                <tbody>
                    <?php   
                    
                    $rslt= mysql_query("select * from user");
                    while ($row = mysql_fetch_array($rslt)) {
                    ?>
                      <tr>
                          <td><?php echo $row['userid'] ?> </td>
                    <td><?php echo $row['username'] ?></td>
                    <td><?php echo $row['userlevel'] ?></td>
                    <td><?php echo $row['crtby'].$row['crton']?></td>
               
                     <td>
                          <form name="edit" method="post" action="edit_user01.php">
                               <input type="hidden" name="hidid" value="<?php echo $row['userid'] ?>">
                         <button type="submit" name="edit" class="templatemo-blue-button width-50">Edit</button>
                         </form>
                     </td>
                    
                
              
                    <td>  <form name="delete" method="post">
                            <input type="hidden" name="hidid" value="<?php echo $row['userid'] ?>">
                            <button type="submit" name="delete" class="templatemo-blue-button width-50"  >Delete</button>
                    </form>
              </td>
                    
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
