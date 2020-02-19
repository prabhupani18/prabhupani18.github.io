<?php
    date_default_timezone_set('ASIA/KOLKATA') ;
	$con = new mysqli("localhost","root","","ninjagym");

	// Check connection
	if ($con->connect_errno) {
	  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
	  exit();
	}
?>