<?php
session_start();
include ('connection.php');
$user = $_SESSION['adminname'];

if ($user!="") {
    $date = date(Y.m.j);
                    if(isset($_POST['register']))    
                {

                    $uname = $_POST['username'];
                   $level = $_POST['level'];
                    $pw = $_POST['pasword'];
                    $repw = $_POST['rpw'];

                    if ($uname == "") {
                        $ernm = "Please Enter User Name";            
                    }elseif ($pw  == "") {
                        $pwer= "Please Enter a Password";
                    }elseif ($pw!= $repw) {
                        $repwer= "Your Password Does not Match";
                    }elseif ($level == "") {
                        $erlvl = "Please select Level";
                      
                    } else { 
                        
                     $mdpw = md5($pw);
                     $sql = "select username from user where username = '$uname' ";

                     $rslt = mysql_query($sql);

                      $count = mysql_num_rows($rslt);

                      if ($count>=1)

                      {
                          echo "User Name Already Exists";
                      }else{

                     $sql = "INSERT INTO `user`(`username`, `userlevel`, `pw`, `crtby`, `crton`) 
                         VALUES ('$uname','$level','$mdpw','$user','$date')";      
                            $rslt = mysql_query($sql);

                     if ($rslt)
                     {


                echo"sucsess";


                     }  else {
                         echo "sql doesnt run";    
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