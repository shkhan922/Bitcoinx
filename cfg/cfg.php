<?php 
class object {}
$CFG = new object ();
$CFG->dbhost = "localhost";
$CFG->dbname = "wlox";
$CFG->dbuser = "tester";
$CFG->dbpass = "tester";
error_reporting(E_ALL & ~E_NOTICE & ~E_STRICT) ;
?>
