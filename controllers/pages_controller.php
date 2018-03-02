<?php
  class PagesController {
    public function home() {
	include('models/lang.php');
	include('views/posts/head.php');
      require_once('views/pages/home.php');
	  	include('views/posts/foot.php');
    }
	
	public function results() {
	   include('models/lang.php');
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
	   
	   $steem_usd = $b->getSTEEM();
	   $steem = ($total*$steem_usd)/$usd;
	   $steem = round($steem,2);
	   $curr = $b->getCURR();
	   
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
      require_once('views/posts/result.php');
	  include('views/posts/foot.php');
    }
	
	public function sbd() {
       $b = new post;
	   $b->fillSBD();
      require_once('views/posts/sbd.php');
    }
	
	public function print() {
       $b = new post;
	  $p = trim($_GET['print']);
	$b->print($p);
	  // require_once('views/posts/print.php');
    }

    public function error() {
      require_once('views/pages/error.php');
    }
  }
?>