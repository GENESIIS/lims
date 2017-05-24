<?php
 if(!isset($_SESSION)) 
    { 
        session_start(); 
    }
include ('connection.php');
$admin = $_SESSION['level'];
$user = $_SESSION['username'];

$nic=$ernum=$erno=$ernonic= $ernoid  = "";


  if (isset($_POST['searchid'])) {
   
      $nic = $_POST['nic'];
      $type = $_POST['num'];
      
      if ($nic=="") {
          $ernonic = "Please Enter The NIC Number";
                        ?>
                            <script language="javascript">
                                alert('Please Enter The NIC Number');
                            </script>
                            <?php
      }elseif (preg_match("/\s/", $nic)) {
          $ernonic = "Please Enter correct NIC Number Without Any Spaces";
                        ?>
                            <script language="javascript">
                                alert('Please Enter correct NIC Number Without Any Spaces');
                            </script>
                            <?php
      }elseif ($type=="") { 
      $ernum = "Please Select the Type";
                        ?>
                            <script language="javascript">
                                alert('Please Select the Type');
                            </script>
                            <?php
  }elseif($type=="Foot"){
      $sqlft = mysql_query("select regnum,nic from memberfoot where nic = '$nic'");
        if (mysql_num_rows($sqlft)>0) {
         
          $row = mysql_fetch_array($sqlft);
          $x= $row['regnum'];
          $_SESSION['id']=$x;
           $_SESSION['table']="memberfoot";
           ?>
                            <script language="javascript">
                              window.location = "apply.php";
                            </script>
                            <?php
           
      } else {
    $ernonic  = "No ID/NIC Number Found";    
    }
  
  
  
  }elseif($type=="Arm"){
      
      $sqlarm = mysql_query("select regnum,nic from memberarm where nic = '$nic'");
      if (mysql_num_rows($sqlarm)>0) {
          echo "in 01";
        $row = mysql_fetch_array($sqlarm);
          $x= $row['regnum'];
          $_SESSION['id']=$x;
          $_SESSION['table']="memberarm";
          ?>
                            <script language="javascript">
                                 window.location = "apply.php";
                            </script>
                            <?php
    }else {
    $ernonic  = "No ID/NIC Number Found";    
    }
  
  
  }elseif($type=="Other"){
      $sqlothr = mysql_query("select regnum,nic from memberother where nic = '$nic'");
      if (mysql_num_rows($sqlothr)>0) {
        echo "in 01";
        $row = mysql_fetch_array($sqlothr);
          $x= $row['regnum'];
          $_SESSION['id']=$x;
          $_SESSION['table']="memberother";
          ?>
                            <script language="javascript">
                                 window.location = "apply.php";
                            </script>
                            <?php
    }  else {
    $ernonic  = "No ID/NIC Number Found";    
    }
      

  }else {
           $ernonic  = "No ID/NIC Number Found"; 
      
          
      }
      
      
      
      

  }elseif (isset($_POST['search'])) {
     
      $foot = $_POST['regfoot'];
      $arm = $_POST['regarm'];
      $other = $_POST['regother'];
        $sql = FALSE;
      
      if ( ($foot=="") && ($arm=="") &&($other=="")  ) {
          $ernoid = "Please Enter The Reg Number";
        ?>
                            <script language="javascript">
                                alert('Please Enter The Reg Number');
                            </script>
                            <?php
    }elseif ($foot!="") {
          $num = explode("/", $foot);
          $regnum = $num[0];
          $sql = mysql_query("select regnum from memberfoot where regnum='$regnum'");
          $_SESSION['table']="memberfoot";
      }elseif ($arm!="") {
        $num = explode("/", $arm);
          $regnum = $num[0];
          $sql = mysql_query("select regnum from memberarm where regnum='$regnum'");
          $_SESSION['table']="memberarm";
    }elseif ($other!="") {
        $num = explode("/", $other);
          $regnum = $num[0];
          $sql = mysql_query("select regnum from memberother where regnum='$regnum'");
          $_SESSION['table']="memberother";
    }else {
         $ernoid = "Incorrect Registration Number";
        ?>
                            <script language="javascript">
                                alert('Reg Number Incorrect');
                            </script>
                            <?php
                            
    }
    
    
    
    
    
      
      
      
//        $num = $_POST['num'];
//        $reg = explode("/", $num);
//        $regnum= $reg[0];
//
//              if ($num=="") {
//                    $ernum= "Insert a Numeric Value";
//                }else {
//                    $search =  mysql_query("select * from member where regnum='$regnum'");
                    if ($sql) {
                        
                        $row = mysql_fetch_array($sql);
                           $x= $row['regnum'];
                            $_SESSION['id']=$x;
                          $_SESSION['id'];
                          
                          if ($x=="") {
                              $ernoid = "Incorrect Registration Number";
                              ?>
                            <script language="javascript">
                                alert('Incorrect Registration Number');
                            </script>
                            <?php
                          }  else {
                               ?>
                            <script language="javascript">
                            window.location = "apply.php";
                            </script>
                            <?php
                          }
                            
                                }else {
                                    
                                 
                                }
//                }      
}  elseif(isset ($_POST['confirm'])) {
   
    
}

?>
<?php 



?>
                            <input type="hidden" name="hid" value="<?php echo $x ?>" >
        