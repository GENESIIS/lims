<?php
session_start();
include ('connection.php');
$admin = $_SESSION['adminname'];
$user = $_SESSION['username'];


  if (isset($_POST['searchid'])) {
   
      $nic = $_POST['nic'];
      
      
      $sqlarm = mysql_query("select regnum,nic from memberarm where nic = '$nic'");
      $sqlothr = mysql_query("select regnum,nic from memberother where nic = '$nic'");
      $sqlft = mysql_query("select regnum,nic from memberfoot where nic = '$nic'");
      
      
      
      
      
      if (mysql_num_rows($sqlft)>0) {
          echo "in 01";
          $row = mysql_fetch_array($sqlft);
          $x= $row['regnum'];
          $_SESSION['id']=$x;
           $_SESSION['table']="memberfoot";
           ?>
                            <script language="javascript">
                              window.location = "apply.php";
                            </script>
                            <?php
           
      }elseif (mysql_num_rows($sqlarm)>0) {
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
    }elseif (mysql_num_rows($sqlothr)>0) {
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
    $erno = "No ID Number Found";    
    }
      
      

  }elseif (isset($_POST['search'])) {
     
      $foot = $_POST['regfoot'];
      $arm = $_POST['regarm'];
      $other = $_POST['regother'];
        
      
      if ( ($foot=="") && ($arm=="") &&($other=="")  ) {
        ?>
                            <script language="javascript">
                                window.location = "apply.php";
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
                              ?>
                            <script language="javascript">
                                alert('No Records Found');
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
                                echo "sql is not working";    
                                }
//                }      
}  else {
//Do NOthing    
}

?>
<?php 



?>
    <input type="text" name="hid" value="<?php echo $x ?>" >
        