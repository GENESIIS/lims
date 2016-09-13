<?php
session_start();
include ('connection.php');
$admin = $_SESSION['adminname'];
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
        
         
        
        $sqllimb = mysql_query("INSERT INTO $tbl (`regnum`, `date`, `admiton`, `outpatient`, `dischrg`, `trainin`, `amputepay`, 
            `spons`, `sponspaid`,`crton`, `crtby`) 
            VALUES ('$sid','$date','$admit','$out','$discharge','$training',
            '$ampamnt','$spons','$spamnt','$date','$user')");
        
        if ($sqllimb) {
           ?>
<script>
    alert('Successfuly applied');
    window.location = "printapply.php";
</script>
           <?php
        }  else {
            ?>
<script>
    alert('Failed To apply');
</script>
           <?php   
        }
        
        
        
        
        
//        
//    
//        $sqllimb = mysql_query("INSERT INTO `arm`(`arm_id`, `regnum`, `date`, `admiton`, `outpatient`, `dischrg`, `trainin`, `amputepay`,
//            `spons`, `sponspaid`, `observation`, `recomand`, `confirm`, `condate`, `crton`, `crtby`, `modon`, `modby`)
//            VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6],
//            [value-7],[value-8],[value-9],[value-10],[value-11],[value-12],[value-13],[value-14],[value-15],[value-16],[value-17],[value-18])");
//        
//        
//    }  else {
//        
//        $sqllimb = mysql_query("INSERT INTO `other`(`oa_id`, `regnum`, `date`, `admiton`, `outpatient`, `dischrg`, `trainin`, `amputepay`,
//            `spons`, `sponspaid`, `observation`, `recomand`, `confirm`, `condate`, `crton`, `crtby`, `modon`, `modby`) 
//            VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6],[value-7],
//            [value-8],[value-9],[value-10],[value-11],[value-12],[value-13],[value-14],[value-15],[value-16],[value-17],[value-18])");
//        
//    }
    
    
    
    
        
        
        
         
}  else {
    ?>
<script language ="javascript">
    window.location = "logout.php";
    </script>

<?php
}

?>
