<?php
if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 

include ('connection.php');
$user = $_SESSION['username'];
 $lvl = $_SESSION['level'];

$pwer= $repwer =$erlnm =$erfnm=$fname=$lname=$erunm=$erpw= $level= $password ="";

if (($lvl=="admin")||($lvl=="super")) {
    $date = date('Y.m.d');
                    if(isset($_POST['register']))    
                {

                    $fname = $_POST['fname'];
                    $lname = $_POST['lname'];
                    $uname = $_POST['username'];
                   $level = $_POST['lvl'];
                 $pw = $_POST['pas'];
                    $repw = $_POST['rpw'];

                    if ($fname == "") {
                        $erfnm = "Please Enter First Name";            
                    }elseif ($lname  == "") {
                        $erlnm= "Please Enter Last name";
                    }elseif ($uname  == "") {
                        $erunm= "Please Enter User name";
                    }elseif ($level == "") {
                        $erlvl = "Please select Level";
                    }elseif ($pw == "") {
                        $pwer= "Please Enter a Password";
                      
                    }elseif ($pw!= $repw) {
                        $repwer= "Your Password Does not Match";
                      
                    } else { 
                        
                     $mdpw = md5($pw);
                     $sql = "select username from user where username = '$uname' ";

                     $rslt = mysql_query($sql);

                      $count = mysql_num_rows($rslt);

                      if ($count>=1)

                      {
                          $erunm= "User Name Already Exists";
                      }else{

                     $sql = "INSERT INTO `user`(`user_fname`, `user_lname`, `username`, `userlevel`, `pw`, `crtby`, `crton`) 
                         VALUES ('$fname','$lname','$uname','$level','$mdpw','$user','$date')";      
                            $rslt = mysql_query($sql);

                     if ($rslt)
                     {
                          ?>
                            <script language="javascript">
                                alert('Sucsessfuly Updated');
                                window.history.back();
                            </script>
                           <?php 

                

                     }  else {
                       ?>
                            <script language="javascript">
                                alert('Error Occureed. Please Try again');
                                window.history.back();
                            </script>
                           <?php    
                     }

                     }



                 }

                }  else {
                       
                }

                
                
}  else {
    
?>
<script language ="javascript">
    window.location = "login.php";
    </script>

<?php
    
    
}


?>
