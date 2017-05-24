<?php
if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
include ('connection.php');
$admin = $_SESSION['level'];
$user = $_SESSION['username'];


if (($user!="")) {

$cdate = date("Y.m.d");

 $date =$district = $regnumber=$title =  $fname =  $lname = $address =$nic =$national =  $religion =  $dob =   $byr =   
       $birthyr = $age =  $gender =  $number =$edu = $fmemb =  $emp = $pemp =$adate = "";
         
          
        $erleg=$erknee =$hos = $doc =  $anyother =$aftramp =  $voc = $ftcause = $leg = $knee = $acause = $arm =  $elbow = "";
          
       $erarm = $ocause= $other = $oarm= $oleg = "";
        
        
     $erdis = $ertil = $erfnsme =$erad =$ersge =$ergen = $ernum = $erother= "";





if (isset($_POST['save']))
    
{
   
    //$month = date('m');
   // $yr = date("Y");
    
    
    
    
    
  $regnumber = $_POST['rnumber'];
    $date = $_POST['date'];
    $district = $_POST['district'];
     $title = $_POST['title'];
     $fname = $_POST['fname'];
      $lname = $_POST['lname'];
       $address = $_POST['address'];
       $nic = $_POST['nicold'];
       $national = $_POST['national'];
       if (isset($_POST['religion'])) {
            $religion = $_POST['religion'];
       }
       $dob = $_POST['dob'];
//       $age = $_POST['age'];
                    $byr = explode("-", $dob);
                   $birthyr = $byr[0];
                   //$age = $yr - $birthyr;
       
       
       
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
          
                 if ($_POST['footcause']!="0") {
                       $ftcause = $_POST['footcause'];
                      
}elseif ($_POST['armcause']!="0") {
             $acause = $_POST['armcause'];
             
}elseif ($_POST['othercause']!="0") { 
         $ocause = $_POST['othercause'];
} 
             
             $reg = explode("/", $regnumber);
             $rnumber= isset($reg[0])? $reg[0]:NULL;
             $month = isset($reg[1])? $reg[1]:NULL;
              $yr= isset($reg[2])? $reg[2]:NULL;
          
             
           // echo $nic;
        
//  if (($nic!="")&& (strlen($nic)<10)) {
//                 ?>
<!--<script>
    alert("Please Insert A Valied nic Number ");
</script>-->

<?php
//                           header("location:javascript://history.go(-1)");
//                             
//             }
             
               if (($number!="")&& (strlen($number)<10)) {
                 ?>
<script>
    alert("Please Insert A Valied Phone Number ");
</script>

<?php
                           header("location:javascript://history.go(-1)");
                             
             }
            
            
      if ($rnumber == "") {
            ?>
            <script>
                alert("Please enter The Registration Number");
            </script>

            <?php
    }elseif ($district == "") 
    { $erdis = "please select distric ";}
    
    elseif ($title == "") 
    { $ertil = "please select Title  ";}
          
     elseif ($fname == "") 
    { $erfnsme = "please enter Frist name ";}
    
     elseif ($address == "") 
    { $erad = "please enter Address ";}
    
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
    
    
    }elseif ($ftcause!="") {
                
                      $leg = ($_POST['leg']);
                      $knee = ($_POST['knee']);
                $table = "memberfoot";
        if ($leg=="") {
            $erleg = "Please Select Which Leg";
        }elseif ($knee == "") {
                $erknee = "Please Select Below or Under Knee";
            }  else {
				
                 $get= mysql_query("select * from $table where regnum='$rnumber'");
                 if (mysql_num_rows($get)<1) {
                     $sql = "INSERT INTO $table (`regnum`,`month`, `year`, `date`, `district`, `title`, `fname`, `lname`, `address` , `nic`, `national`, `religion`, `dob`, `sex`, `phone`, `education`, `fammem`,
                `prioremp`, `presntemp`, `surgerydate`, `doctor`, `surgeonhospitle`,`anyother`, `afteramp`, `vocational`, `cause`, `whichleg`, `aouk`, `crton`, `crtby` )
             VALUES ('$rnumber','$month','$yr', '$cdate' , '$district', ' $title', '$fname', '$lname', '$address', 
'$nic','$national','$religion',                 
'$dob' , '$gender' , '$number' , '$edu' , '$fmemb' , '$emp' , '$pemp'  , 
                 '$adate' , '$doc' , '$hos' ,'$anyother','$aftramp','$voc',
                     '$ftcause' , '$leg','$knee','$cdate','$user')";
                      $rslt = mysql_query($sql);
                      result($table,$rnumber);  
                 }  else {
                       ?>
                        <script>
                            alert("Registration Number Already Exists");
                        </script>

                        <?php
                 }
               
                 
            }
    }elseif ($acause!="") {
            
            $arm = isset($_POST['arm']) ;
             $elbow = isset($_POST['elbow']);
            $table = "memberarm";
    if ($arm=="") {
        $erarm = "Please Select Which Arm";
    }elseif ($elbow == "") {
            $erknee = "Please Select Above or Below Elbow";
        }  else {
            $get= mysql_query("select * from $table where regnum='$rnumber'");
                 if (mysql_num_rows($get)<1) {
                     $sql = "INSERT INTO $table ( `regnum`,`month`, `year`, `date`, `district`, `title`, `fname`, `lname`, `address` ,
    `nic`, `national`, `religion`, `dob`, `sex`, `phone`, `education`, `fammem`,
    `prioremp`, `presntemp`, `surgerydate`, `doctor`, `surgeonhospitle`, `anyother`, `afteramp`, `vocational`,
    `cause`, `whicharm`, `aobelbow`, `crton`, `crtby`)
VALUES ('$rnumber','$month','$yr', '$cdate' , '$district', ' $title', '$fname', '$lname',
    '$address','$nic','$national','$religion', '$dob' , '$gender' , '$number' , '$edu' , '$fmemb' , '$emp' , '$pemp'  , 
                 '$adate' , '$doc' , '$hos' ,'$anyother','$aftramp','$voc', '$acause' , '$arm','$elbow','$cdate','$user')";
         $rslt = mysql_query($sql);
                                          result($table,$rnumber); 
                     
                 }  else {
                     ?>
                        <script>
                            alert("Registration Number Already Exists");
                        </script>

                        <?php
                 }
            
          
        }
       }elseif ($ocause!="") {
     
            $other = $_POST['other'];
             $oarm = $_POST['otherarm'];
             $oleg = $_POST['otherleg']; 
                    $table = "memberother";
                                if (($oarm=="") || ($oleg == "")) {
                                    $erother = "Please Select Arm Or Leg";
                                }  else {
                                    $get= mysql_query("select * from $table where regnum='$rnumber'");
                 if (mysql_num_rows($get)<1) {
                         $sql = "INSERT INTO $table ( `regnum`,`month`, `year`, `date`, `district`, `title`, `fname`, `lname`, `address` ,
                                    `nic`, `national`, `religion`, `dob`, `sex`, `phone`, `education`, `fammem`, `prioremp`, `presntemp`, `surgerydate`, 
                          `doctor`, `surgeonhospitle`,`anyother`, `afteramp`, `vocational`,
                          `cause`, `other`, `whichlego`, `whicharmo`,
                                    crton,crtby )
             VALUES ('$rnumber','$month','$yr', '$cdate' , '$district', ' $title', '$fname', '$lname', '$address', 
                 '$nic','$national','$religion', '$dob' , '$gender' , '$number' , '$edu' , '$fmemb' , '$emp' , '$pemp'  , 
                 '$adate' , '$doc' ,'$hos','$anyother','$aftramp','$voc', '$ocause' , '$other','$oleg','$oarm','$cdate','$user')";
                                   $rslt = mysql_query($sql);
                                result($table,$rnumber);
                     
                 }  else {
                      ?>
                        <script>
                            alert("Registration Number Already Exists");
                        </script>

                        <?php
                 }
                                    
                               
                                }  
                                
       }   else {
                      //if (($ftcause=="0")&& ($acause=="0") && $ocause=="0" )
                         ?>
<script>
    alert("Please Select Limb Type");
    
</script>

<?php
                     }  
          
            
                }
    
 

}  else {
    ?>
<script language ="javascript">
    window.location = "logout.php";
    </script>

<?php
}

function result($table,$rnumber){
               
                  $get= mysql_query("select * from $table where regnum='$rnumber'");
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
                                                               
                                                                alert('Updated Reg Num  ' + myvar1.value);
                                                                    windo.location = "search.php";
                                                            </script>
                                                            
                                                            <script language="javascript">
                                                            window.location = "search.php";
                                                            </script>
                                                            
                                                                 <?php
            }

?>
    