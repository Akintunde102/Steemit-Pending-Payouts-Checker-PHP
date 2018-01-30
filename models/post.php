<?php

class post {
    
    public function __construct() {
		   $username = $_GET["username"];
$username = str_replace('@', '', $username);
$this->username      = strtolower($username);
    }



    public function getBlogData() {
$url = 'https://api.steemjs.com/get_discussions_by_blog?query={"tag":"'.$this->username.'","limit":"100"}';
$json= file_get_contents($url);
$data = json_decode($json,true);
return $data;
	}

    public  function getCommentData() {
$url = 'https://api.steemjs.com/get_discussions_by_comments?query={"start_author":"'.$this->username.'","limit":"100"}';
$json= file_get_contents($url);
$data = json_decode($json,true);
return $data;
	}

 public  function processBlogData() {
	$newItems = array();
$total_price =0;
$count = 0;
$username = $this->username;
$data = $this->getBlogData();

foreach ($data as $item) {
	
		
		if(!($item["pending_payout_value"]=="0.000 SBD") && $username == $item["author"])
		{
			
				$post_link = "https://www.steemit.com/@".$item["author"]."/".$item["permlink"];
			
			$author_link = "https://www.steemit.com/@".$item["author"];

			$post_title = substr($item["title"],0,44).'...';
			
			
			
			$price = str_replace(" SBD", "", $item["pending_payout_value"]);
	
			
			
			//Adjustment For 75% Returns for Authors
			if ($username == $item["author"]){
				
				
				if ($item["parent_permlink"] == 'utopian-io'){
					$each_pay  = ($price  * 0.375) - ($price * 0.1125); 
					$total_price = $total_price + $each_pay;
					}
				else {$each_pay  = $price   * 0.375;
						$total_price =$total_price + $each_pay;
				}
				
				
				$each_pay  = $each_pay.' SBD';
				
				
				$newItems[$count]['author_link'] = $author_link;
				$newItems[$count]['author'] = $item["author"];
				$newItems[$count]['post_link'] = $post_link;
				$newItems[$count]['post_title'] = $post_title;
				$newItems[$count]['pending_payout_value'] = $item["pending_payout_value"];
				$newItems[$count]['each_pay'] = $each_pay;
				$newItems[$count]['parent_permlink'] = $item["parent_permlink"];
				
				
				
			}
				
$count++;
}

$newItems['total'] = $total_price;
}

return $newItems;
    }
 
 public  function processCommentData() {
	$newItems = array();
$total_price =0;
$count = 0;
$username = $this->username;
$data = $this->getCommentData();

foreach ($data as $item) {
	
		
		if(!($item["pending_payout_value"]=="0.000 SBD") && $username == $item["author"])
		{
			
				$post_link = "https://www.steemit.com/@".$item["author"]."/".$item["permlink"];
			
			$author_link = "https://www.steemit.com/@".$item["author"];

			$post_title = substr($item["title"],0,44).'...';
			
			
			
			$price = str_replace(" SBD", "", $item["pending_payout_value"]);
	
			
			
			//Adjustment For 75% Returns for Authors
			if ($username == $item["author"]){
				
				
				if ($item["parent_permlink"] == 'utopian-io'){
					$each_pay  = ($price  * 0.375) - ($price * 0.1125); 
					$total_price = $total_price + $each_pay;
					}
				else {$each_pay  = $price   * 0.375;
						$total_price =$total_price + $each_pay;
				}
				
				
				$each_pay  = $each_pay.' SBD';
				
			
				$newItems[$count]['author_link'] = $author_link;
				$newItems[$count]['author'] = $item["author"];
				$newItems[$count]['post_link'] = $post_link;
				$newItems[$count]['post_title'] = $post_title;
				$newItems[$count]['pending_payout_value'] = $item["pending_payout_value"];
				$newItems[$count]['each_pay'] = $each_pay;
				$newItems[$count]['parent_permlink'] = $item["parent_permlink"];
				
				
				
				
				
			}
				
$count++;
}

$newItems['total'] = $total_price;
}

return $newItems;
    }
  
  }
  


  
