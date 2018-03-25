<?php
class post {
    
    public function __construct() {
        //error_reporting(0);	
		
		  if (!empty($_GET['username'])){ $username = trim($_GET["username"]);}
	else if (!empty($_GET['print'])){ $username = $_GET["print"]; @$x = $_GET["x"];}
	
$username = str_replace('@', '', $username);
$this->username      = strtolower($username);
@$this->x   =  $x;

global $lang,$site_name;
 $this->lang = $lang;
 $this->site_name = 'localhost';


    }

	
	Public function getPicture() {
$url = 'https://api.steemjs.com/get_accounts?names[]=%5B%22'.$this->username.'%22%5D';
$json= file_get_contents($url);
$data = json_decode($json,true);
$d2 = json_decode($data[0]['json_metadata']);
$img = 'a.jpg';
file_put_contents($img, file_get_contents($d2->profile->profile_image));
return $img;
	}

Public function getBlogData() {
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
	 //To get cummulative voting worth 
$varray = array();
	$newItems = array();
$total_price =0;
$count = 0;
$username = $this->username;
$data = $this->getBlogData();


  $usd = $this->getSBD();
$curr = $this->getCURR();	  
	
if (!empty($_GET['curr'])){	
if ($_GET['curr'] == 'eur'){$mult = round($curr["EUR"]*$usd,2); $ext = 'EUR'; }
else if ($_GET['curr'] == 'zar'){$mult = round($curr["ZAR"]*$usd,2); $ext = 'RANDS';}
else if ($_GET['curr'] == 'ghs'){$mult = round($curr["GHS"]*$usd,2); $ext = 'CEDIS';}
else if ($_GET['curr'] == 'ngn'){$mult = round($curr["NGN"]*$usd,2); $ext = 'NAIRA';}
else if ($_GET['curr'] == 'cad'){$$mult = round($curr["CAD"]*$usd,2); $ext = 'C$';}
else if ($_GET['curr'] == 'gbp'){$mult = round($curr["GBP"]*$usd,2); $ext = 'POUNDS';}
else if ($_GET['curr'] == 'dollars'){$mult = round($usd,2); $ext = 'DOLLAR';}
}
else {$mult = 1; $ext = 'sbd';}

foreach ($data as $item) {
	
		
		if(!($item["pending_payout_value"]=="0.000 SBD") && $username == $item["author"])
		{
			
				$post_link = "https://www.steemit.com/@".$item["author"]."/".$item["permlink"];
			
			$author_link = "https://www.steemit.com/@".$item["author"];

			$post_title = substr($item["title"],0,44).'...';
			
			
			
			$price = str_replace(" SBD", "", $item["pending_payout_value"]);
	
			
			
			//Adjustment For 75% Returns for Authors
			if ($username == $item["author"]){
				
				
				if (!empty($item['beneficiaries'][0]["account"])){
					$weight = $item['beneficiaries'][0]["weight"]/10000;
					$PriceAfterBenDeduction  = $price - ($price*$weight);
					$each_pay  =  $PriceAfterBenDeduction * 0.375;
					$total_price = $total_price + $each_pay;
					
					$newItems[$count]['b_account'] = $item['beneficiaries'][0]["account"];
				$newItems[$count]['b_percent'] = $item['beneficiaries'][0]["weight"]/100;
				$newItems[$count]['b_money'] = ($newItems[$count]['b_percent']/100)*$price;
				$newItems[$count]['b_money'] = round($newItems[$count]['b_money'],3)*$mult;
				
				
				
				
					}
				else {$each_pay  = $price   * 0.375;
						$total_price =$total_price + $each_pay;
				}
				
				
				$each_pay  = $each_pay*$mult.' '.$ext;
				
				
				$newItems[$count]['author_link'] = $author_link;
				$newItems[$count]['author'] = $item["author"];
				$newItems[$count]['post_link'] = $post_link;
				$newItems[$count]['post_title'] = $post_title;
				$newItems[$count]['pending_payout_value'] = $item["pending_payout_value"];
				$newItems[$count]['each_pay'] = $each_pay;
				$newItems[$count]['parent_permlink'] = $item["parent_permlink"];
				$newItems[$count]['voters'] = $item["active_votes"];
				
				
					
                $this->array_sort_by_column($newItems[$count]['voters'], 'rshares');
				
				$rshares_sum = array_sum(array_map(function($var) {
  return $var['rshares'];
}, $newItems[$count]['voters']));


$key = 0;

foreach($newItems[$count]['voters'] as $csm)
 { $aMoney = $price;
	 $vFraction = $csm['rshares']/ $rshares_sum;
	 $vMoney = $vFraction * $aMoney;
  $newItems[$count]['voters'][$key]['money'] = $vMoney * $mult;
    $newItems[$count]['voters'][$key]['percent'] = $newItems[$count]['voters'][$key]['percent'] / 100;
 
  $vname =$newItems[$count]['voters'][$key]['voter'];
 

 if (array_key_exists($vname,$varray)){
$varray[$vname]['amount'] = $varray[$vname]['amount'] + $vMoney * $mult;  
$varray[$vname]['count'] = $varray[$vname]['count'] + 1;  
 }
 else {
$varray[$vname]['name'] =  $newItems[$count]['voters'][$key]['voter'];
$varray[$vname]['amount'] = $vMoney * $mult;
$varray[$vname]['count'] = 1;
$varray[$vname]['type'] = 'cumVote';
 }
 

 $key++; 
 }
 
				
if (empty($newItems[$count]['b_account'])){$newItems[$count]['b_account'] = 'NONE'; $newItems[$count]['b_percent'] = 0; $newItems[$count]['b_money'] = 0;}
				
				$nT = str_replace("T"," ",$item["created"]);
				$nT = strtotime($nT);
				$newItems[$count]['created'] = $this->fancy_date($nT);
				
				//Final Payment		
$newItems[$count]['pending_payout_value'] = str_replace(" SBD", "", $newItems[$count]['pending_payout_value']);	
$newItems[$count]['pending_payout_value'] = $newItems[$count]['pending_payout_value'] * $mult;
$newItems[$count]['pending_payout_value'] = $newItems[$count]['pending_payout_value'].' '.$ext;	
$newItems[$count]['b_ext'] = $ext;				
	
	}
$count++;
}

$newItems['total']  = $total_price * $mult;
$newItems['usd'] = $this->getSBD();


$this->PVA = $varray;



}

return $newItems;
    }

	//Returns a value instead
	Private function array_sort_by_columnR(&$arr, $col, $dir = SORT_DESC) {
    $sort_col = array();
    foreach ($arr as $key=>$row) {
        $sort_col[$key] = $row[$col];
    }
array_multisort($sort_col, $dir, $arr);
return $arr;
}


	Private function array_sort_by_column(&$arr, $col, $dir = SORT_DESC) {
    $sort_col = array();
    foreach ($arr as $key=> $row) {
        $sort_col[$key] = $row[$col];
    }
array_multisort($sort_col, $dir, $arr);
}
	
 public  function processCommentData() {
	 
	  //To get cummulative voting worth 
$varray = array();

	$newItems = array();
$total_price =0;
$count = 0;
$username = $this->username;
$data = $this->getCommentData();



  $usd = $this->getSBD();
$curr = $this->getCURR();	  
	
if (!empty($_GET['curr'])){	
if ($_GET['curr'] == 'eur'){$mult = round($curr["EUR"]*$usd,2); $ext = 'EUR'; }
else if ($_GET['curr'] == 'zar'){$mult = round($curr["ZAR"]*$usd,2); $ext = 'RANDS';}
else if ($_GET['curr'] == 'ghs'){$mult = round($curr["GHS"]*$usd,2); $ext = 'CEDIS';}
else if ($_GET['curr'] == 'ngn'){$mult = round($curr["NGN"]*$usd,2); $ext = 'NAIRA';}
else if ($_GET['curr'] == 'cad'){$$mult = round($curr["CAD"]*$usd,2); $ext = 'C$';}
else if ($_GET['curr'] == 'gbp'){$mult = round($curr["GBP"]*$usd,2); $ext = 'POUNDS';}
else if ($_GET['curr'] == 'dollars'){$mult = round($usd,2); $ext = 'DOLLAR';}
}
else {$mult = 1; $ext = 'sbd';}
	   
	   
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
				
				
				$each_pay  = $each_pay*$mult.' '.$ext;
				
			
				$newItems[$count]['author_link'] = $author_link;
				$newItems[$count]['author'] = $item["author"];
				$newItems[$count]['post_link'] = $post_link;
				$newItems[$count]['post_title'] = $post_title;
				$newItems[$count]['pending_payout_value'] = $item["pending_payout_value"];
				$newItems[$count]['each_pay'] = $each_pay;
				$newItems[$count]['parent_permlink'] = $item["parent_permlink"];
				$newItems[$count]['voters'] = $item["active_votes"];
			
			
			
			                $this->array_sort_by_column($newItems[$count]['voters'], 'rshares');
				
				$rshares_sum = array_sum(array_map(function($var) {
  return $var['rshares'];
}, $newItems[$count]['voters']));


$key = 0;

foreach($newItems[$count]['voters'] as $csm)
 { $aMoney = $price;
	 $vFraction = $csm['rshares']/ $rshares_sum;
	 $vMoney = $vFraction * $aMoney;
  $newItems[$count]['voters'][$key]['money'] = $vMoney * $mult;
  $newItems[$count]['voters'][$key]['percent'] = $newItems[$count]['voters'][$key]['percent'] / 100;
  
    $vname =$newItems[$count]['voters'][$key]['voter'];
  
   if (array_key_exists($vname,$varray)){
$varray[$vname]['amount'] = $varray[$vname]['amount'] + $vMoney * $mult;  
$varray[$vname]['count'] = $varray[$vname]['count'] + 1;  
 }
 else {
$varray[$vname]['name'] =  $newItems[$count]['voters'][$key]['voter'];
$varray[$vname]['amount'] = $vMoney * $mult;
$varray[$vname]['count'] = 1;
$varray[$vname]['type'] = 'cumVote';
 }
 
  $key++;
 }
				
				$nT = str_replace("T"," ",$item["created"]);
				$nT = strtotime($nT);
				$newItems[$count]['created'] = $this->fancy_date($nT);
				
				
				
	//Final Payment		
$newItems[$count]['pending_payout_value'] = str_replace(" SBD", "", $newItems[$count]['pending_payout_value']);	
$newItems[$count]['pending_payout_value'] = $newItems[$count]['pending_payout_value'] * $mult;
$newItems[$count]['pending_payout_value'] = $newItems[$count]['pending_payout_value'].' '.$ext;
			}
				
$count++;
}

$newItems['total'] = $total_price * $mult;
$newItems['usd'] = $this->getSBD();

$this->CVA = $varray;

}


return $newItems;
    }
	
	
	
	Public function joinVoters(){

		$n = $this->PVA;
		
		foreach ($n as $p){
			
			
			
			foreach ($this->CVA as $c){
					$name = $c['name'];
				if ($p['name'] == $c['name']){	
			$n[$name]['name'] = $c['name'];
			$n[$name]['amount'] = $p['amount'] + $c['amount'];
			$n[$name]['count'] = $p['count'] + $c['count'];	
			}
				else {
				 if (!array_key_exists($c['name'],$n)){
				$n[$name]['name'] = $c['name'];
			$n[$name]['amount'] = $c['amount'] ;
			$n[$name]['count'] =  $c['count'];		
				}
				}
					
				}
			
			}
			
		$this->tcv = $n; //total cummulative voters
		
		

$this->tcvA = $this->array_sort_by_columnR($this->tcv, 'name', SORT_ASC);
$this->tcvW = $this->array_sort_by_columnR($this->tcv, 'amount');
$this->tcvC = $this->array_sort_by_columnR($this->tcv, 'count');
		
		
		
	}
	
	Public function fancy_date($timestamp) 
	{
		
		$wDate = $timestamp + 604800;

		$diff = $wDate-time();

   $d = $diff / 86400 % 7;
   $h = $diff / 3600 % 24;
   $m = $diff / 60 % 60; 
   $s = $diff % 60;
   
   return " {$d} days, {$h} hours, {$m} minutes and {$s} secs away!";

	
	}
	
	
	Public function getSBD(){
$sbdDetails = file_get_contents('sbd.txt');
$sbd = json_decode($sbdDetails, true); // decode the JSON feed
return round($sbd[0]["price_usd"],3);
	}
	
	Public function getSTEEM(){
$steemDetails = file_get_contents('steem.txt');
$steem = json_decode($steemDetails, true); // decode the JSON feed
return round($steem[0]["price_usd"],3);
	}
	
	
	
	Public function getCURR(){
$currDetails = file_get_contents('curr.txt');
$curr = json_decode($currDetails, true); // decode the JSON feed
$ret = array();
$ret['NGN'] = round($curr["quotes"]["USDNGN"],3);
$ret['EUR'] = round($curr["quotes"]["USDEUR"],3);
$ret['GBP'] = round($curr["quotes"]["USDGBP"],3);
$ret['ZAR'] = round($curr["quotes"]["USDZAR"],3);
$ret['GHS'] = round($curr["quotes"]["USDGHS"],3);
$ret['CAD'] = round($curr["quotes"]["USDCAD"],3);
return $ret;
	}
	
	
	Public function fillSBD(){
	$sbdDetails = file_get_contents('https://api.coinmarketcap.com/v1/ticker/steem-dollars/');
$sbdfile = fopen("sbd.txt", "w") or die("Unable to open file!");
fwrite($sbdfile, $sbdDetails);
	fclose($sbdfile);}

Public function display($p){
require 'src/PHPImage.php';
$lang = $this->lang;
$bg = 'pro/image.jpg';
$time = date("M d, Y h:i:s");


	   $username = $this->username;
	   
	   $x = $this->x;
	   
	   $blogs = $this->processBlogData();
	   $comments = $this->processCommentData();
	   $usd = $comments['usd'];
	   $cTotal = $comments['total'];
	   $bTotal = $blogs['total'];
	   $total = round($blogs['total'] + $comments['total'],2); 
	   $tusd = round($total * $usd,2); 
	   $curr = $this->getCURR();
	   
	   $EUR_R = round($curr["EUR"]*$usd,2);
	   $EUR = round($usd*$curr["EUR"]*$total,2);
	   $EUR = number_format($EUR, 2);
	   
	   $NGN_R = round($curr["NGN"]*$usd,2);
	   $NGN = round($usd*$curr["NGN"]*$total,2);
	   $NGN = number_format($NGN, 2);
	    
	   $ZAR_R = round($curr["ZAR"]*$usd,2);
	   $ZAR = round($usd*$curr["ZAR"]*$total,2);
	   $ZAR = number_format($ZAR, 2);
	   
	   $GHS_R = round($curr["GHS"]*$usd,2);
	   $GHS = round($usd*$curr["GHS"]*$total,2);
	   $GHS = number_format($GHS, 2);
	   
	   $CAD_R = round($curr["CAD"]*$usd,2);
	   $CAD = round($usd*$curr["CAD"]*$total,2);
	   $CAD = number_format($CAD, 2);
	   
	   $GBP_R = round($curr["GBP"]*$usd,2);
	   $GBP = round($usd*$curr["GBP"]*$total,2);
	   $GBP = number_format($GBP, 2);
	   
	   unset($blogs['total']); unset($comments['total']);
	   unset($blogs['usd']); unset($comments['usd']);
	   
	   
	   
	//$overlay = $this->getPicture();
	$image = new PHPImage();
	$image->setDimensionsFromImage($bg);
	$image->draw($bg);
	
	/**$info = $image->getImageInfo($overlay);
	$width = $info->width;
	$height = $info->height;
	
	$xx = 50+($height*33)/384;
	$xx = $xx.'%';
	
    $yy = 44+($width*52)/384;
	$yy = $xx.'%';

	***/
	
	$image->draw('pro/overlay.png', '68%', '40%' ,'200' ,'380');
	
	$image->setFont('pro/arial.ttf');
	$image->setTextColor(array(255, 255, 255));
	$image->setStrokeWidth(1);
	$image->setStrokeColor(array(0, 0, 0));
	$image->setTextColor(array(255,255,255));
	$image->rectangle(0, 0, 700, 45, array(0, 0, 0), 1);
			$image->setStrokeWidth(0);
	$image->text('Valid As At '.$time, array('fontSize' => 15, 'x' => 10, 'y' => 10));	

	$image->rectangle(0, 40, 700, 45, array(28, 20, 30), 1);
	$image->text('Printed from Steem.Com.Ng', array('fontSize' => 15, 'x' => 440, 'y' => 10));
	
	$image->setTextColor(array(255,255,255));
	$image->text(ucfirst($username).$lang['ImgWeekPay'], array('fontSize' => 30, 'x' => 110, 'y' =>50));
	
		$image->setFont('pro/sugiyama.ttf');
	$image->setTextColor(array(0,0,0));
	$image->text('created by @akintunde', array('fontSize' => 39, 'x' => 190, 'y' =>470));
	
		$image->setFont('pro/life.otf');
	$image->setTextColor(array(255,255,255));
	$image->setStrokeWidth(0);
	
	$image->text('~ '.$total.' SBD', array('fontSize' => 25, 'x' => 20, 'y' => 170));
	$image->text('~ $'.$tusd, array('fontSize' => 25, 'x' => 20, 'y' => 220));
	
	if ($x == 'NGN'){$image->text('~ '.$NGN.' NAIRA', array('fontSize' => 23, 'x' => 20, 'y' => 260));}
	else if ($x == 'EUR'){$image->text('~ '.$EUR.' EURO', array('fontSize' => 23, 'x' => 20, 'y' => 260));}
	else if ($x == 'ZAR'){$image->text('~ '.$ZAR.' RAND', array('fontSize' => 23, 'x' => 20, 'y' => 260));}
	else if ($x == 'GHS'){$image->text('~ '.$GHS.' CEDI', array('fontSize' => 23, 'x' => 20, 'y' => 260));}
	else if ($x == 'CAD'){$image->text('~ '.$CAD.' CAD', array('fontSize' => 23, 'x' => 20, 'y' => 260));}
	else if ($x == 'GBP'){$image->text('~ '.$GBP.' POUNDS', array('fontSize' => 23, 'x' => 20, 'y' => 260));}
	
	if (empty($x)){$x = 'none';}
	$fn = $p.md5($x.time());
	$image->show($fn);
  }
  }


  
