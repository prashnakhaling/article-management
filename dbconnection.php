<?php
$host = 'localhost';
$name = 'root';
$hostpassword = '';
$databasename = 'articlemanagements';

$connectin = mysqli_connect($host, $name, $hostpassword, $databasename);
 if (!$connectin) {
    die("Failed to connect:") . mysqli_connect_error();
     exit();
 }