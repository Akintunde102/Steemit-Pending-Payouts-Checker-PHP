<div class="container table-reponsive">
	
		
		<h1><?=$lang['Name'];?></h1>
		 <table  class="w3-table w3-striped w3-border" align="center" id="keywords"  >
<thead>		
		<tr>
<th colspan="8" sciope="colgroup">



<center style="background: #000;"><h3 style="color: #fff;">

<div style="background: white;color: red;font-size: 23px;padding-left: 20px;border-bottom: 2px #000 solid;">

<?=strtoupper($username.'\'s Blog')?>


</div></h3>
</center>


<div style="background: white;width: 100%;color: red;font-size: 23px;border-bottom: 2px #000 solid;">


		<form action="http://<?=$site_name.$_SERVER['PHP_SELF']?>" class="form-inline form-sm akin"  style="margin: 2px 3px 0px 5px;" >
	


<!-- Basic dropdown -->
<div class="btn-group" style="margin:5px">
    <button class="btn btn-light dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Change Currency</button>

    <div class="dropdown-menu">

<a class="dropdown-item" href="http://<?=$site_name.$_SERVER['PHP_SELF'].'?username='.$_GET['username']?>">SBD</a>  
<a class="dropdown-item" href="http://<?=$site_name.$_SERVER['PHP_SELF'].'?username='.$_GET['username'].'&curr=ngn'?>">NAIRA</a> 
 <a class="dropdown-item" href="http://<?=$site_name.$_SERVER['PHP_SELF'].'?username='.$_GET['username'].'&curr=dollars'?>">DOLLARS</a>  
 <a class="dropdown-item" href="http://<?=$site_name.$_SERVER['PHP_SELF'].'?username='.$_GET['username'].'&curr=eur'?>">EUR</a>
 <a class="dropdown-item" href="http://<?=$site_name.$_SERVER['PHP_SELF'].'?username='.$_GET['username'].'&curr=gbp'?>">POUNDS</a> 
 <a class="dropdown-item" href="http://<?=$site_name.$_SERVER['PHP_SELF'].'?username='.$_GET['username'].'&curr=zar'?>">RANDS</a> 
 <a class="dropdown-item" href="http://<?=$site_name.$_SERVER['PHP_SELF'].'?username='.$_GET['username'].'&curr=ghs'?>">CEDIS</a>
    </div>
</div>



<!-- Basic dropdown -->
<div class="btn-group" style="margin:5px">
    <button class="btn btn-light dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Change Language</button>

    <div class="dropdown-menu">
        <a class="dropdown-item" href="http://<?=$site_name.$_SERVER['PHP_SELF'].'?username='.$_GET['username'].'&lang=en'?>"><?=$lang['EnglishTranslate'];?></a>
 <a  class="dropdown-item" href="http://<?=$site_name.$_SERVER['PHP_SELF'].'?username='.$_GET['username'].'&lang=es'?>"><?=$lang['SpanishTranslate'];?></a>
 
    </div>
</div>




<!-- Basic dropdown -->
<div class="btn-group" style="margin:5px">
    <button class="btn btn-light dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"><?=$lang['PrintSlip'];?></button>

    <div class="dropdown-menu">
       <a class="dropdown-item" target="_BLANK" href="<?=$_SERVER['PHP_SELF'].'?print='.$username?>">[DOLLARS]</a>
<a class="dropdown-item" target="_BLANK" href="<?=$_SERVER['PHP_SELF'].'?print='.$username.'&x=NGN'?>" style="font-size: 20px;">[NGN]</a>
<a  class="dropdown-item" target="_BLANK" href="<?=$_SERVER['PHP_SELF'].'?print='.$username.'&x=EUR'?>" style="font-size: 20px;">[EURO]</a>
<a class="dropdown-item" target="_BLANK" href="<?=$_SERVER['PHP_SELF'].'?print='.$username.'&x=GBP'?>" style="font-size: 20px;">[POUNDS]</a>
<a class="dropdown-item" target="_BLANK" href="<?=$_SERVER['PHP_SELF'].'?print='.$username.'&x=CAD'?>" style="font-size: 20px;">[C$]</a>
<a class="dropdown-item" target="_BLANK" href="<?=$_SERVER['PHP_SELF'].'?print='.$username.'&x=ZAR'?>" style="font-size: 20px;">[RAND]</a>
    </div>
</div>


<!-- Basic dropdown -->
<div class="btn-group" style="margin:5px">
    <button class="btn btn-light dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"><?=$lang['ExchangeRate'];?></button>

    <div class="dropdown-menu">
       <span class="dropdown-item"><?='$'. $usd.'/SBD'?></span>
       <span class="dropdown-item"><?='₦'. $NGN_R.'/SBD'?></span>
       <span class="dropdown-item"><?='€'. $EUR_R.'/SBD'?></span>
       <span class="dropdown-item"><?='GH₵'. $GHS_R.'/SBD'?></span>
       <span class="dropdown-item"><?='R'. $ZAR_R.'/SBD'?></span>
       <span class="dropdown-item"><?='C$'. $CAD_R.'/SBD'?></span>
    </div>
</div>
  
  
	<div style="margin: 0px 2px 10px 3px;">
			<input   type="text" name="username" style="border: 1px solid #000;border-radius: 5px;margin-bottom: 0px;margin-top: 5px;margin-left: 2px;width: 80%;padding: 4px;font-size: 20px;" class="form-control" required="" placeholder="Search Username" />
			
			</div>
  
		</form>


</div>
<div align="center" style="background: white;color: red;font-size: 23px;padding-left: 20px;border-bottom: 2px #000 solid;" class="d-flex justify-content-center"> <div class="p-2 d-inline bg-success text-white">
  TOTAL PAYOUT: <?=round($total,3)?> <?=$ext?> </div>&nbsp;&nbsp; &nbsp;&nbsp;  <div class="p-2 d-inline bg-success text-white"> <?=$lang['PostPayout'];?>: <?=round($bTotal,2)?> <?=$ext?> </div>&nbsp;&nbsp; &nbsp;&nbsp;  <div class="p-2 d-inline bg-success text-white"><?=$lang['CommentPayout'];?> : <?=round($cTotal,2)?> <?=$ext?> </div>
</div>


<!--

<h3 style="color: #fff;"> <div style="background: white;color: red;font-size: 23px;padding-left: 20px;border-bottom: 2px #000 solid;"">TOTAL PAYOUT: <?=round($total,3)?> SBD <span style="color: #000;font-size: 23px;padding-left: 20px;">$<?=round($total * $usd, 2)?> @ $<?=$usd?>  </span><span style="color: white;background:black">[<?=$steem .' steem'?>]</span></div><div style="background: white;color: green;font-size: 22px;padding: 0 10px 0 10px;border-bottom: 2px red;"><?=$lang['Conversion'];?> <?='<u>&nbsp;&nbsp;₦'.$NGN.' @ '. $NGN_R.' NGN/SBD</u>&nbsp;&nbsp;&nbsp;'?>  ||<?='<u>&nbsp;&nbsp;€'.$EUR.' @ '. $EUR_R.' GBP/SBD</u>&nbsp;&nbsp;&nbsp;'?>  ||<?='<u>&nbsp;&nbsp;R'.$ZAR.' @ '. $ZAR_R.' ZAR/SBD</u>&nbsp;&nbsp;&nbsp;'?>  ||<?='<u>&nbsp;&nbsp;GH₵'.$GHS.' @ '. $GHS_R.' GHS/SBD</u>&nbsp;&nbsp;&nbsp;'?>  || <?='<u>&nbsp;&nbsp;C$'.$CAD.' @ '. $CAD_R.' CAD/SBD</u>&nbsp;&nbsp;&nbsp;'?> </div><div> <?=$lang['PostPayout'];?>: <?=round($bTotal,2)?> SBD</div></h3>
-->



</th>
</tr>
</thead>
		<thead>
      <tr style="background: #191919;">
        <th><span><?=$lang['Beneficiary'];?></span></th>
        <th><span><?=$lang['PostLink'];?></span></th>
        <th><span><?=$lang['PendingPayout'];?></span></th>
		 <th><span><?=$lang['Voterslist'];?></span></th>
		<th><span><?=$lang['WithdrawalTime'];?></span></th> 
        <th><span><?=$lang['giver'];?></span></th>
        <th><span><?=$lang['YourExpectedPayout'];?></span></th>
      </tr>
    </thead>
<tbody>

<?php foreach($blogs as $b) { ?>
      <tr class="post">
		
		
		<td><?=$b["b_account"].'('.$b["b_percent"].'%,'.$b["b_money"].' '.$b["b_ext"].')'?></td>
	
			<td><a target="_BLANK" href="<?=$b['post_link']?>"/><?=$b['post_title']?></a></td>

			
			<td><?=$b['pending_payout_value']?></td>
			
				<td align="center">

<div class="btn-group" style="margin:5px;">
    <button class="btn btn-light btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Voters</button>

    <div class="dropdown-menu" style="max-height:200px;
          overflow-y:auto;" >
  
	<?php $n = 0; foreach($b['voters'] as $v) {  
	?>
       



<a class="dropdown-item" target="_BLANK" href="http://steemit.com/@<?=$v['voter']?>"> <span style="color: blue;"><?=$v['voter']?></span>, <span style="color: green;"> <?=round($v['money'],2)?> <?=$b["b_ext"]?> </span> , <span style="color: red;"><?=$v['percent']. '%'?></span></a>  
 	
		
<?php $n++; } ?>
      </div>
</div>
</td>

					<td><?=$b['created']?></td>
			
			<td><a target="_BLANK" href="https://steemit.com/@<?=$b['voters'][0]['voter']?>"><?=$b['voters'][0]['voter']?></a></td>
			<td><?=$b['each_pay']?></td>
		
			</tr>
		
	<?php } ?>


</tbody>
</table>



		 <table  class="w3-table w3-striped w3-border" style="margin-top: 30px;" align="center" id="keywords2" >
<thead>		
		<tr>
<th colspan="8" sciope="colgroup">		
		<center style="background: #fff;"><h3 style="color: #000;"> <!---<div style="background: white;color: red;font-size: 23px;padding-left: 20px;"><?=$lang['TotalPayout'];?> <?=round($total,3)?> SBD <span style="color: #000;font-size: 23px;padding-left: 20px;">$<?=round($total * $usd, 2)?> @ $<?=$usd?></span></div> ---> <?=$lang['CommentPayout'];?> : <?=round($cTotal,2)?> <?=$ext?></div></h3></center>
		 </th>
		 </tr>
		 </thead>
		<thead>
      <tr style="background: #191919;">
        <th><span><?=$lang['CommentLink'];?></span></th>
        <th><span><?=$lang['PendingPayout'];?></span></th>
		 <th><span><?=$lang['WithdrawalTime'];?></span></th>
		 <th><span><?=$lang['Voterslist'];?></span></th>
        <th><span><?=$lang['giver'];?></span></th>
        <th><span><?=$lang['YourExpectedPayout'];?></span></th>
      </tr>
    </thead>
<tbody>

<?php foreach($comments as $b) { ?>
      <tr>
		
		
	
			<td><a target="_BLANK" href="<?=$b['post_link']?>"/><?=$b["parent_permlink"]?></td>

			
			<td><?=$b['pending_payout_value']?></td>
			
			<td><?=$b['created']?></td>
				<td align="center">

<div class="btn-group" style="margin:5px;"> 
    <button class="btn btn-light btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Voters</button>

    <div class="dropdown-menu">
  
	<?php $n = 0; foreach($b['voters'] as $v) {  
	?>
       


<a class="dropdown-item" target="_BLANK" href="http://steemit.com/@<?=$v['voter']?>"> <span style="color: blue;"><?=$v['voter']?></span>, <span style="color: green;"> <?=round($v['money'],2)?> <?=$ext?> </span> , <span style="color: red;"><?=$v['percent']. '%'?></span></a>  
 		
		
<?php $n++; } ?>
      </div>
</div>
</td>
			
			<td><a target="_BLANK" href="https://steemit.com/@<?=$b['voters'][0]['voter']?>"><?=$b['voters'][0]['voter']?></a></td>
			<td><?=$b['each_pay']?></td>
		
			</tr>
		
	<?php } ?>

</tbody>
</table>
</div>