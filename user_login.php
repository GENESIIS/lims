<?php
session_start();
include 'connection.php';


if (isset($_POST['btnlog'])){
    
    $username = $_POST['txtuname'];
    $password = $_POST['txtpw'];
    $level = $_POST['admin'];
    
  
    
                if($username == ""){
                    $ernm = "Plese Enter user name";
                        }
                elseif($password == ""){
                   $erpw= "Plese Enter Pasword";
                }elseif($level == ""){
                   $erlvl= "Plese Select Level";
                }
    
                                elseif ($level=="admin"){

                                    $logsql ="SELECT * FROM user where username = '$username' and pw = '$password'" ;
                                    $rslt = mysql_query($logsql);
                                    $records = mysql_num_rows($rslt);

                                     if ($records>=1){
                                            $_SESSION['adminusername'] = $username;
                                            echo "You are logged as an Admin";

                            ?>
                            <script language="javascript">
                            window.location = "#";
                            </script>
                            <?php

                                        }
                                        
                             else {
                                         echo 'please enter correct username & pasword';
                                   }


                                }elseif($level=="user") {
                                    echo "login as user";
                                     $logsql ="SELECT * FROM user where username = '$username' and pw = '$password'" ;
                                     $rslt = mysql_query($logsql);
                                      $records = mysql_num_rows($rslt);

                                                 if ($records>=1){

                                                     $_SESSION['user'] = $username;
 
                                                     echo "You are logged as a User";
                                                                    ?>
                                                                    <script language="javascript">
                                                                    window.location = "#";
                                                                    </script>
                                                                    <?php
                                                }
                                   }
         
    
}

?>
<div align="center">
<form name="loging" method="post">
    <label>User Name</label><input type="text" name="txtuname"><?php echo $ernm  ?><br>
    <label>Password</label><input type="password" name="txtpw"><?php echo $erpw  ?><br>
    <input type="radio" name="admin" value="admin" />
        <label for="rdnew">Admin</label>
        <input type="radio" name="admin"  value="user"/>
        <label for="rdnew">User</label>  <?php echo $erlvl  ?><br>
    <input type="submit" name="btnlog" value="Loging">
    </div>
    