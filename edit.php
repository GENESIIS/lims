<?php
if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
include ('connection.php');
$admin = $_SESSION['level'];
$user = $_SESSION['username'];


if (($user!="")) {
    
     $date =$district =$title =  $fname =  $lname = $address =$nic =$national =  $religion =  $dob =   $byr =   
       $birthyr = $age =  $gender =  $number =$edu = $fmemb =  $emp = $pemp =$adate = "";
         
          
        $erleg=$erknee =$hos = $doc =  $anyother =$aftramp =  $voc = $ftcause = $leg = $knee = $acause = $arm =  $elbow = "";
          
       $erarm = $ocause= $other = $oarm= $oleg = "";
        
        
     $erdis = $ertil = $erfnsme =$erad =$ersge =$ergen = $ernum = "";
    
 $sid = $_SESSION['id'];
 $table = $_SESSION['table'];

$sql ="select * from $table  where regnum='$sid'";

$rslt = mysql_query($sql);

$rows = mysql_fetch_array($rslt);


 
 if(isset($_POST['update']))
     
 {
      $sid = $_SESSION['id'];
  $date= date("Y.m.d");
    $district = $_POST['district'];
     $title = $_POST['title'];
     $fname = $_POST['fname'];
      $lname = $_POST['lname'];
       $address = $_POST['address'];
       $nic = $_POST['nic'];
       $national = $_POST['national'];
       $religion = $_POST['religion'];
       $dob = $_POST['dob'];
//       $age = $_POST['age'];
                   
       
       
       
        $gender = $_POST['gender'];
        $number = $_POST['number'];
        $edu = $_POST['edu'];
         $fmemb = $_POST['fmemb'];
         $emp = $_POST['emp'];
         $pemp = $_POST['pemp'];
         $adate = $_POST['adate'];
         
          
          $hos = $_POST['hos'];
          $doc = $_POST['doc'];
          $anyother = $_POST['otdis'];
          $aftramp = $_POST['afteramp'];
          $voc =$_POST['voc'];
          
                      $ftcause = $_POST['footcause'];
                      $leg = $_POST['leg'];
                      $knee = $_POST['knee'];
                    
                      if (isset($_POST['armcause'])) {
                           $acause = $_POST['armcause'];
                      }
                      if (isset($_POST['arm'])) {
                          $arm = $_POST['arm'];
                      }
                      if (isset($_POST['elbow'])) {
                          $elbow = $_POST['elbow'];
                      }
            
             if (isset($_POST['othercause'])) {
                         $ocause = $_POST['othercause'];
                      }
             if (isset($_POST['other'])) {
                         $other = $_POST['other'];
                      }
             if (isset($_POST['otherarm'])) {
                         $oarm = $_POST['otherarm'];
                      }
             if (isset($_POST['otherleg'])) {
                         $oleg = $_POST['otherleg'];
                      }
        
        
             
             
     
              if ($district == "") 
    { echo $erdis = "please select distric ";}
    
    elseif ($title == "") 
    { echo $ertil = "please select title  ";}
          
     elseif ($fname == "") 
    { echo $erfnsme = "please enter frist name ";}
    
     elseif ($address == "") 
    { echo $erad = "please enter address ";}
    
    elseif ($dob == "") 
    { echo $ersge = "please Select Date Of Birth ";}
    
    elseif ($gender == "") 
    { echo $ergen = "please select gender ";}
    
    elseif ($number == "") 
    { echo $ernum = "please enter number ";
                    if (is_numeric($number)== FALSE){
                         echo $ernum = "please enter a number ";
                    }
    
    }else {
        
            if ($ftcause!="") {
                $table = "memberfoot";
                $pre = "J/F";
        if ($leg=="") {
            $erleg = "Please Select Leg";
        }elseif ($knee == "") {
                $erknee = "Please select Knee";
            }
            
            $sql = "UPDATE $table SET 
                `district`='$district',`title`='$title',`fname`='$fname',`lname`='$lname',`address`='$address',`nic`='$nic',
                `national`='$national',`religion`='$religion',`dob`='$dob',`sex`='$gender',`phone`='$number',`education`='$edu',`fammem`='$fmemb',
                `prioremp`='$pemp',`presntemp`='$emp',`surgerydate`='$adate',`doctor`='$doc',`surgeonhospitle`='$hos',
                `anyother`='$anyother',`afteramp`='$aftramp',`vocational`='$voc',
                `cause`='$ftcause',`whichleg`='$leg',`aouk`='$knee',`modon`='$date',`modby`='$user' WHERE regnum = '$sid' ";
            
        }
        
if ($acause!="") {
            $table = "memberarm";
            $pre = "A/A ";
    if ($arm=="") {
        $erarm = "Please Select Arm";
    }elseif ($elbow == "") {
            $erknee = "Please select Elbow";
        }
            
        $sql = "UPDATE $table SET 
                `district`='$district',`title`='$title',`fname`='$fname',`lname`='$lname',`address`='$address',`nic`='$nic',
                `national`='$national',`religion`='$religion',`dob`='$dob',`sex`='$gender',`phone`='$number',`education`='$edu',`fammem`='$fmemb',
                `prioremp`='$pemp',`presntemp`='$emp',`surgerydate`='$adate',`doctor`='$doc',`surgeonhospitle`='$hos',
                `anyother`='$anyother',`afteramp`='$aftramp',`vocational`='$voc',
                `cause`='$ftcause',`whicharm`='$arm',`aobelbow`='$elbow',`modon`='$date',`modby`='$user' WHERE regnum = '$sid' ";
          
                 }
        
                                                                                            
                                                                                            
                     if ($ocause!="") {
                    $table = "memberother";
                    $pre = "O/A ";
                                if (($oarm=="") || ($oleg == "")) {
                                    $erother = "Please Select Arm Or Leg";
                                }  
                                
                                $sql = "UPDATE $table SET 
                `district`='$district',`title`='$title',`fname`='$fname',`lname`='$lname',`address`='$address',`nic`='$nic',
                `national`='$national',`religion`='$religion',`dob`='$dob',`sex`='$gender',`phone`='$number',`education`='$edu',`fammem`='$fmemb',
                `prioremp`='$pemp',`presntemp`='$emp',`surgerydate`='$adate',`doctor`='$doc',`surgeonhospitle`='$hos',
                `anyother`='$anyother',`afteramp`='$aftramp',`vocational`='$voc',
                `cause`='$ftcause', `other`='$other',`whichlego`='$oleg',`whicharmo`='$oarm',
                    `modon`='$date',`modby`='$user' WHERE regnum = '$sid' ";
                               
                     }
        
      
      $rslt = mysql_query($sql);
      
                                                                if($rslt){
                                                                    
                                                                    
								?>
                                      <input type='hidden' id='myText' value="<?php echo $pre."/".$sid ?>"/>
                                     
                                                            <script>
                                                                var myvar1 = document.getElementById("myText");
                                                                alert('Successfully Updated     ' + myvar1.value);
                                                              window.location = "apply.php";
                                                            </script>
                                                            
                                                                 <?php
                                                                 

                            } else {
                              echo "<script type='text/javascript'>alert('failed to Update details!')</script>";
                                    }
                }
             
 }




 



?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Jaipur Foot workshop Apply form</title>
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
  
   <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.16/jquery-ui.min.js"></script>

<script>
jQuery(function() {
    jQuery( "#datepicker" ).datepicker({ dateFormat: 'yy-mm-dd'});
    
});

jQuery(function() {
    jQuery( "#datepicker1" ).datepicker({ dateFormat: 'yy-mm-dd'});
    
});

    $(document).ready(function(){
        $('#next').click(function(){
            $('reg').hide();
        })
    })

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
      </div>
      <!-- Main content -->
      <div class="templatemo-content col-1 light-gray-bg" id="reg">
        <div class="templatemo-top-nav-container">
          <div class="row">
            <nav class="templatemo-top-nav col-lg-12 col-md-12">
              <ul class="text-uppercase">
                <li><a href="" class="active">Admin panel</a></li>
<!--                <li><a href="">Dashboard</a></li>
                <li><a href="">Overview</a></li>
                <li><a href="login.html">Sign in form</a></li>-->
              </ul>
            </nav>
          </div>
        </div>
        <div class="templatemo-content-container">
          <div class="templatemo-content-widget white-bg">
            <h2 class="margin-bottom-10">Edit Member Details</h2>
            <p></p>
            <form  class="templatemo-login-form" method="post" enctype="multipart/form-data">
			
 <?php
if ($table=="memberfoot") {
$name = "Limb";
$code = "J.F /";
}elseif ($table=="memberarm") {
        $name = "Arm";
        $code = "A.A /";
    }elseif ($table=="memberother") {
        $name = "Other Appliance";
        $code = "O.A /";
    }	
			  
 ?>                
                
			
	<div class="row form-group">
                <div class="col-lg-4 col-md-4 ">                  
                    <label for="inputFirstName">Registration Number </label>
                    
                </div>
		<div class="col-lg-8 col-md-8 "> 
                    <input type="text" class="form-control" id="inputFirstName"  readonly="" name = "rnumber" value="<?php echo $code." ".$sid." / ".$rows['month']." / ".$rows['year']  ?> ">                   
                </div>		
        </div>
                
                <div class="row form-group">
                    <div class="col-lg-6 col-md-6 form-group">                  
                        <label for="inputLastName">Registered Date </label>
                        <input type="text" class="form-control" id="datepicker" readonly="" placeholder="<?php echo $rows['date'] ?>" name = "date"  >                  
                    </div> 
                    <div class="col-lg-6 col-md-6 form-group">
                         <label for="inputLastName">District </label>
                                 <select class="form-control" name = "district">
                                     <option value="<?php echo $rows['district'] ?>"><?php echo $rows['district'] ?></option>
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
                         <option value="<?php echo $rows['title'] ?>"><?php echo $rows['title'] ?></option>
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
                    <input type="text" class="form-control" id="inputUsername" placeholder="First Name" name = "fname" value="<?php echo $rows['fname'] ?>">   
                    <label for="inputFirstName"> <?php echo $erfnsme  ?> </label>
                </div>
				
				 
                <div class="col-lg-6 col-md-6 form-group">                  
                    <label for="inputEmail">Last Name</label>
                    <input type="text" class="form-control" id="inputEmail" placeholder="Last name" name = "lname" value="<?php echo $rows['lname'] ?>"> 
                  
                </div> 
				
				</div>
              </div>
			  
			    <div class="row form-group">
                <div class="col-lg-12 form-group">                   
                    <label class="control-label" for="inputNote">Address</label>
                    <textarea class="form-control" id="inputNote" rows="3" name = "address" placeholder="Address..."><?php echo $rows['address'] ?></textarea>
                    
                     <label for="inputFirstName"> <?php echo $erad  ?> </label>
                </div>
              </div>
                
                
		 <div class="row form-group">
                <div class="col-lg-4 col-md-4 form-group">                  
                    <label for="inputFirstName">ID Number </label>
                    <input type="text" class="form-control" id="inputFirstName" placeholder="NIC num" name = "nic" value="<?php $rows['nic']   ?>">  
                    <label for="inputFirstName"> <?php echo $ersge ?> </label>
                </div>
                <div class="col-lg-4 col-md-4 form-group">                  
                    <label for="inputLastName">Nationality </label>
                     <select class="form-control" name = "national" value="<?php echo $national   ?>">
					 <option value="<?php echo $rows['national'] ?>" selected><?php echo $rows['national'] ?> </option>
                    <option value="Sinhala">Sinhala</option>
                    <option value="Tamil">Tamil</option> 
                    <option value="Muslim">Muslim</option>
                    <option value="Burgher">Burgher</option> 
									
                  </select>     
                    
                     <label for="inputFirstName"> <?php echo $ergen  ?> </label>
                </div> 
				<div class="col-lg-4 col-md-4 form-group">                  
                    <label for="inputLastName">Religion </label>
                     <select class="form-control" name = "religion" >
					 <option value="<?php echo $rows['religion'] ?>"selected><?php echo $rows['religion'] ?></option>
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
                    <input type="text" class="form-control" id="datepicker" placeholder="DOB" name = "dob" value="<?php echo $rows['dob'] ?>">  
                    <label for="inputFirstName"> <?php echo $ersge ?> </label>
                </div>
                <div class="col-lg-4 col-md-4 form-group">                  
                    <label for="inputLastName">Gender </label>
                     <select class="form-control" name = "gender" value="<?php echo $gender   ?>">
                         <?php
                                                                 if ($rows['sex']=="Male") {
                                                                     $selm = "selected";
                                                                 }  else {
                                                                 $self = "selected";    
                                                                 }
                            ?>
<!--					 <option value="" disabled selected>Select Gender </option>-->
                    <option value="Male" <?php echo $selm ?> >Male</option>
                    <option value="Female" <?php echo $self ?> >Female</option>  
									
                  </select>     
                    
                     <label for="inputFirstName"> <?php echo $ergen  ?> </label>
                </div> 
				<div class="col-lg-4 col-md-4 form-group">                  
                    <label for="inputLastName">Phone Number </label>
                    <input type="text" class="form-control" id="inputLastName" placeholder="Phone Number" name = "number" value="<?php echo $rows['phone']   ?>">    
                    <label for="inputFirstName"> <?php echo $ernum ?> </label>
                </div>
              </div>
		
              <div class="row form-group">
                <div class="col-lg-6 col-md-6 form-group">                  
                    <label for="inputNewPassword">Education</label>
                     <textarea class="form-control" id="inputNote" rows="2" name = "edu" placeholder="Education..."><?php echo $rows['education']   ?></textarea>
                </div>
                <div class="col-lg-6 col-md-6 form-group">                  
                    <label for="inputConfirmNewPassword">Family Members</label>
                    <textarea class="form-control" id="inputNote" rows="2" name = "fmemb" placeholder="Family Members..."><?php echo $rows['fammem']  ?></textarea>
                </div> 
              </div>
			  
			    <div class="row form-group">
                <div class="col-lg-6 col-md-6 form-group">                  
                    <label for="inputNewPassword">Present Employment </label>
                     <textarea class="form-control" id="inputNote" rows="2" name = "emp" placeholder="Presnt Employment ..."><?php echo $rows['prioremp']   ?></textarea>
                </div>
                <div class="col-lg-6 col-md-6 form-group">                  
                    <label for="inputConfirmNewPassword">Prior Employment</label>
                    <textarea class="form-control" id="inputNote" rows="2" name = "pemp" placeholder="Prior Employment..."><?php echo $rows['presntemp']   ?></textarea>
                </div> 
              </div>
			  
			   <div class="row form-group">
                <div class="col-lg-4 col-md-4 form-group">                  
                    <label for="inputNewPassword">Date of Amputation </label>
                    <input type="text" class="form-control" id="datepicker1" placeholder="Date of Amputation" name = "adate" value="<?php echo $rows['surgerydate'] ?>" > 
                       
                       
                </div>
                <div class="col-lg-4 col-md-4 form-group">                  
                    <label for="inputConfirmNewPassword">Doctors Name</label>
                    <textarea class="form-control" id="inputNote" rows="2" name = "doc" placeholder="Doctors Name"><?php echo $rows['doctor']  ?></textarea>
                </div> 
				
				  <div class="col-lg-4 col-md-4 form-group">                  
                    <label for="inputConfirmNewPassword">Hospital</label>
                    <textarea class="form-control" id="inputNote" rows="2" name = "hos" placeholder="Hospital..."><?php echo $rows['surgeonhospitle']   ?></textarea>
                </div> 
              </div>
			
                     <div class="row form-group">
                <div class="col-lg-4 col-md-4 form-group">                  
                    <label for="inputNewPassword">Any Other Diseases? </label>
                       <input type="text" class="form-control" id="inputNote" placeholder="Other Diseases?" name = "otdis" value="<?php echo $rows['anyother']   ?>" > 
                       
                       
                </div>
                <div class="col-lg-4 col-md-4 form-group">                  
                    <label for="inputConfirmNewPassword">What will You do after the Amputation</label>
                    <input type="text" class="form-control" id="inputNote" rows="2" name = "afteramp" placeholder="" value="<?php echo $rows['afteramp']  ?>">
                </div> 
				
				  <div class="col-lg-4 col-md-4 form-group">                  
                    <label for="inputConfirmNewPassword">Vocational Interests</label>
                    <textarea class="form-control" id="inputNote" rows="2" name = "voc" placeholder="Vocational Interests"><?php echo $rows['vocational']   ?></textarea>
                </div> 
              </div>  
			 
		 <?php
if ($table=="memberfoot") {
$name = "Limb";
$code = "J.F /";
?>
                               <div class="row form-group" id="foot" style="">
                              
                                          <div class="col-lg-12  form-group">
                                <div class="col-lg-6 col-md-6 form-group">                  
                                    <label for="inputUsername">cause of amputation</label>
                                     <select class="form-control" name = "footcause" value="<?php    ?>">
                                         <option value="<?php echo $rows['cause'] ?>"><?php echo $rows['cause'] ?></option>
                                    <option value="Accident">Accident</option>
                                    <option value="From Birth">From Birth</option>  
                                    <option value="War">War</option>  
<!--                                                 <option value="Master">Master.</option> 
                <option value="Rev.">Rev..</option> 				-->
                                  </select>  

                                    <label for="inputFirstName"> </label>
                                </div> 
                                                </div>
                              
                                                                              <div class="row form-group">

                                                                <div class="col-lg-6 col-md-6 form-group"> 
                                                                     <?php
                                                                                if ($rows['whichleg'] == "Left Leg") {
                                                                                    $lleg = "checked";
                                                                                    $rleg = "";
                                                                                    $bleg = "";
                                                                                } elseif ($rows['whichleg'] == "Right Leg") {
                                                                                $rleg = "checked";
                                                                                $lleg = "";
                                                                                $bleg = "";
                                                                            }  else {
                                                                            $bleg = "checked";  
                                                                            $rleg = "";
                                                                                    $bleg = "";
                                                                            }
                                                                        
                                                                        ?>

                                                                    <div class="margin-right-15 templatemo-inline-block">
                                                                        <input type="radio" name="leg"  value="Left Leg" id="r1" <?php echo $lleg ?>>
                                                                      <label for="r1" class="font-weight-400"><span></span>Left Leg</label>
                                                                    </div>
                                                                    <div class="margin-right-15 templatemo-inline-block">
                                                                      <input type="radio" name="leg"  value="Right Leg"  id="r2" <?php echo $rleg ?>>
                                                                      <label for="r2" class="font-weight-400"><span></span>Right Leg</label>
                                                                    </div>
                                                                    <div class="margin-right-15 templatemo-inline-block">
                                                                      <input type="radio" name="leg"  value="Both"  id="r4" <?php echo $bleg ?>>
                                                                      <label for="r4" class="font-weight-400"><span></span>Both Legs</label>
                                                                    </div>

                                                                                         </div><?php echo $erleg ?>

                                                                                        <div class="col-lg-6 col-md-6 form-group"> 
                                                                                <?php
                                                                                if ($rows['aouk'] == "Under Knee") {
                                                                                    $ak = "checked";
                                                                                    $bk = "";
                                                                                } else {
                                                                                $bk = "checked";
                                                                                $ak="";
                                                                            } 
                                                                        
                                                                        ?>           
                                                                                          <div class="margin-right-15 templatemo-inline-block">
                                                                      <input type="radio" name="knee"  value="Above Knee" id="r5" <?php echo $ak ?>>
                                                                      <label for="r5" class="font-weight-400"><span></span>Above Knee</label>
                                                                    </div>
                                                                    <div class="margin-right-15 templatemo-inline-block">
                                                                      <input type="radio" name="knee"  value="Below Knee" id="r6" <?php echo $bk ?> >
                                                                      <label for="r6" class="font-weight-400"><span></span>Below Knee</label>
                                                                    </div>

                                                                         </div>	<?php echo $erknee ?>


                                                              </div>
                              
                              
                                          </div>                                     
                
                
                

<?php
}elseif ($table=="memberarm") {
        $name = "Arm";
        $code = "A.A /";
        ?>
        <div class="row form-group" id="arms" style="">
                    
                                                      <div class="col-lg-12  form-group">
                                           <div class="col-lg-6 col-md-6 form-group">                  
                                    <label for="inputUsername">cause of amputation</label>
                                     <select class="form-control" name = "armcause" value="<?php  ?>">
                                         <option value="<?php echo $rows['cause'] ?>"><?php echo $rows['cause'] ?></option>
                                    <option value="Accident">Accident</option>
                                    <option value="From Birth">From Birth</option>  
                                    <option value="War">War</option>  
<!--                                                 <option value="Master">Master.</option> 
                <option value="Rev.">Rev..</option> 				-->
                                  </select>  

                                    <label for="inputFirstName">  </label>
                                </div> 
                                            </div>

                                                                                 <div class="row form-group">

                                                                <div class="col-lg-6 col-md-6 form-group"> 
                                                                        <?php
                                                                        $bel=$ael=$barm=$rarm=$larm="";
                                                                                if ($rows['whicharm'] == "Left Arm") {
                                                                                    $larm = "checked";
                                                                                } elseif ($rows['whicharm'] == "Right Arm") {
                                                                                $rarm = "checked";
                                                                            }  else {
                                                                            $barm = "checked";    
                                                                            }
                                                                        
                                                                        ?>
                                                                    <div class="margin-right-15 templatemo-inline-block">
                                                                        <input type="radio" name="arm"  value="Left Arm" <?php echo $larm ?> id="r7">
                                                                      <label for="r7" class="font-weight-400"><span></span>Left Arm</label>
                                                                    </div>
                                                                    <div class="margin-right-15 templatemo-inline-block">
                                                                        <input type="radio" name="arm"  value="Right Arm"  id="r8" <?php echo $rarm ?>>
                                                                      <label for="r8" class="font-weight-400"><span></span>Right Arm</label>
                                                                    </div>
                                                                    <div class="margin-right-15 templatemo-inline-block">
                                                                      <input type="radio" name="arm"  value="Both"  id="r9" <?php echo $barm ?>>
                                                                      <label for="r9" class="font-weight-400"><span></span>Both Arms</label>
                                                                    </div>

                                                                                         </div><?php echo $erarm   ?>

                                                                                        <div class="col-lg-6 col-md-6 form-group"> 

                                                                                            <?php
                                                                                if ($rows['aobelbow'] == "Above Elbow") {
                                                                                    $ael = "checked";
                                                                                } else {
                                                                                $bel= "checked";
                                                                            } 
                                                                        
                                                                        ?>  
                                                                                            
                                                                                          <div class="margin-right-15 templatemo-inline-block">
                                                                      <input type="radio" name="elbow"  value="Above Elbow" id="r10" <?php echo $ael ?>>
                                                                      <label for="r10" class="font-weight-400"><span></span>Above Elbow</label>
                                                                    </div>
                                                                    <div class="margin-right-15 templatemo-inline-block">
                                                                      <input type="radio" name="elbow"  value="Below Elbow" id="r11" <?php echo $bel ?> >
                                                                      <label for="r11" class="font-weight-400"><span></span>Below Elbow</label>
                                                                    </div>

                                                                         </div>	


                                                              </div>
                                                            </div>
        
        <?php
        
    }elseif ($table=="memberother") {
        $name = "Other Appliance";
        $code = "O.A /";
        ?>
        <div class="row form-group" id="othr" style="">
                                                      <div class="col-lg-12  form-group">
                                           <div class="col-lg-6 col-md-6 form-group">                  
                                    <label for="inputUsername">cause of Disability</label>
                                     <select class="form-control" name = "othercause" value="<?php echo $title   ?>">
                                         <option value="<?php echo $rows['cause'] ?>" selected=""><?php echo $rows['cause'] ?></option>
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

                                                                    <?php
                                                                    $lo =$ro=$bo=$llego=$rlego=$blego="";
                                                                                if ($rows['whicharmo'] == "Left Arm") {
                                                                                    $lo = "checked";
                                                                                } elseif ($rows['whicharmo'] == "Right Arm") {
                                                                                $ro = "checked";
                                                                            }  else {
                                                                            $bo = "checked";    
                                                                            }
                                                                        
                                                                        ?>    
                                                                    
                                                                    
                                                                    <div class="margin-right-15 templatemo-inline-block">
                                                                      <input type="radio" name="otherarm"  value="Left Arm" id="r12" <?php echo $lo ?>>
                                                                      <label for="r12" class="font-weight-400"><span></span>Left Arm</label>
                                                                    </div>
                                                                    <div class="margin-right-15 templatemo-inline-block">
                                                                      <input type="radio" name="otherarm"  value="Right Arm"  id="r13" <?php echo $ro ?>>
                                                                      <label for="r13" class="font-weight-400"><span></span>Right Arm</label>
                                                                    </div>
                                                                    <div class="margin-right-15 templatemo-inline-block">
                                                                      <input type="radio" name="otherarm"  value="Both"  id="r14" <?php echo $bo ?>>
                                                                      <label for="r14" class="font-weight-400"><span></span>Both Arms</label>
                                                                    </div>

                                                                                         </div>

                                                                              <div class="col-lg-6 col-md-6 form-group"> 
                                                                                  <?php
                                                                                if ($rows['whichlego'] == "Left Leg") {
                                                                                    $llego = "checked";
                                                                                } elseif ($rows['whichlego'] == "Right Leg") {
                                                                                $rlego = "checked";
                                                                            }  else {
                                                                            $blego = "checked";    
                                                                            }
                                                                        
                                                                        ?>

                                                                    <div class="margin-right-15 templatemo-inline-block">
                                                                      <input type="radio" name="otherleg"  value="Left Leg" id="r15" <?php echo $llego ?>>
                                                                      <label for="r15" class="font-weight-400"><span></span>Left Leg</label>
                                                                    </div>
                                                                    <div class="margin-right-15 templatemo-inline-block">
                                                                      <input type="radio" name="otherleg"  value="Right Leg"  id="r16" <?php echo $rlego ?>>
                                                                      <label for="r16" class="font-weight-400"><span></span>Right Leg</label>
                                                                    </div>
                                                                    <div class="margin-right-15 templatemo-inline-block">
                                                                      <input type="radio" name="otherleg"  value="Both"  id="r17" <?php echo $blego ?>>
                                                                      <label for="r17" class="font-weight-400"><span></span>Both Legs</label>
                                                                    </div>

                                                                                         </div>


                                                              </div>

              
                                                          
                                                          
                                                            </div>
                
                
                
                
        
      <?php          
    }	
			  
 ?>
	
            
                   
                
                   
               
			
              <div class="form-group text-right">
                  <a href="<?php echo $_SERVER['HTTP_REFERER']; ?>" class="templatemo-blue-button"><< Back</a>
<!--                  <button type="button" class="templatemo-blue-button" name="next" id="next" >Cancel</button>-->
                <button type="submit" class="templatemo-blue-button" name = "update" >Save</button>
<!--                <button type="reset" class="templatemo-white-button">Reset</button>-->
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
    <!--script type="text/javascript" src="js/jquery-1.11.2.min.js"></script-->        <!-- jQuery -->
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