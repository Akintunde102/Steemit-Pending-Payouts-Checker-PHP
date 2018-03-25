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


		
		
        <!-- Button trigger modal -->
<button type="button" class="btn btn-light" data-toggle="modal" data-target="#exampleModal">
    Cummulative Voter Details
</button>

<!-- Modal -->
<div class="modal fade" style="font-size: 15px;" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Cummulative Voter Details</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <!-- Nav tabs -->
<ul class="nav nav-tabs nav-justified">
    <li class="nav-item">
        <a class="nav-link active" data-toggle="tab" href="#panel1" role="tab">By Count</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#panel2" role="tab">By Worth</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#panel3" role="tab">Alphabetically</a>
    </li>
</ul>
<!-- Tab panels -->
<div class="tab-content card">
    <!--Panel 1-->
    <div class="tab-pane fade in show active dropdown-menu2" id="panel1" role="tabpanel">
        <p>  
  

                     
	<?php $n = 0; foreach($varrayC as $va) {  
	
	if ($n == 0){$copyC = '@'.$va['name'].': '.round($va['amount'],4).'sbd ,'.$va['count'].' votes';}
	else {$copyC .= '<br> @'.$va['name'].': '.round($va['amount'],4).'sbd ,'.$va['count'].' votes';}
	
	?>
       



<a class="dropdown-item" target="_BLANK" href="http://steemit.com/@<?=$va['name']?>"> <span style="color: blue;"><?=$va['name']?></span>, <span style="color: green;"> <?=round($va['amount'],2)?> <?=$ext?> </span>, <?=round($va['count'],2)?> times</a>  
 	
		
<?php $n++; } ?>

    <div class="input-group modal-footer" style=" position: fixed;
    left: 0;
    bottom: 0;
    width: 100%;
    color: white;
    text-align: center;">
   <input type="text" value="<?=$copyC?>"  id="myInputone" class="form-control" style="width:0%;">
    <span class="input-group-btn">
      <button class="btn btn-dark" type="button" id="copy-button" onclick="myFunctionone()" onmouseout="outFuncone()"
          data-toggle="tooltip" data-placement="button"
          title="Copy to Clipboard">
		  <span class="tooltiptext" id="myTooltip1" style="border: 1px solid white"></span>
  Copy text
      </button>
    </span>
  </div>


</p>
 
  

    </div>
    <!--/.Panel 1-->
    <!--Panel 2-->
    <div class="tab-pane fade dropdown-menu2" id="panel2" role="tabpanel">
        <br>
          <p>  
                                
	<?php $n = 0; foreach($varrayW as $va) {  
	
	if ($n == 0){$copyW = '@'.$va['name'].': '.round($va['amount'],4).'sbd ,'.$va['count'].' votes';}
	else {$copyW .= '<br> @'.$va['name'].': '.round($va['amount'],4).'sbd ,'.$va['count'].' votes';}
	
	?>
       



<a class="dropdown-item" target="_BLANK" href="http://steemit.com/@<?=$va['name']?>"> <span style="color: blue;"><?=$va['name']?></span>, <span style="color: green;"> <?=round($va['amount'],4)?> <?=$ext?> </span>, <?=round($va['count'],2)?> times</a>  
 	
		
<?php $n++; } ?>
 <div class="input-group modal-footer" style=" position: fixed;
    left: 0;
    bottom: 0;
    width: 100%;
    color: white;
    text-align: center;">
   <input type="text" value="<?=$copyW?>"  id="myInputtwo" class="form-control" style="width:0%;">
    <span class="input-group-btn">
      <button class="btn btn-dark" type="button" id="copy-button" onclick="myFunctiontwo()" onmouseout="outFunctwo()"
          data-toggle="tooltip" data-placement="button"
          title="Copy to Clipboard">
		  <span class="tooltiptext" id="myTooltip2" style="border: 1px solid white"></span>
  Copy text
      </button>
    </span>
  </div>


</p>
    </div>
    <!--/.Panel 2-->
    <!--Panel 3-->
    <div class="tab-pane fade dropdown-menu2" id="panel3" role="tabpanel">
        <br>
       <p>  
                                
	<?php $n = 0; foreach($varrayA as $va) {  
	if ($n == 0){$copyA = '@'.$va['name'].': '.round($va['amount'],4).'sbd ,'.$va['count'].' votes';}
	else {$copyA .= '<br> @'.$va['name'].': '.round($va['amount'],4).'sbd ,'.$va['count'].' votes';}
	
	
	?>
       



<a class="dropdown-item" target="_BLANK" href="http://steemit.com/@<?=$va['name']?>"> <span style="color: blue;"><?=$va['name']?></span>, <span style="color: green;"> <?=round($va['amount'],2)?> <?=$ext?> </span>,<span id="count"> <?=$va['count']?> times</span></a>  
 	
		
<?php $n++; } ?>
 <div class="input-group modal-footer" style=" position: fixed;
    left: 0;
    bottom: 0;
    width: 100%;
    color: white;
    text-align: center;">
   <input type="text" value="<?=$copyA?>"  id="myInputthree" class="form-control" style="width:0%;">
    <span class="input-group-btn">
      <button class="btn btn-dark" type="button" id="copy-button" onclick="myFunctionthree()" onmouseout="outFuncthree()"
          data-toggle="tooltip" data-placement="button"
          title="Copy to Clipboard">
		  <span class="tooltiptext" id="myTooltip3" style="border: 1px solid white"></span>
  Copy text
      </button>
    </span>
  </div>
</p>
    </div>
    <!--/.Panel 3-->
</div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

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