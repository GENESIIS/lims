<?php

include ('connection.php');
$user = $_SESSION['username'];


        $date = date('Y.m.d');
                    

                    $uname = $_POST['username'];
                   $level = $_POST['level'];
                    $pw = $_POST['pasword'];
                    $repw = $_POST['rpw'];
                    $id = $_POST['editid'];

                    if ($uname == "") {
                        $ernm = "Please Enter User Name";            
                    }elseif ($pw  == "") {
                                            $rslt = mysql_query("UPDATE `user` SET `username`='$uname',
                                                    `userlevel`='$level',`modby`='$user',
                                                    `modon`='$date' WHERE userid='$id'");

                                                             if ($rslt)
                                                             {
                                                         ?>
                                                        <script language ="javascript">
                                                            alert('Successfuly Updated');
                                                            window.location = "user_admin.php";
                                                            </script>

                                                        <?php
                                                             }  else {
                                                                  ?>
                                                        <script language ="javascript">
                                                            alert('Error occured. Please re enter the details');
                                                            window.location = "user_admin.php";
                                                            </script>

                                                        <?php  
                                                             }
                                                             
                                                             $unm = $uname;
                                                             $lvl = $level;
                                                             
                     }elseif($pw!=$repw){
                    $pwer= "Your Password Doesnt match";    
                        }  else {
                            $mdpw = md5($pw);
                                                    $rslt = mysql_query("UPDATE `user` SET `username`='$uname',
                                                        `userlevel`='$level',`pw`='$mdpw',`modby`='$user',
                                                        `modon`='$date' WHERE userid='$id'");

                                                                 if ($rslt)
                                                                 {
                                                                     ?>
                                                        <script language ="javascript">
                                                            alert('Successfuly Updated with the Password');
                                                            window.location = "user.php";
                                                            </script>

                                                        <?php
                                                            
                                                                 }  else {
                                                                      ?>
                                                        <script language ="javascript">
                                                            alert('Error occured. Please re enter the details');
                                                            window.location = "user.php";
                                                            </script>

                                                        <?php   
                                                                 }
                                                                 $unm = $uname;
                                                             $lvl = $level;
                            
                        }
    
    
               


?>