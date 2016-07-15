<?php
session_start();

$adname = $_SESSION['adminname'];
$usname = $_SESSION['username'];


if (($usname !="" ) || ($adname !="" )){
    session_unset();
    ?>
<script language ="javascript">
    window.location = "login.php";
    </script>

<?php
}


?>
