<?php

$sbdDetails = file_get_contents('https://api.coinmarketcap.com/v1/ticker/steem/');
$sbdfile = fopen("steem.txt", "w") or die("Unable to open file!");
fwrite($sbdfile, $sbdDetails);
	fclose($sbdfile);
	
	?>