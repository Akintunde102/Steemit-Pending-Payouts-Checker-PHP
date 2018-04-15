<?php

$ethDetails = file_get_contents('https://api.coinmarketcap.com/v1/ticker/ethereum/');
$ethfile = fopen("eth.txt", "w") or die("Unable to open file!");
fwrite($ethfile, $ethDetails);
	fclose($ethfile);
	
	?>