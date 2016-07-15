<?php
session_start();
include ('connection.php');
$admin = $_SESSION['adminname'];
$user = $_SESSION['username'];


if (($user!="")) {
    
    
 $register = $_SESSION['id'];
 $reg = explode(" / ", $register);
 $sreg= $reg[0];

        $search = mysql_query("select * from member where regnum='$sreg'");
        $rows = mysql_fetch_array($search);
       


}  else {
    ?>
<script language ="javascript">
    window.location = "login.php";
    </script>

<?php
}

?>