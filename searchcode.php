<?php
session_start();
include ('connection.php');
$admin = $_SESSION['adminname'];
$user = $_SESSION['username'];


if (($user!="") || ($admin!="")) {

    echo "inside";
     
        $num = $_POST['num'];
        $reg = explode("/", $num);
        $regnum= $reg[0];

              if ($num=="") {
                    $ernum= "Insert a Numeric Value";
                }else {
                    $search =  mysql_query("select * from member where regnum='$regnum'");
                    if ($search) {
                        
                        $row = mysql_fetch_array($search);
                           $x= $row['regnum'];
                            $_SESSION['id']=$x;
                          echo $_SESSION['id'];
                            
                          ?>
                            <script language="javascript">
                            window.location = "apply.php";
                            </script>
                            <?php
                          
                          
                                }else {
                                echo "sql is not working";    
                                }
                }      


?>
<?php 

}  else {
    ?>
<script language ="javascript">
    window.location = "login.php";
    </script>

<?php
}

?>
    <input type="text" name="hid" value="<?php echo $x ?>" >
        