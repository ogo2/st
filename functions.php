<?php

  if (isset($_POST['otv'])){
    require('vender/connect.php');
    
    $otv_po = $_POST['otv'];
    $ip_users = $_SERVER['REMOTE_ADDR'];
    $add_product = "INSERT INTO otvet_calc (ip_user, primer) VALUES ('$otv_po', '$ip_users');";
    mysql_query($CONNECT, $add_product);
  };

      
    ?>