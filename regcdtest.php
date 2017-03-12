<?php

    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 

include ('connection.php');
//$admin = $_SESSION['adminname'];
$user = $_SESSION['username'];


if (($user!="")) {

$cdate = date("Y.m.d");

$month = date('m');
    $yr = date("Y");
    
 $district =$title =  $fname =  $lname = $address =$nic =$national =  $religion =  $dob =   $byr =   
       $birthyr = $age =  $gender =  $number =$edu = $fmemb =  $emp = $pemp =$adate = "";
         
          
        $erleg=$erknee =$hos = $doc =  $anyother =$aftramp =  $voc = $ftcause = $leg = $knee = $acause = $arm =  $elbow = "";
          
       $erarm = $ocause= $other = $oarm= $oleg = "";
        
        
     $erdis = $ertil = $erfnsme =$erad =$ersge =$ergen = $ernum = "";


if (isset($_POST['save']))
    
{
   
    $month = date('m');
    $yr = date("Y");
    
//    $rnumber = $_POST['rnumber'];
    $date = date("Y.m.d");
    $district = $_POST['district'];
     $title = $_POST['title'];
     $fname = $_POST['fname'];
      $lname = $_POST['lname'];
       $address = $_POST['address'];
       $nic = $_POST['nic'];
       $national = $_POST['national'];
       if (isset($_POST['religion'])) {
            $religion = $_POST['religion'];
       }
      
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
          $anyother = $_POST['otdis'];
          $aftramp = $_POST['afteramp'];
          $voc =$_POST['voc'];
          
          
          if ($_POST['footcause']!="") {
                       $ftcause = $_POST['footcause'];
                      
}elseif ($_POST['armcause']!="") {
             $acause = $_POST['armcause'];
             
}elseif ($_POST['othercause']!="") { 
         $ocause = $_POST['othercause'];
}  else {
    
}

       
//         echo $length =  preg_match_all( "/[0-9]/", $nic );
//         if ($length===FALSE) {
//             echo "two";
//         }
//echo $nic;
//             if ($nic!="") {
//                 ?>
<!--<script>
    alert("Please Insert A Valied NIC number ");
</script>-->

<?php
//                      header("location:javascript://history.go(-1)");
//                      
//                      
//                             
//             }
             

//  if (($nic!="")&& (strlen($nic)<10)) {
//                 ?>
<!--<script>
    alert("Please Insert A Valied NIC Number ");
</script>-->

<?php
//                            header("location:javascript://history.go(-1)");
//                             
//             }


//               if (($number!="")&& (strlen($number)!=10)) {
//                 ?>
<!--<script>
    alert("Please Insert A Valied Phone Number ");
</script>-->

<?php
//                            header("location:javascript://history.go(-1)");
//                             
//             }
//             
//             
             

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
     ?>
<script>
    alert("please Enter number");
</script>

<?php
    }elseif(!preg_match('/^\d{10}$/', $number)){
        ?>
<script>
    alert("Please enter A valied Phone Number");
</script>

<?php
    
    }elseif (($nic!="") && (strlen($nic)<10)) 
    { $ernum = "please enter correct NIC number ";
     ?>
<script>
    alert("please Enter  NIC number");
</script>

<?php
    }elseif(($ftcause!=0) && ($acause!=0)){
        ?>
<script>
    alert("Please select Only One Cause");
</script>

<?php
    
    
    } else{
        
            if ($ftcause!="0") {
                echo "foot";
                      $leg = $_POST['leg'];
                      $knee = $_POST['knee'];
                $table = "memberfoot";
        if ($leg=="") {
            $erleg = "Please Select Leg";
        }elseif ($knee == "") {
                $erknee = "Please select Knee";
            }
            
            $sql = "INSERT INTO $table (`month`, `year`, `date`, `district`, `title`, `fname`, `lname`, `address` , `nic`, `national`, `religion`, `dob`, `sex`, `phone`, `education`, `fammem`,
                `prioremp`, `presntemp`, `surgerydate`, `doctor`, `surgeonhospitle`,`anyother`, `afteramp`, `vocational`, `cause`, `whichleg`, `aouk`, `crton`, `crtby` )
             VALUES ('$month','$yr', '$cdate' , '$district', ' $title', '$fname', '$lname', '$address', 
'$nic','$national','$religion',                 
'$dob' , '$gender' , '$number' , '$edu' , '$fmemb' , '$emp' , '$pemp'  , 
                 '$adate' , '$doc' , '$hos' ,'$anyother','$aftramp','$voc',
                     '$ftcause' , '$leg','$knee','$cdate','$user')";
            
        }elseif ($acause!=0) {
            echo "arm";
            $arm = $_POST['arm'];
             $elbow = $_POST['elbow'];
            $table = "memberarm";
    if ($arm=="") {
        $erarm = "Please Select Arm";
    }elseif ($elbow == "") {
            $erknee = "Please select Elbow";
        }

        $sql = "INSERT INTO $table ( `month`, `year`, `date`, `district`, `title`, `fname`, `lname`, `address` ,
    `nic`, `national`, `religion`, `dob`, `sex`, `phone`, `education`, `fammem`,
    `prioremp`, `presntemp`, `surgerydate`, `doctor`, `surgeonhospitle`, `anyother`, `afteramp`, `vocational`,
    `cause`, `whicharm`, `aobelbow`, `crton`, `crtby`)
VALUES ('$month','$yr', '$cdate' , '$district', ' $title', '$fname', '$lname',
    '$address','$nic','$national','$religion', '$dob' , '$gender' , '$number' , '$edu' , '$fmemb' , '$emp' , '$pemp'  , 
                 '$adate' , '$doc' , '$hos' ,'$anyother','$aftramp','$voc', '$acause' , '$arm','$elbow','$cdate','$user')";
                                                                                                
                                                                                                
 }elseif ($ocause!=0) {
     echo "other";
            $other = $_POST['other'];
             $oarm = $_POST['otherarm'];
             $oleg = $_POST['otherleg']; 
                    $table = "memberother";
                                if (($oarm=="") || ($oleg == "")) {
                                    $erother = "Please Select Arm Or Leg";
                                }  
                                $sql = "INSERT INTO $table ( `month`, `year`, `date`, `district`, `title`, `fname`, `lname`, `address` ,
                                    `nic`, `national`, `religion`, `dob`, `sex`, `phone`, `education`, `fammem`, `prioremp`, `presntemp`, `surgerydate`, 
                          `doctor`, `surgeonhospitle`,`anyother`, `afteramp`, `vocational`,
                          `cause`, `other`, `whichlego`, `whicharmo`,
                                    crton,crtby )
             VALUES ('$month','$yr', '$cdate' , '$district', ' $title', '$fname', '$lname', '$address', 
                 '$nic','$national','$religion', '$dob' , '$gender' , '$number' , '$edu' , '$fmemb' , '$emp' , '$pemp'  , 
                 '$adate' , '$doc' ,'$hos','$anyother','$aftramp','$voc', '$ocause' , '$other','$oleg','$oarm','$cdate','$user')";
                                
                                
                     }  else {
                         
                         ?>
<script>
    alert("Please Select Limb Type");
    history.go(-1);
</script>

<?php

 //header("location:javascript://history.go(-1)");
 
                     }
        
      
      $rslt = mysql_query($sql);
//      echo "in rslt00";
//      
//        if ($ftcause=="0") {echo "ft is empty";
//            
//        }elseif ($acause==0) {
//                echo "arm is empty";
//            } elseif ($ocause=="0") {
//            echo "other is empty";
//        }
        
      
      die();
                                                                if($rslt){
                                                                     
                                                                    $get= mysql_query("select * from $table order by regnum desc limit 1");
                                                                    $row = mysql_fetch_array($get);
                                                                        $nid = $row['regnum']." / ".$row['month']." / ".$row['year'];
                                                                        
                                                                        $_SESSION['nid'] = $nid;
                                                                        
                                                                        if ($table=="memberfoot") {
                                                                            $tbl = "J.F ";
                                                                        }elseif ($table=="memberarm") {
                                                                            $tbl = "A.A ";
                                                                            }  else {
                                                                            $tbl = "O.A";    
                                                                            }
                                                                       
                                                                    
								?>
                                      <input type='hidden' id='myText' value="<?php echo $tbl." ".$nid ?>"/>
                                     
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
                              echo "<script type='text/javascript'>alert('Error occured. Some fields are empty.')</script>";
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
    