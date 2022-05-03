<?php

require_once('autoload.php');
if(isset($_GET['url']))
{
$nitro = new NitroPack\SDK\NitroPack('UAdFgvuPmlrcfGwoSLgtSPmPnJoIsmue', '5DoEZSovPPzVivmpyE3NAPVYnscRf5Abs7VuYM8HoTz8PgEedpgOtoPukOc8svea');
$nitro->runWarmup('https://electromarket.co.uk/'.$_GET['url']);
echo ('https://electromarket.co.uk/'.$_GET['url']);
}
?>