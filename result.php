<?php
$username = $_GET["username"];
$username = str_replace('@', '', $username);
$url = 'https://api.steemjs.com/get_discussions_by_blog?query={"tag":"'.$username.'","limit":"100"}';
$json= file_get_contents($url);
$data = json_decode($json,true);



echo '<style>
a {
  text-decoration:none;
}
a:visited {
    color: darkgreen;
}
</style>';

echo '<body link="darkgreen">';
echo '<meta name="viewport" content="width=device-width, initial-scale=1">';
echo '<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">';
echo '<center><a href="index.php">
<img border="0" alt="Steemit" src="logo.png" width="400" height="200">
</a></center>';
echo '<div class="w3-container">';
echo '<table class="w3-table w3-striped w3-border" align="center">';
$total_price = 0;


			echo '<tr style="background: #cf5;"><td>Author</td><td>Parent</td><td>POST LINK</td><td>PENDING PAYOUT</td><td>YOUR EXPECTED PAYOUT</td></tr>';
foreach ($data as $item) {
	
	try
	{
		
		if(!($item["pending_payout_value"]=="0.000 SBD"))
		{
			echo "<tr>";
			$post_link = "https://www.steemit.com/@".$item["author"]."/".$item["permlink"];
			
			$author_link = "https://www.steemit.com/@".$item["author"];
			$post_title = substr($item["title"],0,44).'...';
			
			
			
			$price = str_replace(" SBD", "", $item["pending_payout_value"]);
			
			
			//Adjustment For 75% Returns for Authors
			if ($username == $item["author"]){
				
				
				if ($item["parent_permlink"] == 'utopian-io'){
					$each_pay  = ($price  * 0.75) - ($price * 0.1125);
					$total_price = $total_price + $each_pay;
					
					}
				
				else {$each_pay  = $price  * 0.75;
						$total_price =$total_price + $each_pay;
					
					
				}
				
				
				
				$each_pay  = $each_pay.' SBD';
				} 
				else { $each_pay = $price  * 0.25;
$each_pay = '<'.$each_pay. ' SP';
				}
		
		
	
		echo '<td><a style="color: blue;" target="_BLANK" href="'.$author_link.'"/>@'.$item["author"].'</td>';
		
		
		echo '<td>'.$item["parent_permlink"].'</td>';
		
			echo '<td><a style="color: green;" target="_BLANK" href="'.$post_link.'"/>'.$post_title.'</td>';

			
			
			
			echo '<td style="color: royal_blue;">'.$item["pending_payout_value"].'</td>';
			
			echo '<td style="color: blue;">'.$each_pay.'</td>';
		
			echo "</tr>";
			wait(0.1);
		}
	}
	catch(Exception $e)
	{
	}
}
echo '<center>Total SBD Payout:'.$total_price.' SBD</center>';
echo '</table>';
echo '</div>';
echo '</body>';

function wait($time)
{
	usleep(1000000*$time);
	ob_flush();
	flush();
}
?>