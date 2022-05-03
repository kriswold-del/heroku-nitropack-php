<?php
$url_components = parse_url($url);

// Use parse_str() function to parse the
// string passed via URL
parse_str($url_components['query'], $params);
$url = $params['url'];]
if($url != ""){
    require_once('autoload.php');

    $electromarket_sandbox_site_id= 'MMCxCaRKaBRecqSCPxgOCLwQvVtWLLKQ';
    $electromarket_sandbox_secret= 'm65rqd7GLtgifSigYvO1oGDwEJyeNhrz1kR3LoGZuRunj90wv1wIiK6zf8rIvq3G';

    $electromarket_site_id = 'UAdFgvuPmlrcfGwoSLgtSPmPnJoIsmue';
    $electromarket_secret = '5DoEZSovPPzVivmpyE3NAPVYnscRf5Abs7VuYM8HoTz8PgEedpgOtoPukOc8svea';

    $nitro = new NitroPack\SDK\NitroPack($electromarket_site_id, $electromarket_secret);

    $nitro->purgeCache("https://electromarket.co.uk/".$url)

    echo($params['url']." purged");
}else{
    echo("Please provide URL Param");
}


?>