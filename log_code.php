<?php
session_start();
include 'connection.php';

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
                                          
                                      $_SESSION['adminname'] = $username;   
                                        ?>
                            <script language="javascript">
                            window.location = "adminindex.php";
                            </script>
                            <?php   
                                       echo " you are admin"  ; 
                                      }
                                      
                                elseif($userl == "user") {
                                    
                                     $_SESSION['username'] = $username;
                                               ?>
                           <script language="javascript">
                             window.location = "registration.php";
                            </script>
                            <?php 
                                   echo " you are user"  ;  
                                }
                                
                               
                                         //$_SESSION['adminname'] = $username;
                             //echo "You are logged as an Admin";
                            ?>
                            <!--script language="javascript">
                            window.location = "adminindex.php";
                            </script-->
                            <?php
                              }
                              
                               else {
                                                    $er1 =  "Please Enter correct User Name or Password";    
                                                }
}


if (isset($_POST['btnlog'])) {
   $username = $_POST['txtuname'];
    $password = $_POST['txtpw'];
   $level = $_POST['level'];
    $md5pw = md5($password);
  
                if($username == ""){
                    $ernm = "Please Enter user name";
                } elseif($password == ""){
                   $erpw = "Please Enter Pasword";
                }
                elseif($level==""){
                   $erlvl = "Please Select Level";
                } 
                
                elseif ($level=="admin"){

                                    $logsql ="SELECT * FROM user where username = '$username' and pw = '$md5pw' " ;
                                   echo $rslt = mysql_query($logsql); 
                                  $records = mysql_num_rows($rslt);

                                     if (mysql_num_rows($rslt)>= 1){
                                         $_SESSION['adminname'] = $username;
                             //echo "You are logged as an Admin";
                            ?>
                            <script language="javascript">
                            window.location = "adminindex.php";
                            </script>
                            <?php
                              }
                                        
                             else {
                             
                            echo 'Please Enter Correct User Name or Password';
                                   }


                                } 
                                
                                elseif($level=="user") {
                                    
                                     $logsql ="SELECT * FROM user where username = '$username' and pw = '$md5pw'" ;
                                     $rslt = mysql_query($logsql);
                                    $records = mysql_num_rows($rslt);

                                                 if ($records>=1){
                                                     $_SESSION['username'] = $username;
                                                    // echo "You are logged as a User";
                                                                    ?>
                                                                    <script language="javascript">
                                                                    window.location = "userindex.php";
                                                                    </script>
                                                                    <?php
                                                }  else {
                                                    echo "Please Enter correct User Name or Password";    
                                                }
                                         }
         
}


?>
