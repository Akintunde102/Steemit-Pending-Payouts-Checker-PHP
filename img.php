<?php
$startdate=strtotime("today");
$time = date("M d, Y", $startdate);

require 'src/PHPImage.php';
$bg = 'image.jpg';
	$overlay = 'overlay.jpg';
	$image = new PHPImage();
	$image->setDimensionsFromImage($bg);
	$image->draw($bg);
	$image->draw($overlay, '50%', '44%');
	
	$image->setFont('arial.ttf');
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
	$image->text('Nwamaka\'s Weekly Payout', array('fontSize' => 30, 'x' => 110, 'y' =>50));
	
		$image->setFont('life.otf');
	$image->setTextColor(array(0,0,0));
	$image->setStrokeWidth(0);
	$image->text('~80 SBD', array('fontSize' => 35, 'x' => 20, 'y' => 200));
	$image->text('~$8900', array('fontSize' => 35, 'x' => 20, 'y' => 250));
	$image->text('~N8900', array('fontSize' => 35, 'x' => 20, 'y' => 300));
	$image->show();
?>