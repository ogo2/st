<?php
	echo "suka";
  if (isset($_POST['otv'])){
    require('vender/connect.php');
    $otv_po = $_POST['otv'];
    $ip_users = $_SERVER['REMOTE_ADDR'];
    $add_product = "INSERT INTO otvet (ip_users, otv) VALUES ('$ip_users', '$otv_po');";
    if ($CONNECT->query($add_product) === TRUE) {
		  echo "New record created successfully";
		} else {
		  echo "Error: " . $add_product . "<br>" . $CONNECT->error;
		}
  };

      
    ?>