<?php
session_start();
include 'connection.php';

$er1="";
$ernm="";
$erpw="";


if(isset($_POST['btnlog']))
    
{
    
   $username = $_POST['txtuname'];
    $password = $_POST['txtpw']; 
    $md5pw = md5($password);
    
     if($username == ""){
                    $ernm = "Please Enter user name";
                } elseif($password == ""){
                   $erpw = "Please Enter Pasword";
                }
                
              $logsql ="SELECT * FROM user where username = '$username' and pw = '$md5pw' " ;  
                                   $rslt = mysql_query($logsql); 
                                    $records = mysql_num_rows($rslt);
                                 
                                 $row = mysql_fetch_array($rslt);
                                 
                                // echo $row["userid"];
                                    
                                       if (mysql_num_rows($rslt)>= 1){
                                           
                                     // echo "case";   
                                      
                                      $userl =  $row["userlevel"];
                                      
                                      if ($userl == "admin")
                                      {
                                        $_SESSION['level'] = "admin";  
                                      $_SESSION['username'] = $username;   
                                        ?>
                            <script language="javascript">
                            window.location = "adminindex.php";
                            </script>
                            <?php   
                                       echo " you are admin"  ; 
                                      }
                                      
                                elseif($userl == "user") {
                                    $_SESSION['level'] = "user"; 
                                     $_SESSION['username'] = $username;
                                               ?>
                           <script language="javascript">
                             window.location = "registration.php";
                            </script>
                            <?php 
                                   echo " you are user"  ;  
                                }
                            ?>
                            
                            <?php
                              }
                              
                               else {
                                                    $er1 =  "Please Enter correct User Name or Password";    
                                                }
}




?>
