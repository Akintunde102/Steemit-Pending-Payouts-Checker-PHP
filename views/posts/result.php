<div id="particles-js"></div>
<div class="main-akin">
	<div class="akin-newsletter">
		
		
		 <table  class="w3-table w3-striped w3-border" align="center" id="keywords" >
		'<thead>
      <tr style="background: #191919;">
        <th><span>Author</span></th>
        <th><span>Beneficiary</span></th>
        <th><span>Post Link</span></th>
        <th><span>Pending Payout</span></th>
		 <th><span>Withdrawal Time</span></th>
        <th><span>Your Expected Payout</span></th>
      </tr>
    </thead>
<tbody>

<?php foreach($blogs as $b) { ?>
      <tr>
		<td class="lalign"><a target="_BLANK" href="<?=$b['author_link']?>"/>@<?=$b['author']?></td>
		
		
		<td><?=$b["b_account"].'('.$b["b_percent"].'%,'.$b["b_money"].' SBD)'?></td>
	
			<td><a target="_BLANK" href="<?=$b['post_link']?>"/><?=$b['post_title']?></td>

			
			<td><?=$b['pending_payout_value']?></td>
			
					<td><?=$b['created']?></td>
			
			<td><?=$b['each_pay']?></td>
		
			</tr>
		
	<?php } ?>


<center style="background: #000;"><h3 style="color: #fff;"> <div style="background: white;color: red;font-size: 23px;padding-left: 20px;border-bottom: 2px #000 solid;"><?=strtoupper($username.'\'s Blog')?>&nbsp;&nbsp;&nbsp;&nbsp; <a target="_BLANK" href="<?=$_SERVER['PHP_SELF'].'?print='.$username?>">PRINT SLIP</a>&nbsp;&nbsp; <a target="_BLANK" href="<?=$_SERVER['PHP_SELF'].'?print='.$username.'&x=NGN'?>" style="font-size: 20px;">[NGN]</a>&nbsp;&nbsp;<a target="_BLANK" href="<?=$_SERVER['PHP_SELF'].'?print='.$username.'&x=EUR'?>" style="font-size: 20px;">[EURO]</a>&nbsp;&nbsp;<a target="_BLANK" href="<?=$_SERVER['PHP_SELF'].'?print='.$username.'&x=GBP'?>" style="font-size: 20px;">[POUNDS]</a>&nbsp;&nbsp;<a target="_BLANK" href="<?=$_SERVER['PHP_SELF'].'?print='.$username.'&x=CAD'?>" style="font-size: 20px;">[C$]</a>&nbsp;&nbsp;<a target="_BLANK" href="<?=$_SERVER['PHP_SELF'].'?print='.$username.'&x=ZAR'?>" style="font-size: 20px;">[RAND]</a></div></h3><h3 style="color: #fff;"> <div style="background: white;color: red;font-size: 23px;padding-left: 20px;border-bottom: 2px #000 solid;"">TOTAL PAYOUT: <?=round($total,3)?> SBD <span style="color: #000;font-size: 23px;padding-left: 20px;">$<?=round($total * $usd, 2)?> @ $<?=$usd?>  </span><span style="color: white;background:black">[<?=$steem .' steem'?>]</span></div><div style="background: white;color: green;font-size: 22px;padding: 0 10px 0 10px;border-bottom: 2px red;">CONVERSION: <?='<u>&nbsp;&nbsp;₦'.$NGN.' @ '. $NGN_R.' NGN/SBD</u>&nbsp;&nbsp;&nbsp;'?>  ||<?='<u>&nbsp;&nbsp;€'.$EUR.' @ '. $EUR_R.' GBP/SBD</u>&nbsp;&nbsp;&nbsp;'?>  ||<?='<u>&nbsp;&nbsp;R'.$ZAR.' @ '. $ZAR_R.' ZAR/SBD</u>&nbsp;&nbsp;&nbsp;'?>  ||<?='<u>&nbsp;&nbsp;GH₵'.$GHS.' @ '. $GHS_R.' GHS/SBD</u>&nbsp;&nbsp;&nbsp;'?>  || <?='<u>&nbsp;&nbsp;C$'.$CAD.' @ '. $CAD_R.' CAD/SBD</u>&nbsp;&nbsp;&nbsp;'?> </div><div> Post's Payout: <?=round($bTotal,2)?> SBD</div></h3></center>

</tbody>
</table>



		 <table  class="w3-table w3-striped w3-border" align="center" id="keywords2" >
		'<thead>
      <tr style="background: #191919;">
        <th><span>Author</span></th>
        <th><span>Parent</span></th>
        <th><span>Post Link</span></th>
        <th><span>Pending Payout</span></th>
        <th><span>Withdrawal Time</span></th>
        <th><span>Your Expected Payout</span></th>
      </tr>
    </thead>
<tbody>

<?php foreach($comments as $b) { ?>
      <tr>
		<td class="lalign"><a target="_BLANK" href="<?=$b['author_link']?>"/>@<?=$b['author']?></td>
		
		
		<td><?=$b["parent_permlink"]?></td>
	
			<td><a target="_BLANK" href="<?=$b['post_link']?>"/><?=$b['post_title']?></td>

			
			<td><?=$b['pending_payout_value']?></td>
			
			<td><?=$b['created']?></td>
			
			<td><?=$b['each_pay']?></td>
		
			</tr>
		
	<?php } ?>
<center style="background: #000;"><h3 style="color: #fff;"> <div style="background: white;color: red;font-size: 23px;padding-left: 20px;">TOTAL PAYOUT: <?=round($total,3)?> SBD <span style="color: #000;font-size: 23px;padding-left: 20px;">$<?=round($total * $usd, 2)?> @ $<?=$usd?></span></div> Comment's Payout: <?=round($cTotal,2)?> SBD</div></h3></center>
</tbody>
</table>
</div>