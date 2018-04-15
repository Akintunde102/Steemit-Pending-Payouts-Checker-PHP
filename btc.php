<?php

$btcDetails = file_get_contents('https://api.coinmarketcap.com/v1/ticker/bitcoin/');
$btcfile = fopen("btc.txt", "w") or die("Unable to open file!");
fwrite($btcfile, $btcDetails);
	fclose($btcfile);
	
	?>