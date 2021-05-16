<?php

  $databaseHost = 'localhost';
  $databaseName = 'latpim_transmigrasi';
  $databaseUsername = 'kmf';
  $databasePassword = 'root';
   
  $mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName, '3399'); 
  
  date_default_timezone_set('Asia/Makassar');

?>