<?php 
//----INCLUDE APIS------------------------------------
include("api/api.inc.php");

//----BUSINESS LOGIC---------------------------------
//Start up a PHP Session for this user.
session_start();
$tmyname = $_REQUEST["myname"] ?? "";
$tlogintoken = $_SESSION["myuser"] ?? "";

?>