<?php
session_start();
include ('connection.php');
$admin = $_SESSION['adminname'];
$user = $_SESSION['username'];


if (($user!="")) {

$cdate = date("Y.m.d");

if (isset($_POST['save']))
    
{
   
    $month = date(m);
    $yr = date("Y");
    
  $regnumber = $_POST['rnumber'];
    $date = $_POST['date'];
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
                    $byr = explode("-", $dob);
                   $birthyr = $byr[0];
                   $age = $yr - $birthyr;
       
       
       
        $gender = $_POST['gender'];
        $number = $_POST['number'];
        $edu = $_POST['edu'];
         $fmemb = $_POST['fmemb'];
         $emp = $_POST['emp'];
         $pemp = $_POST['pemp'];
         $adate = $_POST['adate'];
         
          
          $hos = $_POST['hos'];
          $doc = $_POST['doc'];
          $anyother = $_POST['otds'];
          $aftramp = $_POST['afteramp'];
          $voc =$_POST['voc'];
          
                      $ftcause = $_POST['footcause'];
                      $leg = $_POST['leg'];
                      $knee = $_POST['knee'];
                      
             $acause = $_POST['armcause'];
             $arm = $_POST['arm'];
             $elbow = $_POST['elbow'];
          
        $ocause = $_POST['othercause'];
        $other = $_POST['other'];
             $oarm = $_POST['otherarm'];
             $oleg = $_POST['otherleg'];
          
             
             $reg = explode("/", $regnumber);
            echo $rnumber = $reg['0'];
          
//          if ($rnumber == "")
//          {$ernum = "please enter number";}
//          
//      else
	
//if($leg == "Left Leg")
//{$left = "checked";
//
//}elseif ($leg=="Both") {
//            $both = "checked";
//        }else{$right = "checked";}


     if ($district == "") 
    { $erdis = "please select distric ";}
    
    elseif ($title == "") 
    { $ertil = "please select title  ";}
          
     elseif ($fname == "") 
    { $erfnsme = "please enter frist name ";}
    
     elseif ($address == "") 
    { $erad = "please enter address ";}
    
    elseif ($dob == "") 
    { $ersge = "please Select Date Of Birth ";}
    
    elseif ($gender == "") 
    { $ergen = "please select gender ";}
    
    elseif ($number == "") 
    { $ernum = "please enter number ";
    
    }else {
        
            if ($ftcause!="0") {
                $table = "memberfoot";
        if ($leg=="") {
            $erleg = "Please Select Leg";
        }elseif ($knee == "") {
                $erknee = "Please select Knee";
            }
            
            $sql = "INSERT INTO $table (`regnum`,`month`, `year`, `date`, `district`, `title`, `fname`, `lname`, `address` , `nic`, `national`, `religion`, `dob`, `sex`, `phone`, `education`, `fammem`,
                `prioremp`, `presntemp`, `surgerydate`, `doctor`, `surgeonhospitle`,`anyother`, `afteramp`, `vocational`, `cause`, `whichleg`, `aouk`, `crton`, `crtby` )
             VALUES ('$rnumber','$month','$yr', '$cdate' , '$district', ' $title', '$fname', '$lname', '$address', 
'$nic','$national','$religion',                 
'$dob' , '$gender' , '$number' , '$edu' , '$fmemb' , '$emp' , '$pemp'  , 
                 '$adate' , '$doc' , '$hos' ,'$anyother','$aftramp','$voc',
                     '$ftcause' , '$leg','$knee','$cdate','$user')";
            
        }
        
if ($acause!="0") {
            $table = "memberarm";
    if ($arm=="") {
        $erarm = "Please Select Arm";
    }elseif ($elbow == "") {
            $erknee = "Please select Elbow";
        }

        $sql = "INSERT INTO $table ( `regnum`,`month`, `year`, `date`, `district`, `title`, `fname`, `lname`, `address` ,
    `nic`, `national`, `religion`, `dob`, `sex`, `phone`, `education`, `fammem`,
    `prioremp`, `presntemp`, `surgerydate`, `doctor`, `surgeonhospitle`, `anyother`, `afteramp`, `vocational`,
    `cause`, `whicharm`, `aobelbow`, `crton`, `crtby`)
VALUES ('$rnumber','$month','$yr', '$cdate' , '$district', ' $title', '$fname', '$lname',
    '$address','$nic','$national','$religion', '$dob' , '$gender' , '$number' , '$edu' , '$fmemb' , '$emp' , '$pemp'  , 
                 '$adate' , '$doc' , '$hos' ,'$anyother','$aftramp','$voc', '$acause' , '$arm','$elbow','$cdate','$user')";
                                                                                                
                                                                                                
                                                                                            }
        
                                                                                            
                                                                                            
                     if ($ocause!="0") {
                    $table = "memberother";
                                if (($oarm=="") || ($oleg == "")) {
                                    $erother = "Please Select Arm Or Leg";
                                }  
                                $sql = "INSERT INTO $table ( `regnum`,`month`, `year`, `date`, `district`, `title`, `fname`, `lname`, `address` ,
                                    `nic`, `national`, `religion`, `dob`, `sex`, `phone`, `education`, `fammem`, `prioremp`, `presntemp`, `surgerydate`, 
                          `doctor`, `surgeonhospitle`,`anyother`, `afteramp`, `vocational`,
                          `cause`, `other`, `whichlego`, `whicharmo`,
                                    crton,crtby )
             VALUES ('$rnumber','$month','$yr', '$cdate' , '$district', ' $title', '$fname', '$lname', '$address', 
                 '$nic','$national','$religion', '$dob' , '$gender' , '$number' , '$edu' , '$fmemb' , '$emp' , '$pemp'  , 
                 '$adate' , '$doc' ,'$hos','$anyother','$aftramp','$voc', '$ocause' , '$other','$oleg','$oarm','$cdate','$user')";
                                
                                
                     }
      $rslt = mysql_query($sql);
      
                                                                if($rslt){
                                                                    
//                                                                    
                                                                    $get= mysql_query("select * from $table order by regnum desc limit 1 ");
                                                                    $row = mysql_fetch_array($get);
                                                                        $nid = $row['regnum']." / ".$row['month']." / ".$row['year'];
                                                                        
                                                                        $_SESSION['nid'] = $nid;
                                                                        
                                                                        
                                                                        

                                                                    
								?>
                                      <input type='hidden' id='myText' value="<?php echo $nid ?>"/>
                                     
                                                            <script>
                                                                var myvar1 = document.getElementById("myText");
                                                               var myvar1 = document.getElementById("myText");
                                                               
                                                                alert('Reg Num  ' + myvar1.value);
                                                                    windo.location = "search.php";
                                                            </script>
                                                            
                                                            <script language="javascript">
                            window.location = "search.php";
                            </script>
                                                            
                                                                 <?php

                            } else {
                              echo "<script type='text/javascript'>alert('failed! reg num Already Exists')</script>";
                                    }
                }
    
    }

}  else {
    ?>
<script language ="javascript">
    window.location = "logout.php";
    </script>

<?php
}
?>
    