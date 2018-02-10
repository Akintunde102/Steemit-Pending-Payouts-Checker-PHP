<?php

$sbdDetails = file_get_contents('http://apilayer.net/api/live?access_key=7afc7765e9d32929688d06059e6cbfe5&currencies=NGN,GHS,EUR,CAD,GBP,ZAR');
$sbdfile = fopen("curr.txt", "w") or die("Unable to open file!");
fwrite($sbdfile, $sbdDetails);
	fclose($sbdfile);
	
	?>