<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if($_GET["url"]){
    $url = "https://electromarket.co.uk/".$_GET["url"];
    //require_once('autoload.php');

    //$electromarket_sandbox_site_id= 'MMCxCaRKaBRecqSCPxgOCLwQvVtWLLKQ';
    //$electromarket_sandbox_secret= 'm65rqd7GLtgifSigYvO1oGDwEJyeNhrz1kR3LoGZuRunj90wv1wIiK6zf8rIvq3G';

    //$electromarket_site_id = 'UAdFgvuPmlrcfGwoSLgtSPmPnJoIsmue';
    //$electromarket_secret = '5DoEZSovPPzVivmpyE3NAPVYnscRf5Abs7VuYM8HoTz8PgEedpgOtoPukOc8svea';

    //$nitro = new NitroPack\SDK\NitroPack($electromarket_site_id, $electromarket_secret);

    //$nitro->purgeCache($url)

     echo($url." purged");
 }else{
     echo("Please provide URL Param");
 }

?>