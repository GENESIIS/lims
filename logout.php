<?php
session_start();
include 'connection.php';

$admin = $_SESSION['level'];
$user = $_SESSION['username'];

session_unset();
    ?>
<script language ="javascript">
    window.location = "login.php";
    </script>

<?php


if (($admin!="" ) || ($user !="" )){
    session_unset();
    ?>
<script language ="javascript">
    window.location = "login.php";
    </script>

<?php
}  else {
    echo "nothing";    
}


?>
