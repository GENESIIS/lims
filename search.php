<?php
 if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
include ('connection.php');
$admin = $_SESSION['level'];
$user = $_SESSION['username'];

if ( ($admin=="")) {
    header("Location: login.php");
}


        include 'searchcode.php';
       
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
     <link href="css/error.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.16/jquery-ui.min.js"></script>
    
    
    <script>
$(function() {    // Makes sure the code contained doesn't run until
                  //     all the DOM elements have loaded

    $('#select').change(function(){
        $('.slct').hide();
        $('#' + $(this).val()).show();
    });

});

$(document).ready(function(){
    $("#advanced").click(function(){

        $('#last').show(200);
       
    });
});

</script>
    
    
    
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
                    <label for="inputFirstName">NIC Number</label>
                    <input type="text" class="form-control" name="nic" id="inputFirstName" placeholder="ID Number" value="<?php echo $nic ?>"> 
                        <div class="error"><span></span><?php echo $erno.$ernonic;   ?></div><?php //echo $erno ?>                 
                </div>
                <div class="col-lg-6 col-md-6 form-group">                  
                                    <label for="inputUsername">Search For </label>
                                    <select class="form-control" name = "num"  value="<?php echo $title   ?>">
                                         <option value="">--Select--</option>
                                    <option value="Foot">Foot</option>
                                    <option value="Arm">Arm</option>  
                                    <option value="Other">Other</option>  
<!--                                                 <option value="All">All</option> 
                <option value="Rev.">Rev..</option> 				-->
                                  </select>  
                                    <div class="error"><span></span><?php echo $ernum;   ?></div>
                                    
                                </div> 
                
              </div>
              
              <div class="form-group text-right">
                  <button type="submit" name="searchid" class="templatemo-blue-button">Search</button>
                <button type="reset" class="templatemo-white-button">Reset</button>
              </div> 
            
            </form>
            
            
            <form class="templatemo-login-form" method="post">
              <div class="row form-group">
                <div class="col-lg-6 col-md-6 form-group">                  
                                    <label for="inputUsername">Search For </label>
                                    <select class="form-control" name = "num" id="select" value="<?php echo $title   ?>">
                                         <option value="">--Select--</option>
                                    <option value="Foot">Foot</option>
                                    <option value="Arm">Arm</option>  
                                    <option value="Other">Other</option>  
<!--                                                 <option value="All">All</option> 
                <option value="Rev.">Rev..</option> 				-->
                                  </select>  

                                    <label for="inputFirstName"> <?php echo $ernum ?>  </label>
                                </div> 
                
              </div>
                <div class="row form-group slct" id="Foot" style="display: none">
                <div class="col-lg-6 col-md-6 form-group">                  
                                     <label for="inputConfirmNewPassword">Reg Number J F </label>
                    <input type="text" class="form-control" id="inputNote" rows="2" name = "regfoot" placeholder="" value="">
                                </div> 
                
              </div>
                 <div class="row form-group slct" id="Arm" style="display: none">
                <div class="col-lg-6 col-md-6 form-group">                  
                                     <label for="inputConfirmNewPassword">Reg Number A A</label>
                    <input type="text" class="form-control" id="inputNote" rows="2" name = "regarm" placeholder="" value="">
                                </div> 
                
              </div>
                
                 <div class="row form-group slct" id="Other"style="display: none">
                <div class="col-lg-6 col-md-6 form-group">                  
                                     <label for="inputConfirmNewPassword">Reg NUmber O A</label>
                    <input type="text" class="form-control" id="inputNote" rows="2" name = "regother" placeholder="" value="">
                                </div> 
                
              </div>
                
                <div class="row form-group slct" id="All"style="display: none">
                <div class="col-lg-6 col-md-6 form-group">                  
                                     <label for="inputConfirmNewPassword">Reg NUmber</label>
                    <input type="text" class="form-control" id="inputNote" rows="2" name = "all" placeholder="" value="">
                                </div> 
                
              </div>
                
                
                <div class="error"><span></span><?php echo $ernoid ;   ?></div>
              <div class="form-group text-right">
                  <button type="submit" name="search" class="templatemo-blue-button">Search</button>
                <button type="reset" class="templatemo-white-button">Reset</button>
              </div>                           
            </form>
            
            <form class="templatemo-login-form" method="post" action="districtsearch.php">
            <div class="row form-group">
                <div class="col-lg-4 col-md-4 form-group">                  
                    <label for="inputFirstName">District</label>
                   <select class="form-control" name = "district" required="Please select the District">
<!--                                     <option value="" disabled selected>--Select-- </option>-->
                                     <option value="<?php  //echo $district ?>"><?php  //echo $district ?></option>
                                     
                                           <?php 
                                        $sql = mysql_query("SELECT * FROM  district ORDER BY district ASC");
                                        
                                        while ($row = mysql_fetch_array($sql)){
                                        echo "<option value= ".$row['district'].">" . $row['district'] . "</option>";
                                        }
                                        ?>				
                              </select> 
                        <div class="error"><span></span><?php echo $erno.$ernonic;   ?></div><?php //echo $erno ?>                 
                </div>
                <div class="col-lg-6 col-md-6 form-group">                  
                                    <label for="inputUsername">Search For </label>
                                    <select class="form-control" name = "num"  value="<?php echo $title   ?>">
                                         <option value="">--Select--</option>
                                    <option value="memberfoot">Foot</option>
                                    <option value="memberarm">Arm</option>  
                                    <option value="memberother">Other</option>  
<!--                                                 <option value="All">All</option> 
                <option value="Rev.">Rev..</option> 				-->
                                  </select>  
                                    <div class="error"><span></span><?php echo $ernum;   ?></div>
                                    
                                </div> 
                
              </div>
              
              <div class="form-group text-right">
                  <button type="submit" name="searchdistrict" class="templatemo-blue-button">Search</button>
                <button type="reset" class="templatemo-white-button">Reset</button>
              </div> 
            
            </form>
            
            <input type="button" class="templatemo-blue-button" id="advanced" name="advance" value="Advance Search">
            <div id="last" style="display: none">
                <form class="templatemo-login-form" method="post" action="districtsearch.php">
            <div class="row form-group">
                <div class="col-lg-4 col-md-4 form-group">                  
                    <label for="inputFirstName">Cause</label>
                   <select class="form-control" name = "district" required="Please select the District">
                                   <option value="Accident">Accident</option>
<option value="Blood Clot">Blood Clot</option>
<option value="Bomb Blast">Bomb Blast</option>
<option value="Bone Disease">Bone Disease</option>
<option value="Burn Injury">Burn Injury</option>
<option value="Bus Accident">Bus Accident</option>
<option value="Cancer">Cancer</option>
<option value="Civil Commotion">Civil Commotion</option>
<option value="Chronic Ulcer">Chronic Ulcer</option>
<option value="Congenital Deformityty">Congenital Deformityty</option>
<option value="Corn">Corn</option>
<option value="Congenital Deformities">Congenital Deformities</option>
<option value="Crushed By  Stone">Crushed By  Stone</option>
<option value="Crushed by Log">Crushed by Log</option>
<option value="Crushed by Tree">Crushed by Tree</option>
<option value="Cut by sword">Cut by sword</option>
<option value="Diabetes">Diabetes</option>
<option value="Diabetic Wound">Diabetic Wound</option>
<option value="Disease">Disease</option>
<option value="Electric Shock">Electric Shock</option>
<option value="Factory Accident">Factory Accident.</option>
<option value="Fall From a Tree">Fall From a Tree</option>
<option value="Fall to a Well">Fall to a Well</option>
<option value="Filaria">Filaria</option>
<option value="From Birth">From Birth</option>
<option value="Gangrene">Gangrene</option>
<option value="Gangrenous Wound">Gangrenous Wound</option>
<option value="Gun Shot Injury">Gun Shot Injury</option>
<option value="Industrial Accident">Industrial Accident</option>
<option value="Infection">Infection</option>
<option value="Land Mine">Land Mine</option>
<option value="Leprosy">Leprosy</option>
<option value="Lorry Accident">Lorry Accident</option>
<option value="Miscellaneous">Miscellaneous</option>
<option value="Mortar Bomb Blast">Mortar Bomb Blast</option>
<option value="Motor Bike Accident">Motor Bike Accident</option>
<option value="Nail Prick">Nail Prick</option>
<option value="Osteomylites">Osteomylites</option>
<option value="Osteosarcoma">Osteosarcoma.</option>
<option value="Pressure Mine">Pressure Mine</option>
<option value="Road Accident">Road Accident.</option>
<option value="Rocket Bomb">Rocket Bomb</option>
<option value="Shell Blast">Shell Blast</option>
<option value="Snake Bite">Snake Bite</option>
<option value="Thorn Prick">Thorn Prick</option>
<option value="Tractor Accident">Tractor Accident.</option>
<option value="Train Accident">Train Accident</option>
<option value="Trap Gun">Trap Gun</option>
<option value="Vascular Disease">Vascular Disease</option>
<option value="Wound">Wound</option>
                       
                              </select> 
                        <div class="error"><span></span><?php echo $erno.$ernonic;   ?></div><?php //echo $erno ?>                 
                </div>
                <div class="col-lg-6 col-md-6 form-group">                  
                                    <label for="inputUsername">Search For </label>
                                    <select class="form-control" name = "num"  value="<?php echo $title   ?>">
                                         <option value="">--Select--</option>
                                    <option value="memberfoot">Foot</option>
                                    <option value="memberarm">Arm</option>  
                                    <option value="memberother">Other</option>  
<!--                                                 <option value="All">All</option> 
                <option value="Rev.">Rev..</option> 				-->
                                  </select>  
                                    <div class="error"><span></span><?php echo $ernum;   ?></div>
                                    
                                </div> 
                
              </div>
              
              <div class="form-group text-right">
                  <button type="submit" name="searchdistrict" class="templatemo-blue-button">Search</button>
                <button type="reset" class="templatemo-white-button">Reset</button>
              </div> 
            
            </form>
                
                  <form class="templatemo-login-form" method="post" action="districtsearch.php">
            <div class="row form-group">
                <div class="col-lg-4 col-md-4 form-group">                  
                    <label for="inputFirstName">Patient Name</label>
                       <input type="text" class="form-control" id="inputNote" rows="2" name = "district" placeholder="First name or Last name" value="">            
                       
                               
                        <div class="error"><span></span><?php echo $erno.$ernonic;   ?></div><?php //echo $erno ?>                 
                </div>
                <div class="col-lg-6 col-md-6 form-group">                  
                                    <label for="inputUsername">Search For </label>
                                    <select class="form-control" name = "num"  value="<?php echo $title   ?>">
                                         <option value="">--Select--</option>
                                    <option value="memberfoot">Foot</option>
                                    <option value="memberarm">Arm</option>  
                                    <option value="memberother">Other</option>  
<!--                                                 <option value="All">All</option> 
                <option value="Rev.">Rev..</option> 				-->
                                  </select>  
                                    <div class="error"><span></span><?php echo $ernum;   ?></div>
                                    
                                </div> 
                
              </div>
              
              <div class="form-group text-right">
                  <button type="submit" name="searchdistrict" class="templatemo-blue-button">Search</button>
                <button type="reset" class="templatemo-white-button">Reset</button>
              </div> 
            
            </form>
                
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

