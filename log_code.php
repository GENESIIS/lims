<?php
session_start();
include 'connection.php';


if (isset($_POST['btnlog'])) {
   $username = $_POST['txtuname'];
    $password = $_POST['txtpw'];
   $level = $_POST['level'];
    $md5pw = md5($password);
  
                if($username == ""){
                    $ernm = "Please Enter user name";
                } elseif($password == ""){
                   $erpw = "Please Enter Pasword";
                }elseif($level==""){
                   $erlvl = "Please Select Level";
                } elseif ($level=="admin"){

                                    $logsql ="SELECT * FROM user where username = '$username' and pw = '$md5pw'" ;
                                    $rslt = mysql_query($logsql); 
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


                                } elseif($level=="user") {
                                    
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
