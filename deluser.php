<?php
session_start();
include ('connection.php');
$user = $_SESSION['adminname'];

if ($user!="") {
    
     if (isset($_POST['delete'])) {
   $id = $_POST['hidid'];
   $delete = mysql_query("delete  from user where userid='$id'");
   if ($delete) {
       $msg = "$id Deleted Successfuly";
   }  else {
   $msg = "Error on Deleting $id";    
   }
   
}
    
}else {
    ?>
<script language ="javascript">
    window.location = "logout.php";
    </script>

<?php
}

?>
