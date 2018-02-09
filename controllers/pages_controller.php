<?php
  class PagesController {
	
	public function sbd() {
       $b = new post;
	   $b->fillSBD();
      require_once('views/posts/sbd.php');
    }
	
    public function home() {
	  $this->sbd();
      $first_name = 'Jon';
      $last_name  = 'Snow';
      require_once('views/pages/home.php');
    }
	
	public function results() {
       $b = new post;
	   $username = $b->username;
	   $blogs = $b->processBlogData();
	   $comments = $b->processCommentData();
	   $usd = $comments['usd'];
	   $cTotal = $comments['total'];
	   $bTotal = $blogs['total'];
	   $total = $blogs['total'] + $comments['total'] ; 
	   unset($blogs['total']); unset($comments['total']);
	   unset($blogs['usd']); unset($comments['usd']);
      require_once('views/posts/result.php');
    }
	

    public function error() {
      require_once('views/pages/error.php');
    }
  }
?>