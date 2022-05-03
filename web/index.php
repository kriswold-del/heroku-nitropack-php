<?php
echo("here");
require_once('autoload.php');
if(isset($_GET['url']))
{
$nitro = new NitroPack\SDK\NitroPack('MMCxCaRKaBRecqSCPxgOCLwQvVtWLLKQ', 'm65rqd7GLtgifSigYvO1oGDwEJyeNhrz1kR3LoGZuRunj90wv1wIiK6zf8rIvq3G');
$nitro->purgeCache('https://electromarket.co.uk/'.$_GET['url']);
echo ('https://electromarket.co.uk/'.$_GET['url']);
}



?>