<?php
session_start();
include ('connection.php');
$user = $_SESSION['adminname'];

if ($user!="") {
        $date = date(Y.m.j);
                    

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
                                                        echo"sucsess";
                                                             }  else {
                                                                 echo "sql doesnt run";    
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
                                                            echo"sucsessfully updated with the pw";
                                                                 }  else {
                                                                     echo "sql doesnt run";    
                                                                 }
                                                                 $unm = $uname;
                                                             $lvl = $level;
                            
                        }
    
    
               

}  else {
    ?>
<script language ="javascript">
    window.location = "login.php";
    </script>

<?php
}

?>