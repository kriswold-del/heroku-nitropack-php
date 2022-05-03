<?php
namespace NitroPack\Integrations;

use NitroPack\HttpClient\HttpClient;
use NitroPack\HttpClient\HttpClientMulti;

class ReverseProxy {

    protected $serverList;
    protected $purgeMethod;

    public function __construct($serverList=null, $purgeMethod="PURGE") {
        $this->serverList = $serverList;
        $this->purgeMethod = $purgeMethod;
    }

    public function setServerList($serverList=null) {
        $this->serverList = $serverList;
    }

    public function setPurgeMethod($method) {
        $this->purgeMethod = $method;
    }

    public function purge($url) {
        if (empty($this->serverList)) return false;

        $httpMulti = new HttpClientMulti();
        foreach ($this->serverList as $server) {
            $client = new HttpClient($url);
            $client->hostOverride($client->host, $server);
            $client->doNotDownload = true;
            $httpMulti->push($client);
        }

        $httpMulti->fetchAll(true, $this->purgeMethod);
    }
}
