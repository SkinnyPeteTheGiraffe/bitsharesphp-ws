<?php

namespace Notorious\BitsharesPHP;

use WebSocket\Client;
use Notorious\BitsharesPHP\API\MarketAPI;
use Notorious\BitsharesPHP\Utils\Helpers;


class BitshareClient {

    const BIT_SHARE_WS = "wss://bitshares.openledger.info/ws";

    private $client;
    private $market_api;

    function __construct() {
        $this->client = new Client(self::BIT_SHARE_WS);
        $this->market_api = new MarketAPI($this);
    }

    public function request($type_id, $method, $params, $id) {
        $this->client->send(Helpers::generateJSONRequest($type_id, $method, $params, $id));
        return $this->client->receive();
    }

    public function getMarketAPI() {
        return $this->market_api;
    }
}

?>
