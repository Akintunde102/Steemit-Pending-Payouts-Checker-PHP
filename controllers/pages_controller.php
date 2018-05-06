<?php
  class PagesController {
    public function home() {
	include('models/lang.php');
	include('views/posts/head_home.php');
	 $b = new post;
	   $site_name = $b->site_name;
	   $username = $b->username;
      require_once('views/pages/home.php');
	  require_once('what-you-need-to-know.html');
	  require_once('privacy_policy.html');
	  require_once('memo2html.php');
	  require_once('telegram.html');
	  	include('views/posts/foot_home.php');
		
    }
	
	public function results() {
	   include('models/lang.php');
	   include('models/curr.php');
	   include('views/posts/head.php');
       $b = new post;
	   $site_name = $b->site_name;
	   $username = $b->username;
	   
	   $blogs = $b->processBlogData();
	   
	   $comments = $b->processCommentData();
	   
	   $usd = $comments['usd'];
	   $cTotal = $comments['total'];
	   $bTotal = $blogs['total'];
	   $total = $blogs['total'] + $comments['total']; 
	   
	   $ext = $blogs[0]['b_ext'];
	   
	    
	 $b->joinVoters(); //join voters
	   
	   $varrayW = $b->tcvW; //by Worth
	   $varrayC = $b->tcvC; //by count
	   $varrayA = $b->tcvA; //alphabetically
	   
	   
	   $steem_usd = $b->getSTEEM();
	   $steem = ($total*$steem_usd)/$usd;
	   $steem = round($steem,2);
	   $curr = $b->getCURR();
	   $eth = $b->getETH();
	   $btc = $b->getBTC();
	   
	   $EUR_R = round($curr["EUR"]*$usd,2);
	   $EUR = round($usd*$curr["EUR"]*$total,2);
	   $EUR = number_format($EUR, 2);
	   
	   $NGN_R = round($curr["NGN"]*$usd,2);
	   $NGN = round($usd*$curr["NGN"]*$total,2);
	   $NGN = number_format($NGN, 2);
	   
	   $ETH_R = round($usd/$eth,6);
	   $ETH = round($ETH_R*$total,6);
	   $ETH = number_format($ETH, 6);
	   
	   $BTC_R = round($usd/$btc,6);
	   $BTC = round($BTC_R*$total,6);
	   $BTC = number_format($BTC, 6);
	    
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
	   
	   $AED_R = round($curr["AED"]*$usd,2);
	   $AED = round($usd*$curr["AED"]*$total,2);
	   $AED = number_format($AED, 2);
	   
	   $INR_R = round($curr["INR"]*$usd,2);
	   $INR = round($usd*$curr["INR"]*$total,2);
	   $INR = number_format($INR, 2);
	   
	   $PKR_R = round($curr["PKR"]*$usd,2);
	   $PKR = round($usd*$curr["PKR"]*$total,2);
	   $PKR = number_format($PKR, 2);
	   
	   $PHP_R = round($curr["PHP"]*$usd,2);
	   $PHP = round($usd*$curr["PHP"]*$total,2);
	   $PHP = number_format($PHP, 2);
	   
	   unset($blogs['total']); unset($comments['total']);
	   unset($blogs['usd']); unset($comments['usd']);
	 
	
      require_once('views/posts/result.php');
	  include('views/posts/foot.php');
	  require_once('what-you-need-to-know.html');
	  require_once('privacy_policy.html');
	  require_once('telegram.html');
	  require_once('memo2html.php');
	  require_once('usergift.php');
    }
	
	public function sbd() {
       $b = new post;
	   $b->fillSBD();
      require_once('views/posts/sbd.php');
    }
	
	public function display() {
       $b = new post;
	  $p = trim($_GET['print']);
	$b->display($p);
	  // require_once('views/posts/print.php');
    }

    public function error() {
      require_once('views/pages/error.php');
    }
  }
?>