<?php
if(isSet($_GET['curr']))
{
$curr = $_GET['curr'];
setcookie('curr', $curr, time() + (3600 * 24 * 30));
}
?>