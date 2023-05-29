<?php
  $server = "localhost";
  $user = "root";
  $pass = "";
  $db = "erp_solar";
  // criar banco erp_solar no phpmyadmin

  if ($conn = mysqli_connect($server, $user, $pass, $db))
  {
    // echo "Connected";
  }
  else 
  {
    echo "Error";
  }