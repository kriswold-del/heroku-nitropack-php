<?php
require_once('autoload.php');
if(isset($_POST['site_id']) && isset($_POST['site_secret']) && isset($_POST['last_updated']) && isset($_POST['url']))
{
$nitro = new NitroPack\SDK\NitroPack($_POST['site_id'], $_POST['site_secret']);
//$nitro->purgeCache('https://electromarket.co.uk/'.$_GET['url']);
echo($nitro->getUrl());

//echo ('https://electromarket.co.uk/'.$_GET['url']);
}
?>