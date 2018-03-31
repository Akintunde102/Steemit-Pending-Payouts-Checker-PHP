<script type="text/javascript" href="views/pages/assets/js/app.js"></script> 
<script type="text/javascript" href="views/pages/assets/js/particles.js"></script> 

<script type="application/x-javascript">

document.body.innerHTML = document.body.innerHTML.replace(/\s1 times/g, ' once(1)');	
document.body.innerHTML = document.body.innerHTML.replace(/\s2 times/g, ' twice(2)');	
document.body.innerHTML = document.body.innerHTML.replace(/\s3 times/g, ' thrice(3)');	
</script>	
<script>
function myFunctionone() {
  var copyText = document.getElementById("myInputone");
  copyText.select();
  document.execCommand("Copy");
  
  var tooltip = document.getElementById("myTooltip1");
  tooltip.innerHTML = "Copied: ";
}

function myFunctiontwo() {
  var copyText = document.getElementById("myInputtwo");
  copyText.select();
  document.execCommand("Copy");
  
  var tooltip = document.getElementById("myTooltip2");
  tooltip.innerHTML = "Copied" ;
}

function myFunctionthree() {
  var copyText = document.getElementById("myInputthree");
  copyText.select();
  document.execCommand("Copy");
  
  var tooltip = document.getElementById("myTooltip3");
  tooltip.innerHTML = "Copied" ;
}




/**
function outFuncone() {
  var tooltip = document.getElementById("myTooltip1");
  tooltip.innerHTML = "Copy to clipboard";
}

function outFunctwo() {
  var tooltip = document.getElementById("myTooltip2");
  tooltip.innerHTML = "Copy to clipboard";
}

function outFuncthree() {
  var tooltip = document.getElementById("myTooltip3");
  tooltip.innerHTML = "Copy to clipboard";
}
***/
</script>
</body>
</html>