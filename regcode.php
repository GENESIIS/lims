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
    $yr = date(Y);
    
    $rnumber = $_POST['rnumber'];
    $date = $_POST['date'];
    $district = $_POST['district'];
     $title = $_POST['title'];
     $fname = $_POST['fname'];
      $lname = $_POST['lname'];
       $address = $_POST['address'];
       $age = $_POST['age'];
        $gender = $_POST['gender'];
        $number = $_POST['number'];
        $edu = $_POST['edu'];
         $fmemb = $_POST['fmemb'];
         $emp = $_POST['emp'];
         $pemp = $_POST['pemp'];
         $adate = $_POST['adate'];
         $case = $_POST['case'];
          $hos = $_POST['hos'];
          $leg = $_POST['leg'];
          $knee = $_POST['knee'];
          
//          if ($rnumber == "")
//          {$ernum = "please enter number";}
//          
//      else
	
if($leg == "Left Leg")
{$left = "checked";}

else
	
	{$right = "checked";}


     if ($district == "") 
    { $erdis = "please select distric ";}
    
    elseif ($title == "") 
    { $ertil = "please select title  ";}
          
     elseif ($fname == "") 
    { $erfnsme = "please enter frist name ";}
    
     elseif ($address == "") 
    { $erad = "please enter address ";}
    
    elseif ($age == "") 
    { $ersge = "please enter age ";}
    
    elseif ($gender == "") 
    { $ergen = "please select gender ";}
    
    elseif ($number == "") 
    { $ernum = "please enter number ";
    
    } else {
    
      $sql = "INSERT INTO member (regnum,month,year, date ,district ,title ,fname ,lname,address ,age ,sex ,phone,education ,fammem ,presntemp, prioremp,surgerydate,reason ,surgeonhospitle,whichleg ,bouk,crton,crtby )
             VALUES ('$rnumber','$month','$yr', '$cdate' , '$district', ' $title', '$fname', '$lname', '$address', '$age' , '$gender' , '$number' , '$edu' , '$fmemb' , '$emp' , '$pemp'  , 
                 '$adate' , '$case' , '$hos' , '$leg' , '$knee','$cdate','$user')";
      
      $rslt = mysql_query($sql);
      
                                                                if($rslt){
                                                                    
                                                                    $get= mysql_query("select * from member order by regnum desc limit 1 ");
                                                                    $row = mysql_fetch_array($get);
                                                                        $nid = $row['regnum']." / ".$row['month']." / ".$row['year'];
                                                                        
                                                                        $_SESSION['nid'] = $nid;
                                                                        
                                                                        
                                                                        

                                                                    
								?>
                                      <input type='hidden' id='myText' value="<?php echo $nid ?>"/>
                                     
                                                            <script>
                                                                var myvar1 = document.getElementById("myText");
                                                               var myvar1 = document.getElementById("myText");
                                                               
                                                                alert('Reg Num JF ' + myvar1.value);
                                                                    windo.location = "search.php";
                                                            </script>
                                                            
                                                            <script language="javascript">
                            window.location = "search.php";
                            </script>
                                                            
                                                                 <?php

                            } else {
                              echo "<script type='text/javascript'>alert('failed!')</script>";
                                    }
                }
    
    }

}  else {
    ?>
<script language ="javascript">
    window.location = "login.php";
    </script>

<?php
}
?>
    