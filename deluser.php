<?php
session_start();
include ('connection.php');
$admin = $_SESSION['level'];

if ($admin=="admin") {
    
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
