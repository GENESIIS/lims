<?php

include ('connection.php');
$admin = $_SESSION['level'];
$user = $_SESSION['username'];

if (($user!="") || ($admin!="")) {
    
    $date = date("Y.m.d");
   $sid = $_SESSION['id'];
    $table = $_SESSION['table'];

        $admit = $_POST['admit'];
        $out = $_POST['out'];
        $discharge = $_POST['discharge'];
       $training = $_POST['training'];
        $ampamnt = $_POST['ampamnt'];
        $spons = $_POST['spons'];
        $spamnt = $_POST['sponsamnt'];
        
         if ($table=="memberfoot") {
             $tbl = "foot";
         }elseif ($table=="memberarm") {
             $tbl = "arm";
         }  else {
             $tbl = "other";
         }
        
         if (isset($_POST['limb'])) {
           $limb = $_POST['limb'];
		    $type = $limb;
        }
        
        $sqllimb = mysql_query("INSERT INTO $tbl (`regnum`, `date`, `admiton`, `outpatient`, `dischrg`, `trainin`, `amputepay`, 
            `spons`, `sponspaid`,`type`,`crton`, `crtby`) 
            VALUES ('$sid','$date','$admit','$out','$discharge','$training',
            '$ampamnt','$spons','$spamnt','$type','$date','$user')");
        
        if ($sqllimb) {
           ?>
<script>
    alert('Successfuly applied');
    window.location = "printapply02.php";
</script>
           <?php
        }  else {
            ?>
<script>
    alert('Failed To apply');
</script>
           <?php   
        }
        

         
}  else {
    ?>
<script language ="javascript">
    window.location = "logout.php";
    </script>

<?php
}
           
?>
