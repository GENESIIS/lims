<?php
session_start();
include ('connection.php');
$admin = $_SESSION['adminname'];
$user = $_SESSION['username'];


if (($user!="") || ($admin!="")) {
    
    
   $register = $_SESSION['id'];
 $reg = explode(" / ", $register);
 $sreg= $reg[0];
$table = $_SESSION['table'];

        $search = mysql_query("select * from $table where regnum='$sid'");
        $rows = mysql_fetch_array($search);
       


}  else {
    ?>
<script language ="javascript">
    window.location = "logout.php";
    </script>

<?php
}

?>