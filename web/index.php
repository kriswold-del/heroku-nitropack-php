<?php
echo("here");
require_once('autoload.php');
if($_GET['url']){
echo("here");
$nitro = new NitroPack\SDK\NitroPack('MMCxCaRKaBRecqSCPxgOCLwQvVtWLLKQ', 'm65rqd7GLtgifSigYvO1oGDwEJyeNhrz1kR3LoGZuRunj90wv1wIiK6zf8rIvq3G');
$nitro->purgeCache('https://electromarket.co.uk/test')
}else{
echo ("Not Authorized")
}


?>