<body class="nav-sm" 
style="font-family: Open Sans, sans-serif;


">
    <div class="container body">
      <div class="main_container">
     <!--   <div class="col-md-3 left_col menu_fixed">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.php" class="site_title"><i class="fa fa-play"></i> <span><?=$username;?></span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
            <!--  <div class="profile_pic">
                <img src="images/img.jpg" alt="..." class="img-circle profile_img">
              </div>
			 
              <div class="profile_info">
                <span><?=$username;?></span>
                <h2>Payout</h2> 
				
              </div>
			  
            </div>

            <br />
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
           
                <ul class="nav side-menu">
        
                      <li><a href="index.html" style="color: #000;">Dashboard</a></li>
                    </ul>
					
                  </li>
                </ul>
              </div>

            </div> -->
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="HOME" href="index.php">
                <span class="glyphicon glyphicon-home" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" target="_BLANK" title="Developer
			 's Page" href="https://steemit.com/@akintunde">
                <span class="glyphicon glyphicon-briefcase" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
            <!--  <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>
			  -->
			  
			  
			  
<div style="background: white;width: 100%;font-size: 23px;border-bottom: 1px #000 solid;">


<!-- Basic dropdown -->
<div class="btn-group" style="margin:5px">
    <button class="btn btn-dark dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Change Currency</button>

    <div class="dropdown-menu">

<a class="dropdown-item" href="http://<?=$site_name.$_SERVER['PHP_SELF'].'?username='.$_GET['username']?>">SBD</a>  
<a class="dropdown-item" href="http://<?=$site_name.$_SERVER['PHP_SELF'].'?username='.$_GET['username'].'&curr=btc'?>">BTC</a> 
<a class="dropdown-item" href="http://<?=$site_name.$_SERVER['PHP_SELF'].'?username='.$_GET['username'].'&curr=eth'?>">ETH</a> 
<a class="dropdown-item" href="http://<?=$site_name.$_SERVER['PHP_SELF'].'?username='.$_GET['username'].'&curr=ngn'?>">NAIRA</a> 
 <a class="dropdown-item" href="http://<?=$site_name.$_SERVER['PHP_SELF'].'?username='.$_GET['username'].'&curr=dollars'?>">DOLLARS</a>  
 <a class="dropdown-item" href="http://<?=$site_name.$_SERVER['PHP_SELF'].'?username='.$_GET['username'].'&curr=eur'?>">EUR</a>
 <a class="dropdown-item" href="http://<?=$site_name.$_SERVER['PHP_SELF'].'?username='.$_GET['username'].'&curr=gbp'?>">POUNDS</a> 
 <a class="dropdown-item" href="http://<?=$site_name.$_SERVER['PHP_SELF'].'?username='.$_GET['username'].'&curr=zar'?>">RANDS</a> 
 <a class="dropdown-item" href="http://<?=$site_name.$_SERVER['PHP_SELF'].'?username='.$_GET['username'].'&curr=ghs'?>">CEDIS</a>  
 <a class="dropdown-item" href="http://<?=$site_name.$_SERVER['PHP_SELF'].'?username='.$_GET['username'].'&curr=aed'?>">AED</a>
 <a class="dropdown-item" href="http://<?=$site_name.$_SERVER['PHP_SELF'].'?username='.$_GET['username'].'&curr=inr'?>">INR</a> 
 <a class="dropdown-item" href="http://<?=$site_name.$_SERVER['PHP_SELF'].'?username='.$_GET['username'].'&curr=pkr'?>">PKR</a> 
 <a class="dropdown-item" href="http://<?=$site_name.$_SERVER['PHP_SELF'].'?username='.$_GET['username'].'&curr=php'?>">PHP</a>
    </div>
</div>



<!-- Basic dropdown -->
<div class="btn-group" style="margin:5px">
    <button class="btn btn-dark dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Change Language</button>

    <div class="dropdown-menu">
        <a class="dropdown-item" href="http://<?=$site_name.$_SERVER['PHP_SELF'].'?username='.$_GET['username'].'&lang=en'?>"><?=$lang['EnglishTranslate'];?></a>
 <a  class="dropdown-item" href="http://<?=$site_name.$_SERVER['PHP_SELF'].'?username='.$_GET['username'].'&lang=es'?>"><?=$lang['SpanishTranslate'];?></a>
 
    </div>
</div>




<!-- Basic dropdown -->
<div class="btn-group" style="margin:5px">
    <button class="btn btn-dark dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"><?=$lang['PrintSlip'];?></button>

    <div class="dropdown-menu">
       <a class="dropdown-item" target="_BLANK" href="<?=$_SERVER['PHP_SELF'].'?print='.$username?>">[DOLLARS]</a>
<a class="dropdown-item" target="_BLANK" href="<?=$_SERVER['PHP_SELF'].'?print='.$username.'&x=BTC'?>">BTC</a>
<a class="dropdown-item" target="_BLANK" href="<?=$_SERVER['PHP_SELF'].'?print='.$username.'&x=ETH'?>">ETH</a>
<a class="dropdown-item" target="_BLANK" href="<?=$_SERVER['PHP_SELF'].'?print='.$username.'&x=NGN'?>">[NGN]</a>
<a  class="dropdown-item" target="_BLANK" href="<?=$_SERVER['PHP_SELF'].'?print='.$username.'&x=EUR'?>">[EURO]</a>
<a class="dropdown-item" target="_BLANK" href="<?=$_SERVER['PHP_SELF'].'?print='.$username.'&x=GBP'?>">[POUNDS]</a>
<a class="dropdown-item" target="_BLANK" href="<?=$_SERVER['PHP_SELF'].'?print='.$username.'&x=CAD'?>">[C$]</a>
<a class="dropdown-item" target="_BLANK" href="<?=$_SERVER['PHP_SELF'].'?print='.$username.'&x=ZAR'?>">[RAND]</a>
<a  class="dropdown-item" target="_BLANK" href="<?=$_SERVER['PHP_SELF'].'?print='.$username.'&x=AED'?>">[DIRHAMS]</a>
<a class="dropdown-item" target="_BLANK" href="<?=$_SERVER['PHP_SELF'].'?print='.$username.'&x=INR'?>">[INR]</a>
<a class="dropdown-item" target="_BLANK" href="<?=$_SERVER['PHP_SELF'].'?print='.$username.'&x=PKR'?>">[PKR]</a>
<a class="dropdown-item" target="_BLANK" href="<?=$_SERVER['PHP_SELF'].'?print='.$username.'&x=PHP'?>">[PHP]</a>
    </div>
</div>


<!-- Basic dropdown -->
<div class="btn-group" style="margin:5px">
    <button class="btn btn-dark dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"><?=$lang['ExchangeRate'];?></button>

    <div class="dropdown-menu">
       <span class="dropdown-item"><?='$'. $usd.'/SBD'?></span>
       <span class="dropdown-item"><?='BTC'. $BTC_R.'/SBD'?></span>
       <span class="dropdown-item"><?='ETH'. $ETH_R.'/SBD'?></span>
       <span class="dropdown-item"><?='₦'. $NGN_R.'/SBD'?></span>
       <span class="dropdown-item"><?='€'. $EUR_R.'/SBD'?></span>
       <span class="dropdown-item"><?='GH₵'. $GHS_R.'/SBD'?></span>
       <span class="dropdown-item"><?='R'. $ZAR_R.'/SBD'?></span>
       <span class="dropdown-item"><?='C$'. $CAD_R.'/SBD'?></span>
       <span class="dropdown-item"><?='AED'. $AED_R.'/SBD'?></span>
       <span class="dropdown-item"><?='₹'. $INR_R.'/SBD'?></span>
       <span class="dropdown-item"><?='Rs'. $PKR_R.'/SBD'?></span>
       <span class="dropdown-item"><?='₱'. $PHP_R.'/SBD'?></span>
    </div>
</div>
  


		
        <!-- Button trigger modal -->
<button type="button" class="btn btn-dark" data-toggle="modal" data-target="#appreciate" >
    Appreciate Voters
</button>
	
        <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#appreciateATP" >
    Appreciate this project
</button>



<!-- Modal AV -->
<div class="modal fade" style="font-size: 15px;" id="appreciate" tabindex="-1" role="dialog" aria-labelledby="appreciateLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
       <div class="modal-content">

            <!--Header-->
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><center>Appreciation Box</center></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <!--Body-->
            <div class="modal-body">
			<form action="memo.php" autocomplete="on" method="POST"> 
<!--			
			<div class="form-group">
<label for="sel7" >FROM(Your Username)</label>
<input class="yeah form-control" id="sel7" style="
    padding: 5px 12px 10px 20px;
    text-transform: uppercase;font-size: 18px;border: solid 2px #000;border-radius: 8px;
   font-weight: normal;" name="from"  placeholder="sender's username" value="<?=$username?>" required="true"/>
</div>
--->
				<div class="form-group">
<label for="sel2">TO</label>

<select class="yeah form-control" id="sel2" name="to" required="true">
<option value="">Choose Voter </option>

   <?php $n = 0; foreach($varrayW as $va) {  
	if ($n == 0){$copyA = '@'.$va['name'].'  : '.round($va['amount'],6)." $ext ,  ".$va['count'].' vote(s)';}
	else {$copyA .= '<br> @'.$va['name'].'  : '.round($va['amount'],6)." $ext ,  ".$va['count'].' vote(s)';}
	
	
	?>
       


<option value="<?=$va['name']?>"><?=$va['name']?>,  <?=round($va['amount'],6)?> <?=$ext?>,  <?=$va['count']?> times</option>  
 	
		
<?php $n++; } ?>
</select>
</div>


<div class="form-group">
<label for="sel3">Message/Memo</label>
<textarea class="yeah form-control" rows="10" id="sel3"  name="memo" maxlength="2000" placeholder="Memo e.g. thanks for your support" required="true">THANKS FOR THE UPVOTE SUPPORT</textarea>
</div>

<div class="form-group">
<label for="sel4" >Amount (make sure this is in 3 decimal places)</label>
<input class="yeah form-control" id="sel4"  name="amount" placeholder="amount e.g 0.001" value="0.001" required="true"/>
</div>

<div class="form-group">
<label for="sel5">Amount TYPE</label>
<select class="yeah form-control" name="type" required="true"
id="sel2"  id="voter">
<option value="sbd">SBD</option>
<option value="steem">STEEM</option>
</select>
</div>

                <div class="form-group">
                    <input class="btn btn-primary  col-md-12" name="mforms" type="submit" value="send" />
                </div>
            </div>
</form>
    </div>
     
    </div>
</div>
	
        <!-- Button trigger modal -->
<button type="button" class="btn btn-dark" data-toggle="modal" data-target="#exampleModal">
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
			<div class="x_content">


                    <div class="" role="tabpanel" data-example-id="togglable-tabs">
                      <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                        <li role="presentation" class=""><a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="false">By Count</a>
                        </li>
                        <li role="presentation" class="active"><a href="#tab_content2" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="true">By Worth</a>
                        </li>
                        <li role="presentation" class=""><a href="#tab_content3" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false">Alphabetically</a>
                        </li>
                      </ul>
                      <div id="myTabContent" class="tab-content">
                        <div role="tabpanel" class="tab-pane fade" id="tab_content1" aria-labelledby="home-tab">
                          <p>

                     
	<?php $n = 0; foreach($varrayC as $va) {  
	
	if ($n == 0){$copyC = '@'.$va['name'].': '.round($va['amount'],6)." $ext ,".$va['count'].' vote(s)';}
	else {$copyC .= '<br> @'.$va['name'].': '.round($va['amount'],6)." $ext ,".$va['count'].' vote(s)';}
	
	?>
       



<a class="dropdown-item" target="_BLANK" href="http://steemit.com/@<?=$va['name']?>"> <span style="color: blue;"><?=$va['name']?></span>, <span style="color: green;"> <?=round($va['amount'],6)?> <?=$ext?> </span>, <?=round($va['count'],2)?> times</a>  
 	
		
<?php $n++; } ?></p>
                        </div>
                        <div role="tabpanel" class="tab-pane fade active in" id="tab_content2" aria-labelledby="profile-tab">
                          <p><?php $n = 0; foreach($varrayW as $va) {  
	
	if ($n == 0){$copyW = '@'.$va['name'].': '.round($va['amount'],6)." $ext ,".$va['count'].' vote(s)';}
	else {$copyW .= '<br> @'.$va['name'].': '.round($va['amount'],6)." $ext ,".$va['count'].' vote(s)';}
	
	?>
       



<a class="dropdown-item" target="_BLANK" href="http://steemit.com/@<?=$va['name']?>"> <span style="color: blue;"><?=$va['name']?></span>, <span style="color: green;"> <?=round($va['amount'],6)?> <?=$ext?> </span>, <?=round($va['count'],2)?> times</a>  
 	
		
<?php $n++; } ?></p>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="tab_content3" aria-labelledby="profile-tab">
                          <p><?php $n = 0; foreach($varrayA as $va) {  
	if ($n == 0){$copyA = '@'.$va['name'].': '.round($va['amount'],6)." $ext ,".$va['count'].' vote(s)';}
	else {$copyA .= '<br> @'.$va['name'].': '.round($va['amount'],6)." $ext ,".$va['count'].' vote(s)';}
	
	
	?>
       



<a class="dropdown-item" target="_BLANK" href="http://steemit.com/@<?=$va['name']?>"> <span style="color: blue;"><?=$va['name']?></span>, <span style="color: green;"> <?=round($va['amount'],6)?> <?=$ext?> </span>,<span id="count"> <?=$va['count']?> times</span> </a> 
 	
		
<?php $n++; } ?></p>
                        </div>
                      </div>
                    </div>

                  </div>		
  
  
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>



        <a class="btn btn-dark" data-toggle="modal" data-target="#telegram" style="color: white;">Telegram /Discord Channel</a>
		
		
		</div>

			     <div class="title_left" style="margin-top: 4px;">
				  <div class="col-md-5 col-sm-5 col-xs-12 form-group">
				
				<h2 style="color: #000;text-transform: uppercase;"> <?=$username ?> 's Payout  <a data-toggle="tooltip" data-placement="top" title="HOME" target="_BLANK" href="https://steemit.com/@<?=$username ?>">
                <span class="glyphicon glyphicon-new-window" aria-hidden="true"></span>
              </a>   <a class="btn btn-primary" data-toggle="modal" style="margin-bottom: 0px;" data-target="#gift-<?=$username?>" style="color: white;">GIFT USER</a></h2>
			  
			 
		
		<!--- GIFT MODAL !--->
		
		
		
		
		
		
		
		
		
				 </div>
				 </div>
			  
			  
			   <div class="title_center" style="margin-top: 6px;">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
				<form action="index.php">
                  <div class="input-group">
                    <input type="text" name="username" class="form-control" placeholder="Input Your Username" />
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="submit">Check</button>
                    </span>
                  </div>
				  </form>
                </div>
              </div>

             <!--  <ul class="nav navbar-nav navbar-right">
               <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="images/img.jpg" alt="">John Doe
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="javascript:;"> Profile</a></li>
                    <li>
                      <a href="javascript:;">
                        <span class="badge bg-red pull-right">50%</span>
                        <span>Settings</span>
                      </a>
                    </li>
                    <li><a href="javascript:;">Help</a></li>
                    <li><a href="login.html"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li>

                <li role="presentation" class="dropdown">
                  <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-envelope-o"></i>
                    <span class="badge bg-green">6</span>
                  </a>
                  <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <div class="text-center">
                        <a>
                          <strong>See All Alerts</strong>
                          <i class="fa fa-angle-right"></i>
                        </a>
                      </div>
                    </li>
                  </ul>
                </li>
              </ul>--->
            </nav>
          </div>
        </div>
		
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
      
		  
		  <div class="row tile_count tile_stats">
            <div class="col-md-3 col-sm-6 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Total Payout <i class="green"><?=round($bTotal,3)?> + <?=round($cTotal,3)?></i></span>
              <div class="count"><?=round($total,2)?> <small><?=$ext?></small></div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-clock-o"></i> Posts Payout</span>
              <div class="count"><?=round($bTotal,2)?> <small><?=$ext?></small></div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-comments"></i> Comment Payout</span>
              <div class="count green"><?=round($cTotal,2)?> <small><?=$ext?></small></div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-dollar"></i>Dollar/SBD</span>
              <div class="count"><?='$'. $usd.'/SBD'?></div>
            </div>
          </div>
		  
            <div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Blog Post Payout</small></h2>
                   <!--- <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
					
					--->
					
					
			  
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <p class="text-muted font-13 m-b-30">
                      This Table Shows the List of Steem Post's Payouts</code>
                    </p>
                    <table id="datatable-checkbox" class="table table-striped table-bordered bulk_action">
                      <thead>
                        <tr>
                          <th><?=$lang['Beneficiary'];?></th>
                          <th><?=$lang['PostLink'];?></th>
                          <th><?=$lang['PendingPayout'];?></th>
                          <th><?=$lang['Voterslist'];?></th>
                          <th><?=$lang['WithdrawalTime'];?></th>
                          <th><?=$lang['giver'];?></th>
                          <th><?=$lang['YourExpectedPayout'];?></th>
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
    <button class="btn btn-dark btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Voters<b>[<?=$b["vcount"]?>]</b></button>

	
	
	
	
    <div class="dropdown-menu" style="max-height:200px;
          overflow-y:auto;" >
  
	<?php $n = 0; foreach($b['voters'] as $v) {  
	?>
       



<a class="dropdown-item" target="_BLANK" href="http://steemit.com/@<?=$v['voter']?>"> <span style="color: blue;"><?=$v['voter']?></span>, <span style="color: green;"> <?=round($v['money'],6)?> <?=$b["b_ext"]?> </span> , <span style="color: red;"><?=$v['percent']. '%'?></span></a>  
 	
		
<?php $n++; if ($n == 1){$hv = round($v['money'],6);} } ?>
      </div>
</div>
</td>

					<td><?=$b['created']?></td>
			
			<td><a target="_BLANK" href="https://steemit.com/@<?=$b['voters'][0]['voter']?>"><?=$b['voters'][0]['voter']?>(<?=$hv?>)</a></td>
			<td><?=$b['each_pay']?></td>
		
			</tr>
		
	<?php } ?>					  
						
                       
					   </tbody>
					  
					  
			
					  
					  
                    
                    </table>
                  </div>
                  </div>
             
			 
            <div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Comments Payout</small></h2>
                   <!--- <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
					
					--->
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <p class="text-muted font-13 m-b-30">
                      This Table Shows the List of Steem Comments Payouts</code>
                    </p>
                    <table  id="datatable" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th><?=$lang['PostLink'];?></th>
                          <th><?=$lang['PendingPayout'];?></th>
                          <th><?=$lang['Voterslist'];?></th>
                          <th><?=$lang['WithdrawalTime'];?></th>
                          <th><?=$lang['giver'];?></th>
                          <th><?=$lang['YourExpectedPayout'];?></th>
                        </tr>
                      </thead>

					  
					  
					    <tbody>
                      


		  <?php foreach($comments as $b) { ?>
      <tr class="post">
		
		
	
			<td><a target="_BLANK" href="<?=$b['post_link']?>"/><?=$b['post_title']?></a></td>

			
			<td><?=$b['pending_payout_value']?></td>
			
				<td align="center">

<div class="btn-group" style="margin:5px;">
    <button class="btn btn-dark btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Voters<b>[<?=$b["vcount"]?>]</b></button>

    <div class="dropdown-menu" style="max-height:200px;
          overflow-y:auto;" >
  
	<?php $n = 0; foreach($b['voters'] as $v) {  
	?>
       



<a class="dropdown-item" target="_BLANK" href="http://steemit.com/@<?=$v['voter']?>"> <span style="color: blue;"><?=$v['voter']?></span>, <span style="color: green;"> <?=round($v['money'],6)?> <?=$b["b_ext"]?> </span> , <span style="color: red;"><?=$v['percent']. '%'?></span></a>  
 	
		
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
                  </div>
                </div>
              </div>
        </div>
		
		
		
        <!-- /page content -->
      </div>
    </div>
    </div>