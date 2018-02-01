<div id="particles-js"></div>
<div class="main-akin">
	<div class="akin-newsletter">
		<h1><?php echo $username;?> Blog's Payouts</h1>
		
		 <table  class="w3-table w3-striped w3-border" align="center" id="keywords" >
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

<?php foreach($blogs as $b) { ?>
      <tr>
		<td class="lalign"><a target="_BLANK" href="<?=$b['author_link']?>"/>@<?=$b['author']?></td>
		
		
		<td><?=$b["parent_permlink"]?></td>
	
			<td><a target="_BLANK" href="<?=$b['post_link']?>"/><?=$b['post_title']?></td>

			
			<td><?=$b['pending_payout_value']?></td>
			
					<td><?=$b['created']?></td>
			
			<td><?=$b['each_pay']?></td>
		
			</tr>
		
	<?php } ?>


<center style="background: #000;"><h3 style="color: #fff;"> <div style="background: white;color: red;font-size: 23px;padding-left: 20px;">TOTAL PAYOUT: <?=round($total,3)?> SBD <span style="color: #000;font-size: 23px;padding-left: 20px;">$<?=round($total * $usd, 2)?> @ $<?=$usd?> </span></div> Post's Payout: <?=round($bTotal,2)?> SBD</div></h3></center>
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


<center style="background: #000;"><h3 style="color: #fff;"> <div style="background: white;color: red;font-size: 23px;padding-left: 20px;">TOTAL PAYOUT: <?=round($total,3)?> SBD <span style="color: #000;font-size: 23px;padding-left: 20px;">$<?=round($total * $usd, 2)?> @ $<?=$usd?></span></div> Post's Payout: <?=round($cTotal,2)?> SBD</div></h3></center>
</tbody>
</table>
</div>