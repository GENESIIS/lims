<?php

$con = mysql_connect("localhost", "lims_db", "Lims!^1ish");

if (!$con) {
    die("cant connect".mysql_error());
}  else {
$db = mysql_selectdb("demo_lims_db", $con);    
}



?>
