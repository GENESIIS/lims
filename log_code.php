<?php
session_start();
include 'connection.php';

$er1="";
$ernm="";
$erpw="";
//$_POST["remember_me"] = 
//$_POST["remember_me"]="";


if(isset($_POST['btnlog']))
    
{
    
   $username = $_POST['txtuname'];
    $password = $_POST['txtpw']; 
    $md5pw = md5($password);
    
     if($username == ""){
                    $ernm = "Please Enter User Name";
                } elseif($password == ""){
                   $erpw = "Please Enter Password";
                }
                
              $logsql ="SELECT * FROM user where username = '$username' and pw = '$md5pw' " ;  
                                   $rslt = mysql_query($logsql); 
                                    $records = mysql_num_rows($rslt);
                                 
                                 $row = mysql_fetch_array($rslt);
                                 
                               
                                    
                                       if (mysql_num_rows($rslt)>= 1){
                                           
                                            
                                    if(isset($_POST['remember_me'])=='1')
                                        {
                                        $hour = time() + 3600 * 24 * 30;
                                        setcookie('username', $username, $hour);
                                             setcookie('password', $password, $hour);
                                             //header("Location:login.php");
                                            
                                        } 
                                      
                                      $userl =  $row["userlevel"];
                                      
                                      if ($userl == "admin")
                                      {
                                        $_SESSION['level'] = "admin";  
                                      $_SESSION['username'] = $username;   
                                        ?>
                            <script language="javascript">
                            window.location = "pending.php";
                            </script>
                           <?php    
                                      }
                                      
                                elseif($userl == "user") {
                                    $_SESSION['level'] = "user"; 
                                     $_SESSION['username'] = $username;
                                               ?>
                           <script language="javascript">
                             window.location = "registration.php";
                            </script>
                           <?php 
                                     
                                }elseif ($userl=="super admin") {
                                    $_SESSION['level'] = "super"; 
                                     $_SESSION['username'] = $username;
                                               ?>
                           <script language="javascript">
                             window.location = "user.php";
                            </script>
                           <?php 
                                   
                                    }
                          
                                
                              }
                              
                               else {
                                                    $er1 =  "Invalid User Name and Password";    
                                                }
                                                
                                                


}




?>
