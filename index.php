<?php

include('models/post.php');
  if (isset($_GET['controller']) && isset($_GET['action'])) {
    $controller = $_GET['controller'];
    $action     = $_GET['action'];
  }
  else if (isset($_GET['username'])){
	 $controller = 'pages';
    $action     = 'results'; 
	  
  }
  else if (isset($_GET['print'])){
	 $controller = 'pages';
    $action     = 'print'; 
	  
  }
  else if (isset($_GET['sbd'])){
	 $controller = 'pages';
    $action     = 'sbd'; 
	  
  }

  else {
    $controller = 'pages';
    $action     = 'home';
  }
 
  require_once('routes.php');
?>