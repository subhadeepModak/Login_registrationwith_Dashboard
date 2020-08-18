<?php

// database conncetion 
session_start();
$servername = "localhost";
$server_user = "root";
$server_pass = "";
$dbname = "bitpastel";
$con = new mysqli($servername, $server_user, $server_pass, $dbname);
?>