<?php
  error_reporting(0);
  //connect to MySQLi database
  $connection = mysqli_connect('localhost', 'zitj', 'tjzi1389', 'webstronauts');

  if(!$connection){
      echo 'Connection error' . mysqli_connect_error();
  }
?>