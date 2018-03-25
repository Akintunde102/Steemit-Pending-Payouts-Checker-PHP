<!DOCTYPE html>
<html lang="en">
<head>
<title><?=$lang['Name']?></title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Steem Payout Checker" />
<!-- CSS --> 
<link href="views/pages/assets/css/font-awesome.css" rel="stylesheet"><!-- Font-awesome-CSS --> 
<!-- //CSS --> 
<!-- Fonts --> 
<link href="//fonts.googleapis.com/css?family=Josefin+Sans:100,100i,300,300i,400,400i,600,600i,700,700i&amp;subset=latin-ext" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700&amp;subset=cyrillic,latin-ext,vietnamese" rel="stylesheet">
	 <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.4.5/css/mdb.min.css" />
	
	
<link href="views/pages/assets/css/style.css" rel='stylesheet' type='text/css'/><!-- style.css --> 



<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script> 
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.29.2/js/jquery.tablesorter.js"></script> 
<!-- Js-Files --> 
  <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.13.0/popper.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.2.0/js/mdb.min.js"></script>
	<link rel="stylesheet" href="//fonts.googleapis.com/icon?family=Material+Icons">
<script type="application/x-javascript">


//Table
$(function(){
  $('#keywords').tablesorter(); 
});
//Table
$(function(){
  $('#keywords2').tablesorter(); 
});



jQuery(document).ready(function($) {

 
    jQuery('#nlk-search-str').on('keydown', function(e) {
       if (e.which == 13 || event.keyCode == 13 ){
           jQuery('#nlk-search-submit').trigger('click');
       }
    });

    jQuery('#nlk-search-methods').on('keydown', function(e) {
       if (e.which == 13 || event.keyCode == 13 ){
           jQuery('#nlk-search-submit').trigger('click');
       }
    });


    jQuery('.nlk-search-type').on('click', function(){
        var targetSite = jQuery(this).data('value');
        var searchAction = jQuery(this).data('action');
        var searchParam = jQuery(this).data('param');
        var searchTarget = jQuery(this).data('target');
        var targetRadio = jQuery(this).data('radio');
        
       jQuery(targetRadio).prop('checked', true);
       jQuery('#nlk-search-str').attr('placeholder',targetSite);
       jQuery('#nlk-search-str').attr('name', searchParam);
       jQuery('#nlk-search-form').attr('action', searchAction);
       jQuery('#nlk-search-form').attr('target', searchTarget);
       
    });
    

    jQuery('#nlk-search-submit').on('click', function(){
       var searchStr = jQuery('#nlk-search-str').val();
       if (!searchStr || searchStr === '') {
           var noquery = jQuery('#nlk-search-str').data('def');
           jQuery('#nlk-search-str').attr('placeholder', noquery);
       } else {
           jQuery('#nlk-search-form').submit();
       }
    });
    
});




</script>


<style>
.tooltip {
    position: relative;
    display: inline-block;
}

.tooltip .tooltiptext {
    visibility: hidden;
    width: 140px;
    background-color: #555;
    color: #fff;
    text-align: center;
    border-radius: 6px;
    padding: 5px;
    position: absolute;
    z-index: 1;
    bottom: 150%;
    left: 50%;
    margin-left: -75px;
    opacity: 0;
    transition: opacity 0.3s;
}

.tooltip .tooltiptext::after {
    content: "";
    position: absolute;
    top: 100%;
    left: 50%;
    margin-left: -5px;
    border-width: 5px;
    border-style: solid;
    border-color: #555 transparent transparent transparent;
}

.tooltip:hover .tooltiptext {
    visibility: visible;
    opacity: 1;
}
</style>

<!-- Fonts --> 
</head>
<body>