<?php
session_start();
include ('connection.php');
$admin = $_SESSION['level'];
$user = $_SESSION['username'];


if (($user!="")) {
    $date = date("Y.m.d");
    include 'alreadymemcode.php';

    
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Jaipur Foot workshop Registration form</title>
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


//$(document).ready(function(){
//    $("#back").click(function(){
//        $("#reg").show(500);
//        $('#last').show(500);
//    });
//});

$(document).ready(function(){
    $("#ft").click(function(){
        
//        $("#reg").hide(1000);
        $('#last').show(500);
        $('#foot').show();
        $('#save').show();
        $('#arms').hide();
        $('#othr').hide();
    });
});
$(document).ready(function(){
    $("#arm").click(function(){
        
//        $("#reg").hide(1000);
        $('#last').show(500);
        $('#arms').show();
        $('#save').show();
        $('#foot').hide();
        $('#othr').hide();
    });
});
$(document).ready(function(){
    $("#other").click(function(){
        
//        $("#reg").hide(1000);
        $('#last').show(500);
        $('#othr').show();
        $('#arms').hide();
        $('#foot').hide();
        $('#save').show();
        
    });
});



jQuery(function() {
    jQuery( "#datepicker" ).datepicker({ dateFormat: 'yy-mm-dd',changeYear: true,changeMonth:true, yearRange : '-90:yy+1'});
    
});
jQuery(function() {
    jQuery( "#datepicker1" ).datepicker({ dateFormat: 'yy-mm-dd',changeYear: true,changeMonth:true});
    
});
jQuery(function() {
    jQuery( "#datepicker2" ).datepicker({ dateFormat: 'yy-mm-dd',changeYear: true,changeMonth:true, yearRange : '-90:yy+1'});
    
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
                <li><a href="registration.php" >New Registration</a></li>
				<li><a href="alreadymem.php" class="active">Old Registration</a></li>
<!--                <li><a href="">Dashboard</a></li>
                <li><a href="">Overview</a></li>
                <li><a href="login.html">Sign in form</a></li>-->
              </ul>
            </nav>
          </div>
        </div>
        <div class="templatemo-content-container">
          <div class="templatemo-content-widget white-bg">
            <h2 class="margin-bottom-10">Jaipur Foot workshop Registration form</h2>
            <p></p>
             <form  class="templatemo-login-form" method="post" enctype="multipart/form-data">
                <div id="reg">
                  <div class="row form-group">
                      <div class="col-lg-4 col-md-4 form-group">                  
                        <label for="inputLastName">Reg Num </label>
                        <input type="text" class="form-control" placeholder="Registration Num" name = "rnumber"  value="<?php echo $regnumber ?>">                  
                    </div> 
                    <div class="col-lg-4 col-md-4 form-group">                  
                        <label for="inputLastName">Date </label>
                        <input type="date" class="form-control" id="datepicker2" placeholder="<?php echo date("Y.m.d") ?>" name = "date"  >                  
                    </div> 
                        <div class="col-lg-4 col-md-4 form-group">                  
                         <label for="inputLastName">District </label>
                                 <select class="form-control" name = "district">
                                     
                                     <option value="<?php  echo $district ?>"><?php  echo $district ?></option>
                                           <?php 
                                        $sql = mysql_query("SELECT * FROM  district ORDER BY district ASC");
                                        while ($row = mysql_fetch_array($sql)){
                                        echo "<option value= ".$row['district'].">" . $row['district'] . "</option>";
                                        }
                                        ?>				
                              </select> 
                  <label for="inputFirstName"> <?php echo $erdis  ?> </label>
                    
                 </div>
              </div>
                    
                    
              <div class="row form-group">
			  <div class="col-lg-12  form-group">
                <div class="col-lg-2 col-md-2 form-group">                  
                    <label for="inputUsername">Title</label>
                     <select class="form-control" name = "title" value="<?php echo $title   ?>">
                         <option value="<?php echo $title ?>"selected><?php echo $title ?></option>
                    <option value="Mr">Mr.</option>
                    <option value="Mrs">Mrs.</option>  
					<option value="Miss">Miss.</option>  
				<option value="Master">Master.</option> 
<option value="Rev.">Rev..</option> 				
                  </select>  
                    
                    <label for="inputFirstName"> <?php echo $ertil  ?> </label>
                </div>
                              
                               
				
				<div class="col-lg-4 col-md-4 form-group">                  
                    <label for="inputUsername">First Name</label>
                    <input type="text" class="form-control" id="inputUsername" placeholder="First Name" name = "fname" value="<?php echo $fname   ?>" required="">   
                    <label for="inputFirstName"> <?php echo $erfnsme  ?> </label>
                </div>
				
				 
                <div class="col-lg-6 col-md-6 form-group">                  
                    <label for="inputEmail">Last Name</label>
                    <input type="text" class="form-control" id="inputEmail" placeholder="Last name" name = "lname" required="" value="<?php echo $lname   ?>"> 
                  
                </div> 
				
				</div>
              </div>
			  
			    <div class="row form-group">
                <div class="col-lg-12 form-group">                   
                    <label class="control-label" for="inputNote">Address</label>
                    <textarea class="form-control" id="inputNote" rows="3" name = "address" placeholder="Address..." required=""><?php echo $address   ?></textarea>
                    
                     <label for="inputFirstName"> <?php echo $erad  ?> </label>
                </div>
              </div>
                    
                    
                     <div class="row form-group">
                <div class="col-lg-4 col-md-4 form-group">                  
                    <label for="inputFirstName">ID Number </label>
                    <input type="text" class="form-control" id="inputFirstName" placeholder="NIC num" name = "nic" value="<?php echo $nic   ?>">  
                    <label for="inputFirstName"> <?php echo $ersge ?> </label>
                </div>
                <div class="col-lg-4 col-md-4 form-group">                  
                    <label for="inputLastName">Nationality </label>
                     <select class="form-control" name = "national" value="<?php echo $national   ?>">
					 <option value="" disabled selected>--Select-- </option>
                    <option value="Sinhala">Sinhala</option>
                    <option value="Tamil">Tamil</option> 
                    <option value="Muslim">Muslim</option>
                    <option value="Burgher">Burgher</option> 
									
                  </select>     
                    
                     <label for="inputFirstName"> <?php echo $ergen  ?> </label>
                </div> 
				<div class="col-lg-4 col-md-4 form-group">                  
                    <label for="inputLastName">Religion </label>
                     <select class="form-control" name = "religion" value="<?php echo $religion   ?>">
					 <option value="" disabled selected>--Select-- </option>
                    <option value="Budhist">Budhist</option>
                    <option value="Christian">Christian</option> 
                    <option value="Islam">Islam</option>
                    <option value="Hindu">Hindu</option> 
									
                  </select>     
                    
                     <label for="inputFirstName"> <?php echo $ergen  ?> </label>
                </div>
              </div>
                    
                    
			  
			   <div class="row form-group">
                <div class="col-lg-4 col-md-4 form-group">                  
                    <label for="inputFirstName">Date Of Birth </label>
                    <input type="text" class="form-control" id="datepicker" placeholder="DOB" name = "dob" value="<?php    ?>" required="">  
                    <label for="inputFirstName"> <?php echo $ersge ?> </label>
                </div>
                <div class="col-lg-4 col-md-4 form-group">                  
                    <label for="inputLastName">Gender </label>
                     <select class="form-control" name = "gender" value="<?php echo $gender   ?>">
					 <option value="" disabled selected>Select Gender </option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>  
									
                  </select>     
                    
                     <label for="inputFirstName"> <?php echo $ergen  ?> </label>
                </div> 
				<div class="col-lg-4 col-md-4 form-group">                  
                    <label for="inputLastName">Phone Number </label>
                    <input type="number" class="form-control" id="inputLastName" placeholder="Phone Number" name = "number" value="<?php echo $number   ?>">    
                    <label for="inputFirstName"> <?php echo $ernum ?> </label>
                </div>
              </div>
		
              <div class="row form-group">
                <div class="col-lg-6 col-md-6 form-group">                  
                    <label for="inputNewPassword">Education</label>
                     <textarea class="form-control" id="inputNote" rows="2" name = "edu" placeholder="Education..."><?php echo $edu   ?></textarea>
                </div>
                <div class="col-lg-6 col-md-6 form-group">                  
                    <label for="inputConfirmNewPassword">Family Members</label>
                    <textarea class="form-control" id="inputNote" rows="2" name = "fmemb" placeholder="Family Members..."><?php echo $fmemb   ?></textarea>
                </div> 
              </div>
			  
			    <div class="row form-group">
                <div class="col-lg-6 col-md-6 form-group">                  
                    <label for="inputNewPassword">Present Employment </label>
                     <textarea class="form-control" id="inputNote" rows="2" name = "emp" placeholder="Presnt Employment ..."><?php echo $emp   ?></textarea>
                </div>
                <div class="col-lg-6 col-md-6 form-group">                  
                    <label for="inputConfirmNewPassword">Prior Employment</label>
                    <textarea class="form-control" id="inputNote" rows="2" name = "pemp" placeholder="Prior Employment..."><?php echo $pemp   ?></textarea>
                </div> 
              </div>
			  
			   <div class="row form-group">
                <div class="col-lg-4 col-md-4 form-group">                  
                    <label for="inputNewPassword">Date of Amputation </label>
                       <input type="text" class="form-control" id="datepicker1" placeholder="Date of Amputation" name = "adate" value="<?php ?>" > 
                       
                       
                </div>
                <div class="col-lg-4 col-md-4 form-group">                  
                    <label for="inputConfirmNewPassword">Doctors Name</label>
                    <textarea class="form-control" id="inputNote" rows="2" name = "doc" placeholder="Doctors Name"><?php echo $doc   ?></textarea>
                </div> 
				
				  <div class="col-lg-4 col-md-4 form-group">                  
                    <label for="inputConfirmNewPassword">Hospital</label>
                    <textarea class="form-control" id="inputNote" rows="2" name = "hos" placeholder="Hospital..."><?php echo $hos   ?></textarea>
                </div> 
              </div>
			
                     <div class="row form-group">
                <div class="col-lg-4 col-md-4 form-group">                  
                    <label for="inputNewPassword">Any Other Diseases? </label>
                       <input type="text" class="form-control" id="inputNote" placeholder="Other Diseases?" name = "otdis" value="<?php echo $anyother   ?>" > 
                       
                       
                </div>
                <div class="col-lg-4 col-md-4 form-group">                  
                    <label for="inputConfirmNewPassword">What will You do after the Amputation</label>
                    <input type="text" class="form-control" id="inputNote" rows="2" name = "afteramp" placeholder="" value="<?php echo $aftramp   ?>">
                </div> 
				
				  <div class="col-lg-4 col-md-4 form-group">                  
                    <label for="inputConfirmNewPassword">Vocational Interests</label>
                    <textarea class="form-control" id="inputNote" rows="2" name = "voc" placeholder="Vocational Interests"><?php echo $voc   ?></textarea>
                </div> 
              </div>  
                    
                    
<!--			   <div class="row form-group">
			 
                <div class="col-lg-6 col-md-6 form-group"> 
			 
                 
                    <div class="margin-right-15 templatemo-inline-block">
                      <input type="radio" name="leg"  value="Left Leg" id="r1" <?php //echo $left ?>>
                      <label for="r1" class="font-weight-400"><span></span>Left Leg</label>
                    </div>
                    <div class="margin-right-15 templatemo-inline-block">
                      <input type="radio" name="leg"  value="Right Leg"  id="r2" <?php //echo $right ?>>
                      <label for="r2" class="font-weight-400"><span></span>Right Leg</label>
                    </div>
					
					 </div>
					
					<div class="col-lg-6 col-md-6 form-group"> 
					
					  <div class="margin-right-15 templatemo-inline-block">
                      <input type="radio" name="knee"  value="Below Knee" id="r4" <?php //echo $below ?>>
                      <label for="r4" class="font-weight-400"><span></span>Below Knee</label>
                    </div>
                    <div class="margin-right-15 templatemo-inline-block">
                      <input type="radio" name="knee"  value="Under Knee" id="r5" <?php //echo $under ?> >
                      <label for="r5" class="font-weight-400"><span></span>Under Knee</label>
                    </div>
                   
			 </div>	
				   
               
              </div>-->
<!--                    <button type="button" class="templatemo-blue-button" name="next" id="next" >Next</button>-->
                    
                    
                 </div>
         
                
                
                <!--		start of next page-->
<!--                <div id="last" style="display: none">
                    <button type="button" class="templatemo-blue-button" name="next" id="back" >Back</button> 
                </div>-->
                
                
                <div id="last"  style="">
                
                      <div class="row form-group">
			 
                <div class="col-lg-12 col-md-12 form-group"> 
			 
                 
                    <div class="margin-right-15 templatemo-inline-block">
                      
                        <label for="inputLastName">Registration for a   </label>
<!--                        <select class="form-control" name = "gender" id="type" value="<?php // echo $gender   ?>">
					 <option value="" disabled selected>   --Select Type--    </option>
                    <option value="foot">Foot</option>
                    <option value="arm">Arm</option>  
                    <option value="other">Other</option>  
									
                  </select>-->
                        
                    </div>
                    
                     <!--button type="submit" class="templatemo-blue-button" name = "save">Save</button-->
                   <input type="button" class="templatemo-blue-button" id="ft" name="ft" value="Foot">
                   <input type="button" class="templatemo-blue-button" id="arm" name="arm" value="Arm">
                   <input type="button" class="templatemo-blue-button" id="other" name="other" value="Other">
			 </div>	
                          </div>
                    
                </div>
                          <br><br><br><br>
                                      <div class="row form-group" id="foot" style="display: none">
                              
                                          <div class="col-lg-12  form-group">
                                <div class="col-lg-6 col-md-6 form-group">                  
                                    <label for="inputUsername">cause of amputation</label>
                                     <select class="form-control" name = "footcause" value="<?php    ?>">
                                         <option value="0">--Select--</option>
                                    <option value="Road Accident">Road Accident</option>
                                    <option value="Train Accident">Train Accident</option>
                                    <option value="Industrial Accident">Industrial Accident</option>
                                    <option value="Congenital Deformities">Congenital Deformities</option>
                                    <option value="Gangrenous wounds">Gangrenous wounds</option>
                                    <option value="Vascular Disease">Vascular Disease</option>
                                    <option value="Trapgun Explosions">Trapgun Explosions</option>
                                    <option value="Cancer">Cancer</option>
                                    <option value="Miscellaneous">Miscellaneous</option>
                                    <option value="From Birth">From Birth</option>  
                                    <option value="Civil Commotion">Civil Commotion</option>  
<!--                                                 <option value="Master">Master.</option> 
                <option value="Rev.">Rev..</option> 				-->
                                  </select>  

                                    <label for="inputFirstName"> </label>
                                </div> 
                                                </div>
                              
                                                                              <div class="row form-group">

                                                                <div class="col-lg-6 col-md-6 form-group"> 


                                                                    <div class="margin-right-15 templatemo-inline-block">
                                                                      <input type="radio" name="leg"  value="Left Leg" id="r1" <?php //echo $left ?>>
                                                                      <label for="r1" class="font-weight-400"><span></span>Left Leg</label>
                                                                    </div>
                                                                    <div class="margin-right-15 templatemo-inline-block">
                                                                      <input type="radio" name="leg"  value="Right Leg"  id="r2" <?php //echo $right ?>>
                                                                      <label for="r2" class="font-weight-400"><span></span>Right Leg</label>
                                                                    </div>
                                                                    <div class="margin-right-15 templatemo-inline-block">
                                                                      <input type="radio" name="leg"  value="Both"  id="r4" <?php //echo $both ?>>
                                                                      <label for="r4" class="font-weight-400"><span></span>Both Legs</label>
                                                                    </div>

                                                                                         </div><?php echo $erleg ?>

                                                                                        <div class="col-lg-6 col-md-6 form-group"> 

                                                                                          <div class="margin-right-15 templatemo-inline-block">
                                                                      <input type="radio" name="knee"  value="Above Knee" id="r5" <?php //echo $below ?>>
                                                                      <label for="r5" class="font-weight-400"><span></span>Above Knee</label>
                                                                    </div>
                                                                    <div class="margin-right-15 templatemo-inline-block">
                                                                      <input type="radio" name="knee"  value="Below Knee" id="r6" <?php //echo $under ?> >
                                                                      <label for="r6" class="font-weight-400"><span></span>Below Knee</label>
                                                                    </div>

                                                                         </div>	<?php echo $erknee ?>


                                                              </div>
                              
                              
                                          </div>
                          
                
                                          
                <div class="row form-group" id="arms" style="display: none">
                    
                                                      <div class="col-lg-12  form-group">
                                           <div class="col-lg-6 col-md-6 form-group">                  
                                    <label for="inputUsername">cause of amputation</label>
                                     <select class="form-control" name = "armcause" value="<?php  ?>">
                                         <option value="0">--Select--</option>
                                    <option value="Accident">Accident</option>
                                    <option value="From Birth">From Birth</option>  
                                    <option value="War">War</option>
                                    <option value="Congenital Deformities">Congenital Deformities</option>  
                                    <option value="Polio">Polio</option>  
<!--                                                 <option value="Master">Master.</option> 
                <option value="Rev.">Rev..</option> 				-->
                                  </select>  

                                    <label for="inputFirstName">  </label>
                                </div> 
                                            </div>

                                                                                 <div class="row form-group">

                                                                <div class="col-lg-6 col-md-6 form-group"> 


                                                                    <div class="margin-right-15 templatemo-inline-block">
                                                                      <input type="radio" name="arm"  value="Left Arm" id="r7" <?php //echo $left ?>>
                                                                      <label for="r7" class="font-weight-400"><span></span>Left Arm</label>
                                                                    </div>
                                                                    <div class="margin-right-15 templatemo-inline-block">
                                                                      <input type="radio" name="arm"  value="Right Arm"  id="r8" <?php //echo $right ?>>
                                                                      <label for="r8" class="font-weight-400"><span></span>Right Arm</label>
                                                                    </div>
                                                                    <div class="margin-right-15 templatemo-inline-block">
                                                                      <input type="radio" name="arm"  value="Both"  id="r9" <?php //echo $both ?>>
                                                                      <label for="r9" class="font-weight-400"><span></span>Both Arms</label>
                                                                    </div>

                                                                                         </div><?php echo $erarm   ?>

                                                                                        <div class="col-lg-6 col-md-6 form-group"> 

                                                                                          <div class="margin-right-15 templatemo-inline-block">
                                                                      <input type="radio" name="elbow"  value="Above Elbow" id="r10" <?php //echo $below ?>>
                                                                      <label for="r10" class="font-weight-400"><span></span>Above Elbow</label>
                                                                    </div>
                                                                    <div class="margin-right-15 templatemo-inline-block">
                                                                      <input type="radio" name="elbow"  value="Below Elbow" id="r11" <?php// echo $under ?> >
                                                                      <label for="r11" class="font-weight-400"><span></span>Below Elbow</label>
                                                                    </div>

                                                                         </div>	


                                                              </div>

                                                          

              
                                                          
                                                          
                                                            </div>
                                          
                
                
                <div class="row form-group" id="othr" style="display: none">
                                                      <div class="col-lg-12  form-group">
                                           <div class="col-lg-6 col-md-6 form-group">                  
                                    <label for="inputUsername">cause of Disability</label>
                                     <select class="form-control" name = "othercause" value="<?php echo $title   ?>">
                                         <option value="0">--Select--</option>
                                    <option value="Accident">Accident</option>
                                    <option value="From Birth">From Birth</option>  
                                    <option value="War">War</option>  
                                                 <option value="Polio">Polio</option> <!--
                <option value="Rev.">Rev..</option> 				-->
                                  </select>  

                                    <label for="inputFirstName"> <?php echo $ertil  ?> </label>
                                </div> 
                                                          <div class="col-lg-6 col-md-6 form-group">                  
                    <label for="inputLastName">Other Details </label>
                    
                       <textarea class="form-control" id="inputNote" rows="1" name = "other" placeholder="Other Details"><?php   ?></textarea>
                       
                </div>
                                            </div>

                                                                                 <div class="row form-group">

                                                                <div class="col-lg-6 col-md-6 form-group"> 


                                                                    <div class="margin-right-15 templatemo-inline-block">
                                                                      <input type="radio" name="otherarm"  value="Left Arm" id="r12" <?php// echo $left ?>>
                                                                      <label for="r12" class="font-weight-400"><span></span>Left Arm</label>
                                                                    </div>
                                                                    <div class="margin-right-15 templatemo-inline-block">
                                                                      <input type="radio" name="otherarm"  value="Right Arm"  id="r13" <?php// echo $right ?>>
                                                                      <label for="r13" class="font-weight-400"><span></span>Right Arm</label>
                                                                    </div>
                                                                    <div class="margin-right-15 templatemo-inline-block">
                                                                      <input type="radio" name="otherarm"  value="Both"  id="r14" <?php //echo $both ?>>
                                                                      <label for="r14" class="font-weight-400"><span></span>Both Arms</label>
                                                                    </div>

                                                                                         </div>

                                                                              <div class="col-lg-6 col-md-6 form-group"> 


                                                                    <div class="margin-right-15 templatemo-inline-block">
                                                                      <input type="radio" name="otherleg"  value="Left Leg" id="r15" <?php //echo $left ?>>
                                                                      <label for="r15" class="font-weight-400"><span></span>Left Leg</label>
                                                                    </div>
                                                                    <div class="margin-right-15 templatemo-inline-block">
                                                                      <input type="radio" name="otherleg"  value="Right Leg"  id="r16" <?php //echo $right ?>>
                                                                      <label for="r16" class="font-weight-400"><span></span>Right Leg</label>
                                                                    </div>
                                                                    <div class="margin-right-15 templatemo-inline-block">
                                                                      <input type="radio" name="otherleg"  value="Both"  id="r17" <?php //abecho $both ?>>
                                                                      <label for="r17" class="font-weight-400"><span></span>Both Legs</label>
                                                                    </div>

                                                                                         </div>


                                                              </div>

              
                                                          
                                                          
                                                            </div>
                                        
                          
                          
                          
                <div class="form-group text-right" id="save" style="display: none ">
                  
                <button type="submit" class="templatemo-blue-button" name = "save">Save</button>
                <button type="reset" class="templatemo-white-button">Reset</button>
              </div>
                          
                          
				   
                
                
                
                
<!--                end of next-->
                
               
                
            </form>
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
